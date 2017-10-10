<?php get_header(); ?>
  <div class="container ty_post">
    <div class="row">
    <?php $args = array( 'posts_per_page' => 2, 'tag' => 'pow' );
      $recentTakes = get_posts( $args );?>
      <div class="col-xs-12 visible-xs text-center">
        <h2>Performers of the Week</h2>
      </div>
      <?php foreach( $recentTakes as $post ):
        setup_postdata( $post );
        $do_not_duplicate[] = $post->ID;?>
      <div class="col-sm-8">
        <div class="row">
          <div class="col-sm-6">
            <?php get_template_part( 'content-summary', get_post_format() ); ?>
          </div>
        </div>
      </div>
      <?php endforeach;?>
      <div class="hidden-xs col-sm-4 text-center ty_flex_center">
        <h2>Performers of the Week</h2>
      </div>
    </div>
    <div class="row">
    <?php $args = array( 'posts_per_page' => 2, 'tag' => 'coverage' );
      $recentTakes = get_posts( $args );?>
      <div class="col-xs-12 visible-xs text-center">
        <h2>Meet Coverage</h2>
      </div>
      <div class="hidden-xs col-sm-4 text-center ty_flex_center">
        <h2>Meet Coverage</h2>
      </div>
      <?php foreach( $recentTakes as $post ):
        setup_postdata( $post );
        $do_not_duplicate[] = $post->ID;?>
      <div class="col-sm-8">
        <div class="row">
          <div class="col-sm-6">
            <?php get_template_part( 'content-summary', get_post_format() ); ?>
          </div>
        </div>
      </div>
      <?php endforeach;?>
    </div>
    <div class="row">
    <?php 
      $args = array( 'posts_per_page' => 6 + count($do_not_duplicate), 'category_name' => 'weeklyrundown' );
      $catQuery = new WPQuery($args);    
      $count = 0;
      if ( $catQuery->have_posts() ) : while ( $catQuery->have_posts() ) : $catQuery->the_post();
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
<?php get_footer(); ?>