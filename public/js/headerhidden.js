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
                $logo.hide();                   // Cache le logo et les réseaux sociaux et remet la bar de navigation en noire
                social.hide();
                $navbar.css({
                    "background-color": "black",
                    "height": "100px"
                });
            }
        })
    });
})(jQuery);