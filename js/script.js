$(document).ready(function(){
    $('.carousel.carousel-slider').carousel({
      indicators: true,
      });
    $('.dropdown-trigger').dropdown();
    $('.sidenav').sidenav();
    $('.parallax').parallax();
    $('.modal').modal();
    $('.materialboxed').materialbox();
    });

    $('#easteregg1').on("click",function(){
      $("body").html("<video width='100%' style='margin:0 auto' src='img/gandalf.mp4'><video>");
      $("video").get(0).play();
    })
    $('#easteregg2').on("click",function(){
      $("body").html("<video width='90%' style='margin:0 auto' src='img/video.mp4'><video>");
      $("video").get(0).play();
    })
    $('#easteregg3').on("click",function(){
      $("body").html("<video width='30%' style='margin:0 auto' src='img/virus-chad.mp4'><video>");
      $("video").get(0).play();
    })
    $('#easteregg4').on("click",function(){
      $("body").html("<video width='30%' style='margin:0 auto' src='img/capy-chad.mp4'><video>");
      $("video").get(0).play();
    })
    








// Script projet

// side nav

  
//  easter egg 
