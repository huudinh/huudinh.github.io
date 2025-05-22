<?php
// Định nghĩa đối tượng Template
class Template1_news_knhx_1_0_0 {
    public function generate($img, $link, $title, $date) {
        return '
            <div class="news_knhx_1_0_0__item">
                <div class="news_knhx_1_0_0__thumb">
                    <a href="'.$link.'">
                        <img src="'.$img.'" alt="'.$title.'">
                    </a>
                </div>
                <a href="'.$link.'" class="news_knhx_1_0_0__title">'.$title.'</a>
            </div>
        ';
    }
}

class Template2_news_knhx_1_0_0 {
    public function generate($img, $link, $title, $date) {
        return '
            <div class="news_knhx_1_0_0__item">
                <div class="news_knhx_1_0_0__thumb">
                    <a href="'.$link.'">
                        <img src="'.$img.'" alt="'.$title.'">
                    </a>
                </div>
                <a href="'.$link.'" class="news_knhx_1_0_0__title">'.$title.'</a>
            </div>
        ';
    }
}

class Template3_news_knhx_1_0_0 {
    public function generate($img, $link, $title, $date) {
        return '
            <div class="news_knhx_1_0_0__item--1">
                <a href="'.$link.'" class="news_knhx_1_0_0__title">'.$title.'</a>
                <div class="news_knhx_1_0_0__meta">
                    <div class="news_knhx_1_0_0__date"><span class="news_knhx_1_0_0__icon news_knhx_1_0_0__icon--clock"></span> '.$date.'</div>
                    <a href="'.$link.'" class="news_knhx_1_0_0__more">Xem thêm <span class="news_knhx_1_0_0__icon news_knhx_1_0_0__icon--arrow"></span></a>
                </div>
            </div>
        ';
    }
}

function news_knhx_1_0_0_shortcode($atts, $content = null) {
    $category_slug1 = $atts['slug1'];
    $category_name1 = $atts['title1'];
    $category_slug2 = $atts['slug2'];
    $category_name2 = $atts['title2'];
    $category_slug3 = $atts['slug3'];
    $category_name3 = $atts['title3'];
    $template1 = new Template1_news_knhx_1_0_0(); // Tạo đối tượng Template
    $template2 = new Template2_news_knhx_1_0_0(); // Tạo đối tượng Template
    $template3 = new Template3_news_knhx_1_0_0(); // Tạo đối tượng Template

    return '
        <section class="news_knhx_1_0_0">
            <div class="container">
                <div class="news_knhx_1_0_0__inner">
                    <div class="news_knhx_1_0_0__col">
                        <div class="news_knhx_1_0_0__head">'.$category_name1.'</div>
                        <div class="news_knhx_1_0_0__list">
                            '.showPostInCate($category_slug1, $template1, 3).' 
                        </div>
                    </div>
                    <div class="news_knhx_1_0_0__col">
                        <div class="news_knhx_1_0_0__head">'.$category_name2.'</div>
                        <div class="news_knhx_1_0_0__list">
                            '.showPostInCate($category_slug2, $template2, 3).'
                        </div>
                    </div>
                    <div class="news_knhx_1_0_0__col">
                        <div class="news_knhx_1_0_0__head">'.$category_name3.'</div>
                        <div class="news_knhx_1_0_0__list">
                            '.showPostInCate($category_slug3, $template3, 3).'
                        </div>
                    </div>
                </div>
            </div>
        </section>
    ';
}
add_shortcode('news_knhx_1_0_0', 'news_knhx_1_0_0_shortcode');
?>