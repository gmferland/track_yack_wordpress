// order of imports is cruicial for cascading rules!
var baseStyles = require('../../styles/index.scss');
var headerStyles = require('../../styles/header.scss');
var footerStyles = require('../../styles/footer.scss');
var homeStyles = require('../../styles/home.scss');
var socialStyles = require('../../styles/social.scss');
var postsStyles = require('../../styles/posts.scss');
var pagesStyles = require('../../styles/pages.scss');

jQuery(document).ready(function() {
  var $ = jQuery;
  if (window.location.pathname === '/') {
    $twitterImage = $('#twitter-banner');
    function adjustTwitterContainer() {
      $twitterTimeline = $('.ty_twitter_timeline');
      if ($twitterImage && $twitterTimeline)
        $twitterTimeline.height($twitterImage.height());
    }
    $($twitterImage)
      .on('load', function() {
        adjustTwitterContainer();
      })
      .each(function() {
        if (this.complete) $(this).load();
      });

    $(window).resize(adjustTwitterContainer);
  }
});
