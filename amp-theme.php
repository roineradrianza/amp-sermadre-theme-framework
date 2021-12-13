<?php
/*
Plugin Name: Ser Madre Tema AMP  
Plugin URI: https://wordpress.org/plugins/accelerated-mobile-pages/
Description: Tema AMP para SerMadre desarrollado bajo el Framework AMP.
Version: 0.1
Author: SerMadre
Author URI: https://sermadre.com/
License: GPL2
AMP: AMP Tema SerMadre
*/

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;


define('SERMA_AMP_THEME_FILE', __FILE__);
define('SERMA_AMP_THEME', dirname(SERMA_AMP_THEME_FILE));
define('SERMA_AMP_THEME_URL', plugin_dir_url(SERMA_AMP_THEME_FILE));

include SERMA_AMP_THEME . '/enqueue.php';