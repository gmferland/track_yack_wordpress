<div class="row ty_main_sidebar">
  <div class="col-xs-12">
    <?php get_search_form(); ?>
    <h5>BROWSE BY SEASON</h5>
    <ul class="list-unstyled">
      <li><a href="<?php echo get_bloginfo( 'wpurl' );?>/cross-country">Cross Country</a></li>
      <li><a href="<?php echo get_bloginfo( 'wpurl' );?>/indoor/">Indoor</a></li>
      <li><a href="<?php echo get_bloginfo( 'wpurl' );?>/outdoor/">Outdoor</a></li>
    </ul>
    <h5>BROWSE BY SCHOOL</h5>
    <ul class="list-unstyled">
      <li><a href="<?php echo get_bloginfo( 'wpurl' );?>/amherst/">Amherst</a></li>
      <li><a href="<?php echo get_bloginfo( 'wpurl' );?>/bates/">Bates</a></li>
      <li><a href="<?php echo get_bloginfo( 'wpurl' );?>/bowdoin/">Bowdoin</a></li>
      <li><a href="<?php echo get_bloginfo( 'wpurl' );?>/colby/">Colby</a></li>
      <li><a href="<?php echo get_bloginfo( 'wpurl' );?>/connecticut/">Connecticut</a></li>
      <li><a href="<?php echo get_bloginfo( 'wpurl' );?>/hamilton">Hamilton</a></li>
      <li><a href="<?php echo get_bloginfo( 'wpurl' );?>/middlebury">Middlebury</a></li>
      <li><a href="<?php echo get_bloginfo( 'wpurl' );?>/trinity">Trinity</a></li>
      <li><a href="<?php echo get_bloginfo( 'wpurl' );?>/tufts">Tufts</a></li>
      <li><a href="<?php echo get_bloginfo( 'wpurl' );?>/wesleyan">Wesleyan</a></li>
      <li><a href="<?php echo get_bloginfo( 'wpurl' );?>/williams">Williams</a></li>
    </ul>
    <h5>BROWSE BY MONTH</h5>
    <ol class="list-unstyled">
      <?php wp_get_archives( 'type=monthly' ); ?>
    </ol>
  </div>
</div><!-- /.blog-sidebar -->