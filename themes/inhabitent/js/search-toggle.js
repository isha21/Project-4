(function($) {
  $('.icon-search').on('click', function(event){
    event.preventDefault();
    $('.search-field').animate({width: 'toggle'});
    $('.search-field').focus();
  });
  // $('.search-field').blur(function(){
  // $('.search-field').hide();
  // });
});(jQuery)

// jims's way doesn't work
// (function($){

//   var $searchButton = $('.main-nav button.search-submit'),
//     $searchField = $('.main-nav .search-form .search-field'),

//   $searchButton.on('click', function(e){
//     e.preventDefault();

//     $searchField.toggle('slow');
//     $searchField.focus();
//    });
//   })(jQuery);