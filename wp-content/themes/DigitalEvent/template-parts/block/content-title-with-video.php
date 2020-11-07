<?php
/**
 * Block Name: Title with video
 */

  $id = 'title-with-video-' . $block['id'];
?>

<div class="title-with-video <?php echo $id . ' ' . $block['className'];  ?>">
  <div class="container">
    <div class="title-with-video__wrap">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="title-with-video__title">
            Herzlich <strong>Willkommen</strong>
          </div>
          <div class="title-with-video__text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores</div>
        </div>
        <div class="col-lg-6">
          <div class="video-item">
            <div class="video-item__video">
              <div class="video-item-play">
                <div class="video-item-play__icon"></div>
                <div class="video-item-play__text">Begrüßungsvideo ansehen</div>
              </div>
              <video  class="video-item-play__video" poster="<?= get_stylesheet_directory_uri(); ?>/src/img/man.jpg" src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4"></video>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
