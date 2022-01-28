<?php
    if ( ! function_exists('app_url')) {
        function app_url() {
            $CI =& get_instance();
            return $CI->config->slash_item('base_url') . 'application/';
        }
    }
    
    if ( ! function_exists('assets_url')) {
        function assets_url() {
            $CI =& get_instance();
            return $CI->config->slash_item('base_url') . 'application/assets/';
        }
    }
    
    if ( ! function_exists('css_url')) {
        function css_url() {
            return assets_url() . 'css/';
        }
    }
    
    if ( ! function_exists('js_url')) {
        function js_url() {
            return assets_url() . 'js/';
        }
    }
?>