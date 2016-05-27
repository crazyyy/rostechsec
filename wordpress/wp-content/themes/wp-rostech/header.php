<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/selectivizr.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/respond.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- wrapper -->
<div class="wrapper">
  <header role="banner">
    <div class="container">
      <div class="row">

        <div class="logo">
          <?php if ( is_front_page() && is_home() ){ } else { ?>
            <a href="<?php echo home_url(); ?>">
              <?php  } ?>
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
              <?php if ( is_front_page() && is_home() ){
              } else { ?>
            </a>
          <?php } ?>
        </div><!-- /logo -->

        <nav class="headnav-container" role="navigation">
          <?php wpeHeadNav(); ?>
        </nav><!-- /.headnav-container -->

        <div class="header-gosearch">
          <a href="<?php echo home_url(); ?>/search" class="header-gosearch__button" title="Поиск"></a>
        </div><!-- /.header-gosearch -->

        <div class="header-callback">
          <button class="header-callback__button">Обратный звонок</button>
        </div><!-- /.header-callback -->

        <?php if ( is_page_template('front-page.php') ) { ?>

        <h1 class="col-md-12 header__title"><?php the_field('hometitle'); ?></h1>

        <div class="col-md-12 header-slider">
          <?php if( have_rows('slider', 22) ): ?>
            <?php while( have_rows('slider', 22) ): the_row(); ?>
              <div class="header-slider__item">
                <h3 class="header-slider__title"><?php the_sub_field('slider_title'); ?></h3>
                <p class="header-slider__description"><?php the_sub_field('slider_description'); ?></p>
                <a href="<?php the_sub_field('slider_link'); ?>" class="btn header-slider__more">Подробнее</a>
              </div><!-- /.header-slider__item -->
            <?php endwhile; ?>
          <?php endif; ?>
        </div><!-- /.col-md-12 header-slider -->

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

        <?php } else { ?>
          <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
        <?php } ?>

      </div><!-- row -->
    </div><!-- /.container -->

    <?php if ( is_page_template('front-page.php') ) { ?>
      <div class="header-slider__fullsize">
        <?php if( have_rows('slider', 22) ): ?>
          <?php while( have_rows('slider', 22) ): the_row(); ?>
            <?php $image = get_sub_field('image'); if( !empty($image) ): ?>
              <div class="header-slider__fullsize-item" style="background-image: url(<?php echo $image['url']; ?>);"></div>
            <?php endif; ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </div><!-- /.header-slider__fullsize -->

    </div>

    <?php } ?>

  </header><!-- /header -->

  <section role="main">

