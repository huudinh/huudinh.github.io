<?php 
require_once 'shortcode.php';

//Thêm Page Field
include "options/web-config.php";
include "options/pagespeed.php";
// include "options/cate_doctor_field.php";
// include "options/api.php";

$role_object = get_role( 'editor' );
$role_object->add_cap( 'manage_options' );

//Hiện phần set thumbnail bài viết
add_theme_support( 'post-thumbnails' );

/** Disable schema yoast seo **/
// add_filter( 'wpseo_json_ld_output', '__return_false' );

/** Remove Yoast HTML Comments from version **/
// add_filter( 'wpseo_debug_markers', '__return_false' );

// Schema Yoast Seo
// include "yoast-seo-config.php";

//Thêm role user
// add_role('moderator', __(
//     'Moderator'),
//     array(
//         'read'              => true, // Allows a user to read
//         'create_posts'      => true, // Allows user to create new posts
//         'edit_posts'        => true, // Allows user to edit their own posts
//         'edit_others_posts' => true, // Allows user to edit others posts too
//         'publish_posts'     => true, // Allows the user to publish posts
//         'manage_categories' => true, // Allows user to manage post categories
//         'redux_builder_nqt' => true, // Allows user to manage post categories
//         )
// );


//Lấy ảnh đầu tiên làm đại diện
function catch_that_image($id = null)
{
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    if ($id != '') {
        $post_content = get_post_field('post_content', $id);
        $output       = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post_content, $matches);
    } elseif (is_single()) {
        $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $posts['0']->post_content, $matches);
    } else {
        $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    }
    $first_img = $matches [1] [0];
    if (empty($first_img)) {
        $first_img = get_template_directory_uri() . "/Module/assets/images/no-image.png";
    }
    return $first_img;
}

function showPostInCate($category_slug, $templateObj, $number) {
    $category = get_category_by_slug($category_slug);
    $content = ''; // Khởi tạo biến $content
    if ($category) {
        $category_id = $category->term_id; // Sửa từ "team_id" thành "term_id"
        $name = $category->name;
        $description = $category->description;
    } else {
        echo 'Không tìm thấy danh mục với slug: ' . $category_slug;
        return $content; // Trả về nội dung trống nếu không tìm thấy danh mục
    }

    $args = array(
        'post_status' => 'publish',
        'showposts' => $number,
        'cat' => $category_id,
    );

    $getposts = new WP_Query($args);
    global $wp_query;
    $wp_query->in_the_loop = true;

    $count = 0;
    while ($getposts->have_posts()) : $getposts->the_post();
        $kim = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium');
        if ( is_array($kim) && isset($kim[0]) && $kim[0] != '' ) {
            $img = $kim[0];
        } else {
            $img = catch_that_image();
        }
        // $img = ($kim[0] != '') ? $kim[0] : catch_that_image();
        $link = get_permalink();
        $title = get_the_title();
        $date = get_the_date('d-m - H:i:s');
        // Show Sapo
        $sapo = get_field('sapo');

        if ($sapo != ''){
            $excerpt = wp_trim_words($sapo, 30);
        } else {
            $excerpt = wp_trim_words(get_the_excerpt(), 200);
        }

        $content .= $templateObj->generate($img, $link, $title, $date, $excerpt, $count); // Sử dụng phương thức của đối tượng
        $count++;
    endwhile;
    wp_reset_postdata();

    return $content;
}

function subh_get_post_view( $postID ) {
    $count_key = 'post_views_count';
    $count     = get_post_meta( $postID, $count_key, true );
    if ( $count == '' ) {
    delete_post_meta( $postID, $count_key );
    add_post_meta( $postID, $count_key, '0' ); 
    return '0 lượt xem';
    } 
    return $count . ' lượt xem';
   } 
   function subh_set_post_view( $postID ) {
    $count_key = 'post_views_count';
    $count     = (int) get_post_meta( $postID, $count_key, true );
    if ( $count < 1 ) {
    delete_post_meta( $postID, $count_key );
    add_post_meta( $postID, $count_key, '0' );
    } else {
    $count++;
    update_post_meta( $postID, $count_key, (string) $count );
    }
   }

// Phân trang
function pagination($pages = '', $range = 4)
{  
     $showitems = ($range * 2)+1;  
     global $paged;
     if(empty($paged)) $paged = 1;
     if($pages == '')
     {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages)
        {
            $pages = 1;
        }
     }   
     if(1 != $pages)
     {
         echo "<ul class=\"page_nav\"><div class=\"wp-pagenavi\"><span class=\"pages\">Trang ".$paged."/".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>««</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>«</a>";
 
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }
         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">»</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>»»</a>";
         echo "</div></ul>\n";
     }
}

//Search Only Title
function ccw_search_by_title_only( $search, $wp_query )
{
    global $wpdb;
    if ( empty( $search ) )
        return $search; // skip processing - no search term in query
 
    $q = $wp_query->query_vars;    
    $n = ! empty( $q['exact'] ) ? '' : '%';
    $search =
    $searchand = '';
    foreach ( (array) $q['search_terms'] as $term ) {
        $term = esc_sql( like_escape( $term ) );
        $search .= "{$searchand}($wpdb->posts.post_title LIKE '{$n}{$term}{$n}')";
        $searchand = ' AND ';
    }
    if ( ! empty( $search ) ) {
        $search = " AND ({$search}) ";
        if ( ! is_user_logged_in() )
            $search .= " AND ($wpdb->posts.post_password = '') ";
    }
    return $search;
}
add_filter( 'posts_search', 'ccw_search_by_title_only', 500, 2 );

remove_action('template_redirect', 'wp_old_slug_redirect');
// remove_filter('template_redirect', 'redirect_canonical');  

remove_action('wp_head', 'wp_shortlink_wp_head' );

//FUNCTION CHECK IP
function get_IP_address() {
	foreach (array('HTTP_CLIENT_IP',
 'HTTP_X_FORWARDED_FOR',
 'HTTP_X_FORWARDED',
 'HTTP_X_CLUSTER_CLIENT_IP',
 'HTTP_FORWARDED_FOR',
 'HTTP_FORWARDED',
 'REMOTE_ADDR') as $key) {
		if (array_key_exists($key, $_SERVER) === true) {
			foreach (explode(',', $_SERVER[$key]) as $IPaddress) {
				$IPaddress = trim($IPaddress); // Just to be safe

				if (filter_var($IPaddress, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false) {

					return $IPaddress;
				}
			}
		}
	}
}
function get_location_by_ip($ip){
    $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
    return $details->city; // -> "Mountain View"
}

// Login Mail
remove_filter('authenticate', 'wp_authenticate_username_password', 20);
add_filter('authenticate', function($user, $email, $password){
    //Check for empty fields
    if(empty($email) || empty ($password)){        
        //create new error object and add errors to it.
        $error = new WP_Error();

        if(empty($email)){ //No email
            $error->add('empty_username', __('<strong>ERROR</strong>: Email field is empty.'));
        }
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ //Invalid Email
            $error->add('invalid_username', __('<strong>ERROR</strong>: Email is invalid.'));
        }

        if(empty($password)){ //No password
            $error->add('empty_password', __('<strong>ERROR</strong>: Password field is empty.'));
        }
        return $error;
    }

    //Check if user exists in WordPress database
    $user = get_user_by('email', $email);

    //bad email
    if(!$user){
        $error = new WP_Error();
        $error->add('invalid', __('<strong>ERROR</strong>: Either the email or password you entered is invalid.'));
        return $error;
    }
    else{ //check password
        if(!wp_check_password($password, $user->user_pass, $user->ID)){ //bad password
            $error = new WP_Error();
            $error->add('invalid', __('<strong>ERROR</strong>: Either the email or password you entered is invalid.'));
            return $error;
        }else{
            return $user; //passed
        }
    }
}, 20, 3);

// chi cho phep tai len các file gif png jpg
add_filter('wp_handle_upload_prefilter', 'yoursite_wp_handle_upload_prefilter');
function yoursite_wp_handle_upload_prefilter($file) {
    if ($file['type']=='application/octet-stream' && isset($file['tmp_name'])) {
        $file_size = getimagesize($file['tmp_name']);
        if (isset($file_size['error']) && $file_size['error']!=0) {
            $file['error'] = "Unexpected Error: {$file_size['error']}";
            return $file;
        } else {
            $file['type'] = $file_size['mime'];
        }
    }
    list($category,$type) = explode('/',$file['type']);
    if ('image'!=$category || !in_array($type,array('jpg','jpeg','gif','png'))) {
        $file['error'] = "Xin lỗi bạn chỉ có thể tải lên file ảnh định dạng .GIF, .JPG, hay .PNG";
    } else if ($post_id = (isset($_REQUEST['post_id']) ? $_REQUEST['post_id'] : false)) {
        if (count(get_posts("post_type=attachment&post_parent={$post_id}"))>20) // so hinh anh duoc phép tai len
        $file['error'] = "Xin lỗi, bạn không thể tải lên nhiều hơn 20 hình ảnh.";
    }
    return $file;
}

// Fix upload max
function filter_site_upload_size_limit( $size ) { 
    return 1024 * 1024 * 0.25; 
} 
add_filter( 'upload_size_limit', 'filter_site_upload_size_limit', 120 );

//Hiển thị 5 comment mới nhất của web
function create_shortcode_list_comment() {
	$html = '';
	// Arguments for the query
	$args = array( 
		'status' => 'approve',
		// 'number'=> 5,
	);
	// The comment query
	$comments_query = new WP_Comment_Query;
	$comments = $comments_query->query( $args );
	// The comment loop
	if ( !empty( $comments ) ) {
		$html.='<div class="content-w content-news">';
		$html.= '<table class="table table-bordered"><tr><th>STT</th><th>Comment</th><th>Link</th></tr>';
		$number = 0;
		foreach ( $comments as $comment ) {
			$html.= '<tr>';
            $number++;
			$html.= '<td>'.$number.'</td><td><a href="'.get_comment_link($comment->comment_ID).'">'.$comment->comment_content .'</a></td><td>'.get_comment_link($comment->comment_ID).'</td>';
			$html.= '</tr>';
		}
		$html.= '</table>';
		$html.= '</div>';
	} else {
		$html.= 'No comments found.';
	}	
	return $html;	
}
//[show_shortcode_comment]
add_shortcode( 'show_shortcode_comment', 'create_shortcode_list_comment' );

// Security
// Tắt cập nhật plugin
// add_filter( 'auto_update_plugin', '__return_false' );

// Tắt cập nhật cho themes
// add_filter( 'auto_update_theme', '__return_false' );

// Vô hiệu hoá thông báo cập nhật của các Plugin trong WordPress:
// remove_action ( 'load-update-core.php' , 'wp_update_plugins' ); 
// add_filter ( 'pre_site_transient_update_plugins' , '__return_null' );

// Tat thong bao plugin
// add_action('admin_head', 'wpcb_disable_notice'); 
// function wpcb_disable_notice() { 
//     echo "<style> .notice { display: none;} </style> ";
// }

// remove link comment
function wpse_284352_author_link( $author_link, $author ) {
    return $author;
}
add_filter( 'get_comment_author_link', 'wpse_284352_author_link', 10, 2 );

// remove nofollow
function remove_nofollow($link, $args, $comment, $post){
    return str_replace("rel='nofollow'", "", $link);
}
add_filter('comment_reply_link', 'remove_nofollow', 420, 4);


add_theme_support( 'menus' );

add_filter('get_the_excerpt', 'exc');
function exc($param) {
	$excerpt = $param;
	$charlength=260;
	$charlength++;
    $subex = mb_substr( $excerpt, 0, $charlength - 5 );
    $exwords = explode( ' ', $subex );
    $excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
    if ( $excut < 0 ) {
        return mb_substr( $subex, 0, $excut ).' ';
    } else {
        return $subex.' ';
    }
}

// Fix timeout update
add_filter('http_request_timeout', function ($timeout) {
    $newtimeout = 15;
    return $newtimeout;
});

/*
 * Change the comment reply link to use 'Reply to <Author First Name>'
 */
