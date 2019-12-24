/*
* MAIN JS FILE
* */

testimonials();

/* Testimonials About */

function testimonials() {
    let testimonials = jQuery(".testimonials .element");
    resizeElements(testimonials); // resize height of testimonial elements

    window.onresize = function(){
        resizeElements();
    };

    let i = 1;

    setInterval(function(){
        changeActiveTestimonial(i, testimonials);
        if (i === testimonials.length - 1) {
            i = 0;
        } else {
            i++;
        }
    }, 6000);
}

function resizeElements(testimonials) {
    jQuery(testimonials).each(function() {
        jQuery(this).css("height", "unset");    // remove height, in case of resizing window
    });

    /* Fix the height of testimonial wrapper, to prevent page resizing */
    let biggestHeight = 0;
    jQuery(testimonials).each(function() {                      /* Check all elements */
        if (jQuery(this).outerHeight() > biggestHeight) {
            biggestHeight = jQuery(this).outerHeight();         /* Update height if necessary */
        }
    });

    jQuery(testimonials).each(function() {
        jQuery(this).css("height", biggestHeight);
    });

    /* Update height*/
    // jQuery(".testimonials-wrapper").css("height", biggestHeight + "px");

}

function changeActiveTestimonial(i, testimonials) {
    jQuery(".testimonials").find(".active").first().fadeOut(500, function() {
        jQuery(this).removeClass("active");
        jQuery(testimonials).eq(i).fadeIn(500, function() {
            jQuery(this).addClass("active");
        });
    });
}
