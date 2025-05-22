<?php 
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$slug = str_replace('/', '', parse_url($actual_link)['path']);
$categories = get_the_category();
$category_id = !empty($categories) ? $categories[0]->cat_ID : null;

$cat_item = get_category_by_slug($slug); 
$id_category = $cat_item ? $cat_item->term_id : null;   

$tlq = $category_id ? get_field('sidebar_service', 'category_'.$category_id) : '';
// $post_lq = $category_id ? get_field('tin_lien_quan', 'category_'.$category_id) : '';
$post_tnb = $category_id ? get_field('tin-noi-bat', 'category_'.$category_id) : '';
$sbvideo_img = $category_id ? get_field('video', 'category_'.$category_id) : '';
$sbvideo_link = $category_id ? get_field('sbvideo_link', 'category_'.$category_id) : '';
$album_anh = $category_id ? get_field('album_anh', 'category_'.$category_id) : '';
$album_link = $category_id ? get_field('album_link', 'category_'.$category_id) : '';

$sv_hot = $category_id ? get_field('sv_hot', 'category_'.$category_id) : '';
$sv_new = $category_id ? get_field('sv_new', 'category_'.$category_id) : '';
$sv_top1 = $category_id ? get_field('sv_top1', 'category_'.$category_id) : '';
$sv_top2 = $category_id ? get_field('sv_top2', 'category_'.$category_id) : '';
$cau_hoi = $category_id ? get_field('cau_hoi', 'category_'.$category_id) : '';

// video covert ID
function getIDvideo($url) {
    parse_str(parse_url($url, PHP_URL_QUERY), $my_array_of_vars);
    return $my_array_of_vars['v'];  
}
?>
<?php include(locate_template('Module/Category/sidebar_1_0_0/sidebar_1_0_0.php')); ?>
