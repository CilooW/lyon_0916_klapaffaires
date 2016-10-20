/**
 * Created by tangui on 02/10/16.
 */
(function ($) {
    var $window = $(window),
        $logo = $(".navbar-brand"),
        offset = 300,
        social = $(".social"),
        $navbar = $(".navbar-inverse"),
        $elements = $('body').children();

        $navbar.css({                           // Met la bare de navigation en transparence
        "background":"transparent",
        "background-image":"none",
        "border-color":"transparent",
        "box-shadow" : "none"
    })

    $window.scroll(function(){
        var scrollTop = $(this).scrollTop();
        $elements.each(function(){
            if (scrollTop < offset) {
                $logo.show();                   // Montre le logo et les réseaux sociaux lorsque l'on déscroll et la remet en transparence
                social.show();
                $navbar.css({
                    "background":"transparent",
                    "background-image":"none",
                    "border-color":"transparent",
                    "box-shadow" : "none"
                })
            } else {
                social.hide();
               // $navbar.fadeIn( 3000, function(){
                    $navbar.css({
                        "background-color": "#363636",
                        "height": "80px",
                        "opacity": 0.8
                    });
               // });
            }
        })
    });
})(jQuery);
