<?php get_header();
  global $post;
  $args = array( 'posts_per_page' => 1, 'category_name' => 'featured' );

  $myposts = get_posts( $args );
  foreach ( $myposts as $post ) : setup_postdata( $post );
    $do_not_duplicate = $post->ID; 
	  get_template_part( 'content-jumbotron', get_post_format() );
  endforeach; 
  wp_reset_postdata();?>
  <div class="container-fluid ty_content_home">
    <div class="row">
      <div class="col-sm-3 col-sm-offset-1 ty_recent_posts">
        <h1 class="ty_recent_posts_title">
          <a href="<?php echo esc_url( $home_url . '/category/dailytakes/' ); ?>">
            Daily Takes
          </a>
        </h1>
        <img src="<?php echo esc_url( $theme_url );?>/images/bubble_wht_rev.png" />
        <img src="<?php echo esc_url( $theme_url );?>/images/bubble_wht.png" />
      </div>
      <div class="col-sm-8">
        <div id="dailyTakes" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
          <?php 
          $args = array( 'posts_per_page' => 6, 'category_name' => 'dailytakes' );
          $myposts = get_posts( $args );
          $count=0;
          foreach ( $myposts as $post ):?>
            <li data-target="#dailyTakes" data-slide-to="<?php echo $count; ?>" class=<?php if ($count == 0): echo("active"); endif; ?>></li>
          <?php $count++; endforeach; ?>
		  <li data-target="#dailyTakes" data-slide-to="6"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
          <?php 
          $count = 0;
          foreach ( $myposts as $post ) : setup_postdata( $post );?>
          <?php if ($count == 0): ?>
            <div class="item active">
          <?php else: ?>
            <div class="item">
          <?php endif; ?>
              <div class="container">
                <div class="carousel-caption">
                  <?php get_template_part( 'content-summary', get_post_format() ); ?>
                </div>
              </div>
            </div>
          <?php $count++; endforeach;
          wp_reset_postdata();?>
            <div class="item">
              <div class="container">
                <div class="carousel-caption">
                  <a href="<?php echo esc_url( $home_url . '/category/dailytakes/' ); ?>" class="btn ty_button ty_recent_posts_button" role="button">
                    See more Daily Takes
                  </a>
                </div>
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#dailyTakes" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#dailyTakes" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-10 col-xs-offset-1 ty_recent_posts">
        <h1 class="ty_recent_posts_title">
          <a href="<?php echo esc_url( $home_url . '/category/weeklyrundown/' ); ?>">
            Weekly Rundown
          </a>
        </h1>
        <a href="<?php echo esc_url( $home_url . '/category/weeklyrundown/' ); ?>" class="btn ty_button ty_recent_posts_button" role="button">
          See more Weekly Rundown
        </a>
        <hr>
        <div class="row">
        <?php 
        global $query_string;
        query_posts( $query_string . '&category_name=weeklyrundown&tag=pow&posts_per_page=2');
        if ( have_posts() ) :?>
          <div class="col-sm-8">
            <div class="row">
          <?php while ( have_posts() ) : the_post();?>
              <div class="col-sm-6">
                <?php get_template_part( 'content-summary', get_post_format() ); ?>
              </div>
          <?php endwhile; ?>
            </div>
          </div>
          <div class="col-sm-4 text-center ty_daily_today">
            <h2>Performers of the Week</h2>
          </div>
        <?php endif;?>
        </div>
        <div class="row">
        <?php 
        global $query_string;
        query_posts( $query_string . '&category_name=weeklyrundown&tag=coverage&posts_per_page=2');
        if ( have_posts() ) :?>
          <div class="col-sm-4 text-center ty_daily_today">
            <h2>Meet Coverage</h2>
          </div>
          <div class="col-sm-8">
            <div class="row">
          <?php while ( have_posts() ) : the_post();?>
              <div class="col-sm-6">
                <?php get_template_part( 'content-summary', get_post_format() ); ?>
              </div>
          <?php endwhile; ?>
            </div>
          </div>
        <?php endif;?>
        </div>
      </div>
    </div>
  </div>
  <div class="row ty_twitter">
    <div class="col-sm-8 ty_twitter_image">
      <img id="twitter-banner" src="<?php echo esc_url($theme_url);?>/images/twitter-banner.jpg" />
      <div class="ty_twitter_overlay">
        <h2>Follow TrackYack on twitter for the latest NESCAC XC/TF news and results!</h2>
        <a class="twitter-follow-button" 
          href="<?php echo get_option('twitter_url'); ?>"
          data-size="large"
          data-show-count="false">
          Follow <?php echo get_option('twitter_user'); ?>
        </a>
      </div>
    </div>
    <div class="hidden-xs col-sm-4 ty_twitter_timeline">
      <a class="twitter-timeline"
        href="<?php echo get_option('twitter_url'); ?>"
        data-width="100%"
        data-height="100%">
      Tweets by <?php echo get_option('twitter_user'); ?>
      </a>
    </div>
  </div>
  <script>
    jQuery(document).ready(function() {
      var $ = jQuery;
      function adjustTwitterContainer() {
        $twitterImage = $('#twitter-banner');
        $twitterTimeline = $('.ty_twitter_timeline');
        if ($twitterImage && $twitterTimeline) $twitterTimeline.height($twitterImage.height());
      }
      adjustTwitterContainer();
      $(window).resize(adjustTwitterContainer);
    });
  </script>
<?php get_footer(); ?>