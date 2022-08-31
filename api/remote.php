<?php
include('callbacks/remote.php');

add_action( 'rest_api_init', function () {
    $namespace = 'wpkillswitch';
    $base = 'v1';
    register_rest_route( $namespace . '/' . $base, 'remote', array(
        'methods' => WP_REST_Server::EDITABLE,
        'callback' => 'wpkillswitch_remote_post',
        'args' => array(
            'api_key' => array (
                'required' => true
            ),
            'message' => array (
                'required' => false
            )
        )
    ));
    register_rest_route( $namespace . '/' . $base, 'remote', array(
        'methods' => WP_REST_Server::READABLE,
        'callback' => 'wpkillswitch_remote_get',
    ));
});
