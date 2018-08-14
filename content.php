<div>
  <?php if ( has_post_thumbnail() ) {
    the_post_thumbnail('large');
    } ?> 
  <?php the_content(); ?>
</div>