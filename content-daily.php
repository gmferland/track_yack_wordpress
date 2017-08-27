<div class="ty_page_content">
  <a href="<?php the_permalink(); ?>">
    <?php if ( has_post_thumbnail() ) {
      the_post_thumbnail('large');
      } ?>
  </a>
    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <h4><?php the_date(); ?></h4>
  <?php the_content(); ?>
</div>