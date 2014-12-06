var searchAnim = function() {
    $('input.search-field').animate( {width: 'toggle'} );
}

var mobileClick = function(e) {
  navLink = $(this).attr("href");
  if ($(navLink).is(':hidden')) {
    $(navLink).css('display', 'block');
    $(navLink).css('opacity', '1');
    $(navLink).css('visibility', 'visible');
  } else {
    $(navLink).css('display', 'none');
    $(navLink).css('opacity', '0');
    $(navLink).css('visibility', 'hidden');
  }
  e.preventDefault();
}

$(document).ready( function() {
$('input.search-field').hide();
$('img.search-icon').click( searchAnim );
$('#three-line-menu').click( mobileClick );
});