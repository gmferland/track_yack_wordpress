<?php get_header(); ?>
  <div class="ty_container ty_post">
    <div>
      <div class="col-xs-12 col-sm-3">
        <?php get_sidebar(); ?>
      </div>
      <div class="col-xs-12 col-sm-7">
        <?php 
          if ( have_posts() ) : while ( have_posts() ) : the_post();
            get_template_part( 'content-single', get_post_format() ); ?>
          <nav>
            <ul class="pager">
              <li><?php next_post_link( '%link', 'Newer', TRUE ); ?></li>
              <li><?php previous_post_link( '%link', 'Older', TRUE ); ?></li>
            </ul>
          </nav>
          <?php endwhile; 
          the_author_meta( 'description' );
          endif; ?>
      </div>
    </div>
  </div>
<?php get_footer(); ?>