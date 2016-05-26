  </section><!-- /section -->
</div><!-- /wrapper -->

<footer role="contentinfo">

  <div class="container">
    <div class="row">

      <?php if ( is_active_sidebar('widgetarea2') ) : ?>
        <?php dynamic_sidebar( 'widgetarea2' ); ?>
      <?php else : ?>
        <div class="col-md-6 footernav footernav-first">
        </div><!-- /.col-md-6 footernav footernav-first -->
      <?php endif; ?>

      <?php if ( is_active_sidebar('widgetarea3') ) : ?>
        <?php dynamic_sidebar( 'widgetarea3' ); ?>
      <?php else : ?>
        <div class="col-md-3 footernav footernav-middle">
        </div><!-- /.col-md-3 footernav footernav-middle -->
      <?php endif; ?>

      <?php if ( is_active_sidebar('widgetarea4') ) : ?>
        <?php dynamic_sidebar( 'widgetarea4' ); ?>
      <?php else : ?>
        <div class="col-md-3 footernav footernav-last">
        </div><!-- /.col-md-3 footernav footernav-last -->
      <?php endif; ?>

      <div class="col-md-12 footer-copywrite">
        <p><span>Профессиональное аварийно-спасательное формирование "РосТехЗащита"</span>    © <?php echo date("Y"); ?> Копирование информации запрещено</p>
      </div><!-- /.col-md-12 footer-copywrite -->

    </div><!-- /.row -->
  </div><!-- /.container -->

</footer><!-- /footer -->

  <?php wp_footer(); ?>

</body>
</html>
