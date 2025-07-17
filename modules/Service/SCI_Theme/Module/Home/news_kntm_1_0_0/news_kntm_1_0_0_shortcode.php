<?php
// Định nghĩa đối tượng Template
class Template1_news_kntm_1_0_0 {
    public function generate($img, $link, $title, $date, $desc) {
        return '
            <a href="'.$link.'" class="news_kntm_1_0_0__persona">
                <div class="news_kntm_1_0_0__avatar">
                    <div class="news_kntm_1_0_0__wrapper">
                        <img src="'.$img.'" alt="'.$title.'">
                    </div>
                </div>
                <div class="news_kntm_1_0_0__content">
                    <div class="news_kntm_1_0_0__name">'.$title.'</div>
                    <div class="news_kntm_1_0_0__text">'.$desc.'</div>
                </div>
            </a>
        ';
    }
}

class Template2_news_kntm_1_0_0 {
    public function generate($img, $link, $title, $date) {
        return '
            <div class="news_kntm_1_0_0__itemSmall">
                <div class="news_kntm_1_0_0__thumbSmall">
                    <a href="'.$link.'"><img src="'.$img.'" alt="'.$title.'"></a>
                </div>
                <div class="news_kntm_1_0_0__titleSmall"><a href="'.$link.'">'.$title.'</a></div>
            </div>
        ';

        return '
            <div class="news_kntm_1_0_0__persona">
                <div class="news_kntm_1_0_0__avatar">
                    <a href="'.$link.'" class="news_kntm_1_0_0__wrapper">
                        <img src="'.$img.'" alt="'.$title.'">
                    </a>
                </div>
                <div class="news_kntm_1_0_0__content news_kntm_1_0_0__content--1">
                    <a href="'.$link.'" class="news_kntm_1_0_0__text news_kntm_1_0_0__text--1">'.$title.'</a>
                </div>
            </div>
        ';
    }
}

function news_kntm_1_0_0_shortcode($atts, $content = null) {
    $category_slug1 = $atts['slug1'];
    $category_name1 = $atts['title1'];
    $category_slug2 = $atts['slug2'];
    $category_name2 = $atts['title2'];
    $template1 = new Template1_news_kntm_1_0_0(); // Tạo đối tượng Template
    $template2 = new Template2_news_kntm_1_0_0(); // Tạo đối tượng Template

    return '
        <section class="news_kntm_1_0_0">
            <div class="container">
                <div class="news_kntm_1_0_0__inner">
                    <div class="news_kntm_1_0_0__hot">
                        <div class="news_kntm_1_0_0__head">'.$category_name1.'</div>
                        <div class="news_kntm_1_0_0__inner">
                            '.showPostInCate($category_slug1, $template1, 2).'
                        </div>
                    </div>
                    <div class="news_kntm_1_0_0__new">
                        <div class="news_kntm_1_0_0__head">'.$category_name2.'</div>
                        <div class="news_kntm_1_0_0__list">
                            '.showPostInCate($category_slug2, $template2, 5).'
                        </div>
                    </div>
                </div>
            </div>
        </section>
    ';

    return '
        <section class="news_kntm_1_0_0">
            <div class="container">
                <div class="news_kntm_1_0_0__inner">
                    <div class="news_kntm_1_0_0__comment">
                        <div class="news_kntm_1_0_0__head">'.$category_name1.'</div>
                        <div class="news_kntm_1_0_0__box">
                            '.showPostInCate($category_slug1, $template1, 2).'
                        </div>
                    </div>
                    <div class="news_kntm_1_0_0__news">
                        <div class="news_kntm_1_0_0__head">'.$category_name2.'</div>
                        <div class="news_kntm_1_0_0__box">
                            '.showPostInCate($category_slug2, $template2, 5).'
                        </div>
                    </div>
                </div>
            </div>
        </section>
    ';
}
add_shortcode('news_kntm_1_0_0', 'news_kntm_1_0_0_shortcode');
?>