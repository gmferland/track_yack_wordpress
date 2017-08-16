<div class="ty_featured">
  <div class="ty_featured_image">
    <?php if ( has_post_thumbnail() ) {
      the_post_thumbnail('large');
    } else {?>
      <img src="<?php echo get_bloginfo( 'template_directory' );?>/images/ty_default_thumbnail.jpg" />
    <?php } ?>
  </div>
</div>