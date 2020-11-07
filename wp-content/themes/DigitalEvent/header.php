<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php bloginfo('name'); if (!is_front_page() ){ echo ' |'; } ?>
    <?php is_front_page() ? '' : wp_title(''); ?></title>
    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
  </head>
  <!-- main-body--black ( class for black background page ) -->    
    <?php  $bg_url = ( !empty( get_option('pages__bg') ) ) ?  wp_get_attachment_url( get_option('pages__bg') ) : wp_get_attachment_url( 153 ) ; ?>
  
  <body <?php body_class('main-body '); ?> >
    <div class="main-body__fix-bg">
      <div class="main-body__fix-bg-image" style="background-image: url(<?php echo $bg_url; ?>)"></div> 
    </div>
    <div class="main-body__wrap">
    <div class="header-banner">
    		<div class="header container">
          <div class="header__wrap">
            <div class="header-main">
              <a href="<?php echo get_home_url(); ?>" class="header-logo">
                <div class="header-logo__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/logo.svg" alt="">
                </div>
                <div class="header-logo__title">Digitaler Fachtag</div>
              </a>
              <div class="exhib-period__list">
                <div class="exhib-period__item exhib-period__item--yellow"><?php echo get_option('exhib_period__date'); ?></div>
                <div class="exhib-period__item"><?php echo get_option('exhib_period__time'); ?></div>
              </div>
            </div>
          </div>
          <div class="header-nav">
            <a href="#" class="header-nav__reg header-nav__link hidden">
              <span class="mob">Jetzt registrieren</span>
              <span class="desc">Jetzt registrieren: Event-Zugang sichern</span>
            </a>
            <div class="header-nav__link header-nav__link--hamburger">
              <input type="checkbox" id="burger_btn" class="hamburger__input">
              <label for="burger_btn" class="hamburger__label">
                  <div class="hamburger">
                      <span class="bar bar1"></span>
                      <span class="bar bar2"></span>
                      <span class="bar bar3"></span>
                      <span class="bar bar4"></span>
                  </div>
              </label>
            </div>
            <div class="header-menu-row">
                <?php 
				
					if ( is_user_logged_in() ): 
				
					$query_ids = get_user_meta( get_current_user_id(), 'event');
					$count = count($query_ids); 
				
				?>
				
				<script>
					var arr_events = <?php echo json_encode($query_ids); ?>;
				</script>
				
              <a href="#" data-toggle="modal" data-target="#myModalMyEvent" class="header-menu-row__item">
                <span class="header-menu-row__icon event">
                  <span class="header-menu-row__counter"><?php echo $count; ?></span>
                </span>
                <span class="header-menu-row__text">Meine Events Test</span>
              </a>
              <a href="#" data-toggle="modal" data-target="#myModalMyGeschenk" class="header-menu-row__item">
                <span class="header-menu-row__icon">
                  <i class="fas fa-gift"></i>
                </span>
                <span class="header-menu-row__text">Geschenk abholen</span>
              </a>
              <a href="#" class="header-menu-row__item">
                <span class="header-menu-row__icon log-out"></span>
                <span class="header-menu-row__text">Abmelden</span>
              </a>
                
               <?php else: ?>
                <a href="#registration" class="header-banner-mouse__text logged" style="text-align:center;padding: 30px 35px;">Jetzt registrieren Event:<br/>Zugang sichern</a>
               <?php endif; ?>
                
            </div>
          </div>
          <nav class="header-menu">
            <?php wp_nav_menu( array(
              'theme_location'  => 'header_menu',
              'menu'            => 'menu',
              'container'       => '',
              'container_class' => '',
              'container_id'    => '',
              'menu_class'      => 'header-menu__wrap',
              'menu_id'         => '',
              'echo'            => true,
              'fallback_cb'     => 'wp_page_menu',
              'before'          => '',
              'after'           => '',
              'link_before'     => '<span>',
              'link_after'      => '</span>',
              'items_wrap'      => '<ul class="header-menu__wrap">%3$s</ul>',
              'depth'           => 0,
              'walker'          => '',
            ) );
            ?>
            <div class="header-menu-row">
              <a href="#" data-toggle="modal" data-target="#myModalMyEvent" class="header-menu-row__item">
                <span class="header-menu-row__icon event">
                  <span class="header-menu-row__counter"><?php echo $count; ?></span>
                </span>
                <span class="header-menu-row__text">Meine Events</span>
              </a>
              <a href="#" class="header-menu-row__item">
                <span class="header-menu-row__icon">
                  <i class="fas fa-gift"></i>
                </span>
                <span class="header-menu-row__text">Geschenk abholen</span>
              </a>
              <a href="#" class="header-menu-row__item">
                <span class="header-menu-row__icon log-out"></span>
                <span class="header-menu-row__text">Abmelden</span>
              </a>
            </div>
          </nav>
          <nav class="header-menu-fixed">
            <div class="container">
              <?php wp_nav_menu( array(
                'theme_location'  => 'header_menu',
                'menu'            => 'menu',
                'container'       => '',
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => 'header-menu-fixed__wrap',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '<span>',
                'link_after'      => '</span>',
                'items_wrap'      => '<ul class="header-menu-fixed__wrap">%3$s</ul>',
                'depth'           => 0,
                'walker'          => '',
              ) );
              ?>
            </div>
          </nav>
        </div>

    </div>
