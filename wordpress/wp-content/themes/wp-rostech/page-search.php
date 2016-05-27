<?php /* Template Name: Search Page Template */ get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('container search-page'); ?>>

      <div class="row">
        <h1 class=" col-md-12 search-title"><?php the_title(); ?></h1>

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
