<?php get_header(); ?>
  <div class="ty_container ty_post">
    <div class="col-xs-12 col-sm-3">
      <?php get_sidebar(); ?>
    </div>
    <div class="col-xs-12 col-sm-7">
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