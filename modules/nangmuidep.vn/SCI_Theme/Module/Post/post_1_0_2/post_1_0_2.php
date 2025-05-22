<style>
	<?php
		include(locate_template('Module/Post/post_1_0_2/sass/post_1_0_2.min.css'));
	?>
</style>
<?php
    $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>
<div class="post_1_0_2">		
	<div class="post_1_0_2__content">
		<h1 class="post_1_0_2__title"><?php echo $curauth->nickname; ?>                                                                                                                             </h1>
		<div class="post_1_0_2__detail">

			<div class="post_info" style="background:#f1fbff;padding:20px;border:1px solid #bcd2da">
				<div class="post_author">
					Tác giả: <b><?php echo get_the_author() ?></b>
					<p style="padding-top:10px"><?php // echo  $curauth->user_description; ?></p>
				</div>
			</div>

		</div>
	</div>
</div>
