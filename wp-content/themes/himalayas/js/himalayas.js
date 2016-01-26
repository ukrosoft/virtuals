jQuery(document).ready(function () {
    //******************** sticky header *********************//
    var stickyNavTop = jQuery('.header-wrapper').height();

    var stickyNav = function () {
        var scrollTop = jQuery(window).scrollTop();

        if (scrollTop > stickyNavTop) {
            jQuery('.header-wrapper').addClass('stick');
        } else {
            jQuery('.header-wrapper').removeClass('stick');
        }
    };

    stickyNav();

    jQuery(window).scroll(function () {
        stickyNav();
    });


    //************************ one page nav ***********************************//

    jQuery('#site-navigation').onePageNav({
        currentClass: 'current-one-page-item',
        changeHash: false,
        scrollSpeed: 1500,
        scrollThreshold: 0.5,
        filter: '',
        easing: 'swing',
        begin: function () {
            //I get fired when the animation is starting
        },
        end: function () {
            //I get fired when the animation is ending
        },
        scrollChange: function (jQuerycurrentListItem) {
            //I get fired when you enter a section and I pass the list item of the section
        }
    });

    //******************************* Scroll to top *************************//

    jQuery('.scrollup').click(function () {
        jQuery("html, body").animate({
            scrollTop: 0
        }, 2000);
        return false;
    });


    jQuery('.map-btn').click(function () {
        jQuery('#map iframe').slideToggle('slow');
        jQuery('.map-btn i').toggleClass('fa-angle-double-up');
        jQuery('.map-btn i').toggleClass('fa-angle-double-down');
    });


    jQuery('.search-icon').click(function () {
        jQuery('.search-box').toggleClass('active');
    });

    jQuery('.search-box .close').click(function () {
        jQuery('.search-box').removeClass('active');
    });

    /************************** responsive menu toggle ***************************/

    jQuery('.menu-toggle').click(function () {
        jQuery('#site-navigation .menu-primary-container').slideToggle();
    });
    jQuery('.tabs > li.tab').on('click', function (event) {
        event.preventDefault();
        data_target = jQuery(this).find('a').attr('href');
        jQuery('li.tab > a[href="' + data_target + '"]').parent().addClass('active');
        jQuery('li.tab > a[href!="' + data_target + '"]').each(function (index) {
            jQuery(this).parent().removeClass('active');
        });
        current_tab = jQuery(".tabs-content > div[data-toggle='" + data_target + "']");
        other_tabs = jQuery(".tabs-content > div[data-toggle!='" + data_target + "']");
        other_tabs.removeClass('active');
        other_tabs.hide();
        current_tab.addClass('active');
        current_tab.show();
    });

    jQuery('.tabs-secondary > li.tab-secondary').on('click', function (event) {
        event.preventDefault();
        data_target = jQuery(this).find('a').attr('href');
        jQuery('li.tab-secondary > a[href="' + data_target + '"]').parent().addClass('active');
        jQuery('li.tab-secondary > a[href!="' + data_target + '"]').each(function (index) {
            jQuery(this).parent().removeClass('active');
        });
        current_tab = jQuery(".tabs-content-secondary > div[data-toggle='" + data_target + "']");
        other_tabs = jQuery(".tabs-content-secondary > div[data-toggle!='" + data_target + "']");
        other_tabs.removeClass('active');
        other_tabs.hide();
        current_tab.addClass('active');
        current_tab.show();
    });

    jQuery('.dropdown').hover(function() {
        jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn();
    }, function() {
        jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut();
    });

    jQuery(window).on('load', function () {
        jQuery('.parallax-section').each(function () {
            jQuery(this).parallax('center', 0.2, true);
        });
        jQuery('.slides').each(function () {
            jQuery(this).parallax('center', 0.2, true);
        });
    });

    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 100) {
            jQuery('.scrollup').fadeIn();
        } else {
            jQuery('.scrollup').fadeOut();
        }
    });
    jQuery('.image-popup').magnificPopup({type: 'image'});

    jQuery(window).on('resize load', function () {
        if (jQuery(window).width() <= 751){
            jQuery('.menu-toggle').removeClass('hide');
        }
        if (jQuery(window).width() >= 752){
            jQuery('.menu-toggle').addClass('hide');
        }
    });
});


/*
 Plugin: jQuery Parallax
 Version 1.1.3
 Author: Ian Lunn
 Twitter: @IanLunn
 Author URL: http://www.ianlunn.co.uk/
 Plugin URL: http://www.ianlunn.co.uk/plugins/jquery-parallax/

 Dual licensed under the MIT and GPL licenses:
 http://www.opensource.org/licenses/mit-license.php
 http://www.gnu.org/licenses/gpl.html
 */

(function( $ ){
    var $window = $(window);
    var windowHeight = $window.height();

    $window.resize(function () {
        windowHeight = $window.height();
    });

    $.fn.parallax = function(xpos, speedFactor, outerHeight) {
        var $this = $(this);
        var getHeight;
        var firstTop;
        var paddingTop = 0;

        //get the starting position of each element to have parallax applied to it
        $this.each(function(){
            firstTop = $this.offset().top;
        });

        if (outerHeight) {
            getHeight = function(jqo) {
                return jqo.outerHeight(true);
            };
        } else {
            getHeight = function(jqo) {
                return jqo.height();
            };
        }

        // setup defaults if arguments aren't specified
        if (arguments.length < 1 || xpos === null) xpos = "50%";
        if (arguments.length < 2 || speedFactor === null) speedFactor = 0.1;
        if (arguments.length < 3 || outerHeight === null) outerHeight = true;

        // function to be called whenever the window is scrolled or resized
        function update(){
            var pos = $window.scrollTop();

            $this.each(function(){
                var $element = $(this);
                var top = $element.offset().top;
                var height = getHeight($element);

                // Check if totally above or totally below viewport
                if (top + height < pos || top > pos + windowHeight) {
                    return;
                }

                $this.css('backgroundPosition', xpos + " " + Math.round((firstTop - pos) * speedFactor) + "px");
            });
        }

        $window.bind('scroll', update).resize(update);
        update();
    };
})(jQuery);