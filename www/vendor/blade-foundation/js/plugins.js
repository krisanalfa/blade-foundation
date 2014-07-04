(function ($, window, FastClick) {
    'use strict';

    FastClick.attach(document.body);

    var $doc = $(document),
        Modernizr = window.Modernizr;

    $('.block-grid.two-up>li:nth-child(2n+1)').css({
        clear: 'both'
    });
    $('.block-grid.three-up>li:nth-child(3n+1)').css({
        clear: 'both'
    });
    $('.block-grid.four-up>li:nth-child(4n+1)').css({
        clear: 'both'
    });
    $('.block-grid.five-up>li:nth-child(5n+1)').css({
        clear: 'both'
    });

    if (Modernizr.touch) {
        $(window).load(function () {
            setTimeout(function () {
                window.scrollTo(0, 1);
            }, 0);
        });
    }

})(jQuery, this, FastClick);
