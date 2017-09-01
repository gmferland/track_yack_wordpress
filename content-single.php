<div class="blog-post">
	<?php if ( has_post_thumbnail() ) {
		the_post_thumbnail('medium_large');
	} ?>
	<h1 class="blog-post-title"><?php the_title(); ?></h1>
	<h4 class="blog-post-meta"><?php echo get_the_date(); ?> by <?php the_author(); ?></h4>
	<?php the_content(); ?>
	<?php the_tags();?>
</div>