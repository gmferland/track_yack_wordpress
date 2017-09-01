<div class="ty_featured">
  <div class="ty_featured_image" style="background-image: url(
    <?php if ( has_post_thumbnail() ) {
      the_post_thumbnail_url('large');
    } else {
      echo get_bloginfo( 'template_directory' ) . "/images/ty_default_thumbnail.jpg";
    }?>)">
    <div class="ty_featured_caption">
      <h1><?php the_title(); ?></h1>
      <h2>By <?php the_author(); ?></h2>
      <a class="btn ty_button ty_featured_button" href="<?php the_permalink(); ?>"><h4>Read this article</h4></a>
    </div>
  </div>
</div>