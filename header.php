<!DOCTYPE html>
<html>
  <head>
    <?php wp_head();?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta charset="utf-8">
    <meta http-http-equiv="X-YA-Compatible" content="ie=edge">
    <title>Sushi Kuma | El Dorado Hills & Roseville</title>
    <meta name="keywords" content="Sushi Kuma, Sushi, japanese, japanse restaurant, sushi retaurant, roseville, el dorado hills">
    <meta name="description" content="We provide high quality sushi.">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  </head>

  <body <?php body_class();?>>

    <header>

      <div id="header">
        <div class="header-container">
          <div class="header-left">
            <a href="http://www.sushikuma.net" class="logo"><img src="http://www.sushikuma.net/asset/kuma/images/kuma-logo.png"></a>
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
      </div>

    </header>
