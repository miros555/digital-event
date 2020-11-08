<?php
/**
 * Block Name: Orange block
 */

  $id = 'orange-block-' . $block['id'];
 ?>

 <div class="orange-block orange-block--top <?php echo $id . ' ' . $block['className'];  ?>">
   <div class="orange-block__bg">
     <div class="container">
       <div class="orange-block__wrap">
         <div class="orange-block__title"><?php the_field('title'); ?></div>
         <div class="orange-block__text"><?php the_field('text'); ?></div>
         <?php if (!empty(get_field('btn_url')) && !empty(get_field('btn_text'))): ?>
           <a href="<?php the_field('btn_url'); ?>" class="btn btn--white btn--upper orange-block__btn"><span><?php the_field('btn_text'); ?></span></a>
         <?php endif; ?>
       </div>
     </div>
   </div>
 </div>
