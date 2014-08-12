$(document).ready(function () {
   if ( $('#lia').is(':parent') ) 
  {  
    $(".menu").append('<li><a href="http://www.liadameskleding.nl">Home</a></li>');
    //alert('lia is gevonden!'); 
  }else {
    //alert('niets gevonden');
  }
});