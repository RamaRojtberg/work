/*(function () {

    'use strict';

    var wowAnimation = function() {
        var wow = new WOW(
            {
                animateClass: 'animated',
                offset:       150,
                callback:     function(box) {
                    console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
                }
            }
        );
        wow.init();

        // console.log($(".body")[0].clientWidth);

        if($(".body")[0].clientWidth < 992){
            $(".parallax-window2").attr("data-image-src", "img/fondo3.jpg");
            $(".parallax-slider").attr("src", "img/fondo3.jpg");
        }

        $(window).resize(function() {
            console.log($(".body")[0].clientWidth);
            if($(".body")[0].clientWidth < 992){
                $(".parallax-slider").attr("src", "img/fondo3.jpg");
            } else {
                $(".parallax-slider").attr("src", "img/fondo2.jpg");
            }
        });

        $(".nuevo-logo i").on("click", function(){
            $(".nuevo-logo").css({"display":"none"})
        })

        
        
    }


    (function($) {
        wowAnimation();
    })(jQuery);


}());*/
