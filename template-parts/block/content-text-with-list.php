<?php
/**
 * Block Name: Text with list
 */

  $id = 'text-with-list-' . $block['id'];
?>

<div class="text-with-list <?php echo $id . ' ' . $block['className'];  ?>">
  <div class="container">
    <div class="text-with-list__wrap">
      <div class="row">
        <div class="col-md-7">
          <div class="text-with-list__sub-title">Messemotto</div>
          <div class="text-with-list__title">Automatisierung</div>
          <div class="text-with-list__text">Hier wird das Hauptthema der Messe beschrieben. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</div>
        </div>
        <div class="col-md-5">
          <div class="orange-list">
            <div class="orange-list__title">Entdecken Sie …</div>
            <ul class="orange-list__list">
              <li class="orange-list__item">Events </li>
              <li class="orange-list__item">Highlights </li>
              <li class="orange-list__item">Exklusive Messeangebote</li>
              <li class="orange-list__item">Über Allmatic</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>