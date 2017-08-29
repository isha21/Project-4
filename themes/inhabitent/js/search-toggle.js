
(function($){

  
   
    $('.main-nav .icon-search').on('click', function(){
    event.preventDefault();
   
    $('.main-nav .search-field').toggleClass('bar');
    $('.main-nav .search-field').focus();
  });
    $('.main-nav .search-field').on('blur', function(){
      $('.main-nav .search-field').toggleClass('bar');
    });
 
  })(jQuery);