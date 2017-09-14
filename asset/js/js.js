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

    $('#grid').click(function(event){event.preventDefault();
        $('#list').removeClass('active');

        $('#all_hotels .item').addClass('list-group-item');
        $('#all_hotels .item .item2').addClass('list-group-item2');
        $('#all_hotels .line').removeClass('line');
    });
    $('#list').click(function(event){event.preventDefault();
        $('#all_hotels .item').removeClass('list-group-item');
        $('#all_hotels .item .item2').removeClass('list-group-item2');
        $('#all_hotels .item').addClass('grid-group-item');
    });

    $("#content-slider").lightSlider({
        loop:true,
        keyPress:true
    });
    $('#image-gallery').lightSlider({
        gallery:true,
        item:1,
        thumbItem:9,
        slideMargin: 0,
        speed:500,
        auto:true,
        loop:true,
        onSliderLoad: function() {
            $('#image-gallery').removeClass('cS-hidden');
        }
    });

});
