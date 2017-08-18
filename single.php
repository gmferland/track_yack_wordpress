<?php get_header(); ?>
  <div class="container ty_post">
    <div class="col-xs-12 col-sm-2">
      <?php get_sidebar(); ?>
    </div>
    <div class="col-xs-12 col-sm-7">
      <?php 
        if ( have_posts() ) : while ( have_posts() ) : the_post();
          get_template_part( 'content-single', get_post_format() );
        endwhile; 
        the_author_meta( 'description' );
        endif; 
      ?>
    </div>
    <nav>
      <ul class="pager">
        <li><?php next_posts_link( 'Previous' ); ?></li>
        <li><?php previous_posts_link( 'Next' ); ?></li>
      </ul>
    </nav>
  </div>
<?php get_footer(); ?>