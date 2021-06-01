<?php
/* Hides all content on the frontend when activated */
add_action( 'wp_head', 'wp_killswitch_frontend' );

function wp_killswitch_frontend()
{
    $current_state = get_option( 'wpkillswitch_state' );
    if ($current_state == 'on') {
        $output="<style>body { background-color: #fff !important; } body * { display: none !important; }</style>";
        echo $output;
    }
}
