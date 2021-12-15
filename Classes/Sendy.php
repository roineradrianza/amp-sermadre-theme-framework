<?php

SERMA_SENDY::init();

use AhmadAwais\Sendy\API as Sendy;

/**
 * Sendy API
 *
 * SerMadre Sendy Newsletter Handler
 *
 * @version 0.1
 */

class SERMA_SENDY
{

    private static $_config = [
        'sendyUrl' => SERMA_SENDY_URL,
        'apiKey' => SERMA_SENDY_API_KEY,
        'listId' => SERMA_SENDY_LIST,
    ];

    public static function init()
    {
        //SUBSCRIBE
        add_action('wp_ajax_serma_sendy_subscribe', 'SERMA_SENDY::subscribe');
        add_action('wp_ajax_nopriv_serma_sendy_subscribe', 'SERMA_SENDY::subscribe');
    }

    public static function subscribe() : Mixed
    {
        $data = $_POST;
        $sendy = new Sendy(self::$_config);
        $responseArray = $sendy->subscribe(
            [
                'email' => sanitize_email($data['email']), // This is the only field required by sendy.
                'ipaddress' => $_SERVER['REMOTE_ADDR'], // User IP address (optional).
                'referrer' => esc_url_raw($data['url_referrer']), // URL where the user signed up from (optional).
            ]
        );
        wp_send_json($responseArray);
    }

}
