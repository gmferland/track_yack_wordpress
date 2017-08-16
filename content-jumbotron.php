<div class="ty_featured">
  <div class="ty_featured_image">
    <?php if ( has_post_thumbnail() ) {
      the_post_thumbnail('large');
    } else {?>
      <img src="<?php echo get_bloginfo( 'template_directory' );?>/images/ty_default_thumbnail.jpg" />
    <?php } ?>
  </div>
  <a href="<?php the_permalink(); ?>">
    <div class="col-xs-12 ty_featured_caption">
      <h1><?php the_title(); ?></h1>
      <h2>By <?php the_author(); ?></h2>
    </div>
  </a>
</div>