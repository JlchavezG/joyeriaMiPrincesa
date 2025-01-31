/* Detectar el scroll y cambiar la clase del navbar */
    document.addEventListener("scroll", function () {
      const navbar = document.querySelector(".navbar");
      if (window.scrollY > 50) { // Cambiar color si el scroll es mayor a 50px
        navbar.classList.add("scrolled");
      } else {
        navbar.classList.remove("scrolled");
      }
    });
    // desabilitar boton derecho
$(function(){
  $(document).bind("contextmenu",function(e){
      return false;
  });
});
// funcion scroll
$(document).ready(function(){
let scroll_link = $('.scroll');

  //smooth scrolling -----------------------
  scroll_link.click(function(e){
      e.preventDefault();
      let url = $('body').find($(this).attr('href')).offset().top;
      $('html, body').animate({
        scrollTop : url
      },700);
      $(this).parent().addClass('active');
      $(this).parent().siblings().removeClass('active');
      return false;
  });
});
//  funcion boton arriba 
