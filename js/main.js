


// jQuery(window).load(function() {
//     jQuery("#preloader").fadeOut("slow");
// });

jQuery(document).ready(function(){

    wow = new WOW({
        mobile:       false,       // default
      }
    )
    wow.init();

     jQuery('#top-nav').onePageNav({
        currentClass: 'current',
        changeHash: true,
        scrollSpeed: 1200
    });

     
    //animated header class
    jQuery(window).scroll(function () {
        if (jQuery(window).scrollTop() > 100) {
            jQuery(".navbar-default").addClass("animated");
        } else {
            jQuery(".navbar-default").removeClass('animated');
        }
    });

   

    jQuery('.about-slider').owlCarousel({
        items:1,
        merge:true,
        loop:true,
        video:true,
        smartSpeed: 600,
        autoplay:true
    });




    //contact form validation
    jQuery("#contact-form").validate({
        rules: {
            name: {
                required: true,
                minlength: 2
            },
            message: {
                required: true,
                minlength: 2
            },
            email: {
                required: true,
                email: true
            }
        },
        messages: {
            name: {
                required: "Please enter Your Name",
                minlength: "Your name must consist of at least 2 characters"
            },
            message: {
                required: "Please Write Something",
                minlength: "Your message must consist of at least 2 characters"
            },
            email: "Please enter a valid email address"
        },
        submitHandler: function(form) {
            jQuery(form).ajaxSubmit({
                type:"POST",
                data: jQuery(form).serialize(),
                url:"mail.php",
                success: function() {
                    jQuery('#contact-form :input').attr('disabled', 'disabled');
                    jQuery('#contact-form').fadeTo( "slow", 0.15, function() {
                        jQuery(this).find(':input').attr('disabled', 'disabled');
                        jQuery(this).find('label').css('cursor','default');
                        jQuery('#success').fadeIn();
                    });
                },
                error: function() {
                    jQuery('#contact-form').fadeTo( "slow", 0.15, function() {
                        jQuery('#error').fadeIn();
                    });
                }
            });
        }
    });

});

