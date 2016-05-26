<?php /* Template Name: Home Page Template */ get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <article class="article-workvectors">
      <div class="container">
        <div class="row">
          <h4 class="col-md-12 article-workvectors__title">Направление нашей деятельности</h4>

          <a class="col-md-4 article-workvectors__item article-workvectors__item-1" href="">
            <h5>Аварийно-спасательные работы</h5>
          </a><!-- /.col-md-4 article-workvectors__item -->

          <a class="col-md-4 article-workvectors__item article-workvectors__item-2" href="">
            <h5>Разработка паспортов и планов</h5>
          </a><!-- /.col-md-4 article-workvectors__item -->

          <a class="col-md-4 article-workvectors__item article-workvectors__item-3" href="">
            <h5>Обслуживание опасных производственных объектов</h5>
          </a><!-- /.col-md-4 article-workvectors__item -->

        </div><!-- /.row -->
      </div><!-- /.container -->
    </article><!-- /.article-workvectors -->

    <article class="article__popular-services">
      <div class="container">
        <div class="row">

          <a class="col-md-3 popular-services" href="">
            <h5><img src="<?php echo get_template_directory_uri(); ?>/img/base64/popular-services-1.png" alt="">Зачистка резервуаров</h5>
            <p>Основной задачей ПАСФ "РосТехЗащита" является внедрение комплексной </p>
          </a><!-- /.col-md-3 popular-services -->

          <a class="col-md-3 popular-services" href="">
            <h5><img src="<?php echo get_template_directory_uri(); ?>/img/base64/popular-services-2.png" alt="">Зачистка резервуаров</h5>
            <p>Основной задачей ПАСФ "РосТехЗащита" является внедрение комплексной </p>
          </a><!-- /.col-md-3 popular-services -->

          <a class="col-md-3 popular-services" href="">
            <h5><img src="<?php echo get_template_directory_uri(); ?>/img/base64/popular-services-3.png" alt="">Зачистка резервуаров</h5>
            <p>Основной задачей ПАСФ "РосТехЗащита" является внедрение комплексной </p>
          </a><!-- /.col-md-3 popular-services -->

          <a class="col-md-3 popular-services" href="">
            <h5><img src="<?php echo get_template_directory_uri(); ?>/img/base64/popular-services-4.png" alt="">Зачистка резервуаров</h5>
            <p>Основной задачей ПАСФ "РосТехЗащита" является внедрение комплексной </p>
          </a><!-- /.col-md-3 popular-services -->

          <a class="col-md-3 popular-services" href="">
            <h5><img src="<?php echo get_template_directory_uri(); ?>/img/base64/popular-services-5.png" alt="">Зачистка резервуаров</h5>
            <p>Основной задачей ПАСФ "РосТехЗащита" является внедрение комплексной </p>
          </a><!-- /.col-md-3 popular-services -->

          <a class="col-md-3 popular-services" href="">
            <h5><img src="<?php echo get_template_directory_uri(); ?>/img/base64/popular-services-6.png" alt="">Зачистка резервуаров</h5>
            <p>Основной задачей ПАСФ "РосТехЗащита" является внедрение комплексной </p>
          </a><!-- /.col-md-3 popular-services -->

          <a class="col-md-3 popular-services" href="">
            <h5><img src="<?php echo get_template_directory_uri(); ?>/img/base64/popular-services-7.png" alt="">Зачистка резервуаров</h5>
            <p>Основной задачей ПАСФ "РосТехЗащита" является внедрение комплексной</p>
          </a><!-- /.col-md-3 popular-services -->

          <a class="col-md-3 popular-services" href="">
            <h5><img src="<?php echo get_template_directory_uri(); ?>/img/base64/popular-services-8.png" alt="">Зачистка резервуаров</h5>
            <p>Основной задачей ПАСФ "РосТехЗащита" является внедрение комплексной</p>
          </a><!-- /.col-md-3 popular-services -->

          <a href="" class="btn btn-blue popular-services__more">Все услуги</a>

        </div><!-- /.row -->
      </div><!-- /.container -->
    </article><!-- /.article__popular-services -->

    <article class="article__content">
      <div class="container">
        <div class="row">

          <h2 class="col-md-12 content_title"><?php the_title(); ?></h2>
          <div class="col-md-4 article__content-thumbs">
            <?php if ( has_post_thumbnail()) :?>
              <?php the_post_thumbnail(); // Fullsize image for the single post ?>
            <?php endif; ?><!-- /post thumbnail -->
          </div><!-- article__content-thumbs -->
          <div class="col-md-8 article__content-text">
            <?php the_content(); ?>
          </div><!-- /.col-md-8 article__content-text -->

        </div><!-- /.row -->
      </div><!-- /.container -->
    </article><!-- /.article__content -->

    <article class="article__popnews">
      <div class="container">
        <div class="row">

          <div class="col-md-8 article__popnews-popular">
            <h4 class="article__popnews-title">Популярная информация</h4>
            <div class="article__popnews-popitem">
              <h5>Заголовок для первого горизонтального баннера </h5>
              <p>Профессиональное аварийно - спасательное формирование "РосТехЗащита" предлагает Вам уникальные комплексные услуги в сфере экологической и промышленной безопасности объектов нефтегазового комплекса, <a href="" class="popnews-more">подробнее... </a></p>
              <span class="date">21 03 2016</span><span class="time">18:06</span>
            </div><!-- /.article__popnews-popitem -->

            <div class="article__popnews-popitem">
              <h5>Заголовок для первого горизонтального баннера </h5>
              <p>Профессиональное аварийно - спасательное формирование "РосТехЗащита" предлагает Вам уникальные комплексные услуги в сфере экологической и промышленной безопасности объектов нефтегазового комплекса, <a href="" class="popnews-more">подробнее... </a></p>
              <span class="date">21 03 2016</span><span class="time">18:06</span>
            </div><!-- /.article__popnews-popitem -->

            <div class="article__popnews-popitem">
              <h5>Заголовок для первого горизонтального баннера </h5>
              <p>Профессиональное аварийно - спасательное формирование "РосТехЗащита" предлагает Вам уникальные комплексные услуги в сфере экологической и промышленной безопасности объектов нефтегазового комплекса, <a href="" class="popnews-more">подробнее... </a></p>
              <span class="date">21 03 2016</span><span class="time">18:06</span>
            </div><!-- /.article__popnews-popitem -->

            <a href="" class="article__popnews-more">Смотреть еще...</a>

          </div><!-- /.col-md-8 article__popnews-popular -->

          <div class="col-md-4 article__popnews-news">
            <h4 class="article__popnews-title">Новости</h4>

            <?php query_posts("showposts=3&cat=1"); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

              <div class="article__popnews-newitem">
                <h5><?php the_title(); ?></h5>
                <div class="article__popnews-newitem-text">
                  <?php wpeExcerpt('wpeExcerpt10'); ?>
                </div><!-- article__popnews-newitem-text -->
                <span class="date"><?php the_time('d m Y'); ?></span><span class="time"><?php the_time('G:i'); ?></span>
              </div><!-- /.article__popnews-newitem -->

            <?php endwhile; endif; ?>
            <?php wp_reset_query(); ?>

            <a href="" class="article__popnews-more">Смотреть еще...</a>

          </div><!-- /.col-md-4 article__popnews-news -->

        </div><!-- /.row -->
      </div><!-- /.container -->
    </article><!-- /.article__popnews -->

  <?php endwhile; else: // If 404 page error ?>
    <article>
      <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
    </article>
  <?php endif; ?>

<?php get_footer(); ?>
