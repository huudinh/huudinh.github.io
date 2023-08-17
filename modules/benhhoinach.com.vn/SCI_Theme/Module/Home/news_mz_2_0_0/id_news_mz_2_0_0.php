<?php
                            'id_news_mz_2_0_0' => array(
                                'key' => 'id_news_mz_2_0_0',
                                'name' => 'news_mz_2_0_0',
                                'label' => 'News 2.0.0',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'id_header_8_0_0_sub2',
                                        'label' => 'Chi nhánh',
                                        'name' => 'news_place',
                                        'type' => 'repeater',
                                        'min' => 0,
                                        'max' => 0,
                                        'layout' => 'table',
                                        'button_label' => '',
                                        'sub_fields' => array(
                                            array(
                                                'key' => 'id_news_mz_2_0_0_sub1',
                                                'label' => 'Tiêu đề',
                                                'name' => 'news_title',
                                                'type' => 'text',
                                            ),
                                            array(
                                                'key' => 'id_news_mz_2_0_0_sub2',
                                                'label' => 'Chọn Cate',
                                                'name' => 'news_content',
                                                'type' => 'taxonomy',
                                                'instructions' => '',
                                                'required' => 0,
                                                'conditional_logic' => 0,
                                                'taxonomy' => 'category',
                                                'field_type' => 'select',
                                                'allow_null' => 0,
                                                'add_term' => 1,
                                                'save_terms' => 0,
                                                'load_terms' => 0,
                                                'return_format' => 'object',
                                                'multiple' => 0,
                                            ),
                                        ),
                                    ),
                                    
                                ),
                            ),
?>