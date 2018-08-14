<?php get_header(); ?>
  <div class="ty_container ty_post">
    <div>
      <h1><?php single_cat_title(); ?></h1>
      <h4><?php echo category_description(); ?></h4> 
      <?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();
				get_template_part( 'content-feature', get_post_format() );
			endwhile;?>
      <nav>
        <ul class="pager">
          <li><?php previous_posts_link( 'Previous' ); ?></li>  
          <li><?php next_posts_link( 'Next' ); ?></li>
        </ul>
      </nav>
      <?php endif;?>
    </div>
  </div>
<?php get_footer(); ?>