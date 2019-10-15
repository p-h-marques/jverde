jQuery(document).ready(function(e){
  //add class header scroll

  jQuery(window).scroll(function(){    

    if ( $(this).scrollTop() > 0) {
      jQuery('#navbar').addClass('scroll');
    }else{
      jQuery('#navbar').removeClass('scroll');
    }

  });
})