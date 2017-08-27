<div class="col-xs-12 ty_post_snapshot">
  <div class="col-sm-4 hidden-xs ty_post_snapshot_thumbnail">
    <a href="<?php the_permalink(); ?>">
      <?php if ( has_post_thumbnail() ) {
        the_post_thumbnail('thumbnail');
      } else {?>
        <img height="150" width="150" src="<?php echo get_bloginfo( 'template_directory' );?>/images/bubble_wht.png" />
      <?php } ?>
    </a>
  </div>
  <div class="col-sm-8">
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <p class="blog-post-meta">
      <?php the_date(); ?> by <?php the_author(); ?>
    </p>
    <div class="hidden-xs hidden-sm">
      <?php the_excerpt(); ?>
    </div>
  </div>
</div>