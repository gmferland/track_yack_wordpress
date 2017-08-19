<?php get_header();
  global $post;
  $args = array( 'posts_per_page' => 1, 'category_name' => 'feature' );

  $myposts = get_posts( $args );
  foreach ( $myposts as $post ) : setup_postdata( $post );
    $do_not_duplicate = $post->ID; 
	  get_template_part( 'content-jumbotron', get_post_format() );
  endforeach; 
  wp_reset_postdata();?>
  <div class="container ty_content_home">
    <div class="row">
      <div class="col-sm-6">
        <h2>Daily Takes</h2>
        <hr>
        <?php 
          $args = array( 'posts_per_page' => 6, 'category_name' => 'daily' );
            $myposts = get_posts( $args );
            foreach ( $myposts as $post ) : setup_postdata( $post );
              get_template_part( 'content-snapshot', get_post_format() );
            endforeach;
            wp_reset_postdata();?>
        <a href="<?php $category_id = get_cat_ID( 'daily' ); echo esc_url( get_category_link( $category_id ) ); ?>" class="btn ty_button" role="button">
          See more Daily Takes
        </a>
      </div>
      <div class="col-sm-6">
        <h2>Weekly Dish</h2>
        <hr>
        <?php 
          $args = array( 'posts_per_page' => 6, 'category_name' => 'weekly' );
            $myposts = get_posts( $args );
            foreach ( $myposts as $post ) : setup_postdata( $post );
              get_template_part( 'content-snapshot', get_post_format() );
            endforeach; 
            wp_reset_postdata();?>
        <a href="<?php $category_id = get_cat_ID( 'weekly' ); echo esc_url( get_category_link( $category_id ) ); ?>" class="btn ty_button" role="button">
          See more Weekly Dish
        </a>
      </div>
    </div>
  </div>
  <div class="row no-gutters ty_twitter">
    <div class="col-sm-8 ty_twitter_image">
      <img id="twitter-banner" src="<?php echo get_bloginfo( 'template_directory' );?>/images/ty_default_thumbnail.jpg" />
    </div>
    <div class="col-sm-4">
      <?php get_template_part('sidebar', 'social'); ?>
    </div>
  </div>
  <script>
    jQuery(document).ready(function() {
      var $ = jQuery;
      var $initialImageHeight = $('.ty_featured_image').height();
      function adjustImageContainer() {
        $featuredImage = $('.ty_featured_image img');
        $featuredWrapper = $('.ty_featured_image');
        if ($featuredImage.height() < $initialImageHeight) {
          $featuredWrapper.height($featuredImage.height());
        } else {
          $featuredWrapper.height($initialImageHeight);
        }
        $twitterImage = $('#twitter-banner');
        $('.ty_twitter_timeline').height($twitterImage.height());
      }
      adjustImageContainer();
      $(window).resize(adjustImageContainer);
    });
  </script>
<?php get_footer(); ?>