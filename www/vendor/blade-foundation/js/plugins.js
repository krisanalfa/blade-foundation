(function ($, window, FastClick, Modernizr) {
    'use strict';

    FastClick.attach(document.body);

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

})(this.jQuery, this, this.FastClick, this.Modernizr);
