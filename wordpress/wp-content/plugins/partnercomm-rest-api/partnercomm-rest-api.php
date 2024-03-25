<?php

/**
 * Plugin Name: PartnerComm REST API Plugin
 * Description: A simple plugin to extend the WordPress REST API.
 * Version: 1.0
 * Author: Steve Simonson
 */

if (!defined('ABSPATH')) {
    exit;
}

add_action('rest_api_init', function () {
    register_rest_route('partnercomm', '/polls', array(
        'methods' => 'GET',
        'callback' => 'get_partnercomm_polls',
        'permission_callback' => '__return_true'
    ));
});

function get_partnercomm_polls(WP_REST_Request $request)
{
    $cache_key = 'partnercomm_polls_cache';
    $cached_data = get_transient($cache_key);

    if (false !== $cached_data) {
        return new WP_REST_Response($cached_data, 200);
    }

    $data = array(
        array(
            'header' => 'Partnercomm Poll',
            'subheader' => 'How many years of professional coding experience do you have?',
            'responses' => array(
                '< 1',
                '1 - 2',
                '3 - 5',
                '6 - 9',
                '10 +'
            )
        )
    );
    
    // Cache the data for 23 hours, 59 minutes, and 59 seconds
    set_transient($cache_key, $data, 86399); 

    return new WP_REST_Response($data, 200);
}
