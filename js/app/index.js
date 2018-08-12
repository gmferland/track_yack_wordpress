// order of imports is cruicial for cascading rules!
var baseStyles = require('../../styles/index.scss');
var headerStyles = require('../../styles/header.scss');
var footerStyles = require('../../styles/footer.scss');
var homeStyles = require('../../styles/home.scss');
var socialStyles = require('../../styles/social.scss');
var postsStyles = require('../../styles/posts.scss');
var pagesStyles = require('../../styles/pages.scss');

var home = require('./home');

var $ = jQuery;
$(document).ready(function() {
  if (window.location.pathname === '/') {
    home.onLoad();
  }
});
