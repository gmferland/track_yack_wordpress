<div class="ty_post_snapshot">
  <div class="row">
    <div class="hidden-xs col-sm-6 col-md-5 col-lg-4">
      <a href="<?php the_permalink(); ?>">
        <?php if ( has_post_thumbnail() ) {
          the_post_thumbnail('medium');
        } ?>
      </a>
    </div>
    <div class="col-sm-6 col-md-7">
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <p>
        <?php echo get_the_date(); if ( in_category('featured') ) echo 'by', get_the_author() ; ?>
      </p>
      <?php the_excerpt(); ?>
    </div>
  </div>
</div>