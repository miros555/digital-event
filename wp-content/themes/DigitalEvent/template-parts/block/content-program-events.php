<?php
/**
 * Block Name: Program events
 */

  $id = 'program-events-' . $block['id'];
 ?>

 <div class="program-events <?php echo $id . ' ' . $block['className'];  ?>">
   <div class="container">
     <div class="program-events__wrap">
       <div class="program-events__main-title"><?php the_field('title'); ?></div>
        <div class="program-events__row-merg">
          <div class="program-events__content">
            <div class="program-events__sub-title"><?php the_field('sub_title'); ?></div>
            <div class="program-events__title"><?php the_field('title_item'); ?></div>
            <div class="program-events__text"><?php the_field('text'); ?></div>
          </div>
            <?php
            $image = get_field('image');
            if( !empty( $image ) ): ?>
              <div class="program-events__img">
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              </div>
            <?php endif; ?>
        </div>
        <div class="program-events__row">
          <?php
          $image = get_field('image_2');
          if( !empty( $image ) ): ?>
            <div class="program-events__img">
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </div>
          <?php endif; ?>
          <div class="program-events__content">
            <div class="program-events__sub-title"><?php the_field('sub_title_2'); ?></div>
            <div class="program-events__title"><?php the_field('title_item_2'); ?></div>
            <div class="program-events__text"><?php the_field('text_2'); ?></div>
          </div>
        </div>
     </div>
   </div>
 </div>
