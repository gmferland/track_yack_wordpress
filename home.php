<?php get_header();
  global $post;
  $args = array( 'posts_per_page' => 1, 'category_name' => 'featured' );

  $myposts = get_posts( $args );
  foreach ( $myposts as $post ) : setup_postdata( $post );
    $do_not_duplicate[] = $post->ID; 
	  get_template_part( 'content-jumbotron', get_post_format() );
  endforeach; 
  wp_reset_postdata();?>
  <div class="ty_container y-padding ty_content_home">
    <div class="ty_recent_posts">
      <div class="text-center">  
        <h1 class="ty_recent_posts_title">Daily Takes</h1>
      </div>
      <?php 
      $args = array( 'posts_per_page' => 3, 'category_name' => 'dailytakes' );
      $recentTakes = get_posts( $args );
      foreach( $recentTakes as $post ):
        setup_postdata( $post );
        $do_not_duplicate[] = $post->ID;
        get_template_part('content-snapshot', get_post_format());
      endforeach; ?>
      <div class="ty_flex_center">
        <a href="<?php echo esc_url( $home_url . '/category/dailytakes/' ); ?>" class="btn ty_button" role="button">
          See more Daily Takes
        </a>
      </div>
      <div class="text-center">  
        <h1 class="ty_recent_posts_title">Recent Posts</h1>
      </div>
      <?php query_posts($query_string . '&posts_per_page=12');
        if(have_posts()): while(have_posts()): the_post();
        if (in_array($post->ID, $do_not_duplicate)) continue;
        get_template_part('content-snapshot', get_post_format());
        endwhile; ?>
      <div class="text-center">
        <nav>
          <ul class="pager">
            <li><?php previous_posts_link( 'Previous' ); ?></li>
            <li><?php next_posts_link( 'Next' ); ?></li>
          </ul>
        </nav>
      </div>
      <?php endif;?>
    </div>
    <div class="social_sidebar">
      <?php dynamic_sidebar( 'home_widget_1' ); ?>
      <div class="ty_twitter_timeline">
        <a class="twitter-timeline"
          href="<?php echo get_option('twitter_url'); ?>"
          data-width="100%"
          data-height="900">
        Tweets by <?php echo get_option('twitter_user'); ?>
        </a>
        <a class="twitter-follow-button" 
          href="<?php echo get_option('twitter_url'); ?>"
          data-size="large"
          data-show-count="false">
          Follow <?php echo get_option('twitter_user'); ?>
        </a>
      </div>
    </div>
  </div>
<?php get_footer(); ?>