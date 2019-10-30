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

//feedback messages
function feedbackCampoObrigatorio(){
  let element = $('#form-feedback');
  let mensagem = 'Os campos marcados com * são obrigatórios, e um ou mais deles não foram preenchidos. Por favor, preencha-os, e tente novamente!'

  element.removeClass('d-none');
  element.addClass('d-block alert-danger');
  element.children().text(mensagem);
}

function feedbackErro(){
  let element = $('#form-feedback');
  let mensagem = 'Algo errado ocorreu ao enviar o formulário. Tente novamente mais tarde, ou entre em contato conosco através do nosso email ou WhatsApp, encontrados logo abaixo!';

  element.removeClass('d-none');
  element.addClass('d-block alert-danger');
  element.children().text(mensagem);
}

function feedbackSuccess(){
  let element = $('#form-feedback');
  let mensagem = 'Sua mensagem foi enviada com sucesso! Aguarde, e em breve retornaremos seu contato!'

  element.removeClass('d-none');
  element.addClass('d-block alert-success');
  element.children().text(mensagem);
}

function feedbackClear(){
  let element = $('#form-feedback');

  element.removeClass('d-block alert-sucess alert-danger');
  element.addClass('d-none');
  element.children().html('');
}

//ajax to send form
function sendForm(){
  loading = $('#form-loading');
  loading.removeClass('d-none');
  loading.addClass('d-inline-block');

  $.ajax({
    //disgraça
    url: 'includes/send-contact.php',
    type: 'POST',
    data: jQuery('#send-contact').serialize(),

    success: function( data ){
      loading.removeClass('d-inline-block');
      loading.addClass('d-none');
      
      if(data.response == 'field_required'){   
        feedbackClear();                    
        feedbackCampoObrigatorio();
      }

      if(data.response == false){                       
        feedbackClear();                    
        feedbackErro();
      }

      if(data.response == true){                       
        feedbackClear();                    
        feedbackSuccess();
      }
    },

    error: function (data){      
      if(data.status == 404){
        loading.removeClass('d-inline-block');
        loading.addClass('d-none');

        feedbackClear();                    
        feedbackErro();
      }
    }
  })

  .done(function(data){
    loading.removeClass('d-inline-block');
    loading.addClass('d-none');
  })

  .fail(function(jqXHR, textStatus, data){
    loading.removeClass('d-inline-block');
    loading.addClass('d-none');

    feedbackClear();                    
    feedbackErro();          
    });

  return false;
};

//form submission
$(document).on('submit','#send-contact',function(e){
  event.preventDefault();
  form = $('#send-contact');
  form.removeClass('was-validated');
  feedbackClear();

  formName = $('#contactName').val();
  formPhone = $('#contactPhone').val();
  formCity = $('#contactCity').val();

  console.log(formName, formPhone, formCity);

  if (formName == '' || formPhone == '' || formCity == ''){
    feedbackCampoObrigatorio();
    form.addClass('was-validated');
    console.log('tá errado');
    event.preventDefault();
  } else {
    sendForm();
  }
});