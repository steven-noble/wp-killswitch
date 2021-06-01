<?php
/* Adds an administration notice for the client to contact the webmaster */
function wp_killswitch_client_notice() {
    $current_state = get_option( 'wpkillswitch_state' );
    if ($current_state === 'on') {
        ?>
        <div class="error">
            <?php echo '<p>Warning: Your website is currently inaccessible, please contact your webmaster as soon as possible.</p> '; ?>
        </div>
        <?php
    }
}
add_action( 'admin_notices', 'wp_killswitch_client_notice' );
