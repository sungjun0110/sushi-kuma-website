<div id="footer">
  <div class="footer-container">
    <a href="http://localhost/wordpress" class="logo"><img src="http://localhost/wordpress/asset/images/kuma-logo-ddd.png"></a>

    <div id="footer-nav">
      <nav>
        <?php
          $args = array(
            'theme_location' => 'footer-menu'
          );
        ?>
        <?php wp_nav_menu( $args ) ?>
      </nav>
    </div>
  </div>
</div>

</body>
