<?php
/**
 * Block Name: Banner title
 */

  $id = 'banner-title-' . $block['id'];
?>

<div class="banner-title <?php echo $id . ' ' . $block['className'];  ?>">
  <div class="container">
    <div class="banner-title__wrap">
      <div class="banner-title__title">
        <?php the_field('title'); ?>
      </div>
      <div class="header-banner-mouse header-banner-mouse--center">
        <a href="#" class="header-banner-mouse__wrap">
          <div class="header-banner-mouse__icon"></div>
          <div class="header-banner-mouse__text">zum Entdecken<br>scrollen</div>
        </a>
      </div>
    </div>
  </div>
</div>
