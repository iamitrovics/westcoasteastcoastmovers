(function ($) {
    jQuery(document).ready(function () {

        $('#close-notice, #accept-cookie').click(function(e) {
            e.preventDefault();
            $("#cookie-notice").removeClass("slide-up");
            $("#cookie-notice").addClass("slide-down");
        });        

        $('.quote-form #q2 .add-car-btn').click(function () {
            $(this).fadeOut(300);
            $('.quote-form #q2 .add-car-div').fadeIn(300);
        });

        $('.quote-form #q3 .add-car-btn').click(function () {
            $(this).fadeOut(300);
            $('.quote-form #q3 .add-car-div').fadeIn(300);
        });

        var menu_ul = jQuery('#sidebar li.has-menu > ul'),
            menu_a = jQuery('#sidebar li.has-menu > a');
        menu_ul.hide();
        menu_a.click(function (e) {
            e.preventDefault();
            if (!jQuery(this).hasClass('active')) {
                menu_a.removeClass('active');
                menu_ul.filter(':visible').slideUp('normal');
                jQuery(this).addClass('active').next().stop(true, true).slideDown('normal');
            } else {
                jQuery(this).removeClass('active');
                jQuery(this).next().stop(true, true).slideUp('normal');
            }
        });

        jQuery("sidebar li.has-menu > a ").attr("href", "javascript:;");


    // Menu
    $('#mobile-menu--btn a').click(function(){
        $('.main-menu-sidebar').addClass("menu-active");
        $('.menu-overlay').addClass("active-overlay");
        $(this).toggleClass('open');
    });

    // Menu
    $('.close-menu-btn').click(function(){
        $('.main-menu-sidebar').removeClass("menu-active");
        $('.menu-overlay').removeClass("active-overlay");
    });

        $(function() {
    
        var menu_ul = $('.nav-links > li.has-menu  ul'),
            menu_a  = $('.nav-links > li.has-menu  small');
        
        menu_ul.hide();
        
        menu_a.click(function(e) {
            e.preventDefault();
            if(!$(this).hasClass('active')) {
            menu_a.removeClass('active');
            menu_ul.filter(':visible').slideUp('normal');
            $(this).addClass('active').next().stop(true,true).slideDown('normal');
            } else {
            $(this).removeClass('active');
            $(this).next().stop(true,true).slideUp('normal');
            }
        });
        
        });
        
    $(".nav-links > li.has-menu  small ").attr("href","javascript:;");

    var $menu = $('#menu');

    $(document).mouseup(function (e) {
        if (!$menu.is(e.target) // if the target of the click isn't the container...
        && $menu.has(e.target).length === 0) // ... nor a descendant of the container
        {
        $menu.removeClass('menu-active');
        $('.menu-overlay').removeClass("active-overlay");
        }
    });


        $('#city-testimonials').slick({
            infinite: false,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 1,
            dots: true,
            arrows: true,
            autoplay: false,
            infinite: true,
            responsive: [{
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        autoplay: false,
                        autoplaySpeed: 8000
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        autoplay: false,
                        autoplaySpeed: 8000
                    }
                },

                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        autoplay: false,
                        infinite: false,
                        autoplaySpeed: 8000
                    }
                },

            ]
        });

        $('#portfolio-slider').slick({
            infinite: false,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 1,
            dots: false,
            arrows: true,
            autoplay: false,
            responsive: [{
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        autoplay: false,
                        autoplaySpeed: 8000
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        autoplay: false,
                        autoplaySpeed: 8000
                    }
                },

                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        autoplay: false,
                        infinite: false,
                        autoplaySpeed: 8000
                    }
                },

            ]
        });

        // date picker
        $(function () {

            var date1 = new Date('05/05/2022');
            var date2 = new Date('05/20/2022');

            var date3 = new Date('06/05/2022');
            var date4 = new Date('06/20/2022');

            var date5 = new Date('07/05/2022');
            var date6 = new Date('07/20/2022');

            $(".date-picker-input").datepicker({
                minDate: '0',
                showOtherMonths: true,
                selectOtherMonths: true,


                beforeShowDay: function (date) {
                    var highlight = date >= date1 && date <= date2
                    var highlight2 = date >= date3 && date <= date4
                    var highlight3 = date >= date5 && date <= date6
                    if (highlight || highlight2 || highlight3) {
                        return [true, "event", 'Tooltip text'];
                    } else {
                        return [true, '', ''];
                    }
                }

            });

        });

        $('.date-picker-input').on('click', function (e) {
            e.preventDefault();
            $(this).attr("autocomplete", "off");
        });

        $(".date-picker-input").attr("autocomplete", "off");
        $('#testimonials-slider').slick({
            dots: false,
            arrows: false,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 2000,
        });

        // Fancybox
        $('#portfolio-slider [data-fancybox="gallery"]').fancybox();

        //$('#top-cta .features-list .feature-box h3').matchHeight();

        // Read More Read Less
        $('#city-testimonials .ct-box .show_hide').click(function () {
            $(this).prev().slideToggle();
            $(this).parent().find('.content-less').toggleClass('active');
            if (($(this).text()) == "read more") {
                $(this).text("read less");
            } else {
                $(this).text("read more");
            }
        });


        $(function () {
            $('.quote-cta--single a.btn-cta').click(function () {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html, body').animate({
                            scrollTop: target.offset().top - 100
                        }, 1000);
                        return false;
                    }
                }
            });
        });

        //modal
        setTimeout(function () {
            jQuery('.modal-overlay').addClass('show');
        }, 1000);
        $('.zebra_tooltips_below').click(function (e) {
            var myEm = $(this).attr('data-my-element');
            var modal = $('.modal-overlay[data-my-element = ' + myEm + '], .modal[data-my-element = ' + myEm + ']');
            e.preventDefault();
            modal.addClass('active');
            $('html').addClass('fixed');
        });
        $('.close-modal').click(function () {
            var modal = $('.modal-overlay, .modal');
            $('html').removeClass('fixed');
            modal.removeClass('active');
        });

        $('.quote-form-in .nav-tabs').each(function () {
            var $active, $content, $links = $(this).find('a');
            $active = $($links.filter('[href="' + location.hash + '"]')[0] || $links[0]);
            $active.addClass('active');
            $content = $($active.attr('href'));
            $links.not($active).each(function () {
                $($(this).attr('href')).hide();
            });
            $(this).on('click', 'a', function (e) {
                var c = this;
                $active.removeClass('active');
                $content.fadeOut("fast", function () {
                    $active = $(c);
                    $content = $($(c).attr('href'));

                    $active.addClass('active');
                    $content.fadeIn("fast");
                });
                e.preventDefault();
            });
        });

    });
})(jQuery);