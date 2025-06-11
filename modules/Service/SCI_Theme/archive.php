<?php get_header(); ?>

<?php get_template_part('Module/Category/breadcrumb_1_0_0/breadcrumb_1_0_0'); ?>

<div class="container">
	<div class="row">
		<div class="col-lg-9">
            <?php get_template_part('Module/Category/cate_1_0_0/cate_1_0_0'); ?>
			<?php get_template_part('Module/Category/pagination_1_0_0/pagination_1_0_0'); ?>
		</div>
		<div class="col-lg-3">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>