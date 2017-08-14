<div class="ty_social">
  <div class="row">Like TrackYack on Facebook!</div>
  <div class="row">
    <a class="twitter-follow-button" 
      href="<?php echo get_option('twitter_url'); ?>"
      data-size="large"
      data-show-count="false">
      Follow <?php echo get_option('twitter_user'); ?>
    </a>
  </div>
  <div class="row">
    <a class="twitter-timeline"
      href="<?php echo get_option('twitter_url'); ?>"
      data-height="100vh">
    Tweets by <?php echo get_option('twitter_user'); ?>
    </a>
  </div>
</div>