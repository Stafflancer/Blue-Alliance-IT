(function ($) {
    $(document).on('ready', function () {
        var parentSection = $('.hero');

        if(parentSection.length) {
            var imageSrc = parentSection.data('image');
            if(imageSrc.length && $(window).width() > 768) {
                parentSection.parallax({imageSrc: imageSrc});
            }
        }
    });
})(jQuery);