
<div class="modal fade" id="myModalEvent" tabindex="-1" role="dialog" aria-hidden="true">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span class="close__icon"></span>
  </button>
  <div class="modal-dialog modal-dialog-centered modal-dialog-transparent modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <div class="my-modal__title">Event merken</div>
      </div>
      <div class="modal-body">
        <div class="my-modal-checkbox__row">
          <div class="my-modal-checkbox__item">
            <label class="my-big-checkbox">
              <input type="checkbox" class="my-big-checkbox__input meine">
              <div class="my-big-checkbox__icon"></div>
              <div class="my-big-checkbox__text">Zu meinen Events hinzufügen</div>
            </label>
          </div>
          <div class="my-modal-checkbox__item">
            <label class="my-big-checkbox">
              <input type="checkbox" class="my-big-checkbox__input ical">
              <div class="my-big-checkbox__icon"></div>
              <div class="my-big-checkbox__text">In Kalender eintragen (iCal)</div>
            </label>
          </div>
        </div>
        <div class="d-flex justify-content-center">
          <button data-dismiss="modal" type="button" class="btn  btn--orange my-modal__btn conf_choice" name="button"><span>Speichern</span></button>
        </div>
        <label class="my-checkbox-horizontal">
          <input type="checkbox" class="my-checkbox-horizontal__input">
          <div class="my-checkbox-horizontal__icon"></div>
          <div class="my-checkbox-horizontal__text">Einstellungen für zukünftige Auswahl merken</div>
        </label>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModalMyEvent" tabindex="-1" role="dialog" aria-hidden="true">
  <button type="button" class="close modal_exit" data-dismiss="modal" aria-label="Close">
    <span class="close__icon"></span>
  </button>
  <div class="modal-dialog modal-dialog-centered modal-dialog-transparent modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <div class="my-event-card__list">
			<div class="notification"></div>
		<?php	
		
			$query_ids = !empty(get_user_meta( get_current_user_id(), 'event'))?
							get_user_meta( get_current_user_id(), 'event') : 1;
							
			if ($query_ids == 1){
					echo '<h2 style="color:white;">Keine gemerkten Events vorhanden. Klicken Sie bei einem gewünschten Termin auf Event merken, 
					um diesen hier zu speichern. So haben Sie stets einen Überblick Ihrer Event-Auswahl.</h2>'; 
			}
			//$count = count($query);
		
		
				$args = array(
				'posts_per_page' => -1, 
				'post_type' => 'events',
				'post__in' => $query_ids
			);

			$posts = get_posts($args); 
			foreach( $posts as $post ){ 
					setup_postdata($post); 
			?>
			
          <div class="my-event-card__item">
            <div class="my-event-card__content"><?php //var_dump( $query_ids ); ?>
              <div class="my-event-card__date"><?php the_field("event_date", $post->ID); ?></div>
              <div class="my-event-card__sub-title"><?php the_field('type_event'); ?></div>
              <div class="my-event-card__title"><?php the_title(); ?></div>
            </div>
            <div data-id="<?php echo $post->ID; ?>" class="my-event-card__close"></div>
          </div>

			<?php } 
			wp_reset_postdata(); ?>


        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal mic-book--white fade" id="myMicrosoftBooking" tabindex="-1" role="dialog" aria-hidden="true">
  <a href="#" data-dismiss="modal" aria-label="Close" class="mic-book__btn">Zurück</a>
  <div class="modal-dialog modal-dialog-centered modal-dialog-transparent modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <div class="mic-book">
          <div class="mic-book__title">
            Weiterleitung <strong>Microsoft Booking</strong>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<div class="modal fade" id="myModalMyGeschenk" tabindex="-1" role="dialog" aria-hidden="true">
  <button type="button" class="close modal_exit" data-dismiss="modal" aria-label="Close">
    <span class="close__icon"></span>
  </button>
  <div class="modal-dialog modal-dialog-centered modal-dialog-transparent modal-lg">
    <div class="modal-content">
      <div class="modal-body">
  
  			<!--div class="title"><h1 style="color:white;font-size:20pt;"--> 
			<?php 
			
			// with post object by id
			$post = get_post(248); // specific post
			$the_content = apply_filters('the_content', $post->post_content);
			if ( !empty($the_content) ) {
			  echo $the_content;
			}
			
			//var_dump(get_the_content(248)); ?> <!--/h1></div-->


      </div>
    </div>
  </div>
</div>



<script>
jQuery(function($){
	
});
</script>