<style>
	<?php
		include(locate_template('Module/Category/sidebar_mz_1_0_0/sass/sidebar_mz_1_0_0.min.css'));
	?>
</style>
<div class="sidebar_mz_1_0_0__breadcrumb">
    Bài viết quan tâm
</div>
<div class="sidebar_mz_1_0_0__box">
<?php
    if(is_single()):
        $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 8, 'post__not_in' => array($post->ID) ) );
        if( $related ) foreach( $related as $key => $post ) {
            $kim = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');            
            $img = (is_array($kim) && !empty($kim[0])) ? $kim[0] : catch_that_image($post->ID);
            setup_postdata($post); 
            echo '
                <div class="sidebar_mz_1_0_0__item">
                    <div class="sidebar_mz_1_0_0__pic">
                        <a href="' . get_permalink() . '">
                            <img width="61" height="61"  src="'.$img.'" alt="' . get_the_title() . '">
                        </a>
                    </div>
                    <h3 class="sidebar_mz_1_0_0__title"><a href="' . get_permalink() . '">' . get_the_title() . '</a></h3>
                </div>
            ';
        }
        wp_reset_postdata(); 

    else:
        // cate, other
        $args = array(
            'post_status' => 'publish',
            'showposts' => 0,
            'orderby' => 'desc',
            'category__not_in' => array( 295 ),
        );
        $getposts = new WP_query($args); 
        $num = 0; 
        while ($getposts->have_posts() && $num < 8) : 
            $num++;
            $getposts->the_post(); 
            $kim = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');            
            $img = (is_array($kim) && !empty($kim[0])) ? $kim[0] : catch_that_image($post->ID);
            $time = get_the_date('d/m/Y');
            echo'
                <div class="sidebar_mz_1_0_0__item">
                    <div class="sidebar_mz_1_0_0__pic">
                        <a href="' . get_permalink() . '">
                            <img width="61" height="61"  src="'.$img.'" alt="' . get_the_title() . '">
                        </a>
                    </div>
                    <h3 class="sidebar_mz_1_0_0__title"><a href="' . get_permalink() . '">' . get_the_title() . '</a></h3>
                </div>
            ';
        endwhile; wp_reset_postdata(); 
    endif;
?>
</div>