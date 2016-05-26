<?php get_header(); ?>

  <div class="container">
    <div class="row">
      <h1 class="col-md-12 cat-title"><?php _e( 'Latest Posts', 'wpeasy' ); ?></h1>
      <div class="col-md-12 loop-container">
        <?php get_template_part('loop'); ?>
      </div><!-- loop-container -->
      <?php get_template_part('pagination'); ?>
    </div><!-- /.row -->
  </div><!-- /.container -->

<?php get_footer(); ?>
