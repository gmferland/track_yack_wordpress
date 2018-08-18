<div class="ty_container ty_featured">
  <div class="ty_featured_image" style="background-image: url(
    <?php if ( has_post_thumbnail() ) {
      the_post_thumbnail_url('large');
    } else {
      echo get_bloginfo( 'template_directory' ) . "/images/ty_default_thumbnail.jpg";
    }?>)">
    <div class="ty_featured_caption">
      <h1>
        <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a>
      </h1>
    </div>
  </div>
</div>