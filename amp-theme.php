<?php
/*
Plugin Name: Ser Madre Tema AMP  
Plugin URI: https://wordpress.org/plugins/accelerated-mobile-pages/
Description: Tema AMP para SerMadre desarrollado bajo el Framework AMP.
Version: 0.7
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

require SERMA_AMP_THEME . '/vendor/autoload.php';

include SERMA_AMP_THEME . '/config/global.php';

include SERMA_AMP_THEME . '/Classes/Sendy.php';