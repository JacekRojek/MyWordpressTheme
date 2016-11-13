

jQuery(document).ready( function($) {
  $(document).on('click', '.open-search a',function(e){
    e.preventDefault();
    //console.log('clicked');
    $('.search-form-container').slideToggle(300);
  }) ;

});
