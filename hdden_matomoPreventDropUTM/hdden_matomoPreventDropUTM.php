<?php
/*
 * Plugin Name: Matomo - Prevent Drop UTM (HDDen)
 * Description: Changes "Tracker.PageUrl.getQueryParametersToExclude" parameter to []
 * Author: HDDen
 * Author URI: https://github.com/HDDen/
 * Version: 1.0.0
 */

add_action('plugins_loaded', function () {
	$is_matomo_plugin_activated = function_exists('matomo_add_plugin');
	if ($is_matomo_plugin_activated) {
		// you can add one more multiple Matomo plugins here
        // __FILE__ should point to the main WordPress plugin file. If the code is not in your main WordPress PHP file,
        // then you need to specify the path to the main WordPress PHP file.
		matomo_add_plugin( __DIR__ . '/plugins/W9999_HDDenMatomoPreventDropUTM', __FILE__ );
	}
}, 1000);
