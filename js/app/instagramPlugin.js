var $ = jQuery;
function stylePlugin() {
  $('ul.instagram-pics').addClass('list-unstyled');
  $('p.clear>a').addClass('btn ty_button');
}

module.exports = {
  stylePlugin,
};
