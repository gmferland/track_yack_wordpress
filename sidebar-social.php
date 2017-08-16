<div class="ty_social">
  <div class="row">
    <div class="fb-like" 
    data-href="<?php echo get_option('facebook_url'); ?>" 
    data-width="100%" 
    data-layout="button_count" 
    data-action="like" 
    data-size="large" 
    data-show-faces="true" 
    data-share="false"></div>
  </div>
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