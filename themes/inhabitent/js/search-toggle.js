(function($) {
  $('.icon-search').on('click', function(event){
    event.preventDefault();
    $('.search-field').toggle('slow');
    $('.search-field').focus();
  })
});