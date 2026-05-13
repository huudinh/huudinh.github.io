<?php
/**
 * Plugin Name: Custom TinyMCE Style Formats
 * Plugin URI: https://huudinh.github.io
 * Description: Thêm custom class vào TinyMCE và load style vào editor.
 * Version: 1.0.2
 * Author: Dinh Trieu
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Thêm styleselect
 */
add_filter('mce_buttons_2', function ($buttons) {

    if (!in_array('styleselect', $buttons)) {
        array_unshift($buttons, 'styleselect');
    }

    return $buttons;
});

/**
 * Thêm format
 */
add_filter('tiny_mce_before_init', function ($init) {

    $style_formats = [

        [
            'title'   => 'Alerts Success',
            'block'   => 'div',
            'classes' => 'alerts-success',
            'wrapper' => true
        ],

        [
            'title'   => 'Alerts Info',
            'block'   => 'div',
            'classes' => 'alerts-info',
            'wrapper' => true
        ],

        [
            'title'   => 'Alerts Danger',
            'block'   => 'div',
            'classes' => 'alerts-danger',
            'wrapper' => true
        ],

        [
            'title'   => 'Alerts Warning',
            'block'   => 'div',
            'classes' => 'alerts-warning',
            'wrapper' => true
        ],

        [
            'title'   => 'Alerts Light',
            'block'   => 'div',
            'classes' => 'alerts-light',
            'wrapper' => true
        ],
        [
            'title'   => 'Panels Success',
            'block'   => 'div',
            'classes' => 'panels-success',
            'wrapper' => true
        ],

        [
            'title'   => 'Panels Info',
            'block'   => 'div',
            'classes' => 'panels-info',
            'wrapper' => true
        ],

        [
            'title'   => 'Panels Danger',
            'block'   => 'div',
            'classes' => 'panels-danger',
            'wrapper' => true
        ],

        [
            'title'   => 'Panels Warning',
            'block'   => 'div',
            'classes' => 'panels-warning',
            'wrapper' => true
        ],

        [
            'title'   => 'Panels Light',
            'block'   => 'div',
            'classes' => 'panels-light',
            'wrapper' => true
        ],

    ];

    $init['style_formats'] = wp_json_encode($style_formats);

    $init['extended_valid_elements'] = '*[*]';

    return $init;
});

/**
 * Load CSS vào TinyMCE iframe
 */
add_filter('mce_css', function ($mce_css) {

    $css_url = plugin_dir_url(__FILE__) . 'sass/style.min.css?v=1.0.9';

    if (!empty($mce_css)) {
        $mce_css .= ',';
    }

    $mce_css .= $css_url;

    return $mce_css;
});

/**
 * Frontend CSS
 */
add_action('wp_enqueue_scripts', function () {

    wp_enqueue_style(
        'ctsf-editor-style',
        plugin_dir_url(__FILE__) . 'sass/style.min.css',
        [],
        '1.0.9'
    );
});

add_action('admin_head', function () {
    ?>
    <style>

        /* Fix TinyMCE styleselect active item */
        .mce-menu-item.mce-menu-item-preview.mce-active .mce-text,
        .mce-menu-item.mce-menu-item-preview.mce-active .mce-ico{
            color:#fff !important;
        }

    </style>
    <?php
});