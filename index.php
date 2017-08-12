<?php get_header(); ?>
  <div class="row no-gutters">
    <div class="col-xs-12 col-md-9 blog-main">
      <?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
				get_template_part( 'content', get_post_format() );
  
			endwhile;?>
      <nav>
        <ul class="pager">
          <li><?php next_posts_link( 'Previous' ); ?></li>
          <li><?php previous_posts_link( 'Next' ); ?></li>
        </ul>
      </nav>
      <?php endif;?>
    </div>
    <?php get_template_part('sidebar', 'social'); ?>
  </div><
<?php get_footer(); ?>