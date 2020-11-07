<?php /*
Template Name: Thank registration
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

        <div class="container banner-title">
          <div class="row">
            <div class="col-md-8">
              <div class="page-header">
                <div class="page__title">Vielen Dank für Ihre Registrierung</div>
                <div class="page__text">In wenigen Minuten erhalten Sie zu Ihrer Registrierung eine E-Mail. Bitte bestätigen Sie den dort enthaltenen Verifizierungslink, um die Anmeldung in diesem Messeportal abzuschließen. Insofern Sie keine E-Mail in Ihrem Posteingang vorfinden, prüfen Sie bitte zusätzlich Ihren Spam-E-Mail-Ordner.</div>
              </div>
            </div>
          </div>
        </div>

        <!-- <a href="#" class="btn-fix-red btn btn--red"><span>E-mail bestätigt</span></a> -->

        <?php
        the_content();

        }
    }
  ?>

</main>
<?php get_footer(); ?>
