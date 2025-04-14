
<div class="container">
    <div class="newsMain">
        <div class="newsMain__boxLeft">
            <?php 
                $rows = $field["news_place"];
                foreach($rows as $row):
                    $news_title = $row['news_title'];
                    $news_content = $row['news_content'];

                    // Get Cate
                    $category_id = $row['news_content'];
                    // $cate_link = esc_html( $category->slug );
                    $cate_link = get_category_link($category_id);
    
                    $args = array(
                        'post_status' => 'publish',
                        'showposts' => 4,
                        'cat' => $category_id,
                    );
                    $getposts = new WP_query($args); 
                    global $wp_query; $wp_query->in_the_loop = true; 
                    $i = 0;
                    echo '
                        <section class="news_mz_2_0_0">
                            <h2 class="news_mz_2_0_0__breadcrumb">
                                <a href="'.$cate_link.'">'.$news_title.'</a>
                            </h2>
                            <div class="news_mz_2_0_0__box">
                    ';
                    while ($getposts->have_posts()) : $getposts->the_post();   
                        $kim = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');            
                        // $img = ($kim[0]!='')?$kim[0]:catch_that_image($post->ID);
                        if ( is_array($kim) && isset($kim[0]) && $kim[0] != '' ) {
                            $img = $kim[0];
                        } else {
                            $img = catch_that_image($post->ID);
                        }
                        $title = get_the_title($post->ID);
                        $excerpt = wp_trim_words( get_the_excerpt($post->ID), 30 );
                        if($i == 0){
                            echo '
                                <div class="news_mz_2_0_0__boxTop">
                                    <a class="news_mz_2_0_0__boxTopPic" href="'.get_permalink($post->ID).'" title="'.$title.'">
                                        <img width="1200" height="848" src="'.$img.'" alt="'.$title.'">
                                    </a>
                                    <div class="news_mz_2_0_0__desc">
                                        <h3 class="news_mz_2_0_0__title">
                                            <a href="'.get_permalink($post->ID).'" title="'.$title.'">
                                                '.$title.'
                                            </a>
                                        </h3>
                                        <p class="news_mz_2_0_0__subTitle">'.$excerpt.'</p>
                                    </div>
                                </div>
                                <div class="news_mz_2_0_0__boxBottom">                                        
                            ';
                        } else {
                            echo '
                                <a class="news_mz_2_0_0__childItem" href="'.get_permalink($post->ID).'" title="'.$title.'">
                                    <div class="news_mz_2_0_0__pic">
                                        <img width="1200" height="848" src="'.$img.'" alt="'.$title.'">
                                    </div>
                                    <h3 class="news_mz_2_0_0__childTitle">'.$title.'</h3>
                                </a>
                            ';
                        }
                        $i++;
                    endwhile; 
                    wp_reset_postdata();                            
            
                    if($i == 0){
                        echo '</div></section>';
                    } else {
                        echo '</div></div></section>';
                    }
                endforeach;
            ?>
        </div>
        <div class="newsMain__boxRight">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>