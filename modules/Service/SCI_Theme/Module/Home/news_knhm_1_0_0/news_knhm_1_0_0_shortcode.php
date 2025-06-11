<?php
// Định nghĩa đối tượng Template
class Template1_news_knhm_1_0_0 {
    public function generate($img, $link, $title, $date, $desc) {
        return '
            <div class="news_knhm_1_0_0__item">
                <a href="'.$link.'" class="news_knhm_1_0_0__thumb">
                    <img src="'.$img.'" alt="'.$title.'">
                </a>
                <a href="'.$link.'" class="news_knhm_1_0_0__title">'.$title.'</a>
                <div class="news_knhm_1_0_0__desc">
                    '.$desc.'
                </div>
            </div>
        ';
    }
}

class Template2_news_knhm_1_0_0 {
    public function generate($img, $link, $title, $date) {
        return '
            <div class="news_knhm_1_0_0__itemSmall">
                <div class="news_knhm_1_0_0__thumbSmall">
                    <a href="'.$link.'"><img src="'.$img.'" alt="'.$title.'"></a>
                </div>
                <div class="news_knhm_1_0_0__titleSmall"><a href="'.$link.'">'.$title.'</a></div>
            </div>
        ';
    }
}

function news_knhm_1_0_0_shortcode($atts, $content = null) {
    $category_slug1 = $atts['slug1'];
    $category_name1 = $atts['title1'];
    $category_slug2 = $atts['slug2'];
    $category_name2 = $atts['title2'];
    $template1 = new Template1_news_knhm_1_0_0(); // Tạo đối tượng Template
    $template2 = new Template2_news_knhm_1_0_0(); // Tạo đối tượng Template

    return '
        <section class="news_knhm_1_0_0">
            <div class="container">
                <div class="news_knhm_1_0_0__inner">
                    <div class="news_knhm_1_0_0__hot">
                        <div class="news_knhm_1_0_0__head">'.$category_name1.'</div>
                        <div class="news_knhm_1_0_0__inner">
                            '.showPostInCate($category_slug1, $template1, 2).'
                        </div>
                    </div>
                    <div class="news_knhm_1_0_0__new">
                        <div class="news_knhm_1_0_0__head">'.$category_name2.'</div>
                        <div class="news_knhm_1_0_0__list">
                            '.showPostInCate($category_slug2, $template2, 5).'
                        </div>
                    </div>
                </div>
            </div>
        </section>
    ';
}
add_shortcode('news_knhm_1_0_0', 'news_knhm_1_0_0_shortcode');
?>