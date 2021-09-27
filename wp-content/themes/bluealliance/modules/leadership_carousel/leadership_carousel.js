(function ($) {
    $(document).on('ready', function () {
        var leadershipCarousel = $('.leadership-carousel-slider');
        if (leadershipCarousel.length && leadershipCarousel.find('.slide').length > 1) {
            leadershipCarousel.each(function () {
                $(this).slick({
                    dots: false,
                    arrows: true,
                    prevArrow: '<button class="prev-btn">' +
                        '<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"\n' +
                        '\t width="792.033px" height="792.033px" viewBox="0 0 792.033 792.033" style="enable-background:new 0 0 792.033 792.033;"\n' +
                        '\t xml:space="preserve">\n' +
                        '\t\t\t<path d="M617.858,370.896L221.513,9.705c-13.006-12.94-34.099-12.94-47.105,0c-13.006,12.939-13.006,33.934,0,46.874\n' +
                        '\t\t\t\tl372.447,339.438L174.441,735.454c-13.006,12.94-13.006,33.935,0,46.874s34.099,12.939,47.104,0l396.346-361.191\n' +
                        '\t\t\t\tc6.932-6.898,9.904-16.043,9.441-25.087C627.763,386.972,624.792,377.828,617.858,370.896z"/>\n' +
                        '</svg>' +
                        '</button>',
                    nextArrow: '<button class="next-btn">' +
                        '<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"\n' +
                        '\t width="792.033px" height="792.033px" viewBox="0 0 792.033 792.033" style="enable-background:new 0 0 792.033 792.033;"\n' +
                        '\t xml:space="preserve">\n' +
                        '\t\t\t<path d="M617.858,370.896L221.513,9.705c-13.006-12.94-34.099-12.94-47.105,0c-13.006,12.939-13.006,33.934,0,46.874\n' +
                        '\t\t\t\tl372.447,339.438L174.441,735.454c-13.006,12.94-13.006,33.935,0,46.874s34.099,12.939,47.104,0l396.346-361.191\n' +
                        '\t\t\t\tc6.932-6.898,9.904-16.043,9.441-25.087C627.763,386.972,624.792,377.828,617.858,370.896z"/>\n' +
                        '</svg>' +
                        '</button>',
                    fade: true,
                    slidesToShow: 1,
                    slidesToScroll: 1
                });
            });
        }
    });
})(jQuery);