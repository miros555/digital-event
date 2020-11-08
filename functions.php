<?php

function wp_my_theme_enq() {

  wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/src/libs/bootstrap/css/bootstrap.min.css',array(),false,false);
  wp_enqueue_style( 'bootstrap-grid', get_template_directory_uri() . '/src/libs/bootstrap/css/bootstrap-grid.min.css',array(),false,false);
  wp_enqueue_style( 'reset', get_template_directory_uri() . '/src/css/reset.css',array(),false,false);
  wp_enqueue_style( 'slick', get_template_directory_uri() . '/src/libs/slick/slick.css',array(),false,false);
  wp_enqueue_style( 'font-awesome-5', get_template_directory_uri() . '/src/libs/fontawesome/css/all.css"',array(),false,false);
  wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/src/libs/slick/slick-theme.css',array(),false,false);
  wp_enqueue_style( 'style', get_template_directory_uri() . '/src/css/style.css',array(),false,false);

  wp_enqueue_script( 'min-jquery', get_template_directory_uri() . '/src/libs/jquery-3.2.1.min.js',array(),false,true);
  wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/src/libs/slick/slick.min.js',array(),false,true);
  wp_enqueue_script( 'inputmask', get_template_directory_uri() . '/src/libs/jquery.inputmask.min.js',array(),false,true);
  wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/src/libs/bootstrap/js/bootstrap.min.js',array(),false,true);
  wp_enqueue_script( 'common-js', get_template_directory_uri() . '/src/js/common.js',array(),false,true);

}
add_action( 'wp_enqueue_scripts', 'wp_my_theme_enq' );

add_action('after_setup_theme', function(){
	register_nav_menus( array(
		'header_menu' => 'Header menu',
		'footer_menu' => 'Footer menu'
	) );
});


/*================== acf gutenberg init ======================*/
function my_acf_block_render_callback( $block ) {

  $slug = str_replace('acf/', '', $block['name']);

  if( file_exists( get_theme_file_path("/template-parts/block/content-{$slug}.php") ) ) {
    include( get_theme_file_path("/template-parts/block/content-{$slug}.php") );
  }
}
add_action('acf/init', 'my_acf_init');
function my_acf_init() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		acf_register_block(array(
			'name'				=> 'orange_block',
			'title'				=> __('Orange block'),
			'description'		=> __('A custom orange block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-page',
			'className'			=> 'orange-block-class',
			'keywords'			=> array( 'orange_block' ),
		));
		acf_register_block(array(
			'name'				=> 'program-events',
			'title'				=> __('Program events'),
			'description'		=> __('A custom program events.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-page',
			'className'			=> 'events-block-class',
			'keywords'			=> array( 'program-events' ),
		));
		acf_register_block(array(
			'name'				=> 'agenda_block',
			'title'				=> __('Agenda block'),
			'description'		=> __('A custom agenda block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-page',
			'className'			=> 'agenda-block-class',
			'keywords'			=> array( 'agenda_block' ),
		));
		acf_register_block(array(
			'name'				=> 'contact_block',
			'title'				=> __('Contact block'),
			'description'		=> __('A custom сontact block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-page',
			'className'			=> 'contact-block-class',
			'keywords'			=> array( 'contact_block' ),
		));
		acf_register_block(array(
			'name'				=> 'contact_form',
			'title'				=> __('Contact form'),
			'description'		=> __('A custom contact form.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-page',
			'className'			=> 'contact-form-block-class',
			'keywords'			=> array( 'contact_form' ),
		));
		acf_register_block(array(
			'name'				=> 'discussion',
			'title'				=> __('Discussion'),
			'description'		=> __('A custom discussion.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-page',
			'className'			=> 'discussion-block-class',
			'keywords'			=> array( 'discussion' ),
		));
		acf_register_block(array(
			'name'				=> 'title_with_counter',
			'title'				=> __('Title with counter'),
			'description'		=> __('A custom title with counter.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-page',
			'className'			=> 'counter-block-class',
			'keywords'			=> array( 'title_with_counter' ),
		));
		acf_register_block(array(
			'name'				=> 'banner_title',
			'title'				=> __('Banner title'),
			'description'		=> __('A custom banner title.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-page',
			'className'			=> 'banner-block-class',
			'keywords'			=> array( 'banner_title' ),
		));
		acf_register_block(array(
			'name'				=> 'product-list',
			'title'				=> __('Product list'),
			'description'		=> __('A custom product list.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-page',
			'className'			=> 'product-block-class',
			'keywords'			=> array( 'product-list' ),
		));
		acf_register_block(array(
			'name'				=> 'text-with-icon',
			'title'				=> __('Text with icon'),
			'description'		=> __('A custom text with icon.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-page',
			'className'			=> 'text-block-class',
			'keywords'			=> array( 'text-with-icon' ),
		));
		acf_register_block(array(
			'name'				=> 'text-with-image-and-icons',
			'title'				=> __('Text with image and icons'),
			'description'		=> __('A custom text with image and icons.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-page',
			'keywords'			=> array( 'text-with-image-and-icons' ),
		));
		acf_register_block(array(
			'name'				=> 'text-with-btn',
			'title'				=> __('Text with btn'),
			'description'		=> __('A custom text with btn.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-page',
			'keywords'			=> array( 'text-with-btn' ),
		));
		acf_register_block(array(
			'name'				=> 'title-with-video',
			'title'				=> __('Title with video'),
			'description'		=> __('A custom title with video.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-page',
			'keywords'			=> array( 'title-with-video' ),
		));
		acf_register_block(array(
			'name'				=> 'text-with-list',
			'title'				=> __('Title with list'),
			'description'		=> __('A custom title with list.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-page',
			'keywords'			=> array( 'text-with-list' ),
		));
		
		acf_register_block(array(
			'name'				=> 'gifts_block',
			'title'				=> __('Gifts block'),
			'description'		=> __('A custom block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-page',
			'className'			=> 'gifts-block-class',
			'keywords'			=> array( 'gifts_block' ),
		));
		
	}
}
/*================== end acf gutenberg blocks init ======================*/


add_action( 'admin_enqueue_scripts', 'true_include_myuploadscript' );

function true_include_myuploadscript() {
	// wp_enqueue_script('jquery');
	if ( ! did_action( 'wp_enqueue_media' ) ) {
		wp_enqueue_media();
	}
 	wp_enqueue_script( 'myuploadscript', get_stylesheet_directory_uri() . '/src/js/admin.js', array('jquery'), null, false );
}
 

add_action( 'wp_enqueue_scripts', 'include_myuploadscript' );

function include_myuploadscript() {
 	wp_enqueue_script( 'uploadscript', get_stylesheet_directory_uri() . '/src/js/script.js', array('jquery'), null, false );
}


/*================== admin menu for Header Settings ======================*/

add_action('admin_menu', 'my_menu');

function my_menu(){

	add_menu_page('Header Settings', 'Header Settings', 'administrator', 'header-settings', 'header_settings_page',null,"2.1");

        add_action('admin_init', 'register_header_settings');

}    


function register_header_settings(){

        register_setting('header-settings-group', 'sn');

}


function header_settings_page(){

        page_header_settings();
		
		$default = '';
         
        $src = ( null !== get_option('pages__bg') ) ?  wp_get_attachment_url( get_option('pages__bg') ) : wp_get_attachment_url( 157 ) ;
        
       // var_dump( get_option('pages__bg') );////////////////
        
        echo '<div class="wrap">

                <form method="post" action="" enctype="multipart/form-data">

                    <table class="form-table">

                        <tr valign="top">
                            <th scope="row"><h3>Exhibition period Date</h3></th>
                            <td><input type="text" name="exhib_period__date" value="'.get_option('exhib_period__date').'" /></td>
                        </tr> 

                        <tr valign="top">
                            <th scope="row"><h3>Exhibition period Time</h3></th>
                            <td><input type="text" name="exhib_period__time" value="'.get_option('exhib_period__time').'" /></td>
                        </tr>


                    </table>


                    <hr/>
                    <div> <h3>Picture for background of page wallpaper:</h3> <br/>
                    
                            <img class="bg" data-src="' . $default . '" src="' . $src . '" width="250px" height="200px" />
                            <div>
                                    <input type="hidden" name="pages__bg" class="pages__bg" value="' . $src . '" />
                                    <button type="submit" class="upload_image_button button">Upload</button>
                                    <button type="submit" class="remove_image_button button">×</button>
                            </div>
                    </div><br/>



                    <input type="hidden" name="header-settings" value="true" />
                    <input type="submit" class="button-primary" value="Save changes"/>

                </form>';
}



function page_header_settings(){

        if(!isset($_POST['header-settings']))return;

                update_option('exhib_period__date',isset($_POST['header-settings'])&&isset($_POST['exhib_period__date'])?$_POST['exhib_period__date']:'');
                update_option('exhib_period__time',isset($_POST['header-settings'])&&isset($_POST['exhib_period__time'])?$_POST['exhib_period__time']:'');
                
                update_option('pages__bg', isset($_POST['header-settings'])&&isset($_POST['pages__bg'])?$_POST['pages__bg']:'');

}




/**************Add custom post type for Events**************************/

add_action( 'init', 'register_events_post_type' );

function register_events_post_type() {
		$labels = array(
				'name' => 'events',
				'singular_name' => 'event',
				'add_new' => 'New Event',
				'add_new_item' => 'Add Event',
				'edit_item' => 'Edit event info',
				'new_item' => 'New Event',
				'all_items' => 'All Events',
				'view_item' => 'See all events',
				'search_items' => 'Find events',
				'not_found' =>  'No find',
				'not_found_in_trash' => 'There are not events',
				'menu_name' => '***EVENTS***'
		);
	$args = array(
		'labels' => $labels,
                'public' => true,
                'publicly_queryable' => true,
                'show_ui' => true, 
                'show_in_menu' => true, 
                'query_var' => true,
                'rewrite' => true,
                'capability_type' => 'post',
                'has_archive' => true, 
                'hierarchical' => true,
                'menu_position' => 3,
				//'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )         
                'supports' => array('title','editor','author','thumbnail','custom-fields','excerpt','revisions','page-attributes','post-formats'),
	);
	register_post_type('events', $args);
        
    add_theme_support( 'post-thumbnails', array( 'post', 'events' ) ); 
}



add_shortcode( 'slider', 'func_slider' );

function func_slider() { ?>

        <ul>
            <?php
                global $post;
                $args = array( 'posts_per_page' => 5, 'post_type' => 'events' );
                $myposts = get_posts( $args );
                foreach( $myposts as $post ){ setup_postdata($post); ?>
            
                    <li style="color:white;">
                                <?php the_title(); ?></h2>
                        </a> 
                                <?php the_ID(); ?>
                    </li>
                        
                    
                    
                     <div class="agenda-card">
                        <div class="container">
                          <div class="agenda-card__list agenda-card__vertical">
                            <div class="agenda-card__item active">
                              <div class="agenda-card__img" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"><div></div></div>
                                <div class="agenda-card__content">
                                 <div class="agenda-card__date"><div class="agenda-card__status">Live</div><div class="agenda-card__clock"></div> <?php the_field('event_date'); ?></div>
                                    <div class="agenda-card__type"><?php the_field('type_event'); ?></div>
                                    <div class="agenda-card__title"><?php the_title(); ?></div>
                                    <div class="agenda-card__text"><?php the_excerpt(); ?></div>
                                    <div class="agenda-card__event" data-toggle="modal" data-target="#myModalEvent">Am Event teilnehmen</div>
                                 </div>
                               </div>
                            </div>
                          </div>
                        </div>
                    
                    
                    
                    
                <?php
                }
                wp_reset_postdata();  ?>
        </ul>
<?php

}



add_action('wp', 'wallpaper');

function wallpaper (){
        if (is_page()){
                 //var_dump( get_user_meta( get_current_user_id(), 'event') ); exit;
        }
}


add_action( 'wp_ajax_select',  'get_state_callback' ); // For logged in users

function get_state_callback(){
    
		$eventID = isset($_POST['eventID']) ? $_POST['eventID'] : false ;
		$action_type = isset($_POST['action_type']) ? $_POST['action_type'] : false ;
		
		if($eventID){
			
				if($action_type=='add'){
						add_user_meta( get_current_user_id(), 'event', $eventID);
				}else{
						delete_user_meta( get_current_user_id(), 'event', $eventID);
				}
				
				if($action_type=='ical_event'){  

						//add_user_meta( get_current_user_id(), 'event', $eventID);
						
						// Fetch vars
						$event = array(
							'id' => $eventID,
							'title' => get_the_title($eventID),
							'description' => get_the_content(null, strip_teaser, $eventID), 
							'datestart' => strtotime(get_field('start_date',$eventID)),
							'dateend' => strtotime(get_field('end_time',$eventID))
						);

						// iCal date format: yyyymmddThhiissZ
						// PHP equiv format: Ymd\This

						// The Function

						function dateToCal($timestamp) {
								return date('Ymd\THis\Z', $timestamp);
						}
						
						function escapeString($string) {
								return preg_replace('/([\,;])/','\\\$1', $string);
						}


						// Build the ics file
						
						
						$ical = 'BEGIN:VCALENDAR
VERSION:2.0
PRODID:-//ical.marudot.com//iCal Event Maker
X-WR-CALNAME:Digital Event
NAME:Digital Event
CALSCALE:GREGORIAN
BEGIN:VTIMEZONE
TZID:Europe/Berlin
TZURL:http://tzurl.org/zoneinfo-outlook/Europe/Berlin
X-LIC-LOCATION:Europe/Berlin
BEGIN:DAYLIGHT
TZOFFSETFROM:+0100
TZOFFSETTO:+0200
TZNAME:CEST
DTSTART:' . dateToCal($event['datestart']) . '
RRULE:FREQ=YEARLY;BYMONTH=3;BYDAY=-1SU
END:DAYLIGHT
BEGIN:STANDARD
TZOFFSETFROM:+0200
TZOFFSETTO:+0100
TZNAME:CET
DTSTART:' . dateToCal($event['datestart']) . '
RRULE:FREQ=YEARLY;BYMONTH=10;BYDAY=-1SU
END:STANDARD
END:VTIMEZONE
BEGIN:VEVENT
DTSTAMP:' .dateToCal(time()) . '
UID:20201106T111230Z-2077323474@marudot.com
DTSTART;TZID=Europe/Berlin:' . dateToCal($event['datestart']) . '
DTEND;TZID=Europe/Berlin:' . dateToCal($event['dateend']) . '
SUMMARY:' . escapeString($event['title']) . '
URL:https%3A%2F%2Fgo2de.fabrik.top%2F
DESCRIPTION:' . escapeString($event['description']) . '
LOCATION:Berlin
END:VEVENT
END:VCALENDAR';

						//set correct content-type-header
						if($event['id']){ 
								header('Content-type: text/calendar; charset=utf-8');
								header('Content-Disposition: attachment; filename=event.ics');
								echo $ical;
						} else {
							// If $id isn't set, then kick the user back to home. Do not pass go, and do not collect $200.
								echo 'error';
						}
						
	
						
						
				}
				
		}

		exit();
    
}



add_action('admin_menu', 'my_menu_geschenk');

function my_menu_geschenk(){

		add_menu_page('Header – Geschenk abholen', 'Header – editor for ‘Geschenk abholen’', 'administrator', '/post.php?post=248&action=edit','', null, "2.2");

}    
