<div class="ty_post_snapshot">
<div class="row" style="display:flex;align-items:center;">
  <?php if ( has_post_thumbnail() ) : ?>
  <div class="hidden-xs col-sm-6 col-md-5 col-lg-4">
    <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail('medium'); ?>
    </a>
  </div>
  <div class="col-sm-6 col-md-7">
  <?php else: ?>
  <div class="col-sm-8 col-sm-offset-2">
  <?php endif; ?>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <p>
      <?php echo get_the_date(); if ( in_category('featured') ) echo ' by ', get_the_author() ; ?>
    </p>
    <?php the_excerpt(); ?>
    <p>Category: <?php echo get_the_category_list(', ') ?></p>
  </div>
</div>
</div>