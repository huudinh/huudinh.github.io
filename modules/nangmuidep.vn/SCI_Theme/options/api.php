<?php
function related_posts_endpoint($request_data) {
    $category_id = $request_data['category_id'];
    $post_id = $request_data['post_id'];
    $related_posts = get_posts(array(
        'category__in' => array($category_id),
        'post__not_in' => array($post_id),
        'posts_per_page' => 5,
    ));
    return $related_posts;
}

add_action('rest_api_init', function() {
    register_rest_route('api/v1', '/related-posts/(?P<category_id>\d+)/(?P<post_id>\d+)', array(
        'methods' => 'GET',
        'callback' => 'related_posts_endpoint',
    ));
});


// Other News => Posts same category
add_action( 'rest_api_init', function () {
    register_rest_route( 'api/v1', '/other-news/(?P<category_id>\d+)/(?P<post_id>\d+)/(?P<posts_per_page>\d+)', array(
        'methods' => 'GET',
        'callback' => 'get_other_news',
    ) );
} );

function get_other_news($request_data) {
    $category_id = $request_data['category_id'];
    $post_id = $request_data['post_id'];
    $posts_per_page = $request_data['posts_per_page'];
    $args = array(
        'category__in' => array($category_id),
        'post__not_in' => array($post_id),
        'posts_per_page' => $posts_per_page,
        'orderby' => 'rand'
    );
    $query = new WP_Query( $args );
    $posts = array();
    while ( $query->have_posts() ) {
        $query->the_post();
        $post = array(
            'id' => get_the_ID(),
            'title' => get_the_title(),
            // 'content' => get_the_content(),
            'excerpt' => get_the_excerpt(),
            'permalink' => get_permalink(),
            'date' => get_the_date(),
            'modified' => get_the_modified_date(),
            'author' => get_the_author(),
            // 'categories' => wp_get_post_categories( get_the_ID(), array( 'fields' => 'names' ) ),
            // 'tags' => wp_get_post_tags( get_the_ID(), array( 'fields' => 'names' ) ),
            'thumbnail' => get_the_post_thumbnail_url(get_the_ID(),'large'),
        );
        $posts[] = $post;
    }
    wp_reset_postdata();
    return $posts;
}

// Get Latest News => Latest news on the website
add_action( 'rest_api_init', function () {
    register_rest_route( 'api/v1', '/latest-news/(?P<posts_per_page>\d+)/(?P<post_id>\d+)', array(
        'methods' => 'GET',
        'callback' => 'get_latest_news',
    ) );
} );

function get_latest_news($request_data) {
    $posts_per_page = $request_data['posts_per_page'];
    $post_id = $request_data['post_id'];
    $args = array(
        'posts_per_page' => $posts_per_page,
        'post_status' => 'publish',
        'showposts' => 0,
        'orderby' => 'desc',
        'category__not_in' => array( 295 ),
        'post__not_in' => array ($post_id),
    );
    $query = new WP_Query( $args );
    $posts = array();
    while ( $query->have_posts() ) {
        $query->the_post();
        $post = array(
            'id' => get_the_ID(),
            'title' => get_the_title(),
            'excerpt' => get_the_excerpt(),
            'permalink' => get_permalink(),
            'date' => get_the_date(),
            'modified' => get_the_modified_date(),
            'author' => get_the_author(),
            'thumbnail' => get_the_post_thumbnail_url(get_the_ID(),'medium'),
        );
        $posts[] = $post;
    }
    wp_reset_postdata();
    return $posts;
}

// Get Tag News => Posts with tags
add_action( 'rest_api_init', function () {
    register_rest_route( 'api/v1', '/tag-news/(?P<post_id>\d+)/(?P<posts_per_page>\d+)', array(
        'methods' => 'GET',
        'callback' => 'get_tag_news',
    ) );
} );

function get_tag_news($request_data) {
    $posts_per_page = $request_data['posts_per_page'];
    $post_id = $request_data['post_id'];
    $tags = get_the_tags($post_id);
    $tag_ids = array();
    foreach($tags as $tag){
        array_push($tag_ids, $tag->term_id);
    }
    $args = array(
        'tag__in' => $tag_ids,
        'post__not_in' => array($post_id),
        'posts_per_page' => $posts_per_page,
        'post_status' => 'publish',
        'orderby' => 'rand'
    );
    $query = new WP_Query( $args );
    $posts = array();
    while ( $query->have_posts() ) {
        $query->the_post();
        $post = array(
            'id' => get_the_ID(),
            'title' => get_the_title(),
            'excerpt' => get_the_excerpt(),
            'permalink' => get_permalink(),
            'date' => get_the_date(),
            'modified' => get_the_modified_date(),
            'author' => get_the_author(),
            'thumbnail' => get_the_post_thumbnail_url(get_the_ID(),'medium'),
        );
        $posts[] = $post;
    }
    wp_reset_postdata();
    if($tag_ids){
        return $posts;
    } else {
        return [];
    }
}

// Get Doctor List => 
add_action( 'rest_api_init', function () {
    register_rest_route( 'api/v1', '/doctor-list', array(
        'methods' => 'GET',
        'callback' => 'get_doctor_list',
    ) );
} );

function get_doctor_list($request_data) {
    $posts_per_page = $request_data['posts_per_page'];
    $post_id = $request_data['post_id'];
    $tags = get_the_tags($post_id);
    $tag_ids = array();
    foreach($tags as $tag){
        array_push($tag_ids, $tag->term_id);
    }
    $args = array(
        'post_type' => 'doi-ngu-bac-si',
        'post_status' => 'publish',
        'posts_per_page' => -1, 
        'orderby' => 'meta_value', 
        'order' => 'ASC',
    );
    $query = new WP_Query( $args );
    $posts = array();
    while ( $query->have_posts() ) {
        $query->the_post();
        $post = array(
            "id" => get_the_ID(),
            "degree" => get_field('degree'),
            "name" => get_the_title(),
            "pos" => get_field('pos'),
            "experience" => get_field('experience'),
            "image" => get_the_post_thumbnail_url(get_the_ID(),'large'),
            "category" => get_field('bs_info'),
            "url" => get_permalink($post->ID),
        );
        $posts[] = $post;
    }
    wp_reset_postdata();
    return $posts;
}

// Get Thumb Post 
add_action( 'rest_api_init', function () {
    register_rest_route( 'api/v1', '/thumb-post/(?P<posts_id>\d+)', array(
        'methods' => 'GET',
        'callback' => 'get_thumb_post',
    ) );
} );

function get_thumb_post($request_data) {
    $posts_id = $request_data['posts_id'];
    $author_id = get_post_field('post_author' , ($posts_id));
    $posts = array(
        'id' => $posts_id,
        'title' => get_the_title($posts_id),
        'excerpt' => get_the_excerpt($posts_id),
        'permalink' => get_permalink($posts_id),
        'date' => get_the_date( 'd/m/Y', $posts_id ),
        'modified' => get_the_modified_date( 'd/m/Y', $posts_id ),
        'author_id' => $author_id,
        'author_name' => get_the_author_meta('display_name', $author_id),
        'thumbnail' => get_the_post_thumbnail_url($posts_id,'medium'),
    );
    wp_reset_postdata();
    return $posts;
}

// Get Menu Option
// https://richardhuy.com/wp-json/api/v1/menu/

add_action( 'rest_api_init', function () {
    register_rest_route( 'api/v1', '/menu', array(
        'methods' => 'GET',
        'callback' => 'get_menu',
    ) );
} );
function get_menu($request_data) {
    $page_field = get_field('group_page_field', 'option');
    $arrcheck = array();
    
    if (!empty($page_field)){
        foreach($page_field as $field_0){
            if (!empty($field_0)){
                foreach($field_0 as $field){
                    $name = $field['acf_fc_layout'];
                    if($name == 'header_knrh_1_0_0'){
                        return $field;
                    }
                }
            }
        }
    }
}

?>
