(function ($) {
    $(document).on('ready', function () {
        var section = $('.faq-section');
        if(section.length) {
            var question = section.find('.question');

            if(question.length) {
                var q = question.find('.q');
                var a = question.find('.a');

                if(q.length && a.length) {
                    q.on('click', function () {
                        var self = $(this);
                        var currentA = self.next();

                        if(currentA.is(':visible')) {
                            self.removeClass('opened');
                            currentA.slideUp(120);
                        } else {
                            q.removeClass('opened');
                            a.slideUp(120);

                            self.addClass('opened');
                            currentA.slideDown(120);
                        }
                    });
                }
            }
        }
    });
})(jQuery);