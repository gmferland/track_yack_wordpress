<?php get_header(); ?>
<div class="container ty_post">
    <div class="col-xs-12 col-sm-2">
      <?php get_sidebar(); ?>
    </div>
    <div class="col-xs-12 col-sm-7">
      <?php 
        if ( have_posts() ) : while ( have_posts() ) : the_post();
          get_template_part( 'content', get_post_format() );
        endwhile; endif; 
      ?>
    </div>
  </div>
<?php get_footer(); ?>