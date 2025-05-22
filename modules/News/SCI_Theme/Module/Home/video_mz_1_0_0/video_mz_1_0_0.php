<?php
    $category = $field['video_content'];
    $category_id = $category->term_id;
    $cate_link = esc_html( $category->slug );
?>
<section class="video_mz_1_0_0">
    <div class="container">
        <div class="video_mz_1_0_0__box">
            <h2 class="video_mz_1_0_0__breadcrumb">
                <a href="<?php echo $cate_link ?>">VIDEO</a>
            </h2>
            <div class="video_mz_1_0_0__boxVideo">
                <?php                   
                    $args = array(
                        'post_status' => 'publish',
                        'showposts' => 3,
                        'cat' => $category_id,
                    );
                    $getposts = new WP_query($args); 
                    global $wp_query; $wp_query->in_the_loop = true; 
                    $i = 0;
                    while ($getposts->have_posts()) : $getposts->the_post();   
                        $kim = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');            
                        // $img = ($kim[0]!='')?$kim[0]:catch_that_image($post->ID);
                        if ( is_array($kim) && isset($kim[0]) && $kim[0] != '' ) {
                            $img = $kim[0];
                        } else {
                            $img = catch_that_image($post->ID);
                        }
                        $title = get_the_title($post->ID);
                        echo '
                            <a class="video_mz_1_0_0__item" href="'.get_permalink($post->ID).'" title="'.$title.'">
                                <div class="video_mz_1_0_0__pic">
                                    <img src="'.$img.'" alt="'.$title.'">
                                    <i class="video_mz_1_0_0__icon"></i>
                                </div>
                                <div class="video_mz_1_0_0__title">
                                    <h3 class="video_mz_1_0_0__title">'.$title.'</h3>
                                </div>
                            </a>
                        ';
                    endwhile; 
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</section>