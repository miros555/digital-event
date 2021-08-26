    <div class="footer footer--nav-fixed">
      <div class="container test">
        <div class="footer__wrap row">
          <div class="col-md-6">
            <?php wp_nav_menu( array(
              'theme_location'  => 'footer_menu',
              'menu'            => 'menu',
              'container'       => 'div',
              'container_class' => 'footer-menu',
              'container_id'    => '',
              'menu_class'      => 'footer-menu__wrap',
              'menu_id'         => '',
              'echo'            => true,
              'fallback_cb'     => 'wp_page_menu',
              'before'          => '',
              'after'           => '',
              'link_before'     => '<span>',
              'link_after'      => '</span>',
              'items_wrap'      => '<ul class="footer-menu__wrap">%3$s</ul>',
              'depth'           => 0,
              'walker'          => '',
            ) );
          ?>
          </div>
          <div class="col-md-6">
            <div class="social-icon__list footer__social">
              <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
              <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
              <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
              <a href="#" class="social-icon"><i class="fas fa-globe"></i></a>
              <a href="#" class="social-icon"><i class="fas fa-shopping-cart"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php  get_template_part( 'template-parts/modals' ); ?>
    <!-- speaker_notes_white.svg -->
    <div class="btns-fixed">
      <div class="btns-fixed__btn contact" style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/src/img/chat-btn.jpg');">
        <div class="btns-fixed__notif">Termin buchen</div>
      </div>
      <div class="btns-fixed__btn orange">
        <div class="btns-fixed__notif">Haben Sie Fragen?</div>
      </div>
    </div>
    <div class="book-appoin__overlay"></div>
    <div class="book-appoin">
      <div class="book-appoin__close"></div>
      <div class="book-appoin__avatar"><img src="<?= get_stylesheet_directory_uri(); ?>/src/img/chat-btn.jpg" alt=""></div>
      <div class="book-appoin__name">Erika Mustermann</div>
      <div class="book-appoin__title">Messehostess ggggggggg</div>
      <div class="book-appoin__text">Haben Sie Fragen zum Produkt? Ich stehe Ihnen gerne zur Verfügung. Vereinbaren Sie jetzt ein persönliches Gespräch.</div>
      <button class="btn btn--orange btn--upper btn--sb"><span>Termin buchen <i class="icon icon--contact"></i></span></button>
    </div>


  </div>
</body>

<?php wp_footer(); ?>

</html>
