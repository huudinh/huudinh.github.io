<?php
namespace Custom_Elementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Repeater;


if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Custom_Widget extends Widget_Base {

    public function get_name() {
        return 'custom_widget';
    }

    public function get_title() {
        return __( 'Slider 1.0.0', 'plugin-name' );
    }

    public function get_icon() {
        return 'eicon-code';
    }

    public function get_categories() {
        return [ 'custom-category' ];
    }

    protected function register_controls() {
        $this->start_controls_section(
            'image_slider_section',
            [
                'label' => __( 'Image Slider', 'plugin-name' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'image_desktop',
            [
                'label'   => __( 'Desktop Image', 'plugin-name' ),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater->add_control(
            'image_mobile',
            [
                'label'   => __( 'Mobile Image', 'plugin-name' ),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater->add_control(
            'link',
            [
                'label'       => __( 'Link URL', 'plugin-name' ),
                'type'        => Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'plugin-name' ),
                'default'     => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow'    => true,
                ],
            ]
        );

        $this->add_control(
            'slides',
            [
                'label'       => __( 'Slides', 'plugin-name' ),
                'type'        => Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'default'     => [],
                'title_field' => 'Slide',
            ]
        );

        $this->end_controls_section();
    }   

    protected function render() {
        $settings = $this->get_settings_for_display();

        if ( empty( $settings['slides'] ) ) {
            return;
        }

        // Bắt đầu in ra HTML slider
        echo '<section class="slider_knbm_1_0_0">';
        echo '<div class="slider_knbm_1_0_0__inner">';

        $data_js = [];

        foreach ( $settings['slides'] as $key => $item ) {
            $url = esc_url( $item['link']['url'] ?? '#' );
            $pc  = esc_url( $item['image_desktop']['url'] );
            $mb  = esc_url( $item['image_mobile']['url'] );

            // HTML slide
            if($key == 0){
                echo '<a href="' . $url . '" target="_blank" class="slider_knbm_1_0_0__item" aria-label="url">';
                echo '<picture>';
                echo '<source media="(max-width: 767px)" srcset="' . $mb . '" loading="lazy">';
                echo '<img src="' . $pc . '" alt="" loading="lazy">';
                echo '</picture>';
                echo '</a>';
            }

            // JS data
            $data_js[] = [
                'pc'  => $pc,
                'mb'  => $mb,
                'url' => $url,
            ];
        }

        echo '</div>'; // end __inner

        // Pagination & controls
        echo '<div class="slider_knbm_1_0_0__pagination"></div>';
        echo '<div class="slider_knbm_1_0_0__controls">';
        echo '<div class="slider_knbm_1_0_0__btn slider_knbm_1_0_0__btn--next">';
        echo '<img src="/wp-content/themes/SCI_Theme/Module/Home/slider_knbm_1_0_0/images/icon-next.png">';
        echo '</div>';
        echo '<div class="slider_knbm_1_0_0__btn slider_knbm_1_0_0__btn--prev">';
        echo '<img src="/wp-content/themes/SCI_Theme/Module/Home/slider_knbm_1_0_0/images/icon-prev.png">';
        echo '</div>';
        echo '</div>';

        echo '</section>';

        // Script JS xuất biến dataSlider
        echo '<script>';
        echo 'const dataSlider = ' . wp_json_encode( $data_js ) . ';';
        echo '</script>';
    }


    protected function content_template() {
        ?>
        <div class="custom-widget">{{{ settings.custom_text }}}</div>
        <?php
    }
}
