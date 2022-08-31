<?php /*
Plugin Name:  WP Killswitch
Plugin URI:   https://wpkillswitch.io
GitHub Plugin URI: https://github.com/graphicscove/wp-killswitch
GitHub Plugin URI: https://github.com/graphicscove/wp-killswitch
Description:  WP Killswitch lets you non-destructively white out a Wordpress website.
Version:      0.1.1
Author:       Steven Noble
Author URI:   https://graphicscove.com
*/

// Load API
include( plugin_dir_path( __FILE__ ) . 'api/remote.php');

// Load includes
include( plugin_dir_path( __FILE__ ) . 'inc/frontend.php');
include( plugin_dir_path( __FILE__ ) . 'inc/admin-notice.php');
include( plugin_dir_path( __FILE__ ) . 'inc/hide-plugin.php');
include( plugin_dir_path( __FILE__ ) . 'inc/local-killswitch.php');