function add_comment_author_to_reply_link($link, $args, $comment){

    $comment = get_comment( $comment );

    // If no comment author is blank, use 'Anonymous'
    if ( empty($comment->comment_author) ) {
        if (!empty($comment->user_id)){
            $user=get_userdata($comment->user_id);
            $author=$user->user_login;
        } else {
            $author = __('Anonymous');
        }
    } else {
        $author = $comment->comment_author;
    }

    // If the user provided more than a first name, use only first name
    if(strpos($author, ' ')){
        $author = substr($author, 0, strpos($author, ' '));
    }

    // Replace Reply Link with "Reply to <Author First Name>"
    $reply_link_text = $args['reply_text'];
    $link = str_replace($reply_link_text, 'Phản hồi đến ' . $author, $link);

    return $link;
}
add_filter('comment_reply_link', 'add_comment_author_to_reply_link', 10, 3);

function my_custom_styles() {
    $user = wp_get_current_user();
    // $allowed_roles = array('editor', 'administrator', 'author');
    $allowed_roles = array('editor', 'author');
    if( array_intersect($allowed_roles, $user->roles ) ) {  
        echo '<style>
            #toplevel_page_internal_link_juicer{display:none!important}
        </style>';
    }
}


// Xóa các ảnh gốc khi xóa bài viết
add_action('before_delete_post', function ($post_id) {
    // Lấy tất cả các file đính kèm liên quan đến bài viết
    $attachments = get_children([
        'post_type' => 'attachment',
        'post_parent' => $post_id,
    ]);

    // Xóa từng file đính kèm
    foreach ($attachments as $attachment_id => $attachment) {
        wp_delete_attachment($attachment_id, true);
    }
});

// Xóa kích thước ảnh mặc định
remove_image_size('thumbnail');
remove_image_size('medium');
remove_image_size('large');
remove_image_size('medium_large');
remove_image_size('1536x1536');
remove_image_size('2048x2048');

// Xóa kích thước ảnh do theme hoặc plugin tạo
add_filter('intermediate_image_sizes_advanced', function($sizes) {
    return [];
});

// Hàm duyệt qua và xóa tệp không phải ảnh
$upload_dir = wp_upload_dir(); // Lấy đường dẫn thư mục uploads
$dir = $upload_dir['basedir']; // Đường dẫn gốc của thư mục uploads

function delete_non_image_files($dir) {
    $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif']; // Định dạng ảnh được phép
    $files = scandir($dir); // Lấy danh sách tất cả các tệp trong thư mục

    foreach ($files as $file) {
        if ($file === '.' || $file === '..') {
            continue; // Bỏ qua thư mục hiện tại và thư mục cha
        }

        $file_path = $dir . DIRECTORY_SEPARATOR . $file;

        if (is_file($file_path)) {
            $file_extension = pathinfo($file_path, PATHINFO_EXTENSION);

            // Xóa tệp nếu không phải định dạng ảnh hoặc nếu là ảnh có đuôi .bk.jpg
            if (!in_array(strtolower($file_extension), $allowed_extensions) || strpos($file, '.bk.png') !== false) {
                unlink($file_path); // Xóa tệp
            }
        } elseif (is_dir($file_path)) {
            // Nếu là thư mục con, gọi lại hàm
            delete_non_image_files($file_path);
        }
    }
}

// Thực thi hàm
// delete_non_image_files($dir);

#####loai bo tu content
function loaiboturep($content){
    $ar=array(
        '/media/images/dang-ky-tu-van.png',
        '/media/images/goi-ngay-hotline.png',
        '/media/images/dang-ky-khuyen-mai.png',
        '/media/images/dang-ky-ngay.png',
        'js-video-button',
        'data-video-id',
    );
    $arreplace=array(
        '/wp-content/themes/SCI_Theme/Module/Post/post_1_0_0/images/dang-ky-tu-van.png',
        '/wp-content/themes/SCI_Theme/Module/Post/post_1_0_0/images/goi-ngay-hotline.png',
        '/wp-content/themes/SCI_Theme/Module/Post/post_1_0_0/images/dang-ky-khuyen-mai.png',
        '/wp-content/themes/SCI_Theme/Module/Post/post_1_0_0/images/dang-ky-ngay.png',
        'modal-btn modal-clip',
        'data-video',
    );
    $content=str_replace($ar,$arreplace,$content);
    return $content;
}
add_action('the_content','loaiboturep');

?>