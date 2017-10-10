<div class="ty_post_snapshot">
  <div>
    <a href="<?php the_permalink(); ?>">
      <?php if ( has_post_thumbnail() ) {
        the_post_thumbnail('large');
      } ?>
    </a>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <p>
      <?php echo get_the_date(); if ( in_category('featured') ) echo 'by', get_the_author() ; ?>
    </p>
    <?php the_excerpt(); ?>
  </div>
</div>