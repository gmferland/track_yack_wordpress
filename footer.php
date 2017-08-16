    </div> <!-- Close container class -->
    <div class="container-fluid ty_footer">
      <div class="row">
        <div class="col-md-3 ty_footer_section text-center">
          <a href="<?php echo get_option('facebook_url'); ?>"><img class="ty_footer_icon" src="<?php echo get_bloginfo( 'template_directory' );?>/images/facebook_icon.svg" /></a>
          <a href="<?php echo get_option('twitter_url'); ?>"><img class="ty_footer_icon" src="<?php echo get_bloginfo( 'template_directory' );?>/images/twitter_icon.svg" /></a>
          <form>
            <input type="text" name="lastname" placeholder="Email">
          </form>
          <p>Sign up for the TrackYack newsletter!</p>
        </div>
        <div class="col-md-3 ty_footer_section text-center">
          <ul>
            <li>
              <a href="<?php echo get_bloginfo( 'wpurl' );?>/features/">Features</a>
            </li>
            <li>
              <a href="<?php echo get_bloginfo( 'wpurl' );?>/daily/">Daily Takes</a>
            </li>
            <li>
              <a href="<?php echo get_bloginfo( 'wpurl' );?>/schedule/">Schedule &amp Results</a>
            </li>
            <li>
              <a href="<?php echo get_bloginfo( 'wpurl' );?>/about/">About</a>
            </li>
            <li>
              <a href="<?php echo get_bloginfo( 'wpurl' );?>/privacy">Privacy Policy</a>
            </li>
            <li>
              <a href="<?php echo get_bloginfo( 'wpurl' );?>/terms">Terms and Conditions</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3 ty_footer_section text-center">
          <ul>
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
        <div class="col-md-3 ty_footer_section text-center">
          <ul>
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
      </div>
      <div class="row">
        <div class="text-center">
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