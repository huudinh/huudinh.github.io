<?php
// Schema.org JSON for breadcrumbs
add_action('wp_footer','nvt_schema_breadcrumbs');
function nvt_schema_breadcrumbs() {

$checkPostQuestion = is_page_template( 'templates/post_question.php' );

if(is_singular('post') && !$checkPostQuestion) {
    global $post;
    $postId = $post->ID;
    $cate = get_the_category($post->ID); 
    $cat_name = $cate[0] -> cat_name;
    
    $meta_desc = get_post_meta($postId, '_yoast_wpseo_metadesc', true);
    if(empty($meta_desc)) {
        $sapo = preg_split('/\r?\n|\r/', $post->post_content);

        $description = $sapo[0];
        if(mb_strlen($description, 'UTF-8') > 297) {
            $meta_desc = mb_substr($description, 0, 297, 'UTF-8') . '...';
        } else {
            $meta_desc = $description;
        }
    }

    $image = '/wp-content/themes/SCI_Theme/Module/assets/images/favicon.png';
    if(has_post_thumbnail($postId)) {
        $image = wp_get_attachment_image_src(get_post_thumbnail_id($postId), 'full', false);
        $image = $image[0];
    }

    $count = 1;
    ?>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Article",
            "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "<?php echo get_the_permalink($postId); ?>"
            },
            "url": "<?php echo get_the_permalink($postId); ?>",
            "headline": "<?php echo esc_html(get_the_title($postId)); ?>",
            "image": {
                "@type": "ImageObject",
                "url": "<?php echo $image; ?>",
                "height": 1280,
                "width": 628
            },
            "datePublished": "<?php echo get_the_date('d/m/Y', $postId); ?>",
            "dateModified": "<?php echo get_post_modified_time('d/m/Y', $postId); ?>",
            "articleSection": "<?php echo $cat_name ?>",
            "creator": {
                "@type": "Thing",
                "name": "benhvienthammy.net"
           },
            "publisher": {
                "@type": "Organization",
                "name": "bệnh viện thẩm mỹ",
                "logo": {
                    "@type": "ImageObject",
                    "url": "<?php echo home_url(); ?>/wp-content/themes/SCI_Theme/Module/assets/images/favicon.png",
                    "width": 425,
                    "height": 124
                }
            },
            "description": "<?php echo esc_html($meta_desc); ?>"
        }
    </script>
<?php
}
?>
<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "MedicalOrganization",
        "url": "https://benhvienthammy.net/",
        "name": "bệnh viện thẩm mỹ",
        "email": "taytrang@gmail.com",
        "logo":"<?php echo home_url(); ?>/wp-content/themes/SCI_Theme/Module/assets/images/favicon.png",
        "description": "bệnh viện thẩm mỹ, thông tin mới nhất về ngành thẩm mỹ, làm đẹp",
        "telephone": "+84987456123",
        "availableChannel": {
            "@type": "ServiceChannel",
            "name": "bệnh viện thẩm mỹ",
            "availableLanguage": {
                "@type": "Language",
                "name": "Việt Nam, English",
                "alternateName": "vi,en"
            }
        }
    }
</script> 

<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "WebSite",
        "name": "bệnh viện thẩm mỹ",
        "alternateName": "bệnh viện thẩm mỹ",
        "url": "<?php echo home_url(); ?>",
        "potentialAction": {
            "@type": "SearchAction",
            "target": "<?php echo home_url(); ?>/?s={s}",
            "query-input": "required name=s"
        }
    }
</script>
        
<?php
}

/**
 * Add schema to yoast seo breadcrumb
 */
add_filter('wpseo_breadcrumb_links', 'jj_add_crumb_schema', 10, 1);
function jj_add_crumb_schema($crumbs) {
    if ( ! is_array( $crumbs ) || $crumbs === array() ) {
        return $crumbs;
    }
    $listItems = [];
    $j = 1;
    foreach ( $crumbs as $i => $crumb ) {
        $item = [];
        $listItem = [
            '@type' => 'ListItem',
            'position' => $j,
            'name' => $crumb['text'],
            'item' => $crumb['url']
        ];
        $listItems[] = $listItem;
        $j++;
    }
    $schema = [
        '@context' => 'http://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => $listItems
    ];
    $html = '<script type="application/ld+json">' . "\n" . json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . "\n" . '</script> ';
    // echo $html;
    if(is_singular('post')) {
        echo $html;
    }
    return $crumbs;
}
?>