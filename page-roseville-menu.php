<?php get_header(); ?>

<div class="menu-categories">
  <button type="button" class="selected">Appetizer</button>
  <button type="button">Nigiri</button>
</div>

<div class="menu-container">
    <?php

      query_posts("category_name=rosevillemenu&posts_per_page=100");

      if (have_posts()) : while(have_posts()) : the_post(); ?>

      <h1><?php the_title(); ?></h1>

      <?php if(has_post_thumbnail()):?>
        <img src="<?php the_post_thumbnail_url('smallest');?>" class="img-fluid">
      <?php endif;?>

      <p><?php the_content(); ?></p>

      <?php echo '<hr/>'; ?>

    <?php endwhile; endif; ?>

</div>
