<?php
// Định nghĩa đối tượng Template
class Template_question_knbm_1_0_0 {
    public function generate($img, $link, $title, $date) {
        return '
            <div class="question_knbm_1_0_0__item">
                <a href="'.$link.'" class="question_knbm_1_0_0__title">
                    <span class="question_knbm_1_0_0__icon question_knbm_1_0_0__icon--question"></span> 
                    <span class="question_knbm_1_0_0__text">'.$title.'</span>
                </a>
                <div class="question_knbm_1_0_0__time">
                    <span class="question_knbm_1_0_0__icon question_knbm_1_0_0__icon--clock"></span> 
                    <span class="question_knbm_1_0_0__text">'.$date.'</span>
                </div>
            </div>
        ';
    }
}

function question_knbm_1_0_0_shortcode($atts,$content=null){
	$category_name = $atts['title'];
	$category_slug = $atts['slug'];
    $templateObj = new Template_question_knbm_1_0_0(); // Tạo đối tượng Template

	return '
        <section class="question_knbm_1_0_0 loaded">
            <div class="container">
                <div class="question_knbm_1_0_0__box">
                    <div class="question_knbm_1_0_0__top">
                        <div class="question_knbm_1_0_0__head">'.$category_name.'</div>
                        <a href="/'.$category_slug.'/" class="question_knbm_1_0_0__btn">Xem thêm</a>
                    </div>
                    <div class="question_knbm_1_0_0__list">
                        '.showPostInCate($category_slug, $templateObj, 4).'
                    </div>
                </div>
            </div>
        </section>
	';
}
add_shortcode('question_knbm_1_0_0','question_knbm_1_0_0_shortcode');
?>