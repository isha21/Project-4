(function($) {
  $('.search-field').on('click', function(event){
    event.preventDefault();
    $('.icon-search').toggle('slow');
    $('.icon-search').focus();
  });
  $('.icon-search').blur(function(){
  $('.icon-search').hide();
  });
});