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
       <div class="agenda-card__list agenda-card__vertical">
         <div class="agenda-card__item active">
           <div class="agenda-card__img" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/src/img/agenda/1.jpg);"><div></div></div>
           <div class="agenda-card__content">
             <div class="agenda-card__date"><div class="agenda-card__status">Live</div><div class="agenda-card__clock"></div>23. Juni, 13:30 - 15:00</div>
             <div class="agenda-card__type">Webcast</div>
             <div class="agenda-card__title">Automatisierung</div>
             <div class="agenda-card__text">Teaser Diskussion Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed dia…</div>
             <div class="agenda-card__event" data-toggle="modal" data-target="#myModalEvent">Am Event teilnehmen</div>
           </div>
         </div>
         <div class="agenda-card__item event">
           <div class="agenda-card__img" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/src/img/agenda/2.jpg);"></div>
           <div class="agenda-card__content">
             <div class="agenda-card__date"><div class="agenda-card__status">Live</div><div class="agenda-card__clock"></div>23. Juni, 13:30 - 15:00</div>
             <div class="agenda-card__type">Online Podiumsdiskussion</div>
             <div class="agenda-card__title">Automatisierung</div>
             <div class="agenda-card__text">Teaser Diskussion Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed dia…</div>
             <div class="agenda-card__event" data-toggle="modal" data-target="#myModalEvent">event merken</div>
           </div>
         </div>
         <div class="agenda-card__item completed">
           <div class="agenda-card__img" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/src/img/agenda/3.jpg);"></div>
           <div class="agenda-card__content">
             <div class="agenda-card__date"><div class="agenda-card__status">beendet</div><div class="agenda-card__clock"></div>23. Juni, 13:30 - 15:00</div>
             <div class="agenda-card__type">Webcast</div>
             <div class="agenda-card__title">Automatisierung</div>
             <div class="agenda-card__text">Teaser Diskussion Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed dia…</div>
             <div class="agenda-card__event" data-toggle="modal" data-target="#myModalEvent">Am Event teilnehmen</div>
           </div>
         </div>
         <div class="agenda-card__item">
           <div class="agenda-card__img" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/src/img/agenda/4.jpg);"></div>
           <div class="agenda-card__content">
             <div class="agenda-card__date"><div class="agenda-card__status">Live</div><div class="agenda-card__clock"></div>23. Juni, 13:30 - 15:00</div>
             <div class="agenda-card__type">Webcast</div>
             <div class="agenda-card__title">Automatisierung</div>
             <div class="agenda-card__text">Teaser Diskussion Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed dia…</div>
             <div class="agenda-card__event" data-toggle="modal" data-target="#myModalEvent">event merken</div>
           </div>
         </div>
         <div class="agenda-card__item event">
           <div class="agenda-card__img" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/src/img/agenda/5.jpg);"></div>
           <div class="agenda-card__content">
             <div class="agenda-card__date"><div class="agenda-card__status">Live</div><div class="agenda-card__clock"></div>23. Juni, 13:30 - 15:00</div>
             <div class="agenda-card__type">Webcast</div>
             <div class="agenda-card__title">Automatisierung</div>
             <div class="agenda-card__text">Teaser Diskussion Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed dia…</div>
             <div class="agenda-card__event" data-toggle="modal" data-target="#myModalEvent">event merken</div>
           </div>
         </div>
         <div class="agenda-card__item event">
           <div class="agenda-card__img" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/src/img/agenda/6.jpg);"></div>
           <div class="agenda-card__content">
             <div class="agenda-card__date"><div class="agenda-card__status">Live</div><div class="agenda-card__clock"></div>23. Juni, 13:30 - 15:00</div>
             <div class="agenda-card__type">Webcast</div>
             <div class="agenda-card__title">Automatisierung</div>
             <div class="agenda-card__text">Teaser Diskussion Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed dia…</div>
             <div class="agenda-card__event" data-toggle="modal" data-target="#myModalEvent">event merken</div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
