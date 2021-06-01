<?php
function wpkillswitch_remote(WP_REST_Request $request) {
    if (!$request['api_key']) {
        return new WP_Error( "no_key", "API Key is missing!", array("status" => 400) );
    }
    if (!$request['state']) {
        return new WP_Error( "no_state", "State variable is missing!", array("status" => 400) );
    }
    if ($request['api_key'] !== WP_KILLSWITCH_API_KEY) {
        return new WP_Error( "invalid_key", "API Key is invalid!", array("status" => 400) );
    }
    $response = [];

    if ($request['state']) {
        $current_state = get_option( 'wpkillswitch_state' );
        if ($current_state) {
            update_option( 'wpkillswitch_state', $request['state'] );
        } else {
            add_option( 'wpkillswitch_state', $request['state'] );
        }
        $new_state = get_option( 'wpkillswitch_state' );
        $response['update'] = 'State updated successfully';
        $response['state'] = 'wpkillswitch is now ' . $new_state;
    }

    return new WP_REST_Response($response, 200);
}
