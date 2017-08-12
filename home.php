<?php get_header(); ?>
  <div class="ty_featured">
    <? query_posts( 'cat=features&posts_per_page=1' );
    if ( have_posts() ) : while ( have_posts() ) : the_post(); $do_not_duplicate = $post->ID;
    get_template_part( 'content-jumbotron', get_post_format() );
    endwhile; endif; wp_reset_query();?>
  </div>
  <div class="ty_content_home">
    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
      <h2>Recent Posts</h2>
      <hr>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
      if ( $post->ID == $do_not_duplicate ) continue;
      get_template_part( 'content-snapshot', get_post_format() );
      endwhile; endif;?>
    </div>
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
    <?php get_template_part('sidebar', 'social'); ?>
    </div>
  </div>
<?php get_footer(); ?>