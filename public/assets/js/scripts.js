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
$(document).mousedown(function(e){
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

//phone mask
$(document).on('focusout','#contactPhone',function(e){
  var phone, element;
  element = $(this);
  element.unmask();
  phone = element.val().replace(/\D/g, '');
  if(phone.length > 9) {
    element.mask("(99) 99999-999?9");
  } else {
    element.mask("(99) 9999-9999?9");
  }
})

//ajax to send form
jQuery(document).ready(function(){
  jQuery(function(){
    jQuery('#send-contact').submit(function(){
      // jQuery('.loading').html('<img src="assets/img/loading.gif" width="40" height="40">');
      console.log('lendo kkk')

      $.ajax({
        //disgraça
        url: 'includes/send-contact.php',
        type: 'POST',
        data: jQuery('#send-contact').serialize(),

        success: function( data ){
          // jQuery('.loading').html('');
          console.log('ta indo ein')
          
          if(data.response == 'field_required'){                       
            //jQuery('.msg-global').html(data.msg).addClass('error').show();
            console.log(data)
          }

          if(data.response == false){                       
            //jQuery('.msg-global').html(data.msg).addClass('error').show(); 
            console.log(data)
          }

          if(data.response == true){                       
            // jQuery('.msg-global').html(data.msg).addClass('success').show(); 
            console.log(data)
            jQuery('#send-contact')[0].reset();
          }
        },
        error: function (data){
          //console.log(data); 
          if(data.status == 404){
            // jQuery('.loading').html('');
            // jQuery('.msg-global').html('Não foi possível enviar sua mensagem (erro 404). <br>Envie sua mensagem por e-mail ou contate o administrador do site.').addClass('error').show();
            console.log('deu ruim');
          }
        }
      })

      .done(function(data){
        //jQuery('.loading').html('');
      })

      .fail(function(jqXHR, textStatus, data){
        //jQuery('.loading').html('');
        //jQuery('.msg-global').html('Oops, houve um erro ao enviar sua mensagem. Contate o administrador do site ou tente novamente mais tarde.').addClass('error').show();
        console.log('deu ruim forte')           
        });

      return false;
    });
  });
});