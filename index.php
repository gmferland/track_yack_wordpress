<?php get_header(); ?>
  <div class="container ty_post">
    <div class="col-xs-12 col-sm-2">
      <?php get_sidebar(); ?>
    </div>
    <div class="col-xs-12 col-sm-7">
      <?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
				get_template_part( 'content-summary', get_post_format() );
  
			endwhile;?>
      <nav>
        <ul class="pager">
          <li><?php next_posts_link( 'Previous' ); ?></li>
          <li><?php previous_posts_link( 'Next' ); ?></li>
        </ul>
      </nav>
      <?php endif;?>
    </div>
  </div>
<?php get_footer(); ?>