<?php get_header(); ?>

<?php get_template_part('Module/Category/breadcrumb_1_0_0/breadcrumb_1_0_0'); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-9">
            <?php 
                get_template_part('Module/Post/post_1_0_0/post_1_0_0'); 
                get_template_part('Module/Post/comment_1_0_0/comment_1_0_0');
                get_template_part('Module/Post/post_author_1_2_0/post_author_1_2_0');
            ?>
            
        </div>
        <div class="col-lg-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
    <?php get_template_part('Module/Post/postOther_mz_1_2_0/postOther_mz_1_2_0'); ?>
</div>

<?php get_footer(); ?>