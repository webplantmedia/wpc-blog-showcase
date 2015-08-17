<?php
/*
Plugin Name: WP Canvas - Demo Blog Showcase
Plugin URI: http://webplantmedia.com/
Description: Showcase blog options on demo site
Author: Chris Baldelomar
Author URI: http://webplantmedia.com/
Version: 1.2
License: GPLv2 or later
*/
function wpc_demo_blog_showcase_default_options() {
	global $wpc2;
	
	if ( isset( $_GET['display'] ) && ! empty( $_GET['display'] ) ) {
		switch ( $_GET['display'] ) {
			case 'title' :
				$wpc2['display_format_blog'] = 'title';
				break;
			case 'grid' :
				$wpc2['display_format_blog'] = 'grid';
				break;
			case 'masonry' :
				$wpc2['display_format_blog'] = 'masonry';
				break;
			case 'excerpt' :
				$wpc2['display_format_blog'] = 'excerpt';
				break;
			case 'excerpt2' :
				$wpc2['display_format_blog'] = 'excerpt2';
				break;
			case 'content' :
				$wpc2['display_format_blog'] = 'content';
				break;
		}
	}
	if ( isset( $_GET['lead'] ) ) {
		if ( $_GET['lead'] ) {
			$wpc2['blog_first_show_full'] = '1';
		}
		else {
			$wpc2['blog_first_show_full'] = '';
		}
	}
}
add_action( 'wp_loaded', 'wpc_demo_blog_showcase_default_options', 11, 0 );
