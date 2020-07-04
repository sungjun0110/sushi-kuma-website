<?php get_header(); ?>
<div class="menu-container">
    <?php

      query_posts("category_name=edhmenu&posts_per_page=100");

      if (have_posts()) : while(have_posts()) : the_post(); ?>

      <h1><?php the_title(); ?></h1>
      <p><?php the_content(); ?></p>

      <?php echo '<hr/>'; ?>

    <?php endwhile; endif; ?>
    test
</div>
