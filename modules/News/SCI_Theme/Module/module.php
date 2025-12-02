<?php
    $page_field = get_field('group_page_field');
    // Đường dẫn đến theme
    $path = get_template_directory_uri();
    if(!empty($page_field)){
        foreach($page_field['body_custom'] as $field){
            $name = $field['acf_fc_layout'];
            if (!empty($name)) {
                $template_path = locate_template('template-parts/content-' . $name . '.php');
                if (!empty($template_path)) {
                    include($template_path);
                }
            }
        }
    }
?>