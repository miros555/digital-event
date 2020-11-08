<?php
/**
 * Block Name: Gifts block
 */

  $id = 'gifts-block-' . $block['id'];
 ?>

 <div class="contact-block <?php echo $id . ' ' . $block['className'];  ?>">
   <div class="container">
     <div class="contact-block__wrap">
       <div class="contact-block__img">
          <?php
			$image = get_field('gb_image');
			if( !empty( $image ) ): ?>
				<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
       </div>
       <div class="contact-block__content">
         <div class="contact-block__title"><?php the_field('gb_title'); ?></div>
         <div class="contact-block__text"><?php the_field('gb_text'); ?></div>
           
         </div>
       </div>
     </div>
   </div>
 </div>
