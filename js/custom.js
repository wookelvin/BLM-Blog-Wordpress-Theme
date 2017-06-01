//$(function() { $('.home-slideshow-images').unslider() });
$(function() { $('.home-slideshow').unslider() });

$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

     //>=, not <=
    if (scroll >= 100) {
        //clearHeader, not clearheader - caps H
        $("body").addClass("not-at-top");
    }else{
        $("body").removeClass("not-at-top");
    }
}); //missing );