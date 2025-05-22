<?php
// Định nghĩa đối tượng Template
class Template {
    public function generate($img, $link, $title) {
        return '
            <div class="service_knbm_1_1_0__item">
                <a href="'.$link.'" class="service_knbm_1_1_0__article">
                    <div class="service_knbm_1_1_0__thumb">
                        <img src="'.$img.'" alt="'.$title.'">
                    </div>
                    <div class="service_knbm_1_1_0__title">'.$title.'</div>
                </a>
            </div>
        ';
    }
}

function service_knbm_1_1_0_shortcode($atts, $content = null) {
    $category_slug = $atts['slug'];
    $category_name = $atts['title'];
    $templateObj = new Template(); // Tạo đối tượng Template

    return '
        <section class="service_knbm_1_1_0">
            <div class="container">
                <div class="service_knbm_1_1_0__head">'.$category_name.'</div>
                <div class="service_knbm_1_1_0__box">
                    <div class="service_knbm_1_1_0__inner">
                        '.showPostInCate($category_slug, $templateObj, 4).'
                    </div>
                </div>
            </div>
        </section>
    ';
}
add_shortcode('service_knbm_1_1_0', 'service_knbm_1_1_0_shortcode');
?>
