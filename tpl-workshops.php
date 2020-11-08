<?php /*
Template Name: WorkShops
Template Post Type: page
*/ ?>

<?php get_header(); ?>
<main class="clearfix">
  <div class="container">
    <h2 class="header-banner__sub-title"><?php the_title(); ?></h2>
  </div>
  <?php
    if ( have_posts() ) { while ( have_posts() ) {
        the_post();
        ?>
        <?php
        the_content();
      }
    }
   ?>

</main>
<?php get_footer(); ?>
