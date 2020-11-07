<?php
/**
 * Block Name: Title_0 with counter
 */

  $id = 'header-banner-' . $block['id'];

?>

<div class="header-banner <?php echo $id . ' ' . $block['className'];  ?>">
  <div class="container">
    <h1 class="header-banner__title">Es gibt viel zu erleben! <br><b>Seien Sie gespannt!</b></h1>
    <div class="header-banner__count-down">
      <?php echo do_shortcode( '[wpcdt-countdown id="15"]' ); ?>
    </div>
    <div class="header-banner-mouse">
      <a href="#"  class="header-banner-mouse__wrap">
        <div class="header-banner-mouse__icon"></div>
        <div class="header-banner-mouse__text">zum Entdecken<br>scrollen</div>
      </a>
    </div>
  </div>
</div>
