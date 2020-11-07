<?php
/**
 * Block Name: Text with image and icons
 */

  $id = 'text-with-image-and-icons-' . $block['id'];
?>

<div class="text-with-image-and-icons <?php echo $id . ' ' . $block['className'];  ?>">
  <div class="container">
    <div class="text-with-image-and-icons__wrap">
      <div class="text-with-image-and-icons__item">
        <div class="text-with-image-and-icons__img">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/image1.jpg" alt="">
        </div>
        <div class="text-with-image-and-icons__content">
          <div class="text-with-image-and-icons__sub-title">Warum FDI</div>
          <div class="text-with-image-and-icons__title">FDI Digital Business ist Pionier im B2B E-Business seit 1996. Wir stehen für nachhaltige Lösungen und Qualität.</div>
          <div class="text-with-image-and-icons__row">
            <div class="text-with-image-and-icons__icon">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/icons/list_white.svg" alt="">
            </div>
            <div class="text-with-image-and-icons__text">
              Digitale B2B Strategie
            </div>
          </div>
          <div class="text-with-image-and-icons__row">
            <div class="text-with-image-and-icons__icon">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/icons/clock_white.svg" alt="">
            </div>
            <div class="text-with-image-and-icons__text">
              Digitaler Handel
            </div>
          </div>
          <div class="text-with-image-and-icons__row">
            <div class="text-with-image-and-icons__icon">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/icons/refresh_white.svg" alt="">
            </div>
            <div class="text-with-image-and-icons__text">
              Digitale Lösungen
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
