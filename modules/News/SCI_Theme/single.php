<?php get_header(); ?>

<div class="container">
    <div class="newsMain">
        <div class="newsMain__boxLeft">            
            <?php 
                get_template_part('Module/Post/postDetail_mz_1_0_0/postDetail_mz_1_0_0'); 
                get_template_part('Module/Post/comment_1_0_0/comment_1_0_0');
                get_template_part('Module/Post/postOther_mz_1_0_0/postOther_mz_1_0_0'); 
            ?>
        </div>
        <div class="newsMain__boxRight">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>