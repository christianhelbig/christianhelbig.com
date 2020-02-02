/* * * * * * * * * * * * * * * * * * * * * * * * * *
 * DON'T FORGET TO CACHE BURST WHEN MAKING CHANGES *
 * * * * * * * * * * * * * * * * * * * * * * * * * */

//  Functions in this file
//  ----------------------
//  -> Testimonials
//       testimonials() - testimonial slider
//       testimonials_resizeElements() - helper for testimonials slider
//       changeActiveTestimonial() - helper for testimonials slider

/* * * * * * * * * * * * * * * * * *
 * Execute functions               *
 * * * * * * * * * * * * * * * * * */

testimonials();
submitContactFormListener();

////// END 'Execute functions' //////

/* * * * * * * * * * * * * * * * * *
 * Testimonials                    *
 * * * * * * * * * * * * * * * * * */

function testimonials() {
    /**
     * Testimonial slider.
     *
     * This function implements the slider functionality for testimonials. It changes the active testimonial
     * every 6 seconds.
     *
     * @param: none
     * @return: void
     */

    // get all testimonial elements and store them in variable
    let testimonials = jQuery(".testimonials .element");
    testimonials_resizeElements(testimonials);

    // change height of testimonials, when window is being resized
    window.onresize = function(){ testimonials_resizeElements() };

    // fade testimonial every 6 seconds
    let i = 1;
    setInterval(function(){
        // call function to perform fade animation
        changeActiveTestimonial(i, testimonials);

        if (i === testimonials.length - 1) {    // if this is the last testimonial, reset index i
            i = 0;
        } else {                                // otherwise increase index
            i++;
        }
    }, 6000);
}

function testimonials_resizeElements(testimonials) {
    /**
     * Resizes testimonials so they have the same height.
     *
     * This function resizes all testimonial heights when there is a window resize event.
     * This is used to ensure the same height for testimonials and a smooth transition.
     *
     * @listens: window.onresize
     * @param: {Array} testimonials -> Array with testimonial elements (class .testimonials .element)
     * @return: {void}
     */

    // remove height attribute for all testimonial elements
    jQuery(testimonials).each(function() {
        jQuery(this).css("height", "unset");
    });

    // get the biggest height of all testimonial elements
    let maxHeight = 0;
    jQuery(testimonials).each(function() {
        if (jQuery(this).outerHeight() > maxHeight) {
            maxHeight = jQuery(this).outerHeight();
        }
    });

    // change height to maximum height for all testimonial elements
    jQuery(testimonials).each(function() {
        jQuery(this).css("height", maxHeight);
    });

}

function changeActiveTestimonial(i, testimonials) {
    /**
     * Fades the testimonials.
     *
     * This function is used to fade out the current testimonial and fade in the next one, once the fadeOut()
     * animation is finished.
     *
     * @param: {Integer} i -> index of testimonial to be faded in
     * @param: {Array} testimonials -> Array with testimonial elements (class .testimonials .element)
     * @return: {void}
     */

    // fadeOut element that is currently active
    jQuery(".testimonials").find(".active").first().fadeOut(500, function() {
        // when animation is finished, remove class active
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

////// END 'Testimonials' //////


/* * * * * * * * * * * * * * * * * *
 * Contact form                    *
 * * * * * * * * * * * * * * * * * */

function submitContactFormListener() {
    /**
     * Submits form using ajax call
     *
     * This function fires as soon as a submit button within a contact form is clicked (form needs to have
     * class 'contact-form'). The submit button is being disabled and colors of the button are being changed.
     *
     * @param none
     * @listens click -> click on submit button within contact form
     * @return {void}
     */

    // call this listener on all submit buttons in contact forms
    jQuery('.contact-form').each(function(){
        let form = jQuery(this);
        let btn = jQuery(this).find('button[type="submit"]').first();

        // on button click
        jQuery(btn).on('click', function(){
            // prevent form submit
            event.preventDefault();

            // disable button and show 'processing' text
            jQuery(btn).attr("disabled", true);
            jQuery(btn).addClass('disabled');
            jQuery(btn).text('Processing');

            // serialize form data
            let formData = jQuery(form).serialize();

            // submit form using ajax
            jQuery.ajax({
                type: 'POST',
                url: $(form).attr('action'),
                data: formData
            })
                .done(function(response){ jQuery(form).find('#form-messages').append(response); })
                .fail(function(response){ jQuery(form).find('#form-messages').append(response); })
        })
    })
}

function contactFormValidation() {
    // TODO
}