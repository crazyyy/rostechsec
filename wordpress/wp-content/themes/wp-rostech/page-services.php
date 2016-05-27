<?php /* Template Name: Services Page Template */ get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('container services-page'); ?>>

      <div class="row">
        <h1 class=" col-md-12 services-title"><?php the_title(); ?></h1>

        <?php $posts = get_field('services'); if( $posts ): ?>

          <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
            <?php setup_postdata($post); ?>
              <a class="col-md-3 popular-services" href="<?php the_permalink(); ?>">
                <h5><?php the_post_thumbnail('medium'); ?><span><?php the_title(); ?></span></h5>
                <p><?php wpeExcerpt('wpeExcerpt5'); ?></p>
              </a><!-- /.col-md-3 popular-services -->
            <?php endforeach; ?>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>

        <div class="col-md-12">
          <?php the_content(); ?>
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
