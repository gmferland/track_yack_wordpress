<?php get_header(); ?>
  <div class="col-sm-12">
    <div class="hidden-xs col-sm-2 col-md-2 col-lg-2">
      <?php get_sidebar() ?>
    </div>
    <div class="col-xs-9 col-sm-7 col-md-7 col-lg-7">
    <?php 

      if ( have_posts() ) : while ( have_posts() ) : the_post();
  
        get_template_part( 'content', get_post_format() );

      endwhile; endif; 
    ?>
    </div>
    <div class="col-xs-12 col-sm-3 col-sm-3 col-md-3 col-lg-3">
    <?php get_template_part('sidebar', 'social') ?>
    </div>
  </div>
<?php get_footer(); ?>