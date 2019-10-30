$(document).ready(function(){
  
    $('.carrosel').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        fade: true,
        asNavFor: '.carrosel-nav'
    });

    $('.carrosel-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.carrosel',
        dots: true,
        centerMode: true,
        arrows: false,
        focusOnSelect: true
    });

});


