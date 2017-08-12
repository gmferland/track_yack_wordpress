    </div> <!-- Close container class -->
    <div class="container-fluid ty_footer">
      <div class="row no-gutters">
        <div class="col-xs-4 col-xs-offset-4 text-center">
          <a href="<?php echo get_option('facebook'); ?>"><img class="ty_footer_icon" src="<?php echo get_bloginfo( 'template_directory' );?>/images/facebook_icon.svg" /></a>
          <a href="<?php echo get_option('twitter'); ?>"><img class="ty_footer_icon" src="<?php echo get_bloginfo( 'template_directory' );?>/images/twitter_icon.svg" /></a>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="text-center">
          <div class="ty_footer_text">Copyright 2017 TrackYack</div>
          <div class="ty_footer_text">All Rights Reserved</div>
          <div class="ty_footer_text"><a href="/privacy">Privacy Policy</a></div>
          <div class="ty_footer_text"><a href="/terms">Terms and Conditions</a></div>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="text-center">
          <a href="#">Back to top</a>
        </div>
      </div>      
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>