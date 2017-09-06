$(document).ready(function(){

   $("a.scroll").on('click', function(event) {
     if (this.hash !== "") {
     event.preventDefault();
     var hash = this.hash;
     $('html, body').animate({
        scrollTop: $(hash).offset().top
        }, 800, function(){
      });
     }});

    $('#datepicker').datepicker();
    $('#datepicker2').datepicker();

    var nice = false;
    nice = $("html").niceScroll();

});
