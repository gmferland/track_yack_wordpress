    <div class="ty_footer">
      <div class="ty_container x-padding">
        <div>
          <div class="col-sm-5 ty_footer_section">
            <div class="row">
              <h4>Search TrackYack.com</h4>  
              <div class="footer-row">
                <?php get_search_form(); ?>
              </div>
            </div>
            <div class="row">
              <h4>Browse by season:</h4>
              <div class="footer-row">
                <div>
                  <a href="<?php echo esc_url($home_url);?>/category/cross/">Cross Country</a>
                </div>
                <div>
                  <a href="<?php echo esc_url($home_url);?>/category/indoor/">Indoor</a>
                </div>
                <div>
                  <a href="<?php echo esc_url($home_url);?>/category/outdoor/">Outdoor</a>
                </div>
              </div>
            </div>
            <div class="row">
              <h4>Browse by school:</h4>
              <div class="footer-row">
                <div>
                  <a href="<?php echo esc_url($home_url);?>/category/amherst/">Amherst</a>
                </div>
                <div>
                  <a href="<?php echo esc_url($home_url);?>/category/bates/">Bates</a>
                </div>
                <div>
                  <a href="<?php echo esc_url($home_url);?>/category/bowdoin/">Bowdoin</a>
                </div>
                <div>
                  <a href="<?php echo esc_url($home_url);?>/category/colby/">Colby</a>
                </div>
              </div>
              <div class="footer-row">
                <div>
                  <a href="<?php echo esc_url($home_url);?>/category/conncollege/">Conn College</a>
                </div>
                <div>
                  <a href="<?php echo esc_url($home_url);?>/category/hamilton">Hamilton</a>
                </div>
                <div>
                  <a href="<?php echo esc_url($home_url);?>/category/middlebury">Middlebury</a>
                </div>
              </div>
              <div class="footer-row">
                <div>
                  <a href="<?php echo esc_url($home_url);?>/category/trinity">Trinity</a>
                </div>
                <div>
                  <a href="<?php echo esc_url($home_url);?>/category/tufts">Tufts</a>
                </div>
                <div>
                  <a href="<?php echo esc_url($home_url);?>/category/wesleyan">Wesleyan</a>
                </div>
                <div>
                  <a href="<?php echo esc_url($home_url);?>/category/williams">Williams</a>
                </div>
              </div>
            </div>  
          </div>
          <div class="col-sm-6 col-sm-offset-1 ty_footer_section">
            <h4>Recent posts:</h4>
            <div class="footer-row left">
              <?php $recentquery = new WP_Query( 'posts_per_page=12' ); ?>
              <ol class="list-unstyled"> 
                <?php while($recentquery->have_posts()) : $recentquery->the_post(); ?>
                  <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
                <?php endwhile;
                wp_reset_postdata();?>
              </ol>
            </div>
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
            <div class="ty_footer_text">Copyright 2016-2018 TrackYack</div>
            <div class="ty_footer_text">All Rights Reserved</div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 text-center">
            <a href="#">Back to top</a>
          </div>
        </div>      
      </div>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>