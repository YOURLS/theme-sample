<?php
/*
Theme Name: Your Theme Name
Theme URI: http://github.com/your_name/your_theme
Description: One line description of your theme
Version: 1.0
Author: Your Name
Author URI: http://your-site-if-any/
 */

yourls_add_filter( 'html_template_content', '[your_theme_name]_template' );
yourls_add_filter( 'html_assets_queue', '[your_theme_name]_assets' );

function [your_theme_name]_template() {
	return $elements = array(
		'before' => array(
			),
		'after' => array(
			),
	);
}

function [your_theme_name]_assets() {
	return $assets = array(
		'css' => array(
			'yourls_style'
			),
	);
}
