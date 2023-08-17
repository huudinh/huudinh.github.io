<?php get_header(); ?>
<?php 
    $author_id = get_post_field ('post_author', $cause_id);
	$display_name = get_the_author_meta( 'display_name' , $author_id ); 
    $avatar = get_avatar( get_the_author_meta('user_email') , 90 ) ;
    $author_field = get_field('author_info', 'user_'. $author_id );
?>
<div class="container">
    <div class="newsMain">
        <div class="newsMain__boxLeft">
            <section class="cate_mz_1_0_0">
                <h1 class="cate_mz_1_0_0__breadcrumb">
                    <?php 
                        echo $display_name;
                    ?>
                </h1>
                <?php
                    if ( have_posts() ) :
                        $i = 0;
                        while ( have_posts() ) : the_post();
                            global $post; 
                            $kim = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');            
                            $img = ($kim[0]!='')?$kim[0]:catch_that_image($post->ID);

                            $excerpt = wp_trim_words( get_the_excerpt($post->ID), 30 );

                            if ($i == 0){
                                echo '
                                    <div class="cate_mz_1_0_0__box">
                                        <div class="cate_mz_1_0_0__boxLeft">
                                            <a href="'.get_permalink($post->ID).'"><img width="250" height="250" src="'.$img.'" alt="'.get_the_title($post->ID).'"></a>
                                            <h2 class="cate_mz_1_0_0__title">
                                                <a href="'.get_permalink($post->ID).'">'.get_the_title($post->ID).'</a>
                                            </h2>
                                        </div>
                                        <div class="cate_mz_1_0_0__boxRight">
                                ';
                            } elseif($i < 3){
                                echo '
                                    <div class="cate_mz_1_0_0__item">
                                        <a href="'.get_permalink($post->ID).'"><img width="250" height="250" src="'.$img.'" alt="'.get_the_title($post->ID).'"></a>
                                        <h2 class="cate_mz_1_0_0__subTitle">
                                            <a href="'.get_permalink($post->ID).'">'.get_the_title($post->ID).'</a>
                                        </h2>
                                    </div>
                                ';
                            }
                            $i++;
                        endwhile;
                    endif;
                ?>
            </div></div></section>

            <section class="cate_mz_2_0_0">
                <div class="cate_mz_2_0_0__box">                    
                    <?php
                    if ( have_posts() ) :
                        $i = 0;
                        while ( have_posts() ) : the_post();
                            global $post; 
                            $kim = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');            
                            $img = ($kim[0]!='')?$kim[0]:catch_that_image($post->ID);

                            $excerpt = wp_trim_words( get_the_excerpt($post->ID), 30 );

                            if ($i >= 3){
                                echo '
                                    <div class="cate_mz_2_0_0__item">
                                        <div class="cate_mz_2_0_0__pic">
                                            <a href="'.get_permalink($post->ID).'"><img width="250" height="250" src="'.$img.'" alt="'.get_the_title($post->ID).'"></a>
                                        </div>
                                        <div class="cate_mz_2_0_0__boxText">
                                            <h2 class="cate_mz_2_0_0__title"><a href="'.get_permalink($post->ID).'">'.get_the_title($post->ID).'</a></h2>
                                            <p class="cate_mz_2_0_0__desc">'.$excerpt.'</p>
                                        </div>
                                    </div>
                                ';
                            }
                            $i++;
                        endwhile;
                    endif;
                ?>
                    
                </div>
            </section>
            <?php get_template_part('Module/Category/pagination_1_0_0/pagination_1_0_0'); ?>
        </div>
        <div class="newsMain__boxRight">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>