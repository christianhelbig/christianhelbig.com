/* * * * * * * * * * * * * * * * * * * * * * * * * *
 * DON'T FORGET TO CACHE BURST WHEN MAKING CHANGES *
 * * * * * * * * * * * * * * * * * * * * * * * * * */

/*
* MAIN JS FILE
* */

testimonials();

/* Testimonials About */

function testimonials() {
    let testimonials = jQuery(".testimonials .element");
    resizeElements(testimonials); // resize height of testimonial elements

    // change size of testimonial wrapper, when window is being resized
    window.onresize = function(){
        resizeElements();
    };

    let i = 1;

    // change testimonial every 6s
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

        // make sure all testimonials are hidden
        jQuery(testimonials).each(function() {
            jQuery(this).hide();
        });

        // fade in new testimonial
        jQuery(testimonials).eq(i).fadeIn(500, function() {
            jQuery(this).addClass("active");
        });
    });
}
