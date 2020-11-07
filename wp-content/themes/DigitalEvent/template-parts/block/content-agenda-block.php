<?php
/**
 * Block Name: Agenda block
 */

  $id = 'agenda-block-' . $block['id'];
 ?>

 <div class="agenda-block <?php echo (get_field('dark_background'))? 'agenda-block--dark ' : ''; ?><?php echo $id . ' ' . $block['className'];  ?>">
   <div class="container">
     <div class="agenda-block__wrap">
       <?php if (!empty(get_field('sub_title'))): ?>
         <div class="agenda-block__sub-title"><?php the_field('sub_title'); ?></div>
       <?php endif; ?>
       <?php if (!empty(get_field('title'))): ?>
         <div class="agenda-block__title"><?php the_field('title'); ?></div>
       <?php endif; ?>
       <div class="agenda-control">
         <div class="agenda-control-info">
           <div class="agenda-control-info__text">Um an einem Event teilnehmen zu können müssen Sie sich an der Messe registrieren oder anmelden. Die Anmeldung an einem Event ist frühestens 15 Minuten vor Beginn des Events möglich. Lorem Ipsum dolor sit amet sit dolor amet</div>
         </div>
         <div class="agenda-control__vertical"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path class="main-path" fill="#fff" d="M10 18h5V5h-5v13zm-6 0h5V5H4v13zM16 5v13h5V5h-5z"/></svg></div>
         <div class="agenda-control__horizontal active"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path class="main-path" fill="#fff" d="M3 13h2v-2H3v2zm0 4h2v-2H3v2zm0-8h2V7H3v2zm4 4h14v-2H7v2zm0 4h14v-2H7v2zM7 7v2h14V7H7z"/></svg></div>
       </div>
     </div>
   </div>
   <div class="agenda-card">
     <div class="container">
        <div class="agenda-card__list agenda-card__vertical" style="color:white;">
        <?php                                   //var_dump( the_field("event_date", 206) );exit; 
                global $post;
                $args = array( 'posts_per_page' => 5, 'post_type' => 'events' );
                $myposts = get_posts( $args );
                foreach( $myposts as $post ){ setup_postdata($post); 
						
						$event_date = get_field('start_date', $post->ID);
						$event_end = get_field('end_time', $post->ID);
						
						$start_time = substr(explode(" ",$event_date)[1], 0, 5);
						$end_time = substr(explode(" ",$event_end)[1], 0, 5);
						
						if (explode(" ",$event_date)[0]==explode(" ",$event_end)[0]){
								$event_period = date ("d. M", strtotime($event_date)).'  '.$start_time.' - '.$end_time;
						}else{
								$event_period = date ("d. M", strtotime($event_date)).'  '.$start_time.' - '.date ("d. M", strtotime($event_end)).'  '.$end_time;
						}
						
                        $event_time = strtotime($event_date);
						$event_close = strtotime($event_end);
                        $now_date = strtotime("now");
                        
                        
                        if ($event_time < $now_date&&$now_date > $event_close){
                            $state = 'completed';
                            $badge = 'BEENDET';
                            $action = '';
                        }
                        elseif ($event_time < $now_date&&$now_date < $event_close){ 
                            $state = 'active';
                            $badge = 'LIVE';
                            $action = 'Am Event teilnehmen';
                        }
                        else{
                            $state = $badge = '';
                            $action = 'event merken';
                        }
              
                        
                        ?>
            
                        <div class="agenda-card__item event <?php echo $state ?>">
                          <div class="agenda-card__img" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"><div></div></div>
                            <div class="agenda-card__content">
                                <div class="agenda-card__date"><div class="agenda-card__status"><?php echo $badge ?></div><div class="agenda-card__clock"></div> <?php echo $event_period; ?></div>
                                <div class="agenda-card__type"><?php the_field('type_event'); ?></div>
                                <div class="agenda-card__title"><?php the_title(); ?></div>
                                <div class="agenda-card__text"><?php the_excerpt(); ?></div>
                                <div class="agenda-card__event" data-id="<?php echo $post->ID; ?>" data-toggle="modal" data-target="#myModalEvent"><?php echo $action; ?></div>
                            </div>
                        </div>
        <?php }
                wp_reset_postdata();  ?>
        
        </div>
         
     </div>
   </div>
 </div>
