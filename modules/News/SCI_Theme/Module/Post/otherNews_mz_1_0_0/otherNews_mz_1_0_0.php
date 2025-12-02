<?php
    $path = get_template_directory_uri();
    $path = $path.'/Module/Post/otherNews_mz_1_0_0';

    // Lấy danh sách bài viết từ trường ACF
    $content = get_field('post_other');

    // Kiểm tra nếu có bài viết
    if( $content) {
        $html = "";

        // Lặp qua từng bài viết và thêm vào danh sách
        foreach($content as $key => $post):
            setup_postdata($post);
            $title = get_the_title();
            $link = get_permalink();
            $time = get_the_date('d/m/Y');
            // $img = get_the_post_thumbnail_url();
            $html .='
                <li class="otherNews_mz_1_0_0__item">
                    <a href="'.$link.'" class="otherNews_mz_1_0_0__title">'.$title.'</a>
                </li>
            ';
        endforeach;
        wp_reset_postdata(); 

        // Hiển thị danh sách bài viết
        echo '
            <div class="otherNews_mz_1_0_0__topic">Bài viết liên quan</div>
            <ul class="otherNews_mz_1_0_0">'.$html.'</ul>';
    }
?>