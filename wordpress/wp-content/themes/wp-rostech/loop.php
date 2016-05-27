<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class('row looper'); ?>>

    <a rel="nofollow" class="col-md-3 feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
      <?php if ( has_post_thumbnail()) :
        the_post_thumbnail('medium');
      else: ?>
        <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
      <?php endif; ?>
    </a><!-- /post thumbnail -->

    <div class="col-md-9 looper-content">
      <h2 class="inner-title">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
      </h2><!-- /post title -->
      <p><?php wpeExcerpt('wpeExcerpt40'); ?></p>
      <span class="date"><?php the_time('j F Y'); ?> <span class="time"><?php the_time('G:i'); ?></span></span>
    </div><!-- /.col-md-9 looper-content -->

    <hr class="col-md-12">

  </div><!-- /looper -->
<?php endwhile; else: ?>
  <h2 class="title col-md-12"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
<?php endif; ?>
