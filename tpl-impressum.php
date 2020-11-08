<?php /*
Template Name: Impressum page
Template Post Type: page
*/ ?>

<?php get_header('darken'); ?>
<main class="clearfix">
  <div class="container">
    <h2 class="header-banner__sub-title"><?php the_title(); ?></h2>
  </div>

  <?php
    if ( have_posts() ) { while ( have_posts() ) {
        the_post();
        ?>

        <div class="container">
          <div class="page-header">
            <div class="page__sub-title">Angaben gem. § 5 TMG</div>
            <div class="page__title">Impressum</div>
          </div>


          <div class="page-doub-tabl">
            <div class="row">
              <div class="col-md-4">
                <div class="page-doub-tabl__title">Anschrift</div>
              </div>
              <div class="col-md-8">
                <div class="page-doub-tabl__text">
                  <p>ALLMATIC-Jakob Spannsysteme GmbH<br>Jägermühle 10<br>87647 Unterthingau<br>Tel: +49 8377 929 – 0<br>Fax: +49 8377 929 – 380<br> info@allmatic.de</p>     Geschäftsführer: Bernhard Rösch Rechtsform: GmbH Sitz der Gesellschaft: Unterthingau Eingetragen im Handelsregister beim Amtsgericht Kempten – Register-Nr.: HRB 7352 USt.-ID-Nummer gem. § 27 a Umsatzsteuergesetz: DE 814 722 452 Verantwortlich für den Inhalt nach § 55 RStV: Bernhard Rösch (Adresse wie oben)
                </div>
              </div>
            </div>
          </div>
          <div class="page-doub-tabl">
            <div class="row">
              <div class="col-md-4">
                <div class="page-doub-tabl__title">Haftung für Inhalte</div>
              </div>
              <div class="col-md-8">
                <div class="page-doub-tabl__text">
                  <p>Alle Informationen und Erklärungen der Internetseiten sind unverbindlich. Die ALLMATIC-Jakob Spannsysteme GmbH übernimmt für die Richtigkeit und Vollständigkeit der Inhalte keine Gewähr. Es werden keine Garantien übernommen und keine Zusicherung von Produkteigenschaften gemacht. Aus den Inhalten der Internetseiten ergeben sich keine Rechtsansprüche. Fehler im Inhalt werden bei Kenntnis darüber unverzüglich korrigiert. Die Inhalte der Internetseiten können durch zeitverzögerte Aktualisierung nicht permanent aktuell sein. Bitte fragen Sie uns daher zu dem Stand, technischen Details und Lieferbarkeit der Produkte und Dienstleistungen. Links auf andere Internetseiten werden nicht permanent kontrolliert. Somit übernehmen wir keine Verantwortung für den Inhalt verlinkter Seiten.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="page-doub-tabl">
            <div class="row">
              <div class="col-md-4">
                <div class="page-doub-tabl__title">Konzeption und Programmierung:</div>
              </div>
              <div class="col-md-8">
                <div class="page-doub-tabl__text">
                  <p>Internetagentur fabrique d’ images ebusiness GmbH <strong>www.fdi.de</strong></p>
                </div>
              </div>
            </div>
          </div>
          <div class="page-doub-tabl">
            <div class="row">
              <div class="col-md-4">
                <div class="page-doub-tabl__title">Herunterladen von Daten und Software</div>
              </div>
              <div class="col-md-8">
                <div class="page-doub-tabl__text">
                  <p>Die ALLMATIC-Jakob Spannsysteme GmbH übernimmt keine Gewähr für die Fehlerfreiheit von Daten und Software, die von den Internetseiten heruntergeladen werden können. Die Software wird von der ALLMATIC-Jakob Spannsysteme GmbH auf Virenbefall überprüft. Wir empfehlen dennoch, Daten und Software nach dem Herunterladen auf Virenbefall mit jeweils neuester Virensoftware zu prüfen.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="page-doub-tabl">
            <div class="row">
              <div class="col-md-4">
                <div class="page-doub-tabl__title">Urheberrechte und sonstige Sonderschutzrechte</div>
              </div>
              <div class="col-md-8">
                <div class="page-doub-tabl__text">
                  <p>Der Inhalt dieser Internetseiten ist urheberrechtlich geschützt. Grafiken, Texte, Logos, Bilder usw. dürfen nur nach schriftlicher Genehmigung durch die ALLMATIC-Jakob Spannsysteme GmbH heruntergeladen, vervielfältigt, kopiert, geändert, veröffentlicht, versendet, übertragen oder in sonstiger Form genutzt werden. Bei genannten Produkt- und Firmennamen kann es sich um eingetragene Warenzeichen oder Marken handeln. Die unberechtigte Verwendung kann zu Schadensersatzansprüchen und Unterlassungsansprüchen führen.</p>
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
