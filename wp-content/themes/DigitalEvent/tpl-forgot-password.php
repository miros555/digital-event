<?php /*
Template Name: Forgot password
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

          <div class="container">
            <div class="my-form-forgot">
              <div class="row">
                <div class="col-lg-7">
                  <div class="page__title">Kein Problem!<br> Hier können Sie ein neues Passwort einrichten.</div>
                  <input type="text" class="my-input my-input--transparent" aria-required="true" aria-invalid="false" placeholder="E-Mail Adresse *">
                  <button type="submit" class="btn btn--orange btn--upper"><span>Passwort zurücksetzen</span></button>
                  <div class="page__text">Sie erhalten eine E-Mail mit einem Link, um ein neues Passwort zu vergeben. </div>
                  <div class="page__text">Sollten Sie innerhalb der nächsten Minuten KEINE E-Mail mit Ihren Zugangsdaten erhalten, so überprüfen Sie bitte Ihren SPAM-Ordner.</div>
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
