<?php get_header();?>
<div class="menu-container">
  <?php if (have_posts()) : while(have_posts()) : the_post();?>
      <h3><?php the_title();?></h3>
        <?php if(has_post_thumbnail()):?>
          <img src="<?php the_post_thumbnail_url('smallest');?>" class="img-fluid">
        <?php endif;?>
        <?php the_content();?>
    <?php endwhile; endif;?>
</div>
