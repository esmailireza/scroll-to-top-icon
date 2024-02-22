<?php
/*
Plugin Name: scroll to top
Plugin URI: https://wordpress.org/plugins/scrool-top-top
Description: پلاگین اسکرول به بالای صفحه
Author: رضا اسماعیلی
Version: 1.0.0
Licence: GPLv2 or Later
Author URI: http://develop-wp.local
*/
defined('ABSPATH') || exit;

define('STT_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('STT_PLUGIN_URL', plugin_dir_url(__FILE__));

function stt_register_assets()
{
    wp_register_style('stt-style',plugins_url('scroll-to-top/assets/css/style.css'),'','1.0.0');
    wp_enqueue_style('stt-style');
    wp_register_script('stt-main-js',STT_PLUGIN_URL.'assets/js/main.js',['jquery'],'1.0.0','true');
    wp_enqueue_script('stt-main-js');
}
add_action('wp_enqueue_scripts','stt_register_assets');
include_once STT_PLUGIN_DIR.'view/front/scroll-to-top.php';




