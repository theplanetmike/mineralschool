var searchAnim = function() {
    $('input.search-field').animate( {width: 'toggle'} );
  console.log('hi');
}

$(document).ready( function() {
$('input.search-field').hide();
$('img.search-icon').click( searchAnim );
});