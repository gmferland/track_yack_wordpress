var instagram = require('./instagramPlugin');
var $ = jQuery;

function onLoad() {
  instagram.stylePlugin();
}

module.exports = {
  onLoad,
};
