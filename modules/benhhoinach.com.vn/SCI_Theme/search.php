<?php 
    get_header(); 

    $category = get_queried_object();
    $category_id = $category->term_id;
    $typecate = get_field('cate_type', 'category_'.$category_id);
?>

<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <?php get_template_part('Module/Category/breadCrumb_vpl_1_0_0/breadCrumb_vpl_1_0_0'); ?>
            <?php 
            if ($typecate == 'service'){
                get_template_part('Module/Category/service_vpl_1_0_0/service_vpl_1_0_0'); 
            } else {
                get_template_part('Module/Category/news_vpl_1_0_0/news_vpl_1_0_0'); 
            }
            ?>
            <?php get_template_part('Module/Category/pagination_vpl_1_0_0/pagination_vpl_1_0_0'); ?>
            <?php get_template_part('Module/Category/otherNews_vpl_1_0_0/otherNews_vpl_1_0_0'); ?>
        </div>
        <div class="col-lg-4">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>