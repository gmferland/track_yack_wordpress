<?php get_header(); ?>
  <div class="ty_container ty_post">
    <div>
      <div class="col-xs-12 col-sm-3">
        <?php get_sidebar(); ?>
      </div>
      <div class="col-xs-12 col-sm-7 ty_search">
        <h2><?php printf( __( 'Search results for %s' ), '<strong>' . get_search_query() . '</strong>'); ?></h2>
        <hr>
        <?php 
          if ( have_posts() ) : while ( have_posts() ) : the_post();
            get_template_part( 'content-summary', get_post_format() );
          endwhile; else : ?>
            <p>Sorry, nothing matched your search terms. Please try again.</p>
        <?php endif; ?>
      </div>
    </div>
  </div>
<?php get_footer(); ?>