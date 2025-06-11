<?php
// Get Cate ID
$category = get_queried_object();
$catId = isset($category->term_id) ? $category->term_id : null;
$video = ($catId == 5524) ? 'video' : '';
?>
<style>
    <?php 
        include(locate_template("Module/Category/cate_1_0_0/sass/cate_1_0_0.min.css")); 
    ?>
</style>
<div class="cate_1_0_0">
    <div class="cate_1_0_0__box">
        <?php 
        if(is_search()){
            $string = esc_html($_GET['s']);
            $result = preg_replace('/([^\pL\.\ ]+)/u', '', strip_tags($string));
            $allsearch = new WP_Query(array('s' => $string, 'showposts' => -1)); 
            $count = $allsearch->post_count; 
            echo '
                <h1 class="cate_1_0_0__title">Tìm kiếm</h1>
                <p>Kết quả tìm được với từ khóa <b style="color:#f26649"> '.$result.' </b> có <b style="color:#f26649">'.$count.'</b> bài viết
            ';
            wp_reset_query();
        } else {
            echo '<h1 class="cate_1_0_0__title">';
            echo single_term_title();
            echo '</h1>';
        }
        ?>
        <?php
        if(category_description()){
            echo '
                <div class="cate_1_0_0__info">'.category_description().'</div>
            ';
        }
        ?>
    </div>
    <div class="cate_1_0_0__content">
        <ul>
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    global $post; 
                    $kim = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');  
					$img = ($kim && $kim[0] != '') ? $kim[0] : catch_that_image($post->ID);
                    $time = get_post_modified_time('d/m/Y');
                    // Author Info
                    $author_name = get_the_author();
                    $author_url = esc_url(get_author_posts_url(get_the_author_meta('ID')));

                    // Show Sapo
                    $sapo = get_field('sapo', $post->ID);

                    if ($sapo != ''){
                        $excerpt = wp_trim_words($sapo, 30);
                    } else {
                        $excerpt = wp_trim_words(get_the_excerpt($post->ID), 200);
                    }
                    
                    echo '
                        <li class="media">
                            <div class="cate_1_0_0__contentPic '.$video.'">
                                <a href="'.get_permalink($post->ID).'"><img width="250" height="250" src="'.$img.'" alt="'.get_the_title($post->ID).'"></a>
                            </div>
                     
                            <div class="cate_1_0_0__contentBody">
                                <h2 class="cate_1_0_0__contentTitle"><a href="'.get_permalink($post->ID).'">'.get_the_title($post->ID).'</a></h2>
                                <i class="cate_1_0_0__time">Cập nhật: '.$time.' - Tác giả: <a href="'.$author_url.'">'.$author_name.'</a></i>
                                <div class="cate_1_0_0__contentDesc">'.$excerpt.'</div>
                            </div>
                        </li>
                    ';
                endwhile;
            endif;
            ?>
        </ul>
    </div>
</div>