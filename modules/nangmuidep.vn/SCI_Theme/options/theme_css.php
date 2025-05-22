<?php
    // Lấy URL của trang chủ
    $home_url = home_url();

    // All Page
    include(locate_template('Module/assets/sass/lib.min.css'));
    include(locate_template('Module/assets/sass/custom.min.css'));
    // include(locate_template('Module/Home/header_knbm_1_0_0/sass/header_knbm_1_0_0.min.css'));
    // include(locate_template('Module/Home/footer_knhd_1_0_0/sass/footer_knhd_1_0_0.min.css'));
    // include(locate_template('Module/Home/tool_knbm_1_0_0/sass/tool_knbm_1_0_0.min.css'));
    // include(locate_template('Module/Home/seo_knbm_1_0_0/sass/seo_knbm_1_0_0.min.css'));

    if ( wp_is_mobile() ) {
	} else {
    }

    // Home page
    // if ( is_page_template( 'templates/page_canvas.php' ) && $home_url === 'https://nangmuidep.vn' ) {
    //     include(locate_template('Module/Home/slider_knbm_1_0_0/sass/slider_knbm_1_0_0.min.css'));
    //     include(locate_template('Module/Home/service_knbm_1_1_0/sass/service_knbm_1_1_0.min.css'));
    //     include(locate_template('Module/Home/service_knbm_1_0_0/sass/service_knbm_1_0_0.min.css'));
    //     include(locate_template('Module/Home/question_knbm_1_0_0/sass/question_knbm_1_0_0.min.css'));
    //     include(locate_template('Module/Home/news_knbm_1_0_0/sass/news_knbm_1_0_0.min.css'));
    // } 
   
?>