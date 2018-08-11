    <div class="container-fluid ty_footer">
      <div class="row">
        <div class="col-sm-3 ty_footer_section text-center">
          <h5>Search TrackYack.com</h5>
          <?php get_search_form(); ?>
        </div>
        <div class="col-sm-3 ty_footer_section text-center">
          <h5>Browse by season:</h5>
          <ul class="list-unstyled">
            <li>
              <a href="<?php echo esc_url($home_url);?>/tag/cross/">Cross Country</a>
            </li>
            <li>
              <a href="<?php echo esc_url($home_url);?>/tag/indoor/">Indoor</a>
            </li>
            <li>
              <a href="<?php echo esc_url($home_url);?>/tag/outdoor/">Outdoor</a>
            </li>
          </ul>
        </div>
        <div class="col-sm-3 ty_footer_section text-center">
          <h5>Browse by school:</h5>
          <div class="row">
            <div class="col-sm-6">
              <ul class="list-unstyled">
                <li>
                  <a href="<?php echo esc_url($home_url);?>/tag/amherst/">Amherst</a>
                </li>
                <li>
                  <a href="<?php echo esc_url($home_url);?>/tag/bates/">Bates</a>
                </li>
                <li>
                  <a href="<?php echo esc_url($home_url);;?>/tag/bowdoin/">Bowdoin</a>
                </li>
                <li>
                  <a href="<?php echo esc_url($home_url);?>/tag/colby/">Colby</a>
                </li>
                <li>
                  <a href="<?php echo esc_url($home_url);?>/tag/conncollege/">Conn College</a>
                </li>
                <li>
                  <a href="<?php echo esc_url($home_url);?>/tag/hamilton">Hamilton</a>
                </li>
              </ul>
            </div>
            <div class="col-sm-6">
              <ul class="list-unstyled">
                <li>
                  <a href="<?php echo esc_url($home_url);?>/tag/middlebury">Middlebury</a>
                </li>
                <li>
                  <a href="<?php echo esc_url($home_url);?>/tag/trinity">Trinity</a>
                </li>
                <li>
                  <a href="<?php echo esc_url($home_url);?>/tag/tufts">Tufts</a>
                </li>
                <li>
                  <a href="<?php echo esc_url($home_url);?>/tag/wesleyan">Wesleyan</a>
                </li>
                <li>
                  <a href="<?php echo esc_url($home_url);?>/tag/williams">Williams</a>
                </li>
              </ul>
            </div>
          </div>
        </div>  
        <div class="col-sm-3 ty_footer_section text-center">
          <h5>Recent posts:</h5>
          <?php $recentquery = new WP_Query( 'posts_per_page=6' ); ?>
          <ol class="list-unstyled"> 
            <?php while($recentquery->have_posts()) : $recentquery->the_post(); ?>
              <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
            <?php endwhile;
            wp_reset_postdata();?>
          </ol>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 text-center">
          <a href="<?php echo get_option('facebook_url'); ?>"><i class="social fa fa-facebook fa-2x"></i></a>
          <a href="<?php echo get_option('twitter_url'); ?>"><i class="social fa fa-twitter fa-2x"></i></a>
          <a href="<?php echo get_option('instagram_url');?>"><i class="social fa fa-instagram fa-2x"></i></a>
          <a href="mailto:track@trackyack.com"><i class="social fa fa-envelope-o fa-2x"></i></a>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 text-center">
          <div class="ty_footer_text">
            <a href="<?php echo esc_url($home_url);?>/privacy">Privacy Policy</a>
          </div>
          <div class="ty_footer_text">
            <a href="<?php echo esc_url($home_url);?>/terms">Terms and Conditions</a>
          </div>
          <div class="ty_footer_text">Copyright 2017 TrackYack</div>
          <div class="ty_footer_text">All Rights Reserved</div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 text-center">
          <a href="#">Back to top</a>
        </div>
      </div>      
    </div>
    <?php wp_footer(); ?>
  </body>
</html>