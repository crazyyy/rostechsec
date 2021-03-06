<?php get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>

      <div class="row">
        <div class="col-md-12">

          <h1 class="single-title inner-title"><?php _e( 'Page not found', 'wpeasy' ); ?></h1>
          <h2><a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'wpeasy' ); ?></a></h2>

        </div><!-- col-md-12 -->
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
