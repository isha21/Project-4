// (function($) {
//   $('.icon-search').on('click', function(event){
//     event.preventDefault();
//     $('.search-field').animate({width: 'toggle'});
//     $('.search-field').focus();
//   });
//   // $('.search-field').blur(function(){
//   // $('.search-field').hide();
//   // });
// });(jQuery)


(function($){

  
   
    $('.icon-search').on('click', function(){
    event.preventDefault();

    $('.search-form').toggleClass('slow');
    $('.search-field').focus();
   });
  })(jQuery);