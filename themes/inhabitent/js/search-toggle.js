$(function() {
  $('.search-submit').on('click', function(){
    event.preventDefault();
    $('.icon-search').animate({ width: 'toggle'});
    $('.icon-search').focus();
});
});
