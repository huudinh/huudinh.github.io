<section class="postDetail_mz_1_0_0">
	<div class="postDetail_mz_1_0_0__breadcrumb">
		<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<span id="">','</span>');} ?>
	</div>
	<div class="postDetail_mz_1_0_0__box">
		<h1 class="postDetail_mz_1_0_0__title"><?php echo the_title(); ?></h1>
		<?php 
			include(locate_template('Module/Post/post_author_1_0_0/post_author_1_0_0.php')); 
		?>
		<div class="postDetail_mz_1_0_0__text">
			<?php
				// if (is_user_logged_in() && toc_get_index()):
				// 	echo '<ul id="toc_container">' . toc_get_index() . '</ul>';
				// endif;

				while ( have_posts() ) : 
					the_post();
					the_content();
				endwhile; 
			?>
		</div>
	</div>
</section>