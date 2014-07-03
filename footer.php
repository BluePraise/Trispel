<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 */
?>

  </div><!-- #main -->

    <footer id="colophon" class="site-footer" role="contentinfo">
         <div class="footer-info copyright">
          <span>Copyright <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Email"><?php echo bloginfo();?> </a> <?php echo date('Y'); ?>.</span>
          <span>Deze site is gebouwd door <a href="http://mayconnect.org" alt="Magalie Linda Website">Magalie Linda</a>.</span>
        </div> <!--end footerinfo -->
        <div class="footer-info social">
          <span class="icon-facebook facebook"><a href="http://twitter.com"></a></span>
          <span class="icon-googleplus google"><a href="http://twitter.com"></a></span>
          <span class="icon-twitter twitter"><a href="http://twitter.com"></a></span>
        </div> <!--end footerinfo -->
    </footer><!-- #colophon -->
    </div><!-- #page -->

  <?php wp_footer(); ?>
</body>
</html>

