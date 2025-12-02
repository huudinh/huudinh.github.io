<?php
    $page_field = get_field('group_page_field', 'option');
    
    if (!empty($page_field)){
        foreach($page_field['header_custom'] as $field){
            $name = $field['acf_fc_layout'];
            if($name == 'header_mz_1_0_0'){
                $template_path = locate_template('template-parts/content-' . $name . '.php');
                if (!empty($template_path)) {
                    include($template_path);
                }
            }
        }
    }
?>