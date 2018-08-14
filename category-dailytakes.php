<?php get_header(); ?>
  <div class="ty_container ty_featured">
    <div class="ty_featured_image" style="background-color: #dea74c; padding: 0 30px;">
      <div>
        <div class="row">
          <div class="col-sm-6">
            <div class="ty_daily_today">
              <div class="visible-xs text-right">
                <h1 style="color:#fff;"><?php single_cat_title(); ?></h1>
              </div>
              <div class="hidden-xs">
                <h1 style="color:#333;"><?php single_cat_title(); ?></h1>
                <h4 style="color:#fff;"><?php echo category_description(); ?></h4> 
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="ty_daily_today">
              <div class="row">  
                <?php 
                $args = array( 'posts_per_page' => 3, 'category_name' => 'dailytakes' );
                $recentTakes = get_posts( $args );
                foreach( $recentTakes as $post ):
                  setup_postdata( $post );
                  $do_not_duplicate[] = $post->ID;?>
                    <div class="col-xs-12 ty_daily_header text-right">
                      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                      <p><?php echo get_the_date(); ?></p>
                    </div>
                  <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="ty_container ty_post">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
      <div class="row">
        <?php 
          global $query_string;
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