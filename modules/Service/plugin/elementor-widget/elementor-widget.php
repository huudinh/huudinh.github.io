<?php
/**
 * Plugin Name: Elementor Widget
 * Description: Tạo widget tùy chỉnh cho Elementor.
 * Version: 1.0.0
 * Author: Dinh Trieu
 * Author URI: https://www.tiktok.com/@thaygiaofrontend
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Ngăn truy cập trực tiếp
}

// Autoload hoặc tự include (chỉ có 1 widget nên để ở đây)
function custom_elementor_widget_init() {
    // Kiểm tra Elementor đã sẵn sàng
    if ( ! did_action( 'elementor/loaded' ) ) {
        return;
    }

    // Thêm category tùy chỉnh
    add_action( 'elementor/elements/categories_registered', function( $elements_manager ) {
        $elements_manager->add_category(
            'custom-category',
            [
                'title' => __( 'Module Web', 'plugin-name' ),
                'icon'  => 'fa fa-plug',
            ]
        );
    });

    // Đăng ký widget
    add_action( 'elementor/widgets/register', function( $widgets_manager ) {
        require_once __DIR__ . '/widgets/class-custom-widget.php';
        $widgets_manager->register( new \Custom_Elementor\Widgets\Custom_Widget() );
    });

    // Tùy chọn: enqueue CSS/JS nếu có
    // add_action( 'elementor/frontend/after_enqueue_scripts', function() {
    //     wp_enqueue_style( 'custom-widget-style', plugin_dir_url( __FILE__ ) . 'assets/style.min.css' );
    //     wp_enqueue_script( 'custom-widget-script', plugin_dir_url( __FILE__ ) . 'assets/script.min.js', [ 'jquery' ], false, true );
    // });
}
add_action( 'plugins_loaded', 'custom_elementor_widget_init' );
