// order of imports is cruicial for cascading rules!
var baseStyles = require('../../styles/index.scss');
var headerStyles = require('../../styles/header.scss');
var footerStyles = require('../../styles/footer.scss');
var homeStyles = require('../../styles/home.scss');
var socialStyles = require('../../styles/social.scss');

jQuery(document).ready(function() {
  if (window.location.pathname === '/') {
    var $ = jQuery;
    function adjustTwitterContainer() {
      $twitterImage = $('#twitter-banner');
      $twitterTimeline = $('.ty_twitter_timeline');
      if ($twitterImage && $twitterTimeline)
        $twitterTimeline.height($twitterImage.height());
    }
    adjustTwitterContainer();
    $(window).resize(adjustTwitterContainer);
  }
});
