
$( document ).ready(function() {
	
	$('.cd-slideshow li:first').addClass('visible');
   });
   
$( ".help-header" ).click(function() {
  $('.info-overlay').fadeIn();
});

$( ".close-instruct" ).click(function() {
  $('.info-overlay').fadeOut();
});

function go_full_screen(){
    var elem = document.documentElement;
    if (elem.requestFullscreen) {
      elem.requestFullscreen();
    } else if (elem.msRequestFullscreen) {
      elem.msRequestFullscreen();
    } else if (elem.mozRequestFullScreen) {
      elem.mozRequestFullScreen();
    } else if (elem.webkitRequestFullscreen) {
      elem.webkitRequestFullscreen();
    }
}