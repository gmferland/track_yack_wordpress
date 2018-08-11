<?php get_header(); ?>
  <div class="ty_container ty_post">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
      <?php 
        if ( have_posts() ) : while ( have_posts() ) : the_post();
          get_template_part( 'content', get_post_format() );
        endwhile; endif; 
      ?>
    </div>
  </div>
<?php get_footer(); ?>