<div class="ty_post_summary">
  <div>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <p>
      <?php echo get_the_date(); ?>
    </p>
    <div class="hidden-xs hidden-sm">
      <?php the_excerpt(); ?>
    </div>
  </div>
</div>