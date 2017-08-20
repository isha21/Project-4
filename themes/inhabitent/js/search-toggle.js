$(function() {
  $('.icon-search').on('click', function(){
    event.preventDefault();
    $('.search-field').toggle('slow');
    $('.search-field').focus();
});
})(jQuery);
