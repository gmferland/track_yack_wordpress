<?php get_header(); ?>
  <div class="container ty_post">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
      <div class="row">
        <div class="col-xs-12">
          <h1><?php single_cat_title(); ?></h1>
          <h4><?php echo category_description(); ?></h4> 
          <hr>
        </div>
      </div>
      <div class="row">
      <?php 
      global $query_string;
      query_posts( $query_string . '&year=' . date('Y') . '&monthnum=' . date('n') . '&day=' . date('j'));
      if ( have_posts() ) :?>
        <div class="col-sm-4 text-center ty_daily_today">
          <h2>Today:</h2>
        </div>
        <div class="col-sm-8">
          <div class="row">
        <?php while ( have_posts() ) : the_post();
        $do_not_duplicate[] = $post->ID;?>
            <div class="col-xs-12">
              <?php get_template_part( 'content-summary', get_post_format() ); ?>
            </div>
        <?php endwhile; ?>
          </div>
        </div>
      <?php endif;?>
      </div>
      <hr>
      <div class="row">
        <?php 
          query_posts($query_string . '&posts_per_page=' . (6 + count($do_not_duplicate)));
          $count = 0;
          if ( have_posts() ) : while ( have_posts() ) : the_post();
            if (in_array($post->ID, $do_not_duplicate)) continue;?>
              <div class="col-sm-4">
                <?php get_template_part( 'content-summary', get_post_format() ); ?>
              </div>
              <?php if ($count % 3 == 2) {?>
                </div><div class="row">
              <?php } $count++; endwhile; ?>
      </div>
      <div class="col-xs-12 text-center">
        <nav>
          <ul class="pager">
            <li><?php previous_posts_link( 'Previous' ); ?></li>
            <li><?php next_posts_link( 'Next' ); ?></li>
          </ul>
        </nav>
      </div>
          <?php endif;?>
    </div>
  </div>
<?php get_footer(); ?>