jQuery(document).ready(function(){	
	
	// set the image class for conditional images
	var images = jQuery('img.conditional');
	
	// set the cutoff width, above which larger images should be loaded
	var cutoffWidth = 600;	

	if (jQuery(window).width() > cutoffWidth) {
		jQuery.each(images, function(index, img){		// loop over images
			if (jQuery(img).data('fullsrc') !== jQuery(img).attr('src')) {
				jQuery(img).attr('src', jQuery(img).data('fullsrc'));
			}
		});
	}
});