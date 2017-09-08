(function($){
    "use strict"; // Start of use strict
    $(document).ready(function() {
        $(".owl-carousel").each(function(index, el) {
            var config = $(this).data();
            config.navText = ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'];
            config.smartSpeed="800";

            if($(this).hasClass('owl-style2')){
                config.animateOut="fadeOut";
                config.animateIn="fadeIn";
            }

            if($(this).hasClass('dotsData')){
                 config.dotsData="true";
            }
            $(this).owlCarousel(config);
        });

        /*  [ Main Menu ]
         - - - - - - - - - - - - - - - - - - - - */
        $(document).on('click','.parent .toggle-submenu',function(){
            $( this ).parent().toggleClass('has-active');
        });

        $("[data-action='toggle-nav']").on( 'click', function() {
            $( this ).toggleClass('has-open');
            $(".navigation").toggleClass("has-open");
            $("body").toggleClass("menu-open");

        }) ;

        $("[data-action='toggle-head']").on( 'click', function() {
            $( this ).toggleClass('has-open');
            $(".header-content").toggleClass("has-open");

        }) ;

        /*  [ hover dropdown ]
         - - - - - - - - - - - - - - - - - - - - */

        $(document).on('mousemove','.customer-setting, .minicart-wrapper',function(){
            $(this).addClass('open');
        });

        $(document).on('mouseout','.customer-setting, .minicart-wrapper',function(){
            $(this).removeClass('open');
        });
        /*  [ Sticky Menu ]
         - - - - - - - - - - - - - - - - - - - - */
        $('.mid-header ').sticky({ topSpacing: 0 });

        /*  [ Back to top ]
         - - - - - - - - - - - - - - - - - - - - */
        $('.back-to-top').on( 'click', function(e) {
            e.preventDefault();
            $("html, body").animate({
                scrollTop: 0
            }, 500);
        });
        //Qty
        // This button will increment the value
        $(document).on('click','.qtyplus',function(e){
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var fieldName = $(this).attr('field');
            // Get its current value
            var currentVal = parseInt($('input[name='+fieldName+']').val());
            // If is not undefined
            if (!isNaN(currentVal)) {
                // Increment
                $('input[name='+fieldName+']').val(currentVal + 1);
            } else {
                // Otherwise put a 0 there
                $('input[name='+fieldName+']').val(0);
            }
        });
        // This button will decrement the value till 0
        $(document).on('click','.qtyminus',function(e){
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var fieldName = $(this).attr('field');
            // Get its current value
            var currentVal = parseInt($('input[name='+fieldName+']').val());
            // If it isn't undefined or its greater than 0
            if (!isNaN(currentVal) && currentVal > 0) {
                // Decrement one
                $('input[name='+fieldName+']').val(currentVal - 1);
            } else {
                // Otherwise put a 0 there
                $('input[name='+fieldName+']').val(0);
            }
        });
    });

    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('.back-to-top').fadeIn();
        } else {
            $('.back-to-top').fadeOut();
        }
    });

})(jQuery);
