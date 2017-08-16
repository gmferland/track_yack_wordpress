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
    <div class="col-sm-9">
      <h2>Recent Posts</h2>
      <hr>
      <div class="row">
        <?php 
          $count=0;
          if ( have_posts() ) : while ( have_posts() ) : the_post();
          if ( $post->ID == $do_not_duplicate ) continue; ?>
          <div class="col-sm-4">
            <?php get_template_part( 'content-snapshot', get_post_format() ); ?>
          </div>
        <?php if ($count % 4 == 2) {?>
          </div><div class="row">
        <?php } $count++; endwhile; endif;?>
      </div>
    </div>
    <div class="col-sm-3">
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
      }
      adjustImageContainer();
      $(window).resize(adjustImageContainer);
    });
  </script>
<?php get_footer(); ?>