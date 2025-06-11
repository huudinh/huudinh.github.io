<style>
    <?php include(locate_template("Module/Post/postOther_mz_1_2_0/sass/postOther_mz_1_2_0.min.css")); ?>
</style>

<?php
	$new_other = ''; 
	$related = get_posts( 
		array( 
			'category__in' => wp_get_post_categories($post->ID), 
			'numberposts' => 8, 
			'post__not_in' => array($post->ID), 
			// 'orderby' => 'rand'  
		) 
	);

	if( $related ) foreach( $related as $key => $post ) {
		setup_postdata($post); 
		$kim = wp_get_attachment_image_src(get_post_thumbnail_id());
		// $img = ($kim[0] != '') ? $kim[0] : catch_that_image(get_the_ID());
		if ( is_array($kim) && isset($kim[0]) && $kim[0] != '' ) {
            $img = $kim[0];
        } else {
            $img = catch_that_image();
        }
		$new_other .= '
			<div class="postOther_mz_1_2_0__item">
					<a class="postOther_mz_1_2_0__pic" href="'.get_permalink().'">
						<img width="1200" height="848" class="lazy" data-src="'.$img.'" alt="'.get_the_title().'">
					</a>
					<div class="postOther_mz_1_2_0__text">
						<h3 class="postOther_mz_1_2_0__title"><a href="'.get_permalink().'">'.get_the_title().'</a></h3>
					</div>
				</div>
		';	
	}
	wp_reset_postdata(); 

	$cat = get_the_category($post->ID);
	get_category_link($cat[0]->term_id);
	$cate_name = $cat[0]->name;
?>

<div class="postOther_mz_1_2_0">
	<div class="postOther_mz_1_2_0__titleOther">Bài viết cùng chủ đề <b><?php echo $cate_name; ?></b></div>
	<div class="postOther_mz_1_2_0__box">
		<?php echo $new_other; ?>
	</div>
</div>