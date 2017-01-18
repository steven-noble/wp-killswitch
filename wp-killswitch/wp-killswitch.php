<?php /*
Plugin Name:  WP Killswitch
Plugin URI:   http://graphicscove.com
Description:  WP Killswitch lets you non-destructively white out a difficult client's website while this plugin is active (recommended as an mu-plugin).
Version:      0.0.1
Author:       Steven Noble
Author URI:   http://graphicscove.com
License:      GPLv2 or later
*/

/* Hides all content on the frontend when activated */
add_action('wp_head','hook_killswitch');

function hook_killswitch()
{
$output="<style>body * { display: none !important; }</style>";
echo $output;
}

/* Adds an administration notice for the client to contact the webmaster */
function client_notice() {
    ?>
    <div class="error">
        <p>Warning: Your website is currently inaccessible, please contact your webmaster as soon as possible.</p>
    </div>
    <?php
}
add_action( 'admin_notices', 'client_notice' );
