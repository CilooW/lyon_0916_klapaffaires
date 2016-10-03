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



    $window.scroll(function(){
        var scrollTop = $(this).scrollTop();
        $elements.each(function(){
            if (scrollTop < offset) {

                $logo.show();
                social.show();





            } else {
                $logo.hide();
                social.hide();
                $navbar.css("background-color", "black");

            }
        })
    });


})(jQuery);
