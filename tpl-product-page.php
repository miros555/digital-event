<?php /*
Template Name: Product page
Template Post Type: page
*/ ?>

<?php get_header(); ?>
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
                <li class="menu-item current-page anchor"><a href="<?= get_page_link(105); ?>/#productBanner"><span>Überblick</span></a></li>
                <li class="menu-item"><a href="<?= get_home_url(); ?>/infos-downloads-zu-unserem-fachtag/product-1/nc-4-schraubstock-technische-daten/"><span>Technische Daten</span></a></li>
                <li class="menu-item"><a href="#"><span>Angebot anfordern</span></a></li>
                <li class="menu-item active"><a href="#"><span>Kaufen</span></a></li>
              </ul>
            </div>
          </div>
        </div>

        <div id="productBanner" class="container">
          <div class="product__sub-title">Produkt 1</div>
          <div class="product__title">Ein sensationelles Produkt. Angefangen beim Preis.</div>
          <div class="header-banner-mouse header-banner-mouse--center">
            <a href="#productInfo" class="header-banner-mouse__wrap anchor">
              <div class="header-banner-mouse__icon"></div>
              <div class="header-banner-mouse__text">zum Entdecken<br>scrollen</div>
            </a>
          </div>
        </div>

        <div id="productInfo" class="product-info">
          <div class="container">
            <div class="product-info__wrap">
              <div class="row justify-content-center">
                <div class="col-md-6">
                  <div class="product-info__sub-title">Lore ipsum </div>
                  <div class="product-info__title">Das neue Produkt 1</div>
                  <div class="product-info__text">Ein Satz, der den Mehrwert des Produktes kurz auf einen Blick beschreibt Lore ipsum dolor sit ame losem ipsum dolor sit amen losem ipsum dolor sit amet</div>
                </div>
              </div>
              <div class="product-info__img">
                <img src="<?= get_stylesheet_directory_uri(); ?>/src/img/product-image.png" alt="">
              </div>
              <div class="product-info__btn-row">
                <a href="#" class="btn btn--sb btn--upper btn--orange"><span>3d Ansichti <i class="icon icon--3d"></i></span></a>
                <a href="#" class="btn btn--sb btn--upper btn--orange-bord "><span>Produktvideo <i class="icon icon--play-orange"></i></span></a>
              </div>
            </div>
          </div>
        </div>

        <div class="product-icon-list">
          <div class="container">
            <div class="product-icon-list__wrap">
              <div class="row justify-content-center">
                <div class="col-lg-6">
                  <div class="product-info__sub-title">NC4 Lorem ipsum  </div>
                  <div class="product-info__title">Die Eigenschaften des Produkts</div>
                </div>
              </div>
              <div class="product-icon-item__list row">

                <div class="col-lg-3 col-md-4 col-6">
                  <div class="product-icon-item">
                    <div class="product-icon-item__img">
                      <img src="<?= get_stylesheet_directory_uri(); ?>/src/img/icons/grade_white.svg" alt="">
                    </div>
                    <div class="product-icon-item__text">Eigenschaft</div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                  <div class="product-icon-item">
                    <div class="product-icon-item__img">
                      <img src="<?= get_stylesheet_directory_uri(); ?>/src/img/icons/done_white.svg" alt="">
                    </div>
                    <div class="product-icon-item__text">Eigenschaft</div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                  <div class="product-icon-item">
                    <div class="product-icon-item__img">
                      <img src="<?= get_stylesheet_directory_uri(); ?>/src/img/icons/alarm_white.svg" alt="">
                    </div>
                    <div class="product-icon-item__text">Eigenschaft</div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                  <div class="product-icon-item">
                    <div class="product-icon-item__img">
                      <img src="<?= get_stylesheet_directory_uri(); ?>/src/img/icons/backup_white.svg" alt="">
                    </div>
                    <div class="product-icon-item__text">Eigenschaft</div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                  <div class="product-icon-item">
                    <div class="product-icon-item__img">
                      <img src="<?= get_stylesheet_directory_uri(); ?>/src/img/icons/grade_white.svg" alt="">
                    </div>
                    <div class="product-icon-item__text">Eigenschaft</div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                  <div class="product-icon-item">
                    <div class="product-icon-item__img">
                      <img src="<?= get_stylesheet_directory_uri(); ?>/src/img/icons/done_white.svg" alt="">
                    </div>
                    <div class="product-icon-item__text">Eigenschaft</div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                  <div class="product-icon-item">
                    <div class="product-icon-item__img">
                      <img src="<?= get_stylesheet_directory_uri(); ?>/src/img/icons/alarm_white.svg" alt="">
                    </div>
                    <div class="product-icon-item__text">Eigenschaft</div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                  <div class="product-icon-item">
                    <div class="product-icon-item__img">
                      <img src="<?= get_stylesheet_directory_uri(); ?>/src/img/icons/backup_white.svg" alt="">
                    </div>
                    <div class="product-icon-item__text">Eigenschaft</div>
                  </div>
                </div>

              </div>
              <div class="d-flex justify-content-center">
                <div class="btn btn--orange btn--upper"><span>TECHNISCHE DATEN ansehen</span></div>
              </div>
            </div>
          </div>
        </div>

        <div class="product-slider-block">
          <div class="container">
            <div class="product-slider-block__wrap">
              <div class="product-image-slider">
                <div class="product-image-slider__item">
                  <div class="product-image-slider__img" style="background-image: url(<?= get_stylesheet_directory_uri(); ?>/src/img/discussion.jpg);">
                    <div class="product-image-slider__img-overlay"></div>
                  </div>
                  <div class="product-image-slider__title">Ansicht 1</div>
                </div>
                <div class="product-image-slider__item">
                  <div class="product-image-slider__img" style="background-image: url(<?= get_stylesheet_directory_uri(); ?>/src/img/discussion.jpg);">
                    <div class="product-image-slider__img-overlay"></div>
                  </div>
                  <div class="product-image-slider__title">Ansicht 2</div>
                </div>
                <div class="product-image-slider__item">
                  <div class="product-image-slider__img" style="background-image: url(<?= get_stylesheet_directory_uri(); ?>/src/img/discussion.jpg);">
                    <div class="product-image-slider__img-overlay"></div>
                  </div>
                  <div class="product-image-slider__title">Ansicht 3</div>
                </div>
                <div class="product-image-slider__item">
                  <div class="product-image-slider__img" style="background-image: url(<?= get_stylesheet_directory_uri(); ?>/src/img/discussion.jpg);">
                    <div class="product-image-slider__img-overlay"></div>
                  </div>
                  <div class="product-image-slider__title">Ansicht 4</div>
                </div>
                <div class="product-image-slider__item">
                  <div class="product-image-slider__img" style="background-image: url(<?= get_stylesheet_directory_uri(); ?>/src/img/discussion.jpg);">
                    <div class="product-image-slider__img-overlay"></div>
                  </div>
                  <div class="product-image-slider__title">Ansicht 5</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="product-offer-discount">
          <div class="container">
            <div class="product-offer-discount__wrap">
              <div class="row justify-content-between">
                <div class="col-md-5">
                  <div class="product-info__sub-title">Angebot mit Rabatt </div>
                  <div class="product-info__title">Unverbindliches Angebot anfordern und sparen</div>
                  <div class="product-info__text">Exklusiver Messerabatt auf ihr individuelles Angebot. Vereinbaren Sie jetzt einen Beratungstermin oder fordern Sie ganz einfach über das Formular ein Angebot an.</div>
                  <div class="d-flex justify-content-center">
                    <a href="#" class="btn btn--orange btn--upper"><span>Jetzt Angebot anfordern</span></a>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="product-info__sub-title">Angebot mit Rabatt </div>
                  <div class="product-info__title">Unverbindliches Angebot anfordern und sparen</div>
                  <div class="product-info__text">Exklusiver Messerabatt auf ihr individuelles Angebot. Vereinbaren Sie jetzt einen Beratungstermin oder fordern Sie ganz einfach über das Formular ein Angebot an.</div>
                  <div class="d-flex justify-content-center">
                    <a href="#" class="btn btn--orange btn--upper"><span>Jetzt Angebot anfordern</span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="agenda-block agenda-block--product">
          <div class="container">
            <div class="agenda-block__wrap">
              <div class="agenda-block__sub-title">Events </div>
              <div class="agenda-block__title">Interessante Events zu diesem Produkt</div>
            </div>
          </div>
          <div class="agenda-card">
            <div class="container">
              <div class="agenda-card--product agenda-card__list agenda-card__vertical">
                <div class="agenda-card__item active">
                  <div class="agenda-card__img" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/src/img/agenda/1.jpg);"><div></div></div>
                  <div class="agenda-card__content">
                    <div class="agenda-card__date"><div class="agenda-card__status">Live</div><div class="agenda-card__clock"></div>23. Juni, 13:30 - 15:00</div>
                    <div class="agenda-card__type">Webcast</div>
                    <div class="agenda-card__title">Automatisierung</div>
                    <div class="agenda-card__text">Teaser Diskussion Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed dia…</div>
                    <div class="agenda-card__event" data-toggle="modal" data-target="#myModalEvent">Am Event teilnehmen</div>
                  </div>
                </div>
                <div class="agenda-card__item event">
                  <div class="agenda-card__img" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/src/img/agenda/2.jpg);"></div>
                  <div class="agenda-card__content">
                    <div class="agenda-card__date"><div class="agenda-card__status">Live</div><div class="agenda-card__clock"></div>23. Juni, 13:30 - 15:00</div>
                    <div class="agenda-card__type">Online Podiumsdiskussion</div>
                    <div class="agenda-card__title">Automatisierung</div>
                    <div class="agenda-card__text">Teaser Diskussion Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed dia…</div>
                    <div class="agenda-card__event" data-toggle="modal" data-target="#myModalEvent">event merken</div>
                  </div>
                </div>
                <div class="agenda-card__item completed">
                  <div class="agenda-card__img" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/src/img/agenda/3.jpg);"></div>
                  <div class="agenda-card__content">
                    <div class="agenda-card__date"><div class="agenda-card__status">beendet</div><div class="agenda-card__clock"></div>23. Juni, 13:30 - 15:00</div>
                    <div class="agenda-card__type">Webcast</div>
                    <div class="agenda-card__title">Automatisierung</div>
                    <div class="agenda-card__text">Teaser Diskussion Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed dia…</div>
                    <div class="agenda-card__event" data-toggle="modal" data-target="#myModalEvent">Am Event teilnehmen</div>
                  </div>
                </div>
                <div class="agenda-card__item">
                  <div class="agenda-card__img" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/src/img/agenda/4.jpg);"></div>
                  <div class="agenda-card__content">
                    <div class="agenda-card__date"><div class="agenda-card__status">Live</div><div class="agenda-card__clock"></div>23. Juni, 13:30 - 15:00</div>
                    <div class="agenda-card__type">Webcast</div>
                    <div class="agenda-card__title">Automatisierung</div>
                    <div class="agenda-card__text">Teaser Diskussion Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed dia…</div>
                    <div class="agenda-card__event" data-toggle="modal" data-target="#myModalEvent">event merken</div>
                  </div>
                </div>
                <div class="agenda-card__item event">
                  <div class="agenda-card__img" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/src/img/agenda/5.jpg);"></div>
                  <div class="agenda-card__content">
                    <div class="agenda-card__date"><div class="agenda-card__status">Live</div><div class="agenda-card__clock"></div>23. Juni, 13:30 - 15:00</div>
                    <div class="agenda-card__type">Webcast</div>
                    <div class="agenda-card__title">Automatisierung</div>
                    <div class="agenda-card__text">Teaser Diskussion Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed dia…</div>
                    <div class="agenda-card__event" data-toggle="modal" data-target="#myModalEvent">event merken</div>
                  </div>
                </div>
                <div class="agenda-card__item event">
                  <div class="agenda-card__img" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/src/img/agenda/6.jpg);"></div>
                  <div class="agenda-card__content">
                    <div class="agenda-card__date"><div class="agenda-card__status">Live</div><div class="agenda-card__clock"></div>23. Juni, 13:30 - 15:00</div>
                    <div class="agenda-card__type">Webcast</div>
                    <div class="agenda-card__title">Automatisierung</div>
                    <div class="agenda-card__text">Teaser Diskussion Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed dia…</div>
                    <div class="agenda-card__event" data-toggle="modal" data-target="#myModalEvent">event merken</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <?php
        the_content();
      }
    }
   ?>

</main>
<?php get_footer(); ?>
