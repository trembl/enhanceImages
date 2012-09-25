<?php

/*
	enhanceImages
	------
	
	Plugin Name: enhanceImages
	Plugin URI: 
	Description: Replace low-src images with higher-src version, depending on cutoff-width. Depends on jQuery. Add 'data-fullsrc="full_img.png"' and 'class="conditional"' to your images.
	Author: Georg Tremmel
	Version: 1.0
	Author URI: http://www.trembl.org

	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	THIS SOFTWARE AND DOCUMENTATION IS PROVIDED "AS IS," AND COPYRIGHT
	HOLDERS MAKE NO REPRESENTATIONS OR WARRANTIES, EXPRESS OR IMPLIED,
	INCLUDING BUT NOT LIMITED TO, WARRANTIES OF MERCHANTABILITY OR
	FITNESS FOR ANY PARTICULAR PURPOSE OR THAT THE USE OF THE SOFTWARE
	OR DOCUMENTATION WILL NOT INFRINGE ANY THIRD PARTY PATENTS,
	COPYRIGHTS, TRADEMARKS OR OTHER RIGHTS.COPYRIGHT HOLDERS WILL NOT
	BE LIABLE FOR ANY DIRECT, INDIRECT, SPECIAL OR CONSEQUENTIAL
	DAMAGES ARISING OUT OF ANY USE OF THE SOFTWARE OR DOCUMENTATION.

	You should have received a copy of the GNU General Public License
	along with this program. If not, see <http://gnu.org/licenses/>.

*/


// add JS, depends on jQuery
function addEnhanceImagesScript() {
	wp_register_script('enhance-js', plugins_url('/enhanceImages.js', __FILE__, array('jquery'), '1.0', false) );		// depends on jQuery
	wp_enqueue_script('enhance-js');            
}    
 
add_action('wp_enqueue_scripts', 'addEnhanceImagesScript');



?>