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

  var url = window.location.href;
  var tg = url.split('/');

  jQuery('.main-navigation ul.nav-menu li.menu-item a').each(function(index, obj){

    url_this = jQuery(this).attr("href");
    var ts = url_this.split('/');


        if(decodeURIComponent(tg[tg.length -2]) === decodeURIComponent(ts[ts.length -2]) ){
            jQuery(this).addClass('active');
            jQuery('a.reward_menu_item_link').removeClass('active');
            return false;
        }else if(decodeURIComponent(tg[tg.length -4]) === decodeURIComponent(ts[ts.length -2]) ){
                jQuery(this).addClass('active');
                jQuery("a.menu_home_icon").removeClass('active');
                jQuery('a.reward_menu_item_link').removeClass('active');
                return false;
            
        }
});

});
