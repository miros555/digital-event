<?php /*
Template Name: Product technical page
Template Post Type: page
*/ ?>

<?php get_header('darken'); ?>
<main class="clearfix product-page">
  <?php
    if ( have_posts() ) { while ( have_posts() ) {
        the_post();
        ?>
        <div class="product-sub-header__box"></div>
        <div class="product-sub-header">
          <div class="container">
            <div class="product-sub-header__wrap">
              <h2 class="product-sub-header__title"><?php the_title(); ?></h2>
              <ul class="product-menu">
                <li class="menu-item anchor"><a href="<?= get_page_link(105); ?>/#productBanner"><span>Überblick</span></a></li>
                <li class="menu-item current-page"><a href="<?= get_home_url(); ?>/infos-downloads-zu-unserem-fachtag/product-1/nc-4-schraubstock-technische-daten/"><span>Technische Daten</span></a></li>
                <li class="menu-item"><a href="#"><span>Angebot anfordern</span></a></li>
                <li class="menu-item active"><a href="#"><span>Kaufen</span></a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="product-tech-header">
          <div class="container">
            <div class="product-tech-header__wrap">
              <div class="page__sub-title">NC 4 - Schraubstock </div>
              <div class="page__title">Technische Daten</div>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="page-doub-tabl">
            <div class="row">
              <div class="col-md-4">
                <div class="page-doub-tabl__title">Version</div>
              </div>
              <div class="col-md-8">
                <div class="page-doub-tabl__text">
                  <div class="row">
                    <div class="col-md-4">90 - mechanisch</div>
                    <div class="col-md-4">125 M - mechanisch</div>
                    <div class="col-md-4">125 L - mechanisch</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="page-doub-tabl">
            <div class="row">
              <div class="col-md-4">
                <div class="page-doub-tabl__title">Eigenschaft 3</div>
              </div>
              <div class="col-md-8">
                <div class="page-doub-tabl__text">
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="page-doub-tabl">
            <div class="row">
              <div class="col-md-4">
                <div class="page-doub-tabl__title">Abmessung</div>
              </div>
              <div class="col-md-8">
                <div class="page-doub-tabl__text">
                  <img src="<?= get_stylesheet_directory_uri(); ?>/src/img/product-prototype.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="page-doub-tabl">
            <div class="row">
              <div class="col-md-4">
                <div class="page-doub-tabl__title">Eigenschaft 4</div>
              </div>
              <div class="col-md-8">
                <div class="page-doub-tabl__text">
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="row justify-content-center">
            <a href="#" class="btn btn--orange btn--upper btn--sb product-tech__btn mb-32"><span>Produktfyler herunterladen<i class="far fa-file-pdf"></i></span></a>
          </div>

        </div>




        <?php
        the_content();
      }
    }
   ?>

</main>
<?php get_footer(); ?>
