(function ($) {
    $(function(){
        new WOW().init();
    });

    // Mobile menu open/close
    var burgerBtn = $('.h-burger-btn')
    var menu = $('header .right-block');
    if (burgerBtn.length && menu.length) {
        burgerBtn.on('click', function () {
            menu.slideToggle(150);
        });
    }

    var withChildrenA = $('.menu-item-has-children > a');
    if(withChildrenA.length) {
        withChildrenA.on('click', function (e) {
            e.preventDefault();

            var self = $(this);

            if($(window).width() < 992) {
                var subMenu = self.next();
                var subMenus = $('.sub-menu')

                if(subMenu.length) {

                    if(subMenu.is(':visible')) {
                        subMenu.slideUp(150);
                    } else {
                        subMenus.slideUp(150);
                        subMenu.slideDown(150).css('display', 'flex');
                    }

                }
            }
        });
    }
})(jQuery);