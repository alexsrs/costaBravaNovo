$(function(){

	// When the user scrolls down 50px from the top of the document, resize the header's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("header").style.fontSize = "14px";
    $(".logo").width(53).height(72); 
    $('header').height('12vh');

    


  } else {
    document.getElementById("header").style.fontSize = "14px";
    $(".logo").width(66).height(90); 
    $('header').height('14vh');
  }
}



});
