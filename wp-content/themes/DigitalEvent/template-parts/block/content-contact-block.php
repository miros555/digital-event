<?php
/**
 * Block Name: Contact block
 */

  $id = 'contact-block-' . $block['id'];
 ?>

 <div class="contact-block <?php echo $id . ' ' . $block['className'];  ?>">
   <div class="container">
     <div class="contact-block__wrap">
       <div class="contact-block__img">
          <?php
          $image = get_field('image');
          if( !empty( $image ) ): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
       </div>
       <div class="contact-block__content">
         <div class="contact-block__sub-title"><?php the_field('sub_title'); ?></div>
         <div class="contact-block__title"><?php the_field('title'); ?></div>
         <div class="contact-block__text"><?php the_field('text'); ?></div>
         <div class="contact-block__row-btn">
           <?php if (!empty(get_field('btn_appointment_url')) && !empty(get_field('btn_appointment_text'))): ?>
             <a href="<?php the_field('btn_appointment_url'); ?>" data-toggle="modal" data-target="#myMicrosoftBooking" class="btn btn--orange btn--upper contact-block__btn">
               <span><?php the_field('btn_appointment_text'); ?></span>
               <i class="icon icon--contact"></i>
             </a>
           <?php endif; ?>
           <?php if (!empty(get_field('btn_live_chat_url')) && !empty(get_field('btn_live_chat_text'))): ?>
             <a href="<?php the_field('btn_live_chat_url'); ?>" data-toggle="modal" data-target="#myMicrosoftBooking" class="btn btn--orange btn--upper contact-block__btn">
               <span><?php the_field('btn_live_chat_text'); ?></span>
               <i class="icon icon--chat"></i>
             </a>
           <?php endif; ?>
         </div>
       </div>
     </div>
   </div>
 </div>
