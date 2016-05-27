<?php get_header(); ?>
  <div class="container search-page">
    <div class="row">

      <h1 class=" col-md-12 search-title"><?php echo sprintf( __( '%s Search Results for ', 'wpeasy' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

      <div class="col-md-12 header-search">
        <form method="get" name="searchform" action="<?php bloginfo('url'); ?>/">
          <input type="text" placeholder="Поиск по названию услуги или ЧП" value="" name="s">
          <button class="btn btn-header-search__submitt"></button>
        </form>
        <p>Например:
          <?php if( have_rows('searches', 22) ): ?>
            <?php while( have_rows('searches', 22) ): the_row(); ?>
              <span class="quick"><span class="dotted"><?php the_sub_field('seqarchquery'); ?></span></span>
            <?php endwhile; ?>
          <?php endif; ?>
        </p>
      </div><!-- /.header-search -->

      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class('col-md-12 looper-search'); ?>>
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
          <p><?php wpeExcerpt('wpeExcerpt20'); ?></p>
        </div><!-- /looper -->
      <?php endwhile; else: ?>
        <h2 class="title col-md-12"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
      <?php endif; ?>

      <?php get_template_part('pagination'); ?>
    </div><!-- /.row -->
  </div><!-- /.container -->
<?php get_footer(); ?>
