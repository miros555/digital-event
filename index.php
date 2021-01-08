<?php


$test = 'hghgh';

echo 'succcess';

if ( $test ){
    echo 'succcess55555555555tttrt55';

}


exit;



get_header(); ?>
<main class="clearfix">
  <div class="container">
    <h2 class="header-banner__sub-title"><?php the_title(); ?></h2>
  </div>

  <?php
    if ( have_posts() ) { while ( have_posts() ) {
        ?><?php
      	the_post();
        the_content();
      }
    }
   ?>

</main>
<?php get_footer(); ?>
