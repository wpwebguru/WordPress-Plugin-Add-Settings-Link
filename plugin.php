<?php
/**
 * Plugin Name: Add Settings Link
 * Description: WordPress Plugin Add Settings Link
 * Version: 1.0
 */

// WordPress Plugin Add Settings Link
	add_filter('plugin_action_links_'.plugin_basename(__FILE__), 'wpcp_add_plugin_page_settings_link');
	function wpcp_add_plugin_page_settings_link( $links ) {
		$links[] = '<a href="' .
			admin_url( 'admin.php?page=wpcp-settings' ) .
			'">' . __('Settings') . '</a>';
		return $links;
	}
