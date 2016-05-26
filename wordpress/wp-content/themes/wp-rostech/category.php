<?php get_header(); ?>

  <div class="container">
    <div class="row">
      <h1 class="col-md-12 cat-title"><?php the_category(', '); ?></h1>
      <div class="col-md-12 loop-container">
        <?php get_template_part('loop'); ?>
      </div><!-- loop-container -->
      <?php get_template_part('pagination'); ?>
    </div><!-- /.row -->
  </div><!-- /.container -->

<?php get_footer(); ?>
