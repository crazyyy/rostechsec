<?php /* Template Name: FAQ Page Template */ get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>

      <div class="row">
        <div class="col-md-12">

          <h1 class="single-title inner-title"><?php the_field('page_title'); ?></h1>

          <?php if( have_rows('faq_blocks') ): while ( have_rows('faq_blocks') ) : the_row(); ?>
            <h5 class="faq__title"><?php the_sub_field('block_title'); ?></h5>
            <?php if( have_rows('faq_container') ): ?>
              <ul class="faq_container">
                <?php while( have_rows('faq_container') ): the_row(); ?>
                  <li>
                    <span class="question"><span><?php the_sub_field('question'); ?></span></span>
                    <span class="answer"><?php the_sub_field('answer'); ?></span>
                  </li>
                <?php endwhile; ?>
              </ul><!-- faq_container -->
            <?php endif; ?>
          <?php endwhile; endif; ?>

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
