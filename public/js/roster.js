var sandhogs = sandhogs || {debug: true};
sandhogs.config = sandhogs.config || {};
sandhogs.htmlutil = sandhogs.htmlutil || {};

$(document).ready(function(){
	$('#banner-slider').slippry({
		transition: 'horizontal' // fade, horizontal, kenburns, false
	}); 
});