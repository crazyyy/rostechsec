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
          <button class="header-gosearch__button" title="Поиск"></button>
        </div><!-- /.header-gosearch -->

        <div class="header-callback">
          <button class="header-callback__button">Обратный звонок</button>
        </div><!-- /.header-callback -->

        <h1 class="col-md-12 header__title">Расширенный статичый <a href="">заголовок</a></h1>

        <div class="col-md-12 header-slider">
          <h3 class="header-slider__title">зАГОЛОВОК ТЕКСТА НА СЛАЙДЕРЕ</h3>
          <p class="header-slider__description">Подпись к заголовку. Пример: Портал РосТехЗащита поздравляет вас с Пасхой! Желаем вам счастья, здоровья и благополучия!</p>
          <a href="#" class="btn header-slider__more">Подробнее</a>
        </div><!-- /.col-md-12 header-slider -->

        <div class="col-md-12 header-search">
          <form action="">
            <input type="text" placeholder="Поиск по названию услуги или ЧП">
            <button class="btn btn-header-search__submitt"></button>
          </form>
          <p>Например: <span class="quick"><span class="dotted">Зачистка резервуаров</span></span><span class="quick"><span class="dotted">ПМЛЛПА</span></span><span class="quick"><span class="dotted">ПМЛЛПА</span></span><span class="quick"><span class="dotted">Документы и нормативные акты</span></span><span class="quick"><span class="dotted">Законы</span></span></p>
        </div><!-- /.header-search -->

      </div><!-- row -->
    </div><!-- /.container -->

    <div class="header-slider__fullsize">

    </div><!-- /.header-slider__fullsize -->

  </header><!-- /header -->

  <section role="main">
