<?php
/**
 * Block Name: Text with icon
 */

  $id = 'text-with-icon-' . $block['id'];
?>

<div class="text-with-icon <?php echo $id . ' ' . $block['className'];  ?>">
  <div class="container">
    <div class="text-with-icon__wrap">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="text-with-icon__main-text"><strong>WIR DENKEN WEITER.</strong> <p>Agentur für digitale Kommunikation, digitalen Vertrieb und digitale</p> Prozesslösungen</div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="text-with-icon__icon">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/icon-text/1.png" alt="">
          </div>
          <div class="text-with-icon__text">Jahre Online-Business Erfahrung im B2C– und B2B–E-Business</div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="text-with-icon__icon">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/icon-text/2.png" alt="">
          </div>
          <div class="text-with-icon__text">Mitarbeiter aus allen Kompetenz-bereichen digitaler Lösungen, zzgl. internationales Entwicklerteam</div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="text-with-icon__icon">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/icon-text/3.png" alt="">
          </div>
          <div class="text-with-icon__text">Strategische Beratung, Agile Umsetzung, Betrieb, Vermarktung</div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="text-with-icon__icon">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/icon-text/4.png" alt="">
          </div>
          <div class="text-with-icon__text">Referenzen unter: fdi.de Fachinformationen: b2b-vertrieb.fdi.de</div>
        </div>
      </div>
    </div>
  </div>
</div>
