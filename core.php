/*
Plugin Name: scroll to top
Plugin URL: https://wordpress.org/plugins/scroll-to-top
Description: پلاگین اسکرول به بالای صفحه
Author: رضااسماعیلی
version: 1.0.0
Licence: GPLv2 or later
Author URI: http://develop-wp.local
 */

defined(constant_name:'ABSPATH') || exit;
defined('STT_PLUGIN_DIR',plugin_dir_path(file:__FILE__));
defined('STT_PLUGIN_URL',plugin_dir_url(file:__FILE__));

function stt_reqister-assets(){
    wp_register_style(handle:'stt-style',plugins_url(path:'scroll-to-top/assets/css/style.css'),deps:'',ver:'1.0.0');
    wp_enqueue_style(handle:'stt-style');
    wp_register_script(handle:'stt-main-js',src:STT_PLUGIN_URL.'assets/js/main.js'),['jquery'],in_footer:'true',ver:'1.0.0');
    wp_enqueue_script(handle:'stt-main-js');
}