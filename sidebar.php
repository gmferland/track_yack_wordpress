<div class="row ty_main_sidebar">
  <div class="col-xs-12">
    <?php get_search_form(); ?>
    <h5>
      <a class="ty_main_sidebar_title" role="button" data-toggle="collapse" href="#browse" aria-expanded="false" aria-controls="browse">
        BROWSE
        <span class="caret"></span>
      </a>
    </h5>
    <ul class="list-unstyled collapse in" id="browse">
      <li>
        <h5>
          <a class="ty_main_sidebar_title" role="button" data-toggle="collapse" href="#season" aria-expanded="false" aria-controls="season">
            BY SEASON
            <span class="caret"></span>
          </a>
        </h5>
        <ul class="ty_main_sidebar_list list-unstyled collapse in" id="season">
          <li><a href="<?php echo esc_url( $home_url );?>/tag/cross/">Cross Country</a></li>
          <li><a href="<?php echo esc_url( $home_url );?>/tag/indoor/">Indoor</a></li>
          <li><a href="<?php echo esc_url( $home_url );?>/tag/outdoor/">Outdoor</a></li>
        </ul>
      </li>
      <li>
        <h5>
          <a class="ty_main_sidebar_title" role="button" data-toggle="collapse" href="#school" aria-expanded="false" aria-controls="school">
            BY SCHOOL
            <span class="caret"></span>
          </a>
        </h5>
        <ul class="ty_main_sidebar_list list-unstyled collapse in" id="school">
          <li><a href="<?php echo esc_url( $home_url );?>/tag/amherst/">Amherst</a></li>
          <li><a href="<?php echo esc_url( $home_url );?>/tag/bates/">Bates</a></li>
          <li><a href="<?php echo esc_url( $home_url );?>/tag/bowdoin/">Bowdoin</a></li>
          <li><a href="<?php echo esc_url( $home_url );?>/tag/colby/">Colby</a></li>
          <li><a href="<?php echo esc_url( $home_url );?>/tag/conncollege/">Conn College</a></li>
          <li><a href="<?php echo esc_url( $home_url );?>/tag/hamilton">Hamilton</a></li>
          <li><a href="<?php echo esc_url( $home_url );?>/tag/middlebury">Middlebury</a></li>
          <li><a href="<?php echo esc_url( $home_url );?>/tag/trinity">Trinity</a></li>
          <li><a href="<?php echo esc_url( $home_url );?>/tag/tufts">Tufts</a></li>
          <li><a href="<?php echo esc_url( $home_url );?>/tag/wesleyan">Wesleyan</a></li>
          <li><a href="<?php echo esc_url( $home_url );?>/tag/williams">Williams</a></li>
        </ul>
      </li>
      <li>
        <h5>
          <a class="ty_main_sidebar_title" role="button" data-toggle="collapse" href="#month" aria-expanded="false" aria-controls="month">
            BY MONTH
            <span class="caret"></span>
          </a>
        </h5>
        <ol class="ty_main_sidebar_list list-unstyled collapse in" id="month">
          <?php wp_get_archives( 'type=monthly' ); ?>
        </ol>
      </li>
    </ul>
  </div>
  <script>
    jQuery(document).ready(function() {
      var $ = jQuery;
      function closeSideCollapse() {
        if ($(window).width() < 768) $('.ty_main_sidebar .collapse').removeClass('in');
      }
      closeSideCollapse();
      $(window).resize(closeSideCollapse);
    });
  </script>
</div><!-- /.blog-sidebar -->