<?php get_header(); ?>
  <div class="row">
    <div class="hidden-xs col-sm-2 col-md-2 col-lg-2">
      <?php get_sidebar(); ?>
    </div>
    <div class="col-xs-9 col-sm-7 col-md-7 col-lg-7">
      <?php 
        if ( have_posts() ) : while ( have_posts() ) : the_post();
          get_template_part( 'content-single', get_post_format() );
        endwhile; 
        the_author_meta( 'description' );
        if ( comments_open() || get_comments_number() ) :
        comments_template();
        endif;
        endif; 
      ?>
    </div>
    <div class="col-xs-12 col-sm-3 col-sm-3 col-md-3 col-lg-3">
      <?php get_template_part('sidebar', 'social'); ?>
    </div>
  </div>
<?php get_footer(); ?>