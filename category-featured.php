<?php get_header(); ?>
  <div class="container ty_post">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
      <h1><?php single_cat_title(); ?></h1>
      <h4><?php echo category_description(); ?></h4> 
      <?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();
				get_template_part( 'content-snapshot', get_post_format() );
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