<?php
	/**
	* Plugin Name: MDB Landing Page
	* Description: Redirects all homepage requests to another page
	* Version: 1.0
	* Author: Marcus Battle
	* Author URI: http://marcusbattle.com
	*/

	function redirect_to_home() {

		if( is_home() && !isset($_REQUEST['show_home']) ) {
			wp_redirect( get_site_url(1) . '/theplatform' );
		}
	}

	add_action('template_redirect', 'redirect_to_home' );

?>