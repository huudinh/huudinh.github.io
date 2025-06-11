<?php
// Định nghĩa đối tượng Template
class Template1_news_knhn_1_0_0 {
    public function generate($img, $link, $title, $date, $desc, $count) {
        $item = ''; // Khởi tạo biến trước
        if ($count > 1) {
            $item = 'item1';
        }
        return '
            <a href="'.$link.'" class="news_knhn_1_0_0__item '.$item.'">
                <div class="news_knhn_1_0_0__picChild">
                    <img width="100" height="100" src="'.$img.'" alt="'.$title.'">
                </div>
                <div class="news_knhn_1_0_0__desc">
                    '.$title.'
                </div>
            </a>
        ';
    }
}

class Template2_news_knhn_1_0_0 {
    public function generate($img, $link, $title, $date) {
        return '
            <a href="'.$link.'" class="news_knhn_1_0_0__item">
                <div class="news_knhn_1_0_0__pic">
                    <img width="275" height="175" src="'.$img.'" alt="'.$title.'">
                </div>
                <div class="news_knhn_1_0_0__desc">
                    '.$title.'
                </div>
            </a>
        ';
    }
}

function news_knhn_1_0_0_shortcode($atts, $content = null) {
    $category_slug1 = $atts['slug1'];
    $category_name1 = $atts['title1'];
    $category_slug2 = $atts['slug2'];
    $category_name2 = $atts['title2'];
    $template1 = new Template1_news_knhn_1_0_0(); // Tạo đối tượng Template
    $template2 = new Template2_news_knhn_1_0_0(); // Tạo đối tượng Template

    return '
        <section class="news_knhn_1_0_0">
            <div class="container">
                <div class="news_knhn_1_0_0__box">
                    <div class="news_knhn_1_0_0__boxLeft">
                        <div class="news_knhn_1_0_0__title">'.$category_name1.' </div>
                        <div class="news_knhn_1_0_0__line"></div>
                        <div class="news_knhn_1_0_0__boxNews">
                            '.showPostInCate($category_slug1, $template1, 6).'
                        </div>
                    </div>
                    <div class="news_knhn_1_0_0__boxRight">
                        <div class="news_knhn_1_0_0__title">'.$category_name2.'</div>
                        <div class="news_knhn_1_0_0__line"></div>
                        <div class="news_knhn_1_0_0__boxNews">
                            '.showPostInCate($category_slug2, $template2, 4).'
                        </div>
                    </div>
                </div>
            </div>
        </section>
    ';
}
add_shortcode('news_knhn_1_0_0', 'news_knhn_1_0_0_shortcode');
?>