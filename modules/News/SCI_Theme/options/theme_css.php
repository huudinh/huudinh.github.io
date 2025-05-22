<?php
    // Home page
    if ( is_page_template( 'templates/page_home.php' ) ) {
        include(locate_template("Module/Home/slider_mz_1_0_0/sass/slider_mz_1_0_0.min.css"));
        include(locate_template("Module/Home/news_mz_1_0_0/sass/news_mz_1_0_0.min.css"));
        include(locate_template("Module/Home/video_mz_1_0_0/sass/video_mz_1_0_0.min.css"));
        include(locate_template("Module/Home/news_mz_2_0_0/sass/news_mz_2_0_0.min.css"));
        include(locate_template("Module/Post/sidebar_mz_1_0_0/sass/sidebar_mz_1_0_0.min.css"));
    } else{
        // Inside Page 
        include(locate_template("Module/Post/postDetail_mz_1_0_0/sass/postDetail_mz_1_0_0.min.css"));
        include(locate_template("Module/Post/post_author_1_0_0/sass/post_author_1_0_0.min.css"));
        include(locate_template("Module/Post/postOther_mz_1_0_0/sass/postOther_mz_1_0_0.min.css"));	
        include(locate_template("Module/Post/sidebar_mz_1_0_0/sass/sidebar_mz_1_0_0.min.css"));	
        include(locate_template("Module/Category/cate_mz_1_0_0/sass/cate_mz_1_0_0.min.css"));
        include(locate_template("Module/Category/cate_mz_2_0_0/sass/cate_mz_2_0_0.min.css"));
        include(locate_template("Module/Category/pagination_1_0_0/sass/pagination_1_0_0.min.css"));
    }
    // All Page
    include(locate_template('Module/assets/sass/lib.min.css')); 
    include(locate_template('Module/assets/sass/custom.min.css')); 
    include(locate_template("Module/Header/header_mz_1_0_0/sass/header_mz_1_0_0.min.css"));
    include(locate_template("Module/Footer/footer_mz_1_0_0/sass/footer_mz_1_0_0.min.css"));
?>