<?php
if (!defined( 'WP_KILLSWITCH_API_KEY' )) {
    /* Hides all content on the frontend when activated */
    add_action('wp_head','hook_killswitch');

    function hook_killswitch() {
        $output="<style>body { background-color: #fff !important; } body * { display: none !important; }</style>";
        echo $output;
    }

    /* Adds an administration notice for the client to contact the webmaster */
    function client_notice() { ?>
        <div class="error">
            <p>Warning: Your website is currently inaccessible, please contact your webmaster as soon as possible.</p>
        </div>
    <?php }
    add_action( 'admin_notices', 'client_notice' );
}
