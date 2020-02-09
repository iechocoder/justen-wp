var $ = jQuery;

$(document).ready( function (){

  //  navigation start from 992px
  $(".menu-mobile").click(function (){
    if( $(this).hasClass('active')){
      $(this).removeClass('active');
      $(".nav-wrap").removeClass('toggle-nav');
    }
    else{
      $(this).addClass('active');
      $(".nav-wrap").addClass('toggle-nav');
    }
    return false;
  });


  // form show on click
  $(".form-link").click(function (){
    if( $(this).hasClass('active')){
      $(this).removeClass('active');
      $(".sectin-bg").stop(true,true).slideUp();
    }
    else{
      $(this).addClass('active');
      $(".sectin-bg").stop(true,true).slideDown();
    }
    return false;
  });

});

