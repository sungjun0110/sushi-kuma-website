<div id="footer">
  <div class="footer-container">
    <a href="https://www.sushikuma.net" class="logo"><img src="http://www.sushikuma.net/asset/kuma/images/kuma-logo-ddd.png"></a>

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
