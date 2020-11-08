<?php
/**
 * Block Name: Contact form
 */

  $id = 'contact-from-' . $block['id'];
?>

<div id="registration" class="contact-from <?php echo $id . ' ' . $block['className'];  ?>">
 <div class="container">
   <div class="contact-from__wrap">
     <div class="contact-from__sub-title"><?php the_field('sub_title'); ?></div>
     <div class="contact-from__title"><?php the_field('title'); ?></div>
     <?php echo do_shortcode( get_field('contact_form_7') ); ?>
   </div>
 </div>
</div>
