    </div> <!-- Close container class -->
    <div class="container-fluid ty_footer">
      <div class="row">
        <div class="col-md-3 ty_footer_section text-center">
          <a href="<?php echo get_option('facebook_url'); ?>"><i class="social fa fa-facebook fa-2x"></i></a>
          <a href="<?php echo get_option('twitter_url'); ?>"><i class="social fa fa-twitter fa-2x"></i></a>
          <p>Sign up for the TrackYack newsletter!</p>
          <form class="input-group">
            <input class="form-control" type="email" name="lastname" placeholder="Email">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Join us!</button>
            </span>
          </form>
        </div>
        <div class="col-md-3 ty_footer_section text-center">
          <h5>Browse by season:</h5>
          <ul class="list-unstyled">
            <li>
              <a href="<?php echo get_bloginfo( 'wpurl' );?>/cross-country/">Cross Country</a>
            </li>
            <li>
              <a href="<?php echo get_bloginfo( 'wpurl' );?>/indoor/">Indoor</a>
            </li>
            <li>
              <a href="<?php echo get_bloginfo( 'wpurl' );?>/outdoor/">Outdoor</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3 ty_footer_section text-center">
          <h5>Browse by school:</h5>
          <div class="row">
            <div class="col-md-6">
              <ul class="list-unstyled">
                <li>
                  <a href="<?php echo get_bloginfo( 'wpurl' );?>/amherst/">Amherst</a>
                </li>
                <li>
                  <a href="<?php echo get_bloginfo( 'wpurl' );?>/bates/">Bates</a>
                </li>
                <li>
                  <a href="<?php echo get_bloginfo( 'wpurl' );?>/bowdoin/">Bowdoin</a>
                </li>
                <li>
                  <a href="<?php echo get_bloginfo( 'wpurl' );?>/colby/">Colby</a>
                </li>
                <li>
                  <a href="<?php echo get_bloginfo( 'wpurl' );?>/connecticut/">Connecticut</a>
                </li>
                <li>
                  <a href="<?php echo get_bloginfo( 'wpurl' );?>/hamilton">Hamilton</a>
                </li>
              </ul>
            </div>
            <div class="col-md-6">
              <ul class="list-unstyled">
                <li>
                  <a href="<?php echo get_bloginfo( 'wpurl' );?>/middlebury">Middlebury</a>
                </li>
                <li>
                  <a href="<?php echo get_bloginfo( 'wpurl' );?>/trinity">Trinity</a>
                </li>
                <li>
                  <a href="<?php echo get_bloginfo( 'wpurl' );?>/tufts">Tufts</a>
                </li>
                <li>
                  <a href="<?php echo get_bloginfo( 'wpurl' );?>/wesleyan">Wesleyan</a>
                </li>
                <li>
                  <a href="<?php echo get_bloginfo( 'wpurl' );?>/williams">Williams</a>
                </li>
              </ul>
            </div>
          </div>
        </div>  
        <div class="col-md-3 ty_footer_section text-center">
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
        <div class="col-md-12 text-center">
          <div class="ty_footer_text">
            <a href="<?php echo get_bloginfo( 'wpurl' );?>/privacy">Privacy Policy</a>
          </div>
          <div class="ty_footer_text">
            <a href="<?php echo get_bloginfo( 'wpurl' );?>/terms">Terms and Conditions</a>
          </div>
          <div class="ty_footer_text">Copyright 2017 TrackYack</div>
          <div class="ty_footer_text">All Rights Reserved</div>
        </div>
      </div>
      <div class="row">
        <div class="text-center">
          <a href="#">Back to top</a>
        </div>
      </div>      
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo get_bloginfo( 'template_directory' );?>/js/twitter.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>