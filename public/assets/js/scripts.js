//add class header scroll
jQuery(document).ready(function(e){
  if ( $(this).scrollTop() > 0) {
    jQuery('#navbar').addClass('scroll');
  }else{
    jQuery('#navbar').removeClass('scroll');
  }

  jQuery(window).scroll(function(){    

    if ( $(this).scrollTop() > 0) {
      jQuery('#navbar').addClass('scroll');
    }else{
      jQuery('#navbar').removeClass('scroll');
    }

  });
})

//closing mobile menu with outside touch
$(document).mouseup(function(e){
  click = $(e.target);
  menu = $('.show');

  if(!click.closest('.show').length){
    menu.removeClass('show');
  }  
});


//anchor links

$(document).on('click','#productsLink',function(e){
  e.preventDefault();

  $('html, body').animate({
    scrollTop: $('#products').offset().top -180}, '500');
    return true;
})

$(document).on('click','#benefitsLink',function(e){
  e.preventDefault();

  $('html, body').animate({
    scrollTop: $('#benefits').offset().top -280}, '500');
    return true;
})

$(document).on('click','#distributorLink',function(e){
  e.preventDefault();

  $('html, body').animate({
    scrollTop: $('#distributor').offset().top -130}, '500');
    return true;
})

$(document).on('click','#contactLink',function(e){
  e.preventDefault();

  $('html, body').animate({
    scrollTop: $('#contact').offset().top -130}, '500');
    return true;
})

$(document).on('click','#logoLink',function(e){
  e.preventDefault();

  $('html, body').animate({
    scrollTop: $('body').offset().top}, '500');
    return true;
})