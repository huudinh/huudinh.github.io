<?php
	$head = '
		<section class="postOther_mz_1_0_0">
		<div class="postOther_mz_1_0_0__titleOther">BÀI VIẾT LIÊN QUAN</div>
		<div class="postOther_mz_1_0_0__box">
	';

	$footer = '
		</div>
		</section>
	';

	$orig_post = $post;
	global $post;
	$tags = wp_get_post_tags($post->ID);

	if ($tags) {
		$tag_ids = array();
		foreach ($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
		$args = array(
			'tag__in' => $tag_ids,
			'post__not_in' => array($post->ID),
			// 'ignore_sticky_posts' => true,
    		// 'post_type' => 'post',
			'posts_per_page' => 6, // Number of related posts to display.
			// 'caller_get_posts' => 6
		);

		$my_query = new wp_query($args);

		$content = '';
		while ($my_query->have_posts()) {
			$my_query->the_post();
			$kim = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
			// $img = ($kim[0] != '') ? $kim[0] : catch_that_image($post->ID);
			// Safely handle $kim to ensure it's an array
			if ( is_array($kim) && isset($kim[0]) && $kim[0] != '' ) {
				$img = $kim[0];
			} else {
				$img = catch_that_image($post->ID);
			}
			$excerpt = wp_trim_words( get_the_excerpt($post->ID), 120 );
			$content .='
				<div class="postOther_mz_1_0_0__item">
					<a class="postOther_mz_1_0_0__pic" href="'.get_permalink().'">
						<img width="1200" height="848" src="'.$img.'" alt="'.get_the_title().'">
					</a>
					<div class="postOther_mz_1_0_0__text">
						<h3 class="postOther_mz_1_0_0__title"><a href="'.get_permalink().'">'.get_the_title().'</a></h3>
						<p class="postOther_mz_1_0_0__desc">'.$excerpt.'</p>
					</div>
				</div>
			';
		}

		echo $head.$content.$footer;		
	}
	$post = $orig_post;
	wp_reset_query();
?>