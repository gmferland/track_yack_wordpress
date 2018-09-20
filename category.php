<?php get_header(); ?>
  <div class="ty_container ty_post">
    <div>
      <div class="col-xs-12 col-sm-3">
        <?php get_sidebar(); ?>
      </div>
      <div class="col-xs-12 col-sm-7">
        <h1><?php single_cat_title(); ?></h1>
        <?php 
        if ( have_posts() ) : while ( have_posts() ) : the_post();
          get_template_part( 'content-feature', get_post_format() );
        endwhile;?>
        <nav>
          <ul class="pager">
            <li><?php next_posts_link( 'Next' ); ?></li>
            <li><?php previous_posts_link( 'Previous' ); ?></li>
          </ul>
        </nav>
        <?php endif;?>
      </div>
    </div>
  </div>
<?php get_footer(); ?>