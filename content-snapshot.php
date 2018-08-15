<div class="ty_post_snapshot">
  <?php if ( has_post_thumbnail() ) : ?>
  <div class="hidden-xs post-thumbnail">
    <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail('medium'); ?>
    </a>
  </div>
  <?php endif; ?>
  <div class="post-text">
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <p>
      <?php echo get_the_date(); if ( in_category('featured') ) echo ' by ', get_the_author() ; ?>
    </p>
    <?php the_excerpt(); ?>
  </div>
</div>