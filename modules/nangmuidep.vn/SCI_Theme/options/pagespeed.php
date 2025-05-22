<?php
//Tối ưu page speed

// Remove blog editor
// add_filter('use_block_editor_for_post', '__return_false');

function add_async_attribute($tag, $handle) {
    // add script handles to the array below
    $scripts_to_defer = array('script-jquery', 'script-carousel','script-video','script-custom');
    foreach($scripts_to_defer as $defer_script) {
       if ($defer_script === $handle) {
          return str_replace(' src', ' defer="defer" src', $tag);
       }
    }
    return $tag;
 }
 add_filter('script_loader_tag', 'add_async_attribute', 10, 2);
 
// Xoa chan js header
function move_scripts_to_footer() {
    if (!is_admin()) {
        remove_action('wp_head', 'wp_print_scripts');
        remove_action('wp_head', 'wp_print_head_scripts', 9);
        remove_action('wp_head', 'wp_enqueue_scripts', 1);

        add_action('wp_footer', 'wp_print_scripts', 5);
        add_action('wp_footer', 'wp_print_head_scripts', 5);
        add_action('wp_footer', 'wp_enqueue_scripts', 5);
    }
}
add_action('wp_enqueue_scripts', 'move_scripts_to_footer');


 //* Remove WP Embed Script
 function stop_loading_wp_embed() {
     if (!is_admin()) {
         wp_deregister_script('wp-embed');
     }
 }
 add_action('init', 'stop_loading_wp_embed');
 
 //Bỏ src set
//  function meks_disable_srcset( $sources ) {
//      return false;
//  }
 
//  add_filter( 'wp_calculate_image_srcset', 'meks_disable_srcset' );

//Bỏ src set
function remove_max_srcset_image_width( $max_width ) { return false; } 
add_filter( 'max_srcset_image_width', 'remove_max_srcset_image_width' ); 

function wdo_disable_srcset( $sources ) { return false; } 
add_filter( 'wp_calculate_image_srcset', 'wdo_disable_srcset' );
 
 //* Disable Gutenberg stylesheet in front
 function dm_remove_wp_block_library_css(){
     wp_dequeue_style( 'wp-block-library' );
 }
 add_action( 'wp_enqueue_scripts', 'dm_remove_wp_block_library_css' );
 

 // Remove Emoji
 remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
 remove_action( 'wp_print_styles', 'print_emoji_styles' );
 
 // Remove the REST API endpoint.
 remove_action( 'rest_api_init', 'wp_oembed_register_route' );
 
 // Turn off oEmbed auto discovery.
 add_filter( 'embed_oembed_discover', '__return_false' );
 
 // Don't filter oEmbed results.
 remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );
 
 // Remove oEmbed discovery links.
 remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
 
 // Remove oEmbed-specific JavaScript from the front-end and back-end.
 remove_action( 'wp_head', 'wp_oembed_add_host_js' );
 
 // Cai thien hieu suat cuon trang / Does not use passive listeners to improve scrolling performance
 function add_script_fix_devgg(){ ?>
     <script>
         (function() {
             var supportsPassive = eventListenerOptionsSupported();
             if (supportsPassive) {
                 var addEvent = EventTarget.prototype.addEventListener;
                 overwriteAddEvent(addEvent);
             }
             function overwriteAddEvent(superMethod) {
                 var defaultOptions = {
                     passive: true,
                     capture: false
                 };
                 EventTarget.prototype.addEventListener = function(type, listener, options) {
                     var usesListenerOptions = typeof options === 'object';
                     var useCapture = usesListenerOptions ? options.capture : options;
                     options = usesListenerOptions ? options : {};
                     options.passive = options.passive !== undefined ? options.passive : defaultOptions.passive;
                     options.capture = useCapture !== undefined ? useCapture : defaultOptions.capture;
                     superMethod.call(this, type, listener, options);
                 };
             }
             function eventListenerOptionsSupported() {
                 var supported = false;
                 try {
                     var opts = Object.defineProperty({}, 'passive', {
                         get: function() {
                             supported = true;
                         }
                     });
                     window.addEventListener("test", null, opts);
                 } catch (e) {}
                 return supported;
             }
         })();
     </script>
 <?php }
     
add_action('wp_footer', 'add_script_fix_devgg');

// function dequeue_elementor_force() {
//     if ( ! is_admin() ) { // Chỉ áp dụng ngoài frontend
//         wp_dequeue_style( 'elementor-frontend' ); 
//         wp_dequeue_script( 'elementor-frontend' );
//         wp_deregister_style( 'elementor-frontend' );
//         wp_deregister_script( 'elementor-frontend' );
//     }
// }
// add_action( 'wp_print_styles', 'dequeue_elementor_force', 99 );

 /** Remove jQuery From WordPress */
//  function my_init() {
//     if (!is_admin()) {
//         wp_deregister_script('jquery');
//         wp_register_script('jquery', false);
//     }
// }
// add_action('init', 'my_init');

// // Xóa Elementor css
// function remove_elementor_frontend_styles() {
//     if ( ! is_admin() ) {
//         wp_dequeue_style('elementor-frontend');        // Dừng enqueue CSS
//         wp_deregister_style('elementor-frontend');     // Gỡ đăng ký CSS
//     }
// }
// add_action('wp_enqueue_scripts', 'remove_elementor_frontend_styles', 100);

// // Xóa Elementor js
// function remove_elementor_runtime_script() {
//     if ( ! is_admin() ) {
//         wp_dequeue_script('elementor-webpack-runtime');
//         wp_deregister_script('elementor-webpack-runtime');
//     }
// }
// // add_action('wp_enqueue_scripts', 'remove_elementor_runtime_script', 100);

// // Xóa Toc js
// function remove_tocplus_front_script() {
//     wp_dequeue_script('toc-front');        // Ngăn không cho script được xếp hàng
//     wp_deregister_script('toc-front');     // Hủy đăng ký script
// }
// add_action('wp_enqueue_scripts', 'remove_tocplus_front_script', 100);

// Xóa Elementor css
function remove_elementor_frontend_styles() {
    if (!is_user_logged_in()) {
        wp_dequeue_style('elementor-frontend');        // Dừng enqueue CSS
        wp_deregister_style('elementor-frontend');     // Gỡ đăng ký CSS
    }
}
add_action('wp_enqueue_scripts', 'remove_elementor_frontend_styles', 100);

// Xóa Elementor js
function remove_elementor_runtime_script() {
    if (!is_user_logged_in()) {
        wp_dequeue_script('elementor-webpack-runtime');
        wp_deregister_script('elementor-webpack-runtime');
        wp_dequeue_script('toc-front');        // Ngăn không cho script được xếp hàng
        wp_deregister_script('toc-front');     // Hủy đăng ký script
    }
}
add_action('wp_enqueue_scripts', 'remove_elementor_runtime_script', 100);

?>