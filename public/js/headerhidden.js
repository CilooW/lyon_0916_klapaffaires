/**
 * Created by tangui on 02/10/16.
 */
(function ($) {
    var $window = $(window),
        $logo = $(".navbar-brand"),
        offset = 300,
        section = $("#video");

    $window.scroll(function(){
        var scrollTop = $(this).scrollTop() + ($(window).height() / 2);
        if (scrollTop < section.height()) {

            $logo.show();

        } else {
            $logo.hide();
        }

    });


})(jQuery);
