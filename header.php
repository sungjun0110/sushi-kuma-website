<!DOCTYPE html>
<html>
  <head>
    <?php wp_head();?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-http-equiv="X-YA-Compatible" content="ie=edge">
    <meta name="keywords" content="Sushi Kuma">
    <meta name="description" content="Quality Sushi">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  </head>

  <body <?php body_class();?>>

    <header>

      <div class="header">
        <div class="header-left">
          <a href="" class="logo"><img src="http://localhost/wordpress/asset/images/kuma-logo.png"></a>
        </div>

        <div class="menu-toggle"></div>

        <div class="header-right">
          <nav class="main-nav">
            <?php
              $args = array(
                'theme_location' => 'top-menu'
              );
            ?>
            <?php wp_nav_menu( $args ) ?>
          </nav>
        </div>
        <div class="clearfix"></div>
      </div>

    </header>
