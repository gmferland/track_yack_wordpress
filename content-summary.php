<div class="ty_post_summary">
  <div>
    <a href="<?php the_permalink(); ?>">
      <?php if ( has_post_thumbnail() ) {
        the_post_thumbnail('large');
      } ?>
    </a>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <p class="blog-post-meta">
      <?php the_date(); ?> by <?php the_author(); ?>
    </p>
    <?php the_excerpt(); ?>
  </div>
</div>