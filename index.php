<?php defined('ABSPATH') or die('The silence is god!');

/*
Plugin Name: Hide Expiry Warning For Elementor
Description: Plugin para ocultar o aviso de expiração da licença do Elementor Pro.
Author: Rodrigo Bogdanowicz
Author URI: https://www.bogdanowicz.com.br
Version: 1.0
Text Domain: hide-expiry-warning-elementor
*/


function ocultar_box_licenca_expirando() {
	echo '<style>.notice.elementor-message{display:none !important;}</style>';
}
add_action('admin_head', 'ocultar_box_licenca_expirando');