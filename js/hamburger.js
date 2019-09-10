(function ($) {
    $(function () {
        $('#nav-toggle').on('click', function () {
            $('body').toggleClass('open');
        });
        $('#navigation li').on({
            'mouseenter': function () {
                var index = $(this).index();
                $('#nav-bg-wrap .nav-bg').eq(index).addClass('active');

            },
            'mouseleave': function () {
                var index = $(this).index();
                $('#nav-bg-wrap .nav-bg').eq(index).removeClass('active');
            }
        });
    });
})(jQuery);