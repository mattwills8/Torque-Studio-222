<footer id="footer">

  <div class="row footer-content-wrapper" >

    <div class="col1 col3-tablet col4-desktop s222-footer-col footer-copy-tablet" >
      <?php get_sidebar( 'footer-col-1' ); ?>
    </div>

    <div class="col1 col3-tablet col4-desktop s222-footer-col body-white footer-copy-tablet" >
      <?php get_sidebar( 'footer-col-2' ); ?>

      <div class="show-tablet">
        <?php get_sidebar( 'footer-col-3' ); ?>
      </div>
    </div>

    <div class="col1 col3-tablet col4-desktop hide-tablet s222-footer-col body-white footer-copy-tablet" >
      <?php get_template_part( 'sidebar-footer-col-3' ); ?>
    </div>

    <div class="col1 col3-tablet col4-desktop s222-footer-col footer-copy-tablet" >
      <?php get_sidebar( 'footer-col-4' ); ?>
    </div>

  </div>

</footer>
