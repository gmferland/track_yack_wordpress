<div class="blog-post">
	<h1 class="blog-post-title"><?php the_title(); ?></h1>
	<?php if ( has_post_thumbnail() ) {
		the_post_thumbnail('medium_large');
	} ?>
	<h4 class="blog-post-meta"><?php the_date(); ?> by <?php the_author(); ?></h4>
  <?php the_content(); ?>
</div>