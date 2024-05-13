jQuery(document).ready( function ($) {
    jQuery('.woocommerce_search_form_link').click( function(e){
    e.preventDefault();
    if( jQuery('.search_form_desktop').hasClass('display')){

        jQuery('.search_form_desktop').removeClass('display');
        jQuery('.search_form_desktop').attr('aria-expanded','true');

      }else{
        jQuery('.search_form_desktop').addClass('display');
        jQuery('.search_form_desktop').attr('aria-expanded','flase');
      }
  });

});
