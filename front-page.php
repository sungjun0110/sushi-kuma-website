<?php get_header();?>

<div class="slideshow">
  <div class="slides">
    <input type="radio" name="r" id="r1" checked>
    <input type="radio" name="r" id="r2">

    <div class="slide s1">
      <img id="slide1" src="asset/images/slide1.png" alt="photo" class="responsive">
    </div>
    <div class="slide">
      <img id="slide2" src="asset/images/slide2.png" alt="photo" class="responsive">
    </div>
  </div>



  <div id="slider-navigation">
    <label for="r1" class="bar checked"></label>
    <label for="r2" class="bar"></label>
  </div>

</div>

<div id="middle-container">
  <div class="locations">

    <h1>Location</h1>

    <div class="location">
      <a href=""><img src="asset/images/edh.png" alt="location" class="location-img"></a>
      <div class="location-description">
        <div class="text-box"><a href="./find-us">El Dorado Hills</a></div>
        <div class="button-box">
          <button>See Menu</button>
          <button>Get Directions</button>
        </div>
      </div>
    </div>

    <div class="location">
      <a href=""><img src="asset/images/roseville.png" alt="location" class="location-img"></a>
      <div class="location-description">
        <div class="text-box"><a href="./find-us">Roseville</a></div>
        <div class="button-box">
          <button>See Menu</button>
          <button>Get Directions</button>
        </div>
      </div>
    </div>

  </div>
</div>

<?php get_footer();?>

</body>
