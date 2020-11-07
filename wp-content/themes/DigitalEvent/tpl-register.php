<?php /*
Template Name: Register page
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
        .
          <div class="container">
            <div class="my-form-register">
              <div class="row">
                <div class="col-lg-7">
                  <div class="page__title">Melden Sie sich jetzt mit Ihrem exklusiven Eventzugang an</div>
                  <input type="text" class="my-input my-input--transparent" aria-required="true" aria-invalid="false" placeholder="E-Mail Adresse">
                  <input type="text" class="my-input my-input--transparent" aria-required="true" aria-invalid="false" placeholder="Zugangscode">
                  <button type="submit" class="btn btn--orange btn--upper"><span>Anmelden</span></button>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="my-form-link__row">
                    <a href="#" class="my-form-link__item">Passwort vergessen? <span>Hier klicken</span></a>
                    <a href="#" class="my-form-link__item">Noch keinen Messezugang? <span>Jetzt registrieren</span></a>
                  </div>
                </div>
              </div>
              <div class="header-banner-mouse">
                <a href="#" class="header-banner-mouse__wrap">
                  <div class="header-banner-mouse__icon"></div>
                  <div class="header-banner-mouse__text">zum Entdecken<br>scrollen</div>
                </a>
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