//@prepros-prepend modernizr.js
//@prepros-prepend bootstrap4\bootstrap.bundle.js
//@prepros-prepend easing.js
//@prepros-prepend skip-link-focus-fix.js
//@prepros-prepend moment\moment-with-locales.min.js
//@prepros-prepend jquery.fancybox.min.js
//@prepros-prepend bootstrap-select.js
//@prepros-prepend jquery-ui.min.js
//@prepros-prepend slick.js
//@prepros-prepend sliding-menu.js

(function($) {
	jQuery(document).ready(function() {
        $('#cookie-notice').addClass('slide-up');

        $('#close-notice, #accept-cookie').click(function(e) {
            e.preventDefault();
            $("#cookie-notice").removeClass("slide-up");
            $("#cookie-notice").addClass("slide-down");
        });

        $('.quote-form #q2 .add-car-btn').click(function() {
          $(this).fadeOut(300);
          $('.quote-form #q2 .add-car-div').fadeIn(300);
        });

        $('.quote-form #q3 .add-car-btn').click(function() {
          $(this).fadeOut(300);
          $('.quote-form #q3 .add-car-div').fadeIn(300);
        });

        var menu_ul = jQuery('#sidebar li.has-menu > ul'),
            menu_a  = jQuery('#sidebar li.has-menu > a');
              menu_ul.hide();
              menu_a.click(function(e) {
            e.preventDefault();
            if(!jQuery(this).hasClass('active')) {
              menu_a.removeClass('active');
              menu_ul.filter(':visible').slideUp('normal');
              jQuery(this).addClass('active').next().stop(true,true).slideDown('normal');
            } else {
              jQuery(this).removeClass('active');
              jQuery(this).next().stop(true,true).slideUp('normal');
            }
        });

        jQuery("sidebar li.has-menu > a ").attr("href","javascript:;");

	    // mobile multilevel menu
        $("#menu").slidingMenu();

	 	jQuery("#top__mobile .menu-btn").click(function(){
	    	jQuery(".menu-overlay").addClass("active-overlay");
            jQuery('.main-menu-sidebar').addClass("menu-active");
	    });
	   
	    jQuery('.main-menu-sidebar .close-menu-btn, .menu-overlay').click(function(){
	        jQuery('.main-menu-sidebar').removeClass("menu-active");
	        jQuery(".menu-overlay").removeClass("active-overlay");
	    });
        $('#city-testimonials').slick({
            infinite: false,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 3,
            dots: true,
            arrows: true,
            autoplay: false,
            infinite: true,
            responsive: [{
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        autoplay: false,
                        autoplaySpeed: 8000
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
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


        $(function () {
            
            var date1 = new Date('05/05/2021');
            var date2 = new Date('05/20/2021');

            var date3 = new Date('06/05/2021');
            var date4 = new Date('06/20/2021');

            var date5 = new Date('07/05/2021');
            var date6 = new Date('07/20/2021');                
                
            $(".date-picker-input").datepicker({
                minDate: '0',
                showOtherMonths: true,
                selectOtherMonths: true, 
                
                
                beforeShowDay: function( date ) {
                    var highlight = date >= date1 && date <= date2
                    var highlight2 = date >= date3 && date <= date4
                    var highlight3 = date >= date5 && date <= date6
                    if( highlight || highlight2 || highlight3 ) {
                         return [true, "event", 'Tooltip text'];
                    } else {
                         return [true, '', ''];
                    }
                }
        
            });

    });

    $('.date-picker-input').on('click', function(e) {
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
	
		// $('#testimonials-section #city-testimonials .ct-box').matchHeight();

        // Read More Read Less
    	$('#city-testimonials .ct-box .show_hide').click(function() {
            $(this).prev().slideToggle();
            $(this).parent().find('.content-less').toggleClass('active');
            if (($(this).text()) == "read more") {
                $(this).text("read less");
            } else {
                $(this).text("read more");
            }
        });

	});
})(jQuery);
