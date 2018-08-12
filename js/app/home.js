var instagram = require('./instagramPlugin');
var $ = jQuery;

function onLoad() {
  instagram.stylePlugin();

  var $twitterImage = $('#twitter-banner');

  function adjustTwitterContainer() {
    var $twitterTimeline = $('.ty_twitter_timeline');
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

module.exports = {
  onLoad,
};
