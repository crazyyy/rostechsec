  </section><!-- /section -->
</div><!-- /wrapper -->

<footer role="contentinfo">

  <div class="container">
    <div class="row">

      <?php if ( is_active_sidebar('widgetarea2') ) : ?>
        <?php dynamic_sidebar( 'widgetarea2' ); ?>
      <?php else : ?>
        <div class="col-md-6 footernav footernav-first">
        </div><!-- /.col-md-6 footernav footernav-first -->
      <?php endif; ?>

      <?php if ( is_active_sidebar('widgetarea3') ) : ?>
        <?php dynamic_sidebar( 'widgetarea3' ); ?>
      <?php else : ?>
        <div class="col-md-3 footernav footernav-middle">
        </div><!-- /.col-md-3 footernav footernav-middle -->
      <?php endif; ?>

      <?php if ( is_active_sidebar('widgetarea4') ) : ?>
        <?php dynamic_sidebar( 'widgetarea4' ); ?>
      <?php else : ?>
        <div class="col-md-3 footernav footernav-last">
        </div><!-- /.col-md-3 footernav footernav-last -->
      <?php endif; ?>

      <div class="col-md-12 footer-copywrite">
        <p><span>Профессиональное аварийно-спасательное формирование "РосТехЗащита"</span>    © <?php echo date("Y"); ?> Копирование информации запрещено</p>
      </div><!-- /.col-md-12 footer-copywrite -->

    </div><!-- /.row -->
  </div><!-- /.container -->

</footer><!-- /footer -->

<div class="vmodal-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-8 vmodal">
        <h6>Обратный звонок</h6>
        <form action="">
          <input type="text" placeholder="Ваше имя">
          <input type="text" placeholder="+7 (___)___-__-__">
          <textarea placeholder="Коментарий"></textarea>
          <button>ОСТАВИТЬ ЗАЯВКУ</button>
        </form>
        <span class="close"></span>
      </div>
    </div><!-- /.row -->
  </div><!-- /.container -->
</div><!-- vmodal-bg -->

<div class="header-subnavi header-subnavi-first">
  <div class="container">
    <div class="row">

      <?php if( have_rows('submenu_1', 22) ): ?>
        <?php while( have_rows('submenu_1', 22) ): the_row(); ?>
          <div class="col-md-4">
            <h6 class="header-subnavi__title"><?php the_sub_field('block_title'); ?></h6>
            <?php $posts = get_sub_field('submenus'); if( $posts ): ?>
              <ul>
                <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                  <?php setup_postdata($post); ?>
                  <li><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?><span><?php the_title(); ?></span></a></li>
                  <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
              </ul>
            <?php endif; ?>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>

    </div><!-- /.row -->
  </div><!-- /.container -->
</div><!-- /.header-subnavi header-subnavi-first -->

<div class="header-subnavi header-subnavi-second">
  <div class="container">
    <div class="row">

      <?php if( have_rows('submenu_2', 22) ): ?>
        <?php while( have_rows('submenu_2', 22) ): the_row(); ?>
          <div class="col-md-4">
            <h6 class="header-subnavi__title"><?php the_sub_field('block_title'); ?></h6>
            <?php $posts = get_sub_field('submenus'); if( $posts ): ?>
              <ul>
                <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                  <?php setup_postdata($post); ?>
                  <li><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?><span><?php the_title(); ?></span></a></li>
                  <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
              </ul>
            <?php endif; ?>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>

    </div><!-- /.row -->
  </div><!-- /.container -->
</div><!-- /.header-subnavi header-subnavi-second -->

<div class="header-subnavi header-subnavi-third">
  <div class="container">
    <div class="row">

      <?php if( have_rows('submenu_3', 22) ): ?>
        <?php while( have_rows('submenu_3', 22) ): the_row(); ?>
          <div class="col-md-4">
            <h6 class="header-subnavi__title"><?php the_sub_field('block_title'); ?></h6>
            <?php $posts = get_sub_field('submenus'); if( $posts ): ?>
              <ul>
                <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                  <?php setup_postdata($post); ?>
                  <li><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?><span><?php the_title(); ?></span></a></li>
                  <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
              </ul>
            <?php endif; ?>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>

    </div><!-- /.row -->
  </div><!-- /.container -->
</div><!-- /.header-subnavi header-subnavi-third -->


  <?php wp_footer(); ?>

</body>
</html>
