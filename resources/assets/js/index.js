var sandhogs = sandhogs || {
    debug: true
};
sandhogs.config = sandhogs.config || {};
sandhogs.htmlutil = sandhogs.htmlutil || {};
$(document).ready(function() {
	sandhogs.htmlutil.default_slider('.slider-default');
});


/**
 * Activate the default slippry slider
 *
 */
sandhogs.htmlutil.default_slider = function(selector) {
    if ($(selector)) {
        $(selector).slippry({
            transition: 'horizontal', // fade, horizontal, kenburns, false
            adaptiveHeight: true
        });
    }
}