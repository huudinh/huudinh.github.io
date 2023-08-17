<section class="news_mz_1_0_0">
    <div class="container">
        <div class="news_mz_1_0_0__box">
            <?php
                $category = $field['news_content'];
                $category_id = $category->term_id;
                $cate_link = esc_html( $category->slug );

                $args = array(
                    'post_status' => 'publish',
                    'showposts' => 5,
                    'cat' => $category_id,
                );
                $getposts = new WP_query($args); 
                global $wp_query; $wp_query->in_the_loop = true; 
                $i = 0;
                while ($getposts->have_posts()) : $getposts->the_post();   
                    $kim = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');            
                    $img = ($kim[0]!='')?$kim[0]:catch_that_image($post->ID);
                    $title = get_the_title($post->ID);
                    if($i == 0){
                        echo '
                            <a class="news_mz_1_0_0__boxLeft" href="'.get_permalink($post->ID).'" title="'.$title.'">
                                <img width="1200" height="848" src="'.$img.'" alt="'.$title.'">                                
                                <h3 class="news_mz_1_0_0__title">'.$title.'</h3>
                            </a>
                            <div class="news_mz_1_0_0__boxRight">
                        ';
                    } else {
                        echo '
                            <a class="news_mz_1_0_0__item" href="'.get_permalink($post->ID).'" title="'.$title.'">
                                <img width="940" height="788" src="'.$img.'" alt="'.$title.'">
                                <h3 class="news_mz_1_0_0__subTitle">'.$title.'</h3>
                            </a>
                        ';
                    }
                    $i++;
                endwhile; 
                wp_reset_postdata();
            ?>
        </div>
    </div>
</section>
<!-- <section class="news_lhl_1_0_0 ">
    <div class="container">
        <div class="news_lhl_1_0_0__title"><?php echo $field['news_title'] ?></div>
        <div class="news_lhl_1_0_0__box">
            <?php
                $category = $field['news_content'];
                $category_id = $category->term_id;
                $cate_link = esc_html( $category->slug );

                $args = array(
                    'post_status' => 'publish',
                    'showposts' => 5,
                    'cat' => $category_id,
                );
                $getposts = new WP_query($args); 
                global $wp_query; $wp_query->in_the_loop = true; 
                while ($getposts->have_posts()) : $getposts->the_post();     
                    echo '
                        <a href="'.get_permalink($post->ID).'" title="'.get_the_title($post->ID).'">
                            <img src="/rs/?w=217&h=125&src='.get_the_post_thumbnail_url($post->ID).'" alt="'.get_the_title($post->ID).'">
                            <h3 class="news_lhl_1_0_0__boxTitle">'.get_the_title($post->ID).'</h3>
                        </a>
                    ';
                endwhile; 
                wp_reset_postdata();
            ?>
        </div>
        <div class="news_lhl_1_0_0__more">
            <a href="/<?php echo $cate_link ?>/" title="Read more" class="read-more">Read more »</a>
        </div>
    </div>
</section> -->