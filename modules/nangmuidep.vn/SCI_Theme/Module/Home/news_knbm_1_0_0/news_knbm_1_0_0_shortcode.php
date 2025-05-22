<?php
// Định nghĩa đối tượng Template
class Template1_news_knbm_1_0_0 {
    public function generate($img, $link, $title, $date) {
        return '
            <div class="news_knbm_1_0_0__item">
                <a href="'.$link.'" class="news_knbm_1_0_0__article">
                    <img src="'.$img.'" alt="'.$title.'">
                    <div class="news_knbm_1_0_0__text">'.$title.'</div>
                </a>
            </div>
        ';
    }
}

class Template2_news_knbm_1_0_0 {
    public function generate($img, $link, $title, $date) {
        return '
            <div class="news_knbm_1_0_0__post">
                <a href="'.$link.'" class="news_knbm_1_0_0__thumb">
                    <img src="'.$img.'" alt="'.$title.'">
                </a>
                <a href="'.$link.'" class="news_knbm_1_0_0__title">'.$title.'</a>
            </div>
        ';
    }
}

function news_knbm_1_0_0_shortcode($atts, $content = null) {
    $category_slug1 = $atts['slug1'];
    $category_name1 = $atts['title1'];
    $category_slug2 = $atts['slug2'];
    $category_name2 = $atts['title2'];
    $template1 = new Template1_news_knbm_1_0_0(); // Tạo đối tượng Template
    $template2 = new Template2_news_knbm_1_0_0(); // Tạo đối tượng Template

    return '
        <section class="news_knbm_1_0_0">
            <div class="container">
                <div class="news_knbm_1_0_0__inner">
                    <div class="news_knbm_1_0_0__col news_knbm_1_0_0__col--1">
                        <div class="news_knbm_1_0_0__head">'.$category_name1.'</div>
                        <div class="news_knbm_1_0_0__slider">
                            <div class="news_knbm_1_0_0__wrapper">
                                <div class="news_knbm_1_0_0__box">
                                    '.showPostInCate($category_slug1, $template1, 4).' 
                                </div>
                            </div>
                            <div class="news_knbm_1_0_0__pagination"></div>
                        </div>
                        <a href="/'.$category_slug1.'/" class="news_knbm_1_0_0__btn">Đọc tiếp</a>
                    </div>
                    <div class="news_knbm_1_0_0__col news_knbm_1_0_0__col--2">
                        <div class="news_knbm_1_0_0__head">'.$category_name2.'</div>
                        <div class="news_knbm_1_0_0__list">
                            '.showPostInCate($category_slug2, $template2, 5).'                            
                            <a href="/'.$category_slug2.'/" class="news_knbm_1_0_0__btn">Đọc tiếp</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    ';
}
add_shortcode('news_knbm_1_0_0', 'news_knbm_1_0_0_shortcode');
?>