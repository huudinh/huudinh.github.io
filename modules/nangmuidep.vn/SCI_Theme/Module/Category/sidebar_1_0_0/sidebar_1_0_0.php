<?php
    $path = get_template_directory_uri();
    $path = $path . '/Module/Category/sidebar_1_0_0'; 
    $myOptions = get_option('MyOptionsConfig');

    $pattern = '/onclick="(.*?);"/';
    $replace = "onclick='$1;'";
    $sidebar = preg_replace($pattern, $replace, str_replace("&#039;", "\"", $myOptions['sidebar']));
?>

<style>
    <?php include(locate_template("Module/Category/sidebar_1_0_0/sass/sidebar_1_0_0.min.css")); ?>
</style>

<?php
    $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $slug = str_replace('/', '', parse_url($actual_link)['path']);

    $cat_item = get_category_by_slug($slug);
    $id_category = $cat_item ? $cat_item->term_id : null;

    if (is_single()) {
        $post_categories = wp_get_post_categories(get_the_ID());
        $idcat = $post_categories[0];
    } elseif (is_category()) {
        $idcat = get_query_var('cat');
    } else {
        $idcat = null;
    }

    $dich_vu_lien_quan = $idcat ? get_field('dich_vu_lien_quan', 'category_' . $idcat) : '';
    $video = $idcat ? get_field('video', 'category_' . $idcat) : '';
    $album_anh = $idcat ? get_field('album_anh', 'category_' . $idcat) : '';
?>

<div class="sidebar_1_0_0">    
    <?php
        if ($dich_vu_lien_quan || $video || $album_anh) {
            echo $dich_vu_lien_quan . $video . $album_anh;
        } else {
            if (html_entity_decode($sidebar)) {
                echo html_entity_decode($sidebar);
            }
        }
    ?>
    <?php
        if (!is_author()) {
            echo '
                <div class="sidebar_1_0_0__care">
                    TIN NỔI BẬT
                </div>
            ';
        }
    ?>
    <div class="sidebar_1_0_0__newsOther">
        <ul>
            <?php
            if (is_single()):
                $related = get_posts(array('category__in' => wp_get_post_categories(get_the_ID()), 'numberposts' => 8, 'post__not_in' => array(get_the_ID())));
                if ($related) foreach ($related as $post) {
                    $kim = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');
                    // $img = ($kim[0] != '') ? $kim[0] : catch_that_image($post->ID);
                    if ( is_array($kim) && isset($kim[0]) && $kim[0] != '' ) {
                        $img = $kim[0];
                    } else {
                        $img = catch_that_image();
                    }
                    setup_postdata($post); 
                    echo '
                        <li>
                            <a class="sidebar_1_0_0__newsPic" href="' . get_permalink() . '">
                                <img width="61" height="61" src="' . $img . '" alt="' . get_the_title() . '">
                            </a>
                            <h3 class="sidebar_1_0_0__newsTitle"><a href="' . get_permalink() . '">' . get_the_title() . '</a></h3>
                        </li>
                    ';
                }
                wp_reset_postdata(); 
            elseif (is_author()):
                echo '';
            else:
                $args = array(
                    'post_status' => 'publish',
                    'showposts' => 8,
                    'orderby' => 'desc',
                    'category__not_in' => array(295),
                );
                $getposts = new WP_query($args); 
                while ($getposts->have_posts()) : 
                    $getposts->the_post(); 
                    $link = get_permalink();
                    $title = get_the_title();
                    $kim = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');
                    // $img = ($kim[0] != '') ? $kim[0] : catch_that_image($post->ID);
                    if ( is_array($kim) && isset($kim[0]) && $kim[0] != '' ) {
                        $img = $kim[0];
                    } else {
                        $img = catch_that_image();
                    }
                    echo '
                        <li>
                            <a class="sidebar_1_0_0__newsPic" href="' . $link . '">
                                <img width="300" height="169" src="' . $img . '" alt="' . $title . '">
                            </a>
                            <h3 class="sidebar_1_0_0__newsTitle"><a href="' . $link . '">' . $title . '</a></h3>
                        </li>    
                    ';
                endwhile; 
                wp_reset_postdata(); 
            endif;
            ?>
        </ul>
    </div>
</div>