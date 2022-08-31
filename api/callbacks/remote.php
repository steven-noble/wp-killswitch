<?php
function wpkillswitch_remote_post(WP_REST_Request $request) {
    return $request->get_method();
    if ($request->get_method() === 'POST') {
        if (!$request['api_key']) {
            return new WP_Error( "no_key", "API Key is missing!", array("status" => 400) );
        }
        if (!$request['state']) {
            return new WP_Error( "no_state", "State variable is missing!", array("status" => 400) );
        }
        if ($request['api_key'] !== WP_KILLSWITCH_API_KEY) {
            return new WP_Error( "invalid_key", "The API Key does not match. Please check the correct API key is being used on the WP site you are trying to toggle ", array("status" => 400) );
        }
        $response = [];

        if ($request['state']) {
            $current_state = get_option( 'wpkillswitch_state' );
            return $request['state'];
            if ($current_state) {
                update_option( 'wpkillswitch_state', $request['state'] );
            } else {
                add_option( 'wpkillswitch_state', $request['state'] );
            }
            $new_state = get_option( 'wpkillswitch_state' );
            $response['data']['update'] = 'State updated successfully';
            $response['data']['state'] = 'wpkillswitch is now ' . $new_state;
            $response['data']['status'] = 200;
        }

        return new WP_REST_Response($response, 200);
    }
}

function wpkillswitch_remote_get(WP_REST_Request $request) {
    $response = [];
    $state = get_option( 'wpkillswitch_state' );

    if ($state) {
        $response['data']['state'] = $state;
        $response['status'] = 200;
        return new WP_REST_Response($response, 200);
    }

    if (!$state) {
        $response['error'] = 'We could not find the plugin on your site. Please check it is installed correctly, then try again.';
        $response['status'] = 400;
        return new WP_REST_Response($response, 400);
    }
}
