<div class="ty_page_content">
  <?php if ( has_post_thumbnail() ) {
    the_post_thumbnail('large');
    } ?> 
	<h1><?php the_title(); ?></h1>
  <?php the_content(); ?>
</div>