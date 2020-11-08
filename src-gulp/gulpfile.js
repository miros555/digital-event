'use strict'

var gulp = require('gulp'),
    autoprefixer = require('gulp-autoprefixer'),
    rename = require('gulp-rename'),
    jade = require('gulp-jade'),
    less = require('gulp-less'),
    minifyCss = require('gulp-minify-css'),
    spritesmith = require('gulp.spritesmith'),
    browserSync = require('browser-sync'),
    tinypng = require('gulp-tinypng'),
    imageResize = require('gulp-image-resize'),
    cleanCSS = require('gulp-clean-css'),
    uglify = require('gulp-uglify'),
    sass = require('gulp-sass'),
    concat = require('gulp-concat'),
    autoprefixBrowsers = ['> 1%', 'last 2 versions', 'firefox >= 4', 'safari 7', 'safari 8', 'IE 8', 'IE 9', 'IE 10', 'IE 11'],
    paths = {
        gulpDirCss: [
            '../src/css/',
        ],
        less: [
            'less/*.less',
            'less/**/*.less'
        ],
        scss: [
            'scss/*.scss',
            'scss/**/*.scss'
        ],
        css: [
            'build/css/style.min.css'
        ],
        js: [
            'js/*.js'
        ],
        jade: [
            'jade/*.jade',
            'jade/**/*.jade'
        ],
        sprite: [
            'build/img/sprite/*.*'
        ],
        sprite_social: [
            'build/img/socials/*.*'
        ]
    };

function wrapPipe(taskFn) {
    return function(done) {
        var onSuccess = function() {
            done();
        };
        var onError = function(err) {
            done(err);
        }
        var outStream = taskFn(onSuccess, onError);
        if (outStream && typeof outStream.on === 'function') {
            outStream.on('end', onSuccess);
        }
    }
};

gulp.task('scss', function () {
  return gulp.src(paths.scss[0])
    .pipe(sass().on('error', sass.logError))
    .pipe(minifyCss())
    .pipe(autoprefixer(autoprefixBrowsers))
    .pipe(gulp.dest(paths.gulpDirCss[0]));
});

gulp.task('less-compfile', wrapPipe(function(success, error) {
    return gulp.src(paths.less[0])
        .pipe(less().on('error', error))
        .pipe(minifyCss())
        .pipe(autoprefixer({
            browsers: ['last 15 versions']
        }).on('error', error))
        .pipe(gulp.dest(paths.gulpDirCss[0]))
}));


gulp.task('minify-css', function () {
    gulp.src('build/css/*.css')
        .pipe(concat('style.css'))
        .pipe(cleanCSS('style.css'))
        .pipe(autoprefixer(autoprefixBrowsers))
        .pipe(gcmq())
        .pipe(cleanCSS({
            level: 2
        }))
        .pipe(gulp.dest('build/css'))
});

gulp.task('minify-js', function () {
    gulp.src([
        'build/js/animate.js',
        'build/js/common.js'])
        .pipe(concat('common-min.js'))
        .pipe(uglify('common-min.js'))
        .pipe(gulp.dest('build/js'))
});

gulp.task('imgresize', function () {
   gulp.src('src/img/**/*.{png,jpg,jpeg}')
    .pipe(imageResize({
      width : 351,
      height : 351,
      crop : true,
      upscale : false
    }))
    .pipe(rename(function (path) { path.basename += "-thumbnail"; }))
    .pipe(gulp.dest('build/img'));
});

gulp.task('default', function () {
    gulp.watch(paths.scss, ['scss']);
    gulp.watch(paths.less, ['less-compfile']);
});
