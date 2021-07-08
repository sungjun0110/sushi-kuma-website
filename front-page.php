<?php get_header();?>

<div class="slideshow">

  <div class="slides">
    <input type="radio" name="r" id="r1" checked>
    <input type="radio" name="r" id="r2">
    <div class="slide s1">
      <img id="slide1" src="asset/kuma/images/slide1.png" alt="photo" class="responsive">
    </div>
    <div class="slide">
      <img id="slide2" src="asset/kuma/images/slide2.png" alt="photo" class="responsive">
    </div>
  </div>



  <div id="slider-navigation">
    <label for="r1" class="circle checked"></label>
    <label for="r2" class="circle"></label>
  </div>

</div>

<div id="middle-container">
  <div class="locations">

    <h1>Location</h1>

    <div class="location">
      <a href=""><img src="asset/kuma/images/edh.png" alt="location" class="location-img"></a>
      <div class="location-description">
        <div class="text-box"><a href="./find-us">El Dorado Hills</a></div>
        <div class="button-box">
          <button onclick="location.href='https://www.sushikuma.net/menu/edh-menu';">See Menu</button>
          <button onclick="location.href='https://www.google.com/maps/place/Sushi+Kuma/@38.6517115,-121.0703106,17z/data=!3m1!4b1!4m5!3m4!1s0x809afab82e878f91:0x39b030390e0a9828!8m2!3d38.6517073!4d-121.0681219';">Get Directions</button>
        </div>
      </div>
    </div>

    <div class="location">
      <a href=""><img src="asset/kuma/images/roseville.png" alt="location" class="location-img"></a>
      <div class="location-description">
        <div class="text-box"><a href="./find-us">Roseville</a></div>
        <div class="button-box">
          <button onclick="location.href='https://www.sushikuma.net/menu/roseville-menu';">See Menu</button>
          <button onclick="location.href='https://www.google.com/maps/place/Sushi+Kuma/@38.7897955,-121.2869385,17z/data=!3m2!4b1!5s0x809b21ed708291f1:0xad0170a75c63e650!4m5!3m4!1s0x809b21f2a4f76fdf:0xad13893b21ea4548!8m2!3d38.7897913!4d-121.2847498';">Get Directions</button>
        </div>
      </div>
    </div>

  </div>
</div>

<?php get_footer();?>
