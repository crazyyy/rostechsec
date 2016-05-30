<?php get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>

      <div class="row">
        <div class="col-md-12">

          <h1 class="single-title inner-title"><?php the_title(); ?></h1>
          <?php the_content(); ?>

        </div><!-- col-md-12 -->

        <hr class="col-md-12 content-brake">

        <?php
          $prev = mod_get_adjacent_post('prev', array('post'));
          $next = mod_get_adjacent_post('next', array('post'));
        ?>
        <div class="col-md-3 col-sm-6 col-xs-12 post__paginations">
          <?php if($prev) : ?>
            <a href="<?php echo get_permalink( $prev->ID ); ?>">Предыдущая статья</a>
          <?php endif; ?>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12 col-md-offset-6 post__paginations post__paginations-reverse">
          <?php if($next) : ?>
            <a href="<?php echo get_permalink($next->ID)?>">Следующая статья</a>
          <?php endif; ?>
        </div>

      </div><!-- /.row -->

    </article>
  <?php endwhile; else: ?>
    <article class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
        </div>
      </div><!-- /.row -->
    </article>
  <?php endif; ?>

<?php get_footer(); ?>
