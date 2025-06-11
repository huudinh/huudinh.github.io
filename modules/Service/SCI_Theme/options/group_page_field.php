<?php
if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_5e534d93e4dbc',
        'title' => 'Cấu Hình Hệ Thống',
        'fields' => array(
            array(
                'key' => 'group_admin_control',
                'label' => '',
                'name' => 'group_admin_control',
                'type' => 'checkbox',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                    'show' => 'Hiển Thị Module',
                ),
                'allow_null' => 0,
                'other_choice' => 0,
                'default_value' => 'default',
                'layout' => 'horizontal',
                'return_format' => 'value',
                'save_other_choice' => 0,
            ),
            array(
                'key' => 'group_admin',
                'label' => '',
                'name' => 'group_admin',
                'type' => 'checkbox',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'group_admin_control',
                            'operator' => '==',
                            'value' => 'show',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                    'show_header_footer' => 'Header/Footer',
                    'show_module_main' => 'Module Main',
                    'show_module_sidebar' => 'Sidebar',
                    'show_module_site' => 'WebSite',
                    'show_module_landing' => 'Landing',
                ),
                'allow_null' => 0,
                'other_choice' => 0,
                'default_value' => 'default',
                'layout' => 'horizontal',
                'return_format' => 'value',
                'save_other_choice' => 0,
            ),
            array(
                'key' => 'field_5e534e2c90dac',
                'label' => '',
                'name' => 'group_page_field',
                'type' => 'group',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'group_admin_control',
                            'operator' => '==',
                            'value' => 'show',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'layout' => 'block',
                'sub_fields' => array(
                    array(      
                        'key' => 'group_page_field_header',
                        'label' => 'Cài đặt Header - Footer',
                        'name' => '',
                        'type' => 'tab',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'group_admin',
                                    'operator' => '==',
                                    'value' => 'show_header_footer',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'placement' => 'top',
                        'endpoint' => 0,
                    ),
                    array(
                        'key' => 'header_custom',
                        'label' => '',
                        'name' => 'header_custom',
                        'type' => 'flexible_content',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'group_admin',
                                    'operator' => '==',
                                    'value' => 'show_header_footer',
                                ),
                            ),
                        ),
                        'layouts' => array(
                        // Bat dau Module
                            'id_header_knrh_1_0_0' => array(
                                'key' => 'id_header_knrh_1_0_0',
                                'name' => 'header_knrh_1_0_0',
                                'label' => 'Header [header_knrh_1_0_0]',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'id_header_knrh_1_0_0_sub1',
                                        'label' => 'Menu',
                                        'name' => 'id_header_knrh_1_0_0_sub1',
                                        'type' => 'flexible_content',
                                        'layouts' => array(
                                            'id_header_knrh_1_0_0_sub1_layout1' => array(
                                                'key' => 'id_header_knrh_1_0_0_sub1_layout1',
                                                'name' => 'menu_don',
                                                'label' => 'Menu Cấp 1',
                                                'display' => 'row',
                                                'sub_fields' => array(
                                                    array(
                                                        'key' => 'id_header_knrh_1_0_0_sub1_layout1_sub1',
                                                        'label' => 'Menu Cấp 1',
                                                        'name' => 'title',
                                                        'type' => 'textarea',
                                                        'instructions' => 'Dòng 1: Tên Menu, Dòng 2: Link ',
                                                        'rows' => 3,
                                                    ),
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            'id_header_knrh_1_0_0_sub1_layout2' => array(
                                                'key' => 'id_header_knrh_1_0_0_sub1_layout2',
                                                'name' => 'menu_sub',
                                                'label' => 'Menu Cấp 2',
                                                'display' => 'row',
                                                'sub_fields' => array(
                                                    array(
                                                        'key' => 'id_header_knrh_1_0_0_sub1_layout2_sub1',
                                                        'label' => 'Menu cha',
                                                        'name' => 'title',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                            Dòng 1 : Tên menu <br>
                                                            Dòng 2 : Link <br>
                                                            Dòng 3 : Số cột <br>
                                                        ',
                                                        'rows' => 4,
                                                    ),
                                                    array(
                                                        'key' => 'id_header_knrh_1_0_0_sub1_layout2_sub2',
                                                        'label' => 'Sub Menu',
                                                        'name' => 'col1',
                                                        'type' => 'wysiwyg',
                                                        'instructions' => 'Sử dụng groups UL>LI + Enter để tạo cột',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'tabs' => 'all',
                                                        'toolbar' => 'full',
                                                        'media_upload' => 1,
                                                        'delay' => 0,
                                                    ),
                                                ),
                                            ),
                                            'id_header_knrh_1_0_0_sub1_layout3' => array(
                                                'key' => 'id_header_knrh_1_0_0_sub1_layout3',
                                                'name' => 'menu_sub_multil',
                                                'label' => 'Menu Cấp 3',
                                                'display' => 'row',
                                                'sub_fields' => array(
                                                    array(
                                                        'key' => 'id_header_knrh_1_0_0_sub1_layout3_sub1',
                                                        'label' => 'Menu Cha',
                                                        'name' => 'title',
                                                        'type' => 'textarea',
                                                        'instructions' => 'Dòng 1: Tên Menu, Dòng 2: Link ',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'rows' => 3,
                                                    ),
                                                    array(
                                                        'key' => 'id_header_knrh_1_0_0_sub1_layout3_sub2',
                                                        'label' => 'Menu Con',
                                                        'name' => 'subMenu',
                                                        'type' => 'flexible_content',
                                                        'layouts' => array(
                                                            'layout_content' => array(
                                                                'key' => 'id_header_knrh_1_0_0_sub1_layout3_sub2_layout1',
                                                                'name' => 'subMenuContent',
                                                                'label' => 'Menu Con',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    array(
                                                                        'key' => 'id_header_knrh_1_0_0_sub1_layout3_sub2_layout1_sub1',
                                                                        'label' => 'Tiêu đề',
                                                                        'name' => 'subMenuTitle',
                                                                        'type' => 'textarea',
                                                                        'instructions' => 'Dòng 1: Tên Menu, Dòng 2: Link ',
                                                                        'rows' => 3,
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_header_knrh_1_0_0_sub1_layout3_sub2_layout1_sub2',
                                                                        'label' => 'Sub Menu',
                                                                        'name' => 'col1',
                                                                        'type' => 'wysiwyg',
                                                                        'instructions' => 'Sử dụng groups UL>LI + Enter để tạo cột',
                                                                        'tabs' => 'all',
                                                                        'toolbar' => 'full',
                                                                        'media_upload' => 1,
                                                                        'delay' => 0,
                                                                    ),
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                        ),
                                                        'button_label' => 'Add Row',
                                                        'min' => '',
                                                        'max' => '',
                                                    ),
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                           
                                        ),
                                        'button_label' => 'Thêm Menu',
                                    ),
                                ),
                                'min' => '',
                                'max' => '',
                            ),
                            'id_footer_knrh_1_0_0' => array(
                                'key' => 'id_footer_knrh_1_0_0',
                                'name' => 'footer_knrh_1_0_0',
                                'label' => 'Footer [footer_knrh_1_0_0]',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'id_footer_knrh_1_0_0_sub1',
                                        'label' => '',
                                        'name' => 'html',
                                        'type' => 'textarea',
                                        'instructions' => 'Code HTML',
                                        'rows' => 5,
                                    ),
                                ),
                            ),

                            /*HEADER*/
                            'header_news' => array(
                                'key' => 'header',
                                'name' => 'header',
                                'label' => 'Header Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'header_news_sub_fields',
                                        'label' => '',
                                        'name' => 'header_news_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                            /*HEADER 8.0.0*/
                                            'id_header_8_0_0' => array(
                                                'key' => 'id_header_8_0_0',
                                                'name' => 'header_8_0_0',
                                                'label' => 'Header 8.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    array(
                                                        'key' => 'id_header_8_0_0_tab1',
                                                        'label' => 'Thông Tin Chung',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_header_8_0_0_sub1',
                                                        'label' => 'Thông tin chung',
                                                        'name' => 'about',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                            Dòng 1 : Slogan <br>
                                                            Dòng 2 : Địa chỉ <br>
                                                            Dòng 3 : Số điện thoại
                                                        ',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 3,
                                                        'new_lines' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_header_8_0_0_tab2',
                                                        'label' => 'Chi nhánh',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_header_8_0_0_sub2',
                                                        'label' => 'Chi nhánh',
                                                        'name' => 'header_place',
                                                        'type' => 'repeater',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'hide_admin' => 0,
                                                        'collapsed' => '',
                                                        'min' => 0,
                                                        'max' => 0,
                                                        'layout' => 'table',
                                                        'button_label' => '',
                                                        'sub_fields' => array(
                                                            array(
                                                                'key' => 'id_header_8_0_0_sub2_sub1',
                                                                'label' => 'Chi nhánh',
                                                                'name' => 'place_city',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                            array(
                                                                'key' => 'id_header_8_0_0_sub2_sub2',
                                                                'label' => 'Link Url',
                                                                'name' => 'place_url',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '#',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                        ),
                                                    ),
                                                    array(
                                                        'key' => 'id_header_8_0_0_tab3',
                                                        'label' => 'Cài Đặt Menu',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_header_8_0_0_menu',
                                                        'label' => '',
                                                        'name' => 'header_8_0_0_menu',
                                                        'type' => 'flexible_content',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'layouts' => array(
                                                            'layout_homeTitle' => array(
                                                                'key' => 'id_header_8_0_0_menu_layout1',
                                                                'name' => 'header_8_0_0_menu_1',
                                                                'label' => 'Danh sách Menu',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    // Bat dau Field
                                                                    array(
                                                                        'key' => 'id_header_8_0_0_menu_layout1_sub1',
                                                                        'label' => '',
                                                                        'name' => 'title',
                                                                        'type' => 'textarea',
                                                                        'instructions' => 'Dòng 1 : Tên Menu | Dòng 2 : Link ',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'maxlength' => '',
                                                                        'rows' => 2,
                                                                        'new_lines' => '',
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_header_8_0_0_menu_layout1_sub3',
                                                                        'label' => '',
                                                                        'name' => 'menu_c2_check',
                                                                        'type' => 'checkbox',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'choices' => array(
                                                                            'show' => 'Thêm Menu C2',
                                                                        ),
                                                                        'allow_null' => 0,
                                                                        'other_choice' => 0,
                                                                        'default_value' => 'default',
                                                                        'layout' => 'horizontal',
                                                                        'return_format' => 'value',
                                                                        'save_other_choice' => 0,
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_header_8_0_0_menu_layout1_sub2',
                                                                        'label' => '',
                                                                        'name' => 'header_8_0_0_menu_1_box',
                                                                        'type' => 'flexible_content',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => array(
                                                                            array(
                                                                                array(
                                                                                    'field' => 'id_header_8_0_0_menu_layout1_sub3',
                                                                                    'operator' => '==',
                                                                                    'value' => 'show',
                                                                                ),
                                                                            ),
                                                                        ),
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'layouts' => array(
                                                                            'layout_homeTitle' => array(
                                                                                'key' => 'id_header_8_0_0_menu_layout1_sub2_layout1',
                                                                                'name' => 'header_8_0_0_menu_2',
                                                                                'label' => 'Menu Cấp 2',
                                                                                'display' => 'block',
                                                                                'sub_fields' => array(
                                                                                    // Bat dau Field
                                                                                    array(
                                                                                        'key' => 'id_header_8_0_0_menu_layout1_sub2_layout1_sub1',
                                                                                        'label' => '',
                                                                                        'name' => 'title',
                                                                                        'type' => 'textarea',
                                                                                        'instructions' => 'Dòng 1 : Tên Menu | Dòng 2 : Link ',
                                                                                        'required' => 0,
                                                                                        'conditional_logic' => 0,
                                                                                        'wrapper' => array(
                                                                                            'width' => '',
                                                                                            'class' => '',
                                                                                            'id' => '',
                                                                                        ),
                                                                                        'default_value' => '',
                                                                                        'placeholder' => '',
                                                                                        'maxlength' => '',
                                                                                        'rows' => 2,
                                                                                        'new_lines' => '',
                                                                                    ),
                                                                                    array(
                                                                                        'key' => 'id_header_8_0_0_menu_layout1_sub2_layout1_sub2',
                                                                                        'label' => '',
                                                                                        'name' => 'header_8_0_0_menu_2_box',
                                                                                        'type' => 'flexible_content',
                                                                                        'instructions' => '',
                                                                                        'required' => 0,
                                                                                        'conditional_logic' => 0,
                                                                                        'wrapper' => array(
                                                                                            'width' => '',
                                                                                            'class' => '',
                                                                                            'id' => '',
                                                                                        ),
                                                                                        'layouts' => array(
                                                                                            'layout_homeTitle' => array(
                                                                                                'key' => 'id_header_8_0_0_menu_layout1_sub2_layout1_sub2_layout1',
                                                                                                'name' => 'header_8_0_0_menu_3',
                                                                                                'label' => 'Menu Cấp 3',
                                                                                                'display' => 'block',
                                                                                                'sub_fields' => array(
                                                                                                    // Bat dau Field
                                                                                                    array(
                                                                                                        'key' => 'id_header_8_0_0_menu_layout1_sub2_layout1_sub2_layout1_sub1',
                                                                                                        'label' => '',
                                                                                                        'name' => 'title',
                                                                                                        'type' => 'textarea',
                                                                                                        'instructions' => 'Dòng 1 : Tên Menu | Dòng 2 : Link ',
                                                                                                        'required' => 0,
                                                                                                        'conditional_logic' => 0,
                                                                                                        'wrapper' => array(
                                                                                                            'width' => '',
                                                                                                            'class' => '',
                                                                                                            'id' => '',
                                                                                                        ),
                                                                                                        'default_value' => '',
                                                                                                        'placeholder' => '',
                                                                                                        'maxlength' => '',
                                                                                                        'rows' => 2,
                                                                                                        'new_lines' => '',
                                                                                                    ),
                                                                                                    array(
                                                                                                        'key' => 'id_header_8_0_0_menu_layout1_sub2_layout1_sub2_layout1_sub3',
                                                                                                        'label' => '',
                                                                                                        'name' => 'menu_c4_check',
                                                                                                        'type' => 'checkbox',
                                                                                                        'instructions' => '',
                                                                                                        'required' => 0,
                                                                                                        'conditional_logic' => 0,
                                                                                                        'wrapper' => array(
                                                                                                            'width' => '',
                                                                                                            'class' => '',
                                                                                                            'id' => '',
                                                                                                        ),
                                                                                                        'choices' => array(
                                                                                                            'show' => 'Thêm Menu List',
                                                                                                        ),
                                                                                                        'allow_null' => 0,
                                                                                                        'other_choice' => 0,
                                                                                                        'default_value' => 'default',
                                                                                                        'layout' => 'horizontal',
                                                                                                        'return_format' => 'value',
                                                                                                        'save_other_choice' => 0,
                                                                                                    ),
                                                                                                    array(
                                                                                                        'key' => 'id_header_8_0_0_menu_layout1_sub2_layout1_sub2_layout1_sub2',
                                                                                                        'label' => '',
                                                                                                        'name' => 'menu_c4',
                                                                                                        'type' => 'wysiwyg',
                                                                                                        'instructions' => 'Sử dụng cấu trúc UL > Li > a',
                                                                                                        'required' => 0,
                                                                                                        'conditional_logic' => array(
                                                                                                            array(
                                                                                                                array(
                                                                                                                    'field' => 'id_header_8_0_0_menu_layout1_sub2_layout1_sub2_layout1_sub3',
                                                                                                                    'operator' => '==',
                                                                                                                    'value' => 'show',
                                                                                                                ),
                                                                                                            ),
                                                                                                        ),
                                                                                                        'wrapper' => array(
                                                                                                            'width' => '',
                                                                                                            'class' => '',
                                                                                                            'id' => '',
                                                                                                        ),
                                                                                                        'default_value' => '',
                                                                                                        'tabs' => 'all',
                                                                                                        'toolbar' => 'full',
                                                                                                        'media_upload' => 1,
                                                                                                        'delay' => 0,
                                                                                                    ),
                                                                                                    // End Field Base						
                                                                                                ),
                                                                                                'min' => '',
                                                                                                'max' => '',
                                                                                            ),
                                                                                            
                                                                                        ),
                                                                                        'button_label' => 'Thêm Menu C3',
                                                                                        'min' => '',
                                                                                        'max' => '',
                                                                                    ),                                                                                                    
                                                                                    // End Field Base						
                                                                                ),
                                                                                'min' => '',
                                                                                'max' => '',
                                                                            ),
                                                                            
                                                                        ),
                                                                        'button_label' => 'Thêm Menu C2',
                                                                        'min' => '',
                                                                        'max' => '',
                                                                    ),

                                                                    // End Field Base						
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                            
                                                        ),
                                                    
                                                        'button_label' => 'Thêm Menu C1',
                                                        'min' => '',
                                                        'max' => '',
                                                    ),
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END HEADER 8.0.0*/
                                            /*HEADER 11.0.0*/
                                            'id_header_11_0_0' => array(
                                                'key' => 'id_header_11_0_0',
                                                'name' => 'header_11_0_0',
                                                'label' => 'Header 11.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    // array(
                                                    //     'key' => 'id_header_11_0_0_tab1',
                                                    //     'label' => 'Thông Tin Chung',
                                                    //     'name' => '',
                                                    //     'type' => 'tab',
                                                    //     'instructions' => '',
                                                    //     'required' => 0,
                                                    //     'conditional_logic' => 0,
                                                    //     'wrapper' => array(
                                                    //         'width' => '',
                                                    //         'class' => '',
                                                    //         'id' => '',
                                                    //     ),
                                                    //     'placement' => 'top',
                                                    //     'endpoint' => 0,
                                                    // ),
                                                    // array(
                                                    //     'key' => 'id_header_11_0_0_tab1_sub1',
                                                    //     'label' => 'Thông tin chung',
                                                    //     'name' => 'about',
                                                    //     'type' => 'textarea',
                                                    //     'instructions' => '
                                                    //         Dòng 1 : Slogan <br>
                                                    //         Dòng 2 : Link logo ( Size 180x60 ) <br>
                                                    //         Dòng 3 : Số điện thoại
                                                    //     ',
                                                    //     'required' => 0,
                                                    //     'conditional_logic' => 0,
                                                    //     'wrapper' => array(
                                                    //         'width' => '',
                                                    //         'class' => '',
                                                    //         'id' => '',
                                                    //     ),
                                                    //     'default_value' => '',
                                                    //     'placeholder' => '',
                                                    //     'maxlength' => '',
                                                    //     'rows' => 3,
                                                    //     'new_lines' => '',
                                                    // ),
                                                    array(
                                                        'key' => 'id_header_11_0_0_tab2',
                                                        'label' => 'Cài Đặt Menu',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_header_11_0_0_sub1',
                                                        'label' => 'Menu',
                                                        'name' => 'id_header_11_0_0_sub1',
                                                        'type' => 'flexible_content',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'layouts' => array(
                                                            'id_header_11_0_0_sub1_layout1' => array(
                                                                'key' => 'id_header_11_0_0_sub1_layout1',
                                                                'name' => 'menu_don',
                                                                'label' => 'Menu Đơn',
                                                                'display' => 'row',
                                                                'sub_fields' => array(
                                                                    array(
                                                                        'key' => 'id_header_11_0_0_sub1_layout1_sub1',
                                                                        'label' => 'Tên Menu VI',
                                                                        'name' => 'title',
                                                                        'type' => 'textarea',
                                                                        'instructions' => 'Tên Menu | Link ',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'maxlength' => '',
                                                                        'rows' => 3,
                                                                        'new_lines' => '',
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_header_11_0_0_sub1_layout1_sub2',
                                                                        'label' => 'Tên Menu EN',
                                                                        'name' => 'title_en',
                                                                        'type' => 'textarea',
                                                                        'instructions' => 'Tên Menu | Link ',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'maxlength' => '',
                                                                        'rows' => 3,
                                                                        'new_lines' => '',
                                                                    ),
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                            'id_header_11_0_0_sub1_layout2' => array(
                                                                'key' => 'id_header_11_0_0_sub1_layout2',
                                                                'name' => 'menu_sub',
                                                                'label' => 'Menu Sub',
                                                                'display' => 'row',
                                                                'sub_fields' => array(
                                                                    array(
                                                                        'key' => 'id_header_11_0_0_sub1_layout2_sub1',
                                                                        'label' => 'Menu Cha VI',
                                                                        'name' => 'title',
                                                                        'type' => 'textarea',
                                                                        'instructions' => 'Tên Menu <br> Link ',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'maxlength' => '',
                                                                        'rows' => 3,
                                                                        'new_lines' => '',
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_header_11_0_0_sub1_layout2_sub2',
                                                                        'label' => 'Sub Menu VI',
                                                                        'name' => 'col1',
                                                                        'type' => 'wysiwyg',
                                                                        'instructions' => 'Sử dụng groups UL>LI + Enter để tạo cột',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'tabs' => 'all',
                                                                        'toolbar' => 'full',
                                                                        'media_upload' => 1,
                                                                        'delay' => 0,
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_header_11_0_0_sub1_layout2_sub3',
                                                                        'label' => 'Menu Cha EN',
                                                                        'name' => 'title_en',
                                                                        'type' => 'textarea',
                                                                        'instructions' => 'Tên Menu <br> Link ',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'maxlength' => '',
                                                                        'rows' => 3,
                                                                        'new_lines' => '',
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_header_11_0_0_sub1_layout2_sub4',
                                                                        'label' => 'Sub Menu EN',
                                                                        'name' => 'col1_en',
                                                                        'type' => 'wysiwyg',
                                                                        'instructions' => 'Sử dụng groups UL>LI + Enter để tạo cột',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'tabs' => 'all',
                                                                        'toolbar' => 'full',
                                                                        'media_upload' => 1,
                                                                        'delay' => 0,
                                                                    ),
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                            'id_header_11_0_0_sub1_layout3' => array(
                                                                'key' => 'id_header_11_0_0_sub1_layout3',
                                                                'name' => 'menu_sub_full',
                                                                'label' => 'Mega Menu',
                                                                'display' => 'row',
                                                                'sub_fields' => array(
                                                                    array(
                                                                        'key' => 'id_header_11_0_0_sub1_layout3_sub1',
                                                                        'label' => 'Menu cha VI',
                                                                        'name' => 'title',
                                                                        'type' => 'textarea',
                                                                        'instructions' => '
                                                                            Dòng 1 : Tên menu <br>
                                                                            Dòng 2 : Link <br>
                                                                            Dòng 3 : Số cột <br>
                                                                        ',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'maxlength' => '',
                                                                        'rows' => 4,
                                                                        'new_lines' => '',
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_header_11_0_0_sub1_layout3_sub2',
                                                                        'label' => 'Sub Menu VI',
                                                                        'name' => 'col1',
                                                                        'type' => 'wysiwyg',
                                                                        'instructions' => 'Sử dụng groups UL>LI + Enter để tạo cột',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'tabs' => 'all',
                                                                        'toolbar' => 'full',
                                                                        'media_upload' => 1,
                                                                        'delay' => 0,
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_header_11_0_0_sub1_layout3_sub3',
                                                                        'label' => 'Menu cha EN',
                                                                        'name' => 'title_en',
                                                                        'type' => 'textarea',
                                                                        'instructions' => '
                                                                            Dòng 1 : Tên menu <br>
                                                                            Dòng 2 : Link <br>
                                                                            Dòng 3 : Số cột <br>
                                                                        ',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'maxlength' => '',
                                                                        'rows' => 4,
                                                                        'new_lines' => '',
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_header_11_0_0_sub1_layout3_sub4',
                                                                        'label' => 'Sub Menu EN',
                                                                        'name' => 'col1_en',
                                                                        'type' => 'wysiwyg',
                                                                        'instructions' => 'Sử dụng groups UL>LI + Enter để tạo cột',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'tabs' => 'all',
                                                                        'toolbar' => 'full',
                                                                        'media_upload' => 1,
                                                                        'delay' => 0,
                                                                    ),
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                        ),
                                                        'button_label' => 'Thêm Menu',
                                                        'min' => '',
                                                        'max' => '',
                                                    ),
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END HEADER 11.0.0*/

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Header',
                                        'min' => '',
                                        'max' => '1',
                                    ),                     
                                ),
                                'min' => '',
                                'max' => '2',
                            ),
                            /*END HEADER*/ 

                            /*FOOTER*/
                            'footer' => array(
                                'key' => 'footer',
                                'name' => 'footer',
                                'label' => 'Footer Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'footer_sub_fields',
                                        'label' => '',
                                        'name' => 'footer_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                            /*FOOTER 3.0.0*/
                                            'id_footer_3_0_0' => array(
                                                'key' => 'id_footer_3_0_0',
                                                'name' => 'footer_3_0_0',
                                                'label' => 'Footer 3.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /* Code */
                                                    array(
                                                        'key' => 'id_footer_3_0_0_sub',
                                                        'label' => 'Thông Tin',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 4,
                                                        'new_lines' => '',
                                                    ),
                                                    /* End Code */
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END FOOTER 3.0.0*/

                                            /*FOOTER 7.0.0*/
                                            'id_footer_7_0_0' => array(
                                                'key' => 'id_footer_7_0_0',
                                                'name' => 'footer_7_0_0',
                                                'label' => 'Footer 7.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /* Code */
                                                    array(
                                                        'key' => 'id_footer_7_0_0_sub',
                                                        'label' => '',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                        ',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 3,
                                                        'new_lines' => '',
                                                    ),
                                                    /* End Code */
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END FOOTER 7.0.0*/

                                            /*FOOTER 8.0.0*/
                                            'id_footer_8_0_0' => array(
                                                'key' => 'id_footer_8_0_0',
                                                'name' => 'footer_8_0_0',
                                                'label' => 'Footer 8.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /* Code */
                                                    array(
                                                        'key' => 'id_footer_8_0_0_sub',
                                                        'label' => 'Footer',
                                                        'name' => 'footer',
                                                        'type' => 'flexible_content',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'layouts' => array(
                                                            'layout_footer_8_0_0_box1' => array(
                                                                'key' => 'id_footer_8_0_0_sub_box1',
                                                                'name' => 'footer_box1',
                                                                'label' => 'Hotline & Mạng xã hội',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    // Bat dau Field
                                                                    array(
                                                                        'key' => 'id_footer_8_0_0_sub_box1_layout1',
                                                                        'label' => 'Chi tiết',
                                                                        'name' => 'social_detail',
                                                                        'type' => 'textarea',
                                                                        'instructions' => '
                                                                            Dòng 1 : Link fb <br>
                                                                            Dòng 2 : Link youtube <br>
                                                                            Dòng 3 : Link twiter <br>
                                                                            Dòng 4 : Link tiktok <br>
                                                                            Dòng 5 : Link insta <br>
                                                                            Dòng 6 : Số điện thoại <br>
                                                                            Dòng 7 : Link logo ( Size 250x56 ) <br>
                                                                        ',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'maxlength' => '',
                                                                        'rows' => 7,
                                                                        'new_lines' => '',
                                                                    ),
                                                                    // End Field Base                       
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                            'layout_footer_8_0_0_box2' => array(
                                                                'key' => 'id_footer_8_0_0_sub_box2',
                                                                'name' => 'footer_box2',
                                                                'label' => 'Thông tin chung',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    // Bat dau Field
                                                                    array(
                                                                        'key' => 'id_footer_8_0_0_sub_box2_layout1',
                                                                        'label' => 'Địa chỉ VN',
                                                                        'name' => 'address_place',
                                                                        'type' => 'repeater',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'hide_admin' => 0,
                                                                        'collapsed' => '',
                                                                        'min' => 0,
                                                                        'max' => 0,
                                                                        'layout' => 'table',
                                                                        'button_label' => '',
                                                                        'sub_fields' => array(
                                                                            array(
                                                                                'key' => 'id_footer_8_0_0_sub_box2_layout1_box1',
                                                                                'label' => 'Địa chỉ',
                                                                                'name' => 'place_city',
                                                                                'type' => 'text',
                                                                                'instructions' => '',
                                                                                'required' => 0,
                                                                                'conditional_logic' => 0,
                                                                                'wrapper' => array(
                                                                                    'width' => '',
                                                                                    'class' => '',
                                                                                    'id' => '',
                                                                                ),
                                                                                'hide_admin' => 0,
                                                                                'default_value' => '',
                                                                                'placeholder' => '',
                                                                                'prepend' => '',
                                                                                'append' => '',
                                                                                'maxlength' => '',
                                                                            ),
                                                                        ),
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_footer_8_0_0_sub_box2_layout2',
                                                                        'label' => 'Địa chỉ EN',
                                                                        'name' => 'address_place_en',
                                                                        'type' => 'repeater',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'hide_admin' => 0,
                                                                        'collapsed' => '',
                                                                        'min' => 0,
                                                                        'max' => 0,
                                                                        'layout' => 'table',
                                                                        'button_label' => '',
                                                                        'sub_fields' => array(
                                                                            array(
                                                                                'key' => 'id_footer_8_0_0_sub_box2_layout2_box1',
                                                                                'label' => 'Địa chỉ EN',
                                                                                'name' => 'place_city_en',
                                                                                'type' => 'text',
                                                                                'instructions' => '',
                                                                                'required' => 0,
                                                                                'conditional_logic' => 0,
                                                                                'wrapper' => array(
                                                                                    'width' => '',
                                                                                    'class' => '',
                                                                                    'id' => '',
                                                                                ),
                                                                                'hide_admin' => 0,
                                                                                'default_value' => '',
                                                                                'placeholder' => '',
                                                                                'prepend' => '',
                                                                                'append' => '',
                                                                                'maxlength' => '',
                                                                            ),
                                                                        ),
                                                                    ),
                                                                    // End Field Base                       
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                            'layout_footer_8_0_0_box3' => array(
                                                                'key' => 'id_footer_8_0_0_sub_box3',
                                                                'name' => 'footer_box3',
                                                                'label' => 'Menu Footer 1',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    // Bat dau Field
                                                                    array(
                                                                        'key' => 'id_footer_8_0_0_sub_box3_layout1',
                                                                        'label' => 'Menu Footer 1 VI',
                                                                        'name' => 'dv_nb',
                                                                        'type' => 'wysiwyg',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'tabs' => 'all',
                                                                        'toolbar' => 'full',
                                                                        'media_upload' => 1,
                                                                        'delay' => 0,
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_footer_8_0_0_sub_box3_layout2',
                                                                        'label' => 'Menu Footer 1 EN',
                                                                        'name' => 'dv_nb_en',
                                                                        'type' => 'wysiwyg',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'tabs' => 'all',
                                                                        'toolbar' => 'full',
                                                                        'media_upload' => 1,
                                                                        'delay' => 0,
                                                                    ),
                                                                    // End Field Base                       
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                            'layout_footer_8_0_0_box4' => array(
                                                                'key' => 'id_footer_8_0_0_sub_box4',
                                                                'name' => 'footer_box4',
                                                                'label' => 'Menu Footer 2',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    // Bat dau Field
                                                                    array(
                                                                        'key' => 'id_footer_8_0_0_sub_box4_layout1',
                                                                        'label' => 'Menu Footer 2 VI',
                                                                        'name' => 'dv_nb1',
                                                                        'type' => 'wysiwyg',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'tabs' => 'all',
                                                                        'toolbar' => 'full',
                                                                        'media_upload' => 1,
                                                                        'delay' => 0,
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_footer_8_0_0_sub_box4_layout2',
                                                                        'label' => 'Menu Footer 2 EN',
                                                                        'name' => 'dv_nb1_en',
                                                                        'type' => 'wysiwyg',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'tabs' => 'all',
                                                                        'toolbar' => 'full',
                                                                        'media_upload' => 1,
                                                                        'delay' => 0,
                                                                    ),
                                                                    // End Field Base                       
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                            'layout_footer_8_0_0_box5' => array(
                                                                'key' => 'id_footer_8_0_0_sub_box5',
                                                                'name' => 'footer_box5',
                                                                'label' => 'Menu Footer 3',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    // Bat dau Field
                                                                    array(
                                                                        'key' => 'id_footer_8_0_0_sub_box5_layout1',
                                                                        'label' => 'Menu Footer 3 VI',
                                                                        'name' => 'dv_nb2',
                                                                        'type' => 'wysiwyg',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'tabs' => 'all',
                                                                        'toolbar' => 'full',
                                                                        'media_upload' => 1,
                                                                        'delay' => 0,
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_footer_8_0_0_sub_box5_layout2',
                                                                        'label' => 'Menu Footer 3 EN',
                                                                        'name' => 'dv_nb2_en',
                                                                        'type' => 'wysiwyg',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'tabs' => 'all',
                                                                        'toolbar' => 'full',
                                                                        'media_upload' => 1,
                                                                        'delay' => 0,
                                                                    ),
                                                                    // End Field Base                       
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                        ),
                                                        'button_label' => 'Add Row',
                                                        'min' => '',
                                                        'max' => '',
                                                    ),
                                                    /* End Code */
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END FOOTER 8.0.0*/

                                            /*FOOTER 9.0.0*/
                                            'id_footer_9_0_0' => array(
                                                'key' => 'id_footer_9_0_0',
                                                'name' => 'footer_9_0_0',
                                                'label' => 'Footer 9.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /* Code */
                                                    array(
                                                        'key' => 'id_footer_9_0_0_sub1',
                                                        'label' => 'About',
                                                        'name' => 'footer_about',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                            Dòng 1 : Link logo ( Size 175x40 ) <br>
                                                            Dòng 2 : Slogan
                                                        ',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 2,
                                                        'new_lines' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_footer_9_0_0_sub3',
                                                        'label' => 'Thông tin mở cửa',
                                                        'name' => 'footer_mc',
                                                        'type' => 'repeater',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'hide_admin' => 0,
                                                        'collapsed' => '',
                                                        'min' => 0,
                                                        'max' => 0,
                                                        'layout' => 'table',
                                                        'button_label' => '',
                                                        'sub_fields' => array(
                                                            array(
                                                                'key' => 'id_footer_9_0_0_sub3_tab1',
                                                                'label' => 'Ảnh mạng xã hội',
                                                                'name' => 'ft_img',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                            array(
                                                                'key' => 'id_footer_9_0_0_sub3_tab2',
                                                                'label' => 'Link MXH',
                                                                'name' => 'ft_lk',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                        ),
                                                    ),
                                                    array(
                                                        'key' => 'id_footer_9_0_0_sub2',
                                                        'label' => 'Nội dung',
                                                        'name' => 'p_info',
                                                        'type' => 'repeater',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'hide_admin' => 0,
                                                        'collapsed' => '',
                                                        'min' => 0,
                                                        'max' => 0,
                                                        'layout' => 'table',
                                                        'button_label' => '',
                                                        'sub_fields' => array(
                                                            array(
                                                                'key' => 'id_footer_9_0_0_sub2_tab2',
                                                                'label' => 'Tên nhóm dịch vụ',
                                                                'name' => 'ft_tt',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                            array(
                                                                'key' => 'id_footer_9_0_0_sub2_tab1',
                                                                'label' => 'Cập nhật 3 dịch vụ một cột',
                                                                'name' => 'footer_place',
                                                                'type' => 'repeater',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'collapsed' => '',
                                                                'min' => 0,
                                                                'max' => 0,
                                                                'layout' => 'table',
                                                                'button_label' => '',
                                                                'sub_fields' => array(
                                                                    array(
                                                                        'key' => 'id_footer_9_0_0_sub2_tab1_sub1',
                                                                        'label' => 'Tên dịch vụ',
                                                                        'name' => 'ft_name',
                                                                        'type' => 'text',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'hide_admin' => 0,
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'prepend' => '',
                                                                        'append' => '',
                                                                        'maxlength' => '',
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_footer_9_0_0_sub2_tab1_sub2',
                                                                        'label' => 'Đường dẫn',
                                                                        'name' => 'ft_link',
                                                                        'type' => 'text',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'hide_admin' => 0,
                                                                        'default_value' => '#',
                                                                        'placeholder' => '',
                                                                        'prepend' => '',
                                                                        'append' => '',
                                                                        'maxlength' => '',
                                                                    ),
                                                                ),
                                                            ),
                                                        ),
                                                    ),
                                                
                                                    /* End Code */
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END FOOTER 9.0.0*/

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Footer',
                                        'min' => '',
                                        'max' => '2',
                                    ),                     
                                ),
                                'min' => '',
                                'max' => '2',
                            ),
                            /*END FOOTER*/ 
                        
                        // End Module                                    
                        ),
                        'button_label' => 'Thêm Module',
                        'min' => '',
                        'max' => '',
                    ),
                    array(      
                        'key' => 'group_page_field_body',
                        'label' => 'Cài đặt Module Main',
                        'name' => '',
                        'type' => 'tab',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'group_admin',
                                    'operator' => '==',
                                    'value' => 'show_module_main',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'placement' => 'top',
                        'endpoint' => 0,
                    ),
                
                    array(
                        'key' => 'body_custom',
                        'label' => '',
                        'name' => 'body_custom',
                        'type' => 'flexible_content',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'group_admin',
                                    'operator' => '==',
                                    'value' => 'show_module_main',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'layouts' => array(
                        // Bat dau Module
                            'id_slider_knrh_1_0_0' => array(
                                'key' => 'id_slider_knrh_1_0_0',
                                'name' => 'slider_knrh_1_0_0',
                                'label' => 'Slider [slider_knrh_1_0_0]',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'id_slider_knrh_1_0_0_sub1',
                                        'label' => '',
                                        'name' => 'html',
                                        'type' => 'textarea',
                                        'instructions' => 'Code HTML',
                                        'rows' => 5,
                                    ),
                                
                                ),
                                'min' => '',
                                'max' => '',
                            ),
                            'id_certificate_knrh_1_0_0' => array(
                                'key' => 'id_certificate_knrh_1_0_0',
                                'name' => 'certificate_knrh_1_0_0',
                                'label' => 'Certificate [certificate_knrh_1_0_0]',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'id_certificate_knrh_1_0_0_sub1',
                                        'label' => '',
                                        'name' => 'html',
                                        'type' => 'textarea',
                                        'instructions' => 'Code HTML',
                                        'rows' => 5,
                                    ),
                                
                                ),
                                'min' => '',
                                'max' => '',
                            ),
                            'id_service_knrh_1_0_0' => array(
                                'key' => 'id_service_knrh_1_0_0',
                                'name' => 'service_knrh_1_0_0',
                                'label' => 'Service [service_knrh_1_0_0]',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'id_service_knrh_1_0_0_sub1',
                                        'label' => '',
                                        'name' => 'html',
                                        'type' => 'textarea',
                                        'instructions' => 'Code HTML',
                                        'rows' => 5,
                                    ),
                                
                                ),
                            ),
                            'id_gallery_knrh_1_0_0' => array(
                                'key' => 'id_gallery_knrh_1_0_0',
                                'name' => 'gallery_knrh_1_0_0',
                                'label' => 'Gallery [gallery_knrh_1_0_0]',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'id_gallery_knrh_1_0_0_sub1',
                                        'label' => '',
                                        'name' => 'html',
                                        'type' => 'textarea',
                                        'instructions' => 'Code HTML',
                                        'rows' => 5,
                                    ),
                                
                                ),
                            ),
                            'id_customer_knrh_1_0_0' => array(
                                'key' => 'id_customer_knrh_1_0_0',
                                'name' => 'customer_knrh_1_0_0',
                                'label' => 'Customer [customer_knrh_1_0_0]',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'id_customer_knrh_1_0_0_sub1',
                                        'label' => '',
                                        'name' => 'html',
                                        'type' => 'textarea',
                                        'instructions' => 'Code HTML',
                                        'rows' => 5,
                                    ),
                                ),
                            ),
                            'id_catalog_knrh_1_0_0' => array(
                                'key' => 'id_catalog_knrh_1_0_0',
                                'name' => 'catalog_knrh_1_0_0',
                                'label' => 'Catalog [catalog_knrh_1_0_0]',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'id_catalog_knrh_1_0_0_sub1',
                                        'label' => '',
                                        'name' => 'html',
                                        'type' => 'textarea',
                                        'instructions' => 'Code HTML',
                                        'rows' => 5,
                                    ),
                                ),
                            ),
                            'id_regist_knrh_1_0_0' => array(
                                'key' => 'id_regist_knrh_1_0_0',
                                'name' => 'regist_knrh_1_0_0',
                                'label' => 'Regist [regist_knrh_1_0_0]',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'id_regist_knrh_1_0_0_sub1',
                                        'label' => '',
                                        'name' => 'html',
                                        'type' => 'textarea',
                                        'instructions' => 'Code HTML',
                                        'rows' => 5,
                                    ),
                                ),
                            ),
                            'id_work_knrh_1_0_0' => array(
                                'key' => 'id_work_knrh_1_0_0',
                                'name' => 'work_knrh_1_0_0',
                                'label' => 'Work [work_knrh_1_0_0]',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'id_work_knrh_1_0_0_sub1',
                                        'label' => '',
                                        'name' => 'html',
                                        'type' => 'textarea',
                                        'instructions' => 'Code HTML',
                                        'rows' => 5,
                                    ),
                                ),
                            ),
                            'id_news_knrh_1_0_0' => array(
                                'key' => 'id_news_knrh_1_0_0',
                                'name' => 'news_knrh_1_0_0',
                                'label' => 'News [news_knrh_1_0_0]',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'id_news_knrh_1_0_0_sub1',
                                        'label' => '',
                                        'name' => 'html',
                                        'type' => 'textarea',
                                        'instructions' => 'Code HTML',
                                        'rows' => 5,
                                    ),
                                ),
                            ),
                            'id_banner_knrh_1_0_0' => array(
                                'key' => 'id_banner_knrh_1_0_0',
                                'name' => 'banner_knrh_1_0_0',
                                'label' => 'Banner [banner_knrh_1_0_0]',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'id_banner_knrh_1_0_0_sub1',
                                        'label' => '',
                                        'name' => 'html',
                                        'type' => 'textarea',
                                        'instructions' => 'Code HTML',
                                        'rows' => 5,
                                    ),
                                ),
                            ),
                            'id_collaborate_knrh_1_0_0' => array(
                                'key' => 'id_collaborate_knrh_1_0_0',
                                'name' => 'collaborate_knrh_1_0_0',
                                'label' => 'Collaborate [collaborate_knrh_1_0_0]',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'id_collaborate_knrh_1_0_0_sub1',
                                        'label' => '',
                                        'name' => 'html',
                                        'type' => 'textarea',
                                        'instructions' => 'Code HTML',
                                        'rows' => 5,
                                    ),
                                ),
                            ),
                            'id_video_knrh_1_0_0' => array(
                                'key' => 'id_video_knrh_1_0_0',
                                'name' => 'video_knrh_1_0_0',
                                'label' => 'Video [video_knrh_1_0_0]',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'id_video_knrh_1_0_0_sub1',
                                        'label' => '',
                                        'name' => 'html',
                                        'type' => 'textarea',
                                        'instructions' => 'Code HTML',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'rows' => 5,
                                        'new_lines' => '',
                                    ),
                                
                                ),
                                'min' => '',
                                'max' => '',
                            ),

                            /*POST CONFIG*/
                            'post_config' => array(
                                'key' => 'post_config',
                                'name' => 'post_config',
                                'label' => 'Post Config',
                                'display' => 'block',
                                'sub_fields' => array(
                                    
                                    array(
                                        'key' => 'post_config_sub',
                                        'label' => '',
                                        'name' => 'post_config_sub',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                            /*SAPO 2.0.0*/
                                            'id_sapo_2_0_0' => array(
                                                'key' => 'id_sapo_2_0_0',
                                                'name' => 'sapo_2_0_0',
                                                'label' => 'Sapo 2.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /* Code */
                                                    array(
                                                        'key' => 'id_sapo_2_0_0_sub',
                                                        'label' => 'Cập nhật nội dung SAPO',
                                                        'name' => 'info',
                                                        'type' => 'wysiwyg',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'tabs' => 'all',
                                                        'toolbar' => 'full',
                                                        'media_upload' => 1,
                                                        'delay' => 0,
                                                    ),
                                                    /* End Code */
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END SAPO 1.0.1*/

                                            /*BANNER 1.0.1*/
                                            'id_banner_1_0_1' => array(
                                                'key' => 'id_banner_1_0_1',
                                                'name' => 'banner_1_0_1',
                                                'label' => 'Banner 1.0.1',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    array(
                                                        'key' => 'id_banner_1_0_1_subsub',
                                                        'label' => 'Chi tiết',
                                                        'name' => 'banner_content',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                            Dòng 1 : Tên Banner <br>
                                                            Dòng 2 : Link ảnh pc<br>
                                                            Dòng 3 : Link ảnh mb <br>
                                                            Dòng 4 : Link LDP/Website <br>
                                                        ',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 4,
                                                        'new_lines' => '',
                                                    ),  
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END BANNER 1.0.1*/

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Module',
                                        'min' => '',
                                        'max' => '',
                                    ),                     
                                ),
                                'min' => '',
                                'max' => '',
                            ),
                            /*POST CONFIG*/ 

                            /*SLIDER*/
                            'slider' => array(
                                'key' => 'slider',
                                'name' => 'slider',
                                'label' => 'Slider Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'slider_sub_fields',
                                        'label' => '',
                                        'name' => 'slider_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                            /*SLIDER 1.0.1*/
                                            'id_slider_1_0_1' => array(
                                                'key' => 'id_slider_1_0_1',
                                                'name' => 'slider_1_0_1',
                                                'label' => 'Slider 1.0.1',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    array(
                                                        /* Tab Slider Desktop*/
                                                        'key' => 'id_slider_1_0_1_tab1',
                                                        'label' => 'Slider Desktop',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_slider_1_0_1_sub1',
                                                        'label' => 'Slide Desktop',
                                                        'name' => 'slide_pc',
                                                        'type' => 'gallery',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'return_format' => 'array',
                                                        'preview_size' => 'medium',
                                                        'insert' => 'append',
                                                        'library' => 'all',
                                                        'min' => '',
                                                        'max' => '',
                                                        'min_width' => '',
                                                        'min_height' => '',
                                                        'min_size' => '',
                                                        'max_width' => '',
                                                        'max_height' => '',
                                                        'max_size' => '',
                                                        'mime_types' => '',
                                                    ),
                                                    array(
                                                        /* Tab Slider Mobile*/
                                                        'key' => 'id_slider_1_0_1_tab2',
                                                        'label' => 'Slider Mobile',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_slider_1_0_1_sub2',
                                                        'label' => 'Slide Mobile',
                                                        'name' => 'slide_mb',
                                                        'type' => 'gallery',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'return_format' => 'array',
                                                        'preview_size' => 'medium',
                                                        'insert' => 'append',
                                                        'library' => 'all',
                                                        'min' => '',
                                                        'max' => '',
                                                        'min_width' => '',
                                                        'min_height' => '',
                                                        'min_size' => '',
                                                        'max_width' => '',
                                                        'max_height' => '',
                                                        'max_size' => '',
                                                        'mime_types' => '',
                                                    ),
                                                ),
                                                'min' => '',
                                                'max' => '1',
                                            ),
                                            /*END SLIDER 1.0.1*/    
                                            
                                            /*SLIDER 4.0.0*/
                                            'id_slider_4_0_0' => array(
                                                'key' => 'id_slider_4_0_0',
                                                'name' => 'slider_4_0_0',
                                                'label' => 'Slider 4.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    array(
                                                        /* Tab Slider Desktop*/
                                                        'key' => 'id_slider_4_0_0_tab1',
                                                        'label' => 'Slider Desktop',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_slider_4_0_0_sub1',
                                                        'label' => 'Slide Desktop',
                                                        'name' => 'slide_pc',
                                                        'type' => 'gallery',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'return_format' => 'array',
                                                        'preview_size' => 'medium',
                                                        'insert' => 'append',
                                                        'library' => 'all',
                                                        'min' => '',
                                                        'max' => '',
                                                        'min_width' => '',
                                                        'min_height' => '',
                                                        'min_size' => '',
                                                        'max_width' => '',
                                                        'max_height' => '',
                                                        'max_size' => '',
                                                        'mime_types' => '',
                                                    ),
                                                    array(
                                                        /* Tab Slider Mobile*/
                                                        'key' => 'id_slider_4_0_0_tab2',
                                                        'label' => 'Slider Mobile',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_slider_4_0_0_sub2',
                                                        'label' => 'Slide Mobile',
                                                        'name' => 'slide_mb',
                                                        'type' => 'gallery',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'return_format' => 'array',
                                                        'preview_size' => 'medium',
                                                        'insert' => 'append',
                                                        'library' => 'all',
                                                        'min' => '',
                                                        'max' => '',
                                                        'min_width' => '',
                                                        'min_height' => '',
                                                        'min_size' => '',
                                                        'max_width' => '',
                                                        'max_height' => '',
                                                        'max_size' => '',
                                                        'mime_types' => '',
                                                    ),
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END SLIDER 4.0.0*/
                                            
                                            /*SLIDER 2.0.0*/
                                            'id_slider_2_0_0' => array(
                                                'key' => 'id_slider_2_0_0',
                                                'name' => 'slider_2_0_0',
                                                'label' => 'Slider 2.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        /* Tab tiêu đề*/
                                                        'key' => 'id_slider_2_0_0_tab1',
                                                        'label' => 'Slider',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_slider_2_0_0_tab1_sub1',
                                                        'label' => 'Thông tin Slider',
                                                        'name' => 'slider_info',
                                                        'type' => 'flexible_content',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'layouts' => array(
                                                            'layout_homeTitle' => array(
                                                                'key' => 'id_slider_2_0_0_tab1_sub1_layout1',
                                                                'name' => 'slider_info_box',
                                                                'label' => 'Thông tin Slider',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    // Bat dau Field
                                                                    array(
                                                                        'key' => 'id_slider_2_0_0_tab1_sub1_layout1_box1',
                                                                        'label' => 'Chi tiết',
                                                                        'name' => 'slider_detail',
                                                                        'type' => 'textarea',
                                                                        'instructions' => '
                                                                            Dòng 1 : Tiêu đề 1 ( VD: Chuỗi hệ thống thẩm mỹ ) <br>
                                                                            Dòng 2 : Tiêu đề 2 ( VD: Nơi khởi nguồn <br> sắc đẹp. Lưu ý : thêm thẻ br để xuống dòng ) <br>
                                                                            Dòng 3 : Mô tả <br>
                                                                            Dòng 4 : Tiêu đề nút <br>
                                                                            Dòng 5 : Link xem chi tiết <br>
                                                                            Dòng 6 : Link ảnh nền PC ( Size 1920x686 ) <br>
                                                                            Dòng 7 : Link ảnh nền Mobile ( Size 414x480 ) <br>
                                                                            Dòng 8 : Link ảnh mẫu ( Size 605x605 )
                                                                        ',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'maxlength' => '',
                                                                        'rows' => 9,
                                                                        'new_lines' => '',
                                                                    ),

                                                                    // End Field Base                       
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                        ),
                                                        'button_label' => 'Thêm Slider',
                                                        'min' => '',
                                                        'max' => '',
                                                    ),

                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END SLIDER 2.0.0*/

                                            /*SLIDER 3.0.0*/
                                            'id_slider_3_0_0' => array(
                                                'key' => 'id_slider_3_0_0',
                                                'name' => 'slider_3_0_0',
                                                'label' => 'Slider 3.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        /* Tab tiêu đề*/
                                                        'key' => 'id_slider_3_0_0_tab1',
                                                        'label' => 'Slider',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_slider_3_0_0_tab1_sub1',
                                                        'label' => 'Thông tin Slider',
                                                        'name' => 'slider_info',
                                                        'type' => 'flexible_content',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'layouts' => array(
                                                            'layout_homeTitle' => array(
                                                                'key' => 'id_slider_3_0_0_tab1_sub1_layout1',
                                                                'name' => 'slider_info_box',
                                                                'label' => 'Thông tin Slider',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    // Bat dau Field
                                                                    array(
                                                                        'key' => 'id_slider_3_0_0_tab1_sub1_layout1_box1',
                                                                        'label' => 'Chi tiết',
                                                                        'name' => 'slider_detail',
                                                                        'type' => 'textarea',
                                                                        'instructions' => '
                                                                            Dòng 1 : Tiêu đề slide <br>
                                                                            Dòng 2 : Link ảnh nền PC ( Size 1920x840 ) <br>
                                                                            Dòng 3 : Link ảnh nền Mobile ( Size 414x505 ) <br>
                                                                            Dòng 4 : Link xem chi tiết <br>
                                                                        ',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'maxlength' => '',
                                                                        'rows' => 4,
                                                                        'new_lines' => '',
                                                                    ),

                                                                    // End Field Base                       
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                        ),
                                                        'button_label' => 'Thêm Slider',
                                                        'min' => '',
                                                        'max' => '',
                                                    ),

                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END SLIDER 3.0.0*/

                                            /*SLIDER 3.1.0*/
                                            'id_slider_3_1_0' => array(
                                                'key' => 'id_slider_3_1_0',
                                                'name' => 'slider_3_1_0',
                                                'label' => 'Slider 3.1.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        /* Tab tiêu đề*/
                                                        'key' => 'id_slider_3_1_0_tab1',
                                                        'label' => 'Slider',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_slider_3_1_0_tab1_sub1',
                                                        'label' => 'Chi tiết',
                                                        'name' => 'slider_detail',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                            Dòng 1 : Tiêu đề 1 (VD: <b>15 năm</b> theo đuổi phẫu thuật thẩm mỹ <br>
                                                            là 15 năm mong muốn mang lại <b>Vẻ đẹp</b>) <br>
                                                            Dòng 2 : Tiêu đề 2 (VD:<b>Hoàn thiện</b> nhất cho mọi người)<br>
                                                            Dòng 3 : Tiêu đề nút (VD: Đặt lịch tư vấn) <br>
                                                            Dòng 4 : Tiêu đề giới thiệu <br>
                                                            Dòng 5 : Mô tả của trang giới thiệu <br>
                                                            Dòng 6 : Link xem chi tiết <br>
                                                            Dòng 7 : Link ảnh nền PC ( Size 1920x840 ) <br>
                                                            Dòng 8 : Link ảnh nền Mobile ( Size 414x505 ) <br>
                                                            Dòng 9 : Vị trí nội dung hiển thị ( Điền left or right)
                                                        ',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 10,
                                                        'new_lines' => '',
                                                    ),


                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END SLIDER 3.1.0*/


                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Slider',
                                        'min' => '',
                                        'max' => '',
                                    ),                     
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END SLIDER*/ 
                            
                            /*ALBUM*/
                            'album' => array(
                                'key' => 'album_new',
                                'name' => 'album_new',
                                'label' => 'Album Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/
                                    array(
                                        'key' => 'album_new_sub_fields',
                                        'label' => '',
                                        'name' => 'album_new_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module    

                                            /*ALBUM 3.1.0*/
                                            'id_album_3_1_0' => array(
                                                'key' => 'id_album_3_1_0',
                                                'name' => 'album_3_1_0',
                                                'label' => 'Album 3.1.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        /* Tab tiêu đề*/
                                                        'key' => 'id_album_3_1_0_tab1',
                                                        'label' => 'Album',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_album_3_1_0_tab1_sub2',
                                                        'label' => 'Thông tin video',
                                                        'name' => 'detail_video',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                            Dòng 1 : Tiêu đề video <br>
                                                            Dòng 2 : Link ảnh ( Size 528x380 )<br>
                                                            Dòng 3 : Link video
                                                        ',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 3,
                                                        'new_lines' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_album_3_1_0_tab1_sub1',
                                                        'label' => 'Album',
                                                        'name' => 'album_place',
                                                        'type' => 'repeater',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'hide_admin' => 0,
                                                        'collapsed' => '',
                                                        'min' => 0,
                                                        'max' => 0,
                                                        'layout' => 'table',
                                                        'button_label' => '',
                                                        'sub_fields' => array(
                                                            array(
                                                                'key' => 'id_album_3_1_0_tab1_sub1_layout1',
                                                                'label' => 'Thông tin chi tiết',
                                                                'name' => 'detail_place',
                                                                'type' => 'textarea',
                                                                'instructions' => '
                                                                    Dòng 1 : Tiêu đề ảnh <br>
                                                                    Dòng 2 : Link ảnh <br>
                                                                    Ảnh - 1: size 415x380 , 2: 528x380 , 4: 414x380 , 5: 414x380 , 6: 800x380 , 7: 257x380 , 8: 414x380
                                                                ',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'maxlength' => '',
                                                                'rows' => 2,
                                                                'new_lines' => '',
                                                            ),
                                                        ),
                                                    ),

                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END ALBUM 3.1.0*/

                                            /*ALBUM 3.1.1*/
                                            'id_album_3_1_1' => array(
                                                'key' => 'id_album_3_1_1',
                                                'name' => 'album_3_1_1',
                                                'label' => 'Album 3.1.1',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        /* Tab tiêu đề*/
                                                        'key' => 'id_album_3_1_1_tab1',
                                                        'label' => 'Album',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_album_3_1_1_tab1_sub1',
                                                        'label' => 'Album',
                                                        'name' => 'album_place',
                                                        'type' => 'repeater',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'hide_admin' => 0,
                                                        'collapsed' => '',
                                                        'min' => 0,
                                                        'max' => 0,
                                                        'layout' => 'table',
                                                        'button_label' => '',
                                                        'sub_fields' => array(
                                                            array(
                                                                'key' => 'id_album_3_1_1_tab1_sub1_layout1',
                                                                'label' => 'Thông tin chi tiết',
                                                                'name' => 'detail_place',
                                                                'type' => 'textarea',
                                                                'instructions' => '
                                                                    Dòng 1 : Tiêu đề ảnh <br>
                                                                    Dòng 2 : Link ảnh PC ( Size 1920x732 ) <br>
                                                                    Dòng 3 : Link ảnh MB ( Size 414x630 )
                                                                ',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'maxlength' => '',
                                                                'rows' => 3,
                                                                'new_lines' => '',
                                                            ),
                                                        ),
                                                    ),

                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END ALBUM 3.1.1*/

                                            /*ALBUM 5.0.0*/
                                            'id_album_5_0_0' => array(
                                                'key' => 'id_album_5_0_0',
                                                'name' => 'album_5_0_0',
                                                'label' => 'Album 5.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        /* Tab tiêu đề*/
                                                        'key' => 'id_album_5_0_0_tab3',
                                                        'label' => 'Giới Thiệu',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_album_5_0_0_tab3_layout1',
                                                        'label' => 'Tiêu đề',
                                                        'name' => 'album_gt',
                                                        'type' => 'text',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_album_5_0_0_tab3_layout2',
                                                        'label' => 'Nội dung',
                                                        'name' => 'album_gt_ct',
                                                        'type' => 'wysiwyg',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'tabs' => 'all',
                                                        'toolbar' => 'full',
                                                        'media_upload' => 1,
                                                        'delay' => 0,
                                                    ),
                                                    array(
                                                        /* Tab tiêu đề*/
                                                        'key' => 'id_album_5_0_0_tab1',
                                                        'label' => 'Dịch vụ',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_album_5_0_0_tab1_sub1',
                                                        'label' => 'Dịch vụ',
                                                        'name' => 'album_info',
                                                        'type' => 'flexible_content',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'layouts' => array(
                                                            'layout_homeTitle' => array(
                                                                'key' => 'id_album_5_0_0_tab1_sub1_layout1',
                                                                'name' => 'album_info_box',
                                                                'label' => 'Dịch vụ',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    // Bat dau Field
                                                                    array(
                                                                        /* Tab tiêu đề*/
                                                                        'key' => 'id_album_5_0_0_tab1_sub1_layout1_tab1',
                                                                        'label' => 'Tiêu đề',
                                                                        'name' => '',
                                                                        'type' => 'tab',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'placement' => 'top',
                                                                        'endpoint' => 0,
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_album_5_0_0_tab1_sub1_layout1_sub1',
                                                                        'label' => 'Thông tin dịch vụ',
                                                                        'name' => 'album_dv',
                                                                        'type' => 'textarea',
                                                                        'instructions' => '
                                                                            Dòng 1 : Tên dịch vụ <br>
                                                                            Dòng 2 : Số thứ tự icon dịch vụ <br>
                                                                            2:Mũi, 3:Mí, 4:Ngực, 5:Mỡ, 6:Tóc, 7:Mặt, 8:Trẻ, 9:Sẹo, 10:Nám, 11:Mụn, 12:Xăm, 13:Khác
                                                                        ',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'maxlength' => '',
                                                                        'rows' => 2,
                                                                        'new_lines' => '',
                                                                    ),
                                                                    // Tab hình ảnh
                                                                    array(
                                                                        /* Tab tiêu đề*/
                                                                        'key' => 'id_album_5_0_0_tab1_sub1_layout1_tab2',
                                                                        'label' => 'Hình ảnh trước sau',
                                                                        'name' => '',
                                                                        'type' => 'tab',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'placement' => 'top',
                                                                        'endpoint' => 0,
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_album_5_0_0_tab1_sub1_layout1_tab6_box1',
                                                                        'label' => 'Tiêu để',
                                                                        'name' => 'album_dv_child1',
                                                                        'type' => 'text',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'prepend' => '',
                                                                        'append' => '',
                                                                        'maxlength' => '',
                                                                    ),  
                                                                    array(
                                                                        'key' => 'id_album_5_0_0_tab1_sub1_layout1_tab2_flex2',
                                                                        'label' => 'Dịch vụ con',
                                                                        'name' => 'album_images_fl2',
                                                                        'type' => 'flexible_content',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'layouts' => array(
                                                                            'layout_homeTitle' => array(
                                                                                'key' => 'id_album_5_0_0_tab1_sub1_layout1_tab2_flex2_box1',
                                                                                'name' => 'album_images_fl2_box',
                                                                                'label' => 'Dịch vụ con',
                                                                                'display' => 'block',
                                                                                'sub_fields' => array(
                                                                                    // Bat dau Field
                                                                                    array(
                                                                                        'key' => 'id_album_5_0_0_tab1_sub1_layout1_tab2_flex2_box1_img1',
                                                                                        'label' => 'Thông tin menu con',
                                                                                        'name' => 'tit_menu_child',
                                                                                        'type' => 'text',
                                                                                        'instructions' => '',
                                                                                        'required' => 0,
                                                                                        'conditional_logic' => 0,
                                                                                        'wrapper' => array(
                                                                                            'width' => '',
                                                                                            'class' => '',
                                                                                            'id' => '',
                                                                                        ),
                                                                                        'default_value' => '',
                                                                                        'placeholder' => '',
                                                                                        'prepend' => '',
                                                                                        'append' => '',
                                                                                        'maxlength' => '',
                                                                                    ),
                                                                                    array(
                                                                                        'key' => 'id_album_5_0_0_tab1_sub1_layout1_tab2_flex2_box1_img2',
                                                                                        'label' => 'Ảnh trước sau',
                                                                                        'name' => 'album_images_fl_img2',
                                                                                        'type' => 'flexible_content',
                                                                                        'instructions' => '',
                                                                                        'required' => 0,
                                                                                        'conditional_logic' => 0,
                                                                                        'wrapper' => array(
                                                                                            'width' => '',
                                                                                            'class' => '',
                                                                                            'id' => '',
                                                                                        ),
                                                                                        'layouts' => array(
                                                                                            'layout_homeTitle' => array(
                                                                                                'key' => 'id_album_5_0_0_tab1_sub1_layout1_tab2_flex2_box1_img2_sub1',
                                                                                                'name' => 'album_images_fl_img2_box',
                                                                                                'label' => 'Ảnh trước sau',
                                                                                                'display' => 'block',
                                                                                                'sub_fields' => array(
                                                                                                    // Bat dau Field
                                                                                                    array(
                                                                                                        'key' => 'id_album_5_0_0_tab1_sub1_layout1_tab2_flex2_box1_img2_sub1_lay1',
                                                                                                        'label' => 'Hình ảnh trước sau',
                                                                                                        'name' => 'album_images',
                                                                                                        'type' => 'gallery',
                                                                                                        'instructions' => 'Chỉ được thêm 9 ảnh 1 lần',
                                                                                                        'required' => 0,
                                                                                                        'conditional_logic' => 0,
                                                                                                        'wrapper' => array(
                                                                                                            'width' => '',
                                                                                                            'class' => '',
                                                                                                            'id' => '',
                                                                                                        ),
                                                                                                        'return_format' => 'array',
                                                                                                        'preview_size' => 'medium',
                                                                                                        'insert' => 'append',
                                                                                                        'library' => 'all',
                                                                                                        'min' => '',
                                                                                                        'max' => '9',
                                                                                                        'min_width' => '',
                                                                                                        'min_height' => '',
                                                                                                        'min_size' => '',
                                                                                                        'max_width' => '',
                                                                                                        'max_height' => '',
                                                                                                        'max_size' => '',
                                                                                                        'mime_types' => '',
                                                                                                    ),
                                                                                                    // End Field Base                       
                                                                                                ),
                                                                                                'min' => '',
                                                                                                'max' => '',
                                                                                            ),
                                                                                        ),
                                                                                        'button_label' => 'Add Row',
                                                                                        'min' => '',
                                                                                        'max' => '',
                                                                                    ),
                                                                                    // End Field Base                       
                                                                                ),
                                                                                'min' => '',
                                                                                'max' => '',
                                                                            ),
                                                                        ),
                                                                        'button_label' => 'Add Row',
                                                                        'min' => '',
                                                                        'max' => '',
                                                                    ),
                                                                                                                    

                                                                    // Tab đội ngũ bác sĩ
                                                                    array(
                                                                        /* Tab tiêu đề*/
                                                                        'key' => 'id_album_5_0_0_tab1_sub1_layout1_tab3',
                                                                        'label' => 'Đội ngũ bác sĩ',
                                                                        'name' => '',
                                                                        'type' => 'tab',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'placement' => 'top',
                                                                        'endpoint' => 0,
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_album_5_0_0_tab1_sub1_layout1_tab6_box2',
                                                                        'label' => 'Tiêu để',
                                                                        'name' => 'album_dv_child2',
                                                                        'type' => 'text',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'prepend' => '',
                                                                        'append' => '',
                                                                        'maxlength' => '',
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_album_5_0_0_tab1_sub1_layout1_sub3',
                                                                        'label' => 'Đội ngũ bác sĩ',
                                                                        'name' => 'album_bs',
                                                                        'type' => 'wysiwyg',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'tabs' => 'all',
                                                                        'toolbar' => 'full',
                                                                        'media_upload' => 1,
                                                                        'delay' => 0,
                                                                    ),                                                        
                                                                    
                                                                    // Tab quy trình
                                                                    array(
                                                                        /* Tab tiêu đề*/
                                                                        'key' => 'id_album_5_0_0_tab1_sub1_layout1_tab4',
                                                                        'label' => 'Quy trình',
                                                                        'name' => '',
                                                                        'type' => 'tab',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'placement' => 'top',
                                                                        'endpoint' => 0,
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_album_5_0_0_tab1_sub1_layout1_tab6_box3',
                                                                        'label' => 'Tiêu để Menu',
                                                                        'name' => 'album_dv_child3',
                                                                        'type' => 'text',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'prepend' => '',
                                                                        'append' => '',
                                                                        'maxlength' => '',
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_album_5_0_0_tab1_sub1_layout1_sub4',
                                                                        'label' => 'Quy trình',
                                                                        'name' => 'album_qt',
                                                                        'type' => 'wysiwyg',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'tabs' => 'all',
                                                                        'toolbar' => 'full',
                                                                        'media_upload' => 1,
                                                                        'delay' => 0,
                                                                    ),
                                                                    // Tab bảng giá
                                                                    array(
                                                                        /* Tab tiêu đề*/
                                                                        'key' => 'id_album_5_0_0_tab1_sub1_layout1_tab5',
                                                                        'label' => 'Bảng giá',
                                                                        'name' => '',
                                                                        'type' => 'tab',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'placement' => 'top',
                                                                        'endpoint' => 0,
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_album_5_0_0_tab1_sub1_layout1_tab6_box4',
                                                                        'label' => 'Tiêu để Menu',
                                                                        'name' => 'album_dv_child4',
                                                                        'type' => 'text',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'prepend' => '',
                                                                        'append' => '',
                                                                        'maxlength' => '',
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_album_5_0_0_tab1_sub1_layout1_sub5',
                                                                        'label' => 'Bảng giá',
                                                                        'name' => 'album_price',
                                                                        'type' => 'wysiwyg',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'tabs' => 'all',
                                                                        'toolbar' => 'full',
                                                                        'media_upload' => 1,
                                                                        'delay' => 0,
                                                                    ),
                                                                    // End Field Base                       
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                        ),
                                                        'button_label' => 'Thêm Dịch Vụ',
                                                        'min' => '',
                                                        'max' => '',
                                                    ),

                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END ALBUM 5.0.0*/  

                                            /*ALBUM 6.0.0*/
                                        'id_album_6_0_0' => array(
                                            'key' => 'id_album_6_0_0',
                                            'name' => 'album_6_0_0',
                                            'label' => 'Album 6.0.0',
                                            'display' => 'block',
                                            'sub_fields' => array(
                                            /*Bắt đầu field*/
                                            array(
                                            /* Tab tiêu đề*/
                                            'key' => 'id_album_6_0_0_tab1',
                                            'label' => 'Tiêu đề',
                                            'name' => '',
                                            'type' => 'tab',
                                            'instructions' => '',
                                            'required' => 0,
                                            'conditional_logic' => 0,
                                            'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                            ),
                                            'placement' => 'top',
                                            'endpoint' => 0,
                                            ),
                                            array(
                                            'key' => 'id_album_6_0_0_sub1',
                                            'label' => 'Tiêu đề',
                                            'name' => 'title',
                                            'type' => 'text',
                                            'instructions' => '
                                            Dòng 1 : Tiêu đề
                                            ',
                                            'required' => 0,
                                            'conditional_logic' => 0,
                                            'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                            ),
                                            'default_value' => '',
                                            'placeholder' => '',
                                            'maxlength' => '',
                                            'rows' => 2,
                                            'new_lines' => '',
                                            ),
                                            array(
                                            /* Tab tiêu đề*/
                                            'key' => 'id_album_6_0_0_tab2',
                                            'label' => 'Dịch vụ',
                                            'name' => '',
                                            'type' => 'tab',
                                            'instructions' => '',
                                            'required' => 0,
                                            'conditional_logic' => 0,
                                            'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                            ),
                                            'placement' => 'top',
                                            'endpoint' => 0,
                                            ),
                                            array(
                                            'key' => 'id_album_6_0_0_sub2',
                                            'label' => '',
                                            'name' => 'album_info',
                                            'type' => 'flexible_content',
                                            'instructions' => '',
                                            'required' => 0,
                                            'conditional_logic' => 0,
                                            'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                            ),
                                            'layouts' => array(
                                            'layout_homeTitle' => array(
                                            'key' => 'id_album_6_0_0_sub2_layout1',
                                            'name' => 'album_info_box',
                                            'label' => 'Dịch vụ chính',
                                            'display' => 'block',
                                            'sub_fields' => array(
                                            // Bat dau Field
                                            
                                            array(
                                            'key' => 'id_album_6_0_0_sub2_layout1_sub1',
                                            'label' => '',
                                            'name' => 'title',
                                            'type' => 'text',
                                            'instructions' => '',
                                            'required' => 0,
                                            'conditional_logic' => 0,
                                            'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                            ),
                                            'default_value' => '',
                                            'placeholder' => '',
                                            'prepend' => '',
                                            'append' => '',
                                            'maxlength' => '',
                                            ),
                                            array(
                                            'key' => 'id_album_6_0_0_sub2_layout1_sub2',
                                            'label' => '',
                                            'name' => 'album_info2',
                                            'type' => 'flexible_content',
                                            'instructions' => '',
                                            'required' => 0,
                                            'conditional_logic' => 0,
                                            'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                            ),
                                            'layouts' => array(
                                            'layout_homeTitle' => array(
                                            'key' => 'id_album_6_0_0_sub2_layout1_sub2_layout',
                                            'name' => 'album_info2_box',
                                            'label' => 'Danh sách dịch vụ',
                                            'display' => 'block',
                                            'sub_fields' => array(
                                            // Bat dau Field
                                            array(
                                            'key' => 'id_album_6_0_0_sub2_layout1_sub2_layout_sub1',
                                            'label' => '',
                                            'name' => 'title_2',
                                            'type' => 'text',
                                            'instructions' => '',
                                            'required' => 0,
                                            'conditional_logic' => 0,
                                            'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                            ),
                                            'default_value' => '',
                                            'placeholder' => '',
                                            'prepend' => '',
                                            'append' => '',
                                            'maxlength' => '',
                                            ),
                                            array(
                                            'key' => 'id_album_6_0_0_sub2_layout1_sub2_layout_sub2',
                                            'label' => '',
                                            'name' => 'album_info3',
                                            'type' => 'flexible_content',
                                            'instructions' => '',
                                            'required' => 0,
                                            'conditional_logic' => 0,
                                            'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                            ),
                                            'layouts' => array(
                                            'layout_homeTitle' => array(
                                            'key' => 'id_album_6_0_0_sub2_layout1_sub2_layout_sub2_layout1',
                                            'name' => 'album_info3_box',
                                            'label' => 'Khách hàng',
                                            'display' => 'block',
                                            'sub_fields' => array(
                                            // Bat dau Field
                                            array(
                                            'key' => 'id_album_6_0_0_sub2_layout1_sub2_layout_sub2_layout1_sub',
                                            'label' => 'Thông tin khách hàng',
                                            'name' => 'album_images',
                                            'type' => 'textarea',
                                            'instructions' => '
                                            Dòng 1 : Tiêu đề |
                                            Dòng 2 : Link ảnh |
                                            Dòng 3 : Thành phố |
                                            Dòng 4 : Tuổi |
                                            Dòng 5 : Giới tính |
                                            Dòng 6 : Cân nặng |
                                            Dòng 7 : Chiều cao
                                            ',
                                            'required' => 0,
                                            'conditional_logic' => 0,
                                            'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                            ),
                                            'default_value' => '',
                                            'placeholder' => '',
                                            'maxlength' => '',
                                            'rows' => 8,
                                            'new_lines' => '',
                                            ),
                                            // End Field Base
                                            ),
                                            'min' => '',
                                            'max' => '',
                                            ),
                                            ),
                                            'button_label' => 'Thêm Khách Hàng',
                                            'min' => '',
                                            'max' => '',
                                            ),
                                            // End Field Base
                                            ),
                                            'min' => '',
                                            'max' => '',
                                            ),
                                            ),
                                            'button_label' => 'Add Row',
                                            'min' => '',
                                            'max' => '',
                                            ),
                                            ),
                                            'min' => '',
                                            'max' => '',
                                            ),
                                            ),
                                            'button_label' => 'Thêm Dịch Vụ',
                                            'min' => '',
                                            'max' => '',
                                            ),
                                            
                                            
                                            /*End field*/
                                            ),
                                            'min' => '',
                                            'max' => '',
                                            ),
                                            /*END ALBUM 6.0.0*/                                            

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Album',
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END ALBUM*/   

                            /*SERVICE*/
                            'service' => array(
                                'key' => 'service',
                                'name' => 'service',
                                'label' => 'Service Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/
                                    array(
                                        'key' => 'service_sub_fields',
                                        'label' => '',
                                        'name' => 'service_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                        // Bat dau Module     
                                        
                                            /*Service 3.2.1*/
                                            'id_service_3_2_1' => array(
                                                'key' => 'id_service_3_2_1',
                                                'name' => 'service_3_2_1',
                                                'label' => 'Service 3.2.1',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_service_3_2_1_sub1',
                                                        'label' => 'Tiêu đề',
                                                        'name' => 'title',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                            Dòng 1: Tiêu đề 1<br>
                                                            Dòng 2: Tiêu đề 2
                                                        ',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'hide_admin' => 0,
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'rows' => 2,
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_service_3_2_1_sub2',
                                                        'label' => 'Nội dung',
                                                        'name' => 'content',
                                                        'type' => 'repeater',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'hide_admin' => 0,
                                                        'collapsed' => '',
                                                        'min' => 0,
                                                        'max' => 0,
                                                        'layout' => 'block',
                                                        'button_label' => '',
                                                        'sub_fields' => array(
                                                            array(
                                                                'key' => 'id_service_3_2_1_sub2_sub1',
                                                                'label' => 'Hình ảnh & tiêu đề',
                                                                'name' => 'info',
                                                                'type' => 'textarea',
                                                                'instructions' => '
                                                                    Dòng 1: Link ảnh desktop <br>
                                                                    Dòng 2: Link ảnh mobile <br>
                                                                    Dòng 2: Tiêu đề dịch vụ
                                                                ',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'rows' => 3,
                                                                'maxlength' => '',
                                                            ),
                                                            array(
                                                                'key' => 'id_service_3_2_1_sub2_sub3',
                                                                'label' => 'Dịch vụ',
                                                                'name' => 'content_dv',
                                                                'type' => 'wysiwyg',
                                                                'instructions' => 'Sử dụng cấu trúc UL > Li > a',
                                                                'required' => 0,
                                                                'conditional_logic' => array(
                                                                    array(
                                                                        array(
                                                                            'field' => 'id_service_3_2_1_sub2_sub2',
                                                                            'operator' => '==',
                                                                            'value' => 'show',
                                                                        ),
                                                                    ),
                                                                ),
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'default_value' => '',
                                                                'tabs' => 'all',
                                                                'toolbar' => 'full',
                                                                'media_upload' => 1,
                                                                'delay' => 0,
                                                            ),
                                                        ),
                                                    ),
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Service 3.2.1*/

                                            /*Service 3.2.2*/
                                            'id_service_3_2_2' => array(
                                                'key' => 'id_service_3_2_2',
                                                'name' => 'service_3_2_2',
                                                'label' => 'Service 3.2.2',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_service_3_2_2_sub1',
                                                        'label' => 'Thông tin chung',
                                                        'name' => 'info',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                            Dòng 1: Tên tiêu đề <br>
                                                            Dòng 2: Mô tả
                                                        ',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 4,
                                                        'new_lines' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_service_3_2_2_sub2',
                                                        'label' => 'Dịch vụ (3 dịch vụ)',
                                                        'name' => 'service',
                                                        'type' => 'repeater',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'hide_admin' => 0,
                                                        'collapsed' => '',
                                                        'min' => 0,
                                                        'max' => 0,
                                                        'layout' => 'table',
                                                        'button_label' => '',
                                                        'sub_fields' => array(
                                                            array(
                                                                'key' => 'id_service_3_2_2_sub2_sub1',
                                                                'label' => 'Link ảnh hiển thị (184x228)',
                                                                'name' => 'img',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                            array(
                                                                'key' => 'id_service_3_2_2_sub2_sub2',
                                                                'label' => 'Tiêu đề ảnh',
                                                                'name' => 'tt',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                            array(
                                                                'key' => 'id_service_3_2_2_sub2_sub3',
                                                                'label' => 'Link liên kết',
                                                                'name' => 'url',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '#',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                        ),
                                                    ),
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Service 3.2.2*/

                                            /*SERVICE 11.0.0*/
                                            'id_service_11_0_0' => array(
                                                'key' => 'id_service_11_0_0',
                                                'name' => 'service_11_0_0',
                                                'label' => 'Service 11.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        /* Tab tiêu đề*/
                                                        'key' => 'id_service_11_0_0_tab1',
                                                        'label' => 'Thông Tin Chung',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_service_11_0_0_tab1_sub1',
                                                        'label' => 'Link ảnh nền',
                                                        'name' => 'bg_img',
                                                        'type' => 'text',
                                                        'instructions' => '
                                                            Size ảnh : 715x632
                                                        ',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_service_11_0_0_tab1_sub2',
                                                        'label' => 'Tiêu đề',
                                                        'name' => 'img_title',
                                                        'type' => 'text',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_service_11_0_0_tab1_sub3',
                                                        'label' => 'Tiêu đề phụ',
                                                        'name' => 'sub_title',
                                                        'type' => 'text',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        /* Tab Service*/
                                                        'key' => 'id_service_11_0_0_tab2',
                                                        'label' => 'Dịch Vụ',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_service_11_0_0_tab2_sub1',
                                                        'label' => 'Dịch Vụ',
                                                        'name' => 'service_info',
                                                        'type' => 'flexible_content',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'layouts' => array(
                                                            'layout_homeTitle' => array(
                                                                'key' => 'id_service_11_0_0_tab2_sub1_layout1',
                                                                'name' => 'service_info_box1',
                                                                'label' => 'Dịch Vụ',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    // Bat dau Field
                                                                    array(
                                                                        'key' => 'id_service_11_0_0_tab2_sub1_layout1_sub1',
                                                                        'label' => 'Tab khóa học',
                                                                        'name' => 'detail_sv',
                                                                        'type' => 'textarea',
                                                                        'instructions' => '
                                                                            Dòng 1 : Link ảnh dịch vụ ( Size 295x380 ) <br>
                                                                            Dòng 2 : Tên dịch vụ <br>
                                                                            Dòng 3 : Link xem chi tiết
                                                                        ',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'maxlength' => '',
                                                                        'rows' => 4,
                                                                        'new_lines' => '',
                                                                    ),
                                                                    // End Field Base                       
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                        ),
                                                        'button_label' => 'Thêm Dịch Vụ',
                                                        'min' => '',
                                                        'max' => '',
                                                    ),
                                                    
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END SERVICE 11.0.0*/

                                            /*SERVICE 12.0.0*/
                                            'id_service_12_0_0' => array(
                                                'key' => 'id_service_12_0_0',
                                                'name' => 'service_12_0_0',
                                                'label' => 'Service 12.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        /* Tab tiêu đề*/
                                                        'key' => 'id_service_12_0_0_tab1',
                                                        'label' => 'Thông Tin Chung',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_service_12_0_0_tab1_sub1',
                                                        'label' => 'Thông tin',
                                                        'name' => 'detail',
                                                        'type' => 'textarea',
                                                        'display' => 'row',
                                                        'instructions' => '
                                                            Dòng 1 : Số điện thoại <br>
                                                            Dòng 2 : Địa chỉ <br>
                                                            Dòng 3 : Link ảnh nền ( Size 715x632 ) <br>
                                                            Dòng 4 : Link ảnh nền ( Size 413x194 ) <br>
                                                            Dòng 5 : Link googlemap
                                                        ',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 5,
                                                        'new_lines' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_service_12_0_0_tab1_sub2',
                                                        'label' => 'Mô tả',
                                                        'name' => 'mota',
                                                        'type' => 'textarea',
                                                        'display' => 'row',
                                                        'instructions' => '
                                                            
                                                        ',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 2,
                                                        'new_lines' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_service_12_0_0_tab1_sub3',
                                                        'label' => 'List Local',
                                                        'name' => 'local_info',
                                                        'type' => 'flexible_content',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'layouts' => array(
                                                            'layout_homeTitle' => array(
                                                                'key' => 'id_service_12_0_0_tab1_sub3_layout1',
                                                                'name' => 'local_info_box1',
                                                                'label' => 'List Local',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    // Bat dau Field
                                                                    array(
                                                                        'key' => 'id_service_12_0_0_tab1_sub3_layout1_sub1',
                                                                        'label' => 'Chi tiết local',
                                                                        'name' => 'detail_local',
                                                                        'type' => 'textarea',
                                                                        'instructions' => '
                                                                            Dòng 1 : Tên local <br>
                                                                            Dòng 2 : Link xem chi tiết
                                                                        ',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'maxlength' => '',
                                                                        'rows' => 2,
                                                                        'new_lines' => '',
                                                                    ),
                                                                    // End Field Base                       
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                        ),
                                                        'button_label' => 'Thêm Local',
                                                        'min' => '',
                                                        'max' => '',
                                                    ),
                                                    array(
                                                        /* Tab Service*/
                                                        'key' => 'id_service_12_0_0_tab2',
                                                        'label' => 'Dịch Vụ',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_service_12_0_0_tab2_sub1',
                                                        'label' => 'Dịch Vụ',
                                                        'name' => 'service_info',
                                                        'type' => 'flexible_content',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'layouts' => array(
                                                            'layout_homeTitle' => array(
                                                                'key' => 'id_service_12_0_0_tab2_sub1_layout1',
                                                                'name' => 'service_info_box1',
                                                                'label' => 'Dịch Vụ',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    // Bat dau Field
                                                                    array(
                                                                        'key' => 'id_service_12_0_0_tab2_sub1_layout1_sub1',
                                                                        'label' => 'Tab khóa học',
                                                                        'name' => 'detail_sv',
                                                                        'type' => 'textarea',
                                                                        'instructions' => '
                                                                            Dòng 1 : Link ảnh dịch vụ ( Size 295x380 ) <br>
                                                                            Dòng 2 : Tên dịch vụ <br>
                                                                            Dòng 3 : Link xem chi tiết
                                                                        ',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'maxlength' => '',
                                                                        'rows' => 4,
                                                                        'new_lines' => '',
                                                                    ),
                                                                    // End Field Base                       
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                        ),
                                                        'button_label' => 'Thêm Dịch Vụ',
                                                        'min' => '',
                                                        'max' => '',
                                                    ),
                                                    
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END SERVICE 12.0.0*/

                                            /*Service 4.0.0*/
                                            'id_service_4_0_0' => array(
                                                'key' => 'id_service_4_0_0',
                                                'name' => 'service_4_0_0',
                                                'label' => 'Service 4.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_service_4_0_0_sub1',
                                                        'label' => 'Tiêu đề',
                                                        'name' => 'title',
                                                        'type' => 'text',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_service_4_0_0_sub2',
                                                        'label' => 'Nội dung',
                                                        'name' => 'content',
                                                        'type' => 'repeater',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'hide_admin' => 0,
                                                        'collapsed' => '',
                                                        'min' => 0,
                                                        'max' => 0,
                                                        'layout' => 'block',
                                                        'button_label' => '',
                                                        'sub_fields' => array(
                                                            array(
                                                                'key' => 'id_service_4_0_0_sub2_sub1',
                                                                'label' => 'Hình ảnh & tiêu đề',
                                                                'name' => 'info',
                                                                'type' => 'textarea',
                                                                'instructions' => '
                                                                    Dòng 1: Link ảnh dịch vụ<br>
                                                                    Dòng 2: Tên dịch vụ <br>
                                                                    Dòng 3: Link dịch vụ
                                                                ',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'rows' => 3,
                                                                'maxlength' => '',
                                                            ),
                                                        ),
                                                    ),
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Service 4.0.0*/


                                        // End Module
                                        ),
                                        'button_label' => 'Thêm Service',
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END SERVICE*/                                     

                            /*BASIS*/
                            'basis' => array(
                                'key' => 'basis',
                                'name' => 'basis',
                                'label' => 'Basis Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/
                                    array(
                                        'key' => 'basis_sub_fields',
                                        'label' => '',
                                        'name' => 'basis_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                        // Bat dau Module

                                            /*BASIS 1.2.2*/
                                            'id_basis_1_2_2' => array(
                                                'key' => 'id_basis_1_2_2',
                                                'name' => 'basis_1_2_2',
                                                'label' => 'Basis 1.2.2',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*B?t d?u field*/
                                                    array(
                                                        /* Tab ti�u d?*/
                                                        'key' => 'id_basis_1_2_2_tab1',
                                                        'label' => 'Thông Tin Chung',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_basis_1_2_2_tab1_sub1',
                                                        'label' => 'Tiêu đề',
                                                        'name' => 'basis_title',
                                                        'type' => 'text',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_basis_1_2_2_tab1_sub2',
                                                        'label' => 'Link ảnh banner PC',
                                                        'name' => 'img_banner_pc',
                                                        'type' => 'text',
                                                        'instructions' => 'Size 1920x517',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_basis_1_2_2_tab1_sub3',
                                                        'label' => 'Link ảnh banner MB',
                                                        'name' => 'img_banner_mb',
                                                        'type' => 'text',
                                                        'instructions' => 'Size 414x205',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        /* Tab Basis*/
                                                        'key' => 'id_basis_1_2_2_tab2',
                                                        'label' => 'Cơ Sở Vật Chất',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_basis_1_2_2_tab2_box1',
                                                        'label' => 'Mô tả',
                                                        'name' => 'basis_text',
                                                        'type' => 'wysiwyg',
                                                        'instructions' => 'ul > li',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'tabs' => 'all',
                                                        'toolbar' => 'full',
                                                        'media_upload' => 1,
                                                        'delay' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_basis_1_2_2_tab2_box2',
                                                        'label' => 'Cơ Sở Vật Chất',
                                                        'name' => 'basis_main',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                            Dòng 1 : Link ảnh cơ sở vật chất 1 ( Size 349x331 ) <br>
                                                            Dòng 2 : Link ảnh cơ sở vật chất 2 ( Size 349x331 ) <br>
                                                            Dòng 3 : Link ảnh cơ sở vật chất 3 ( Size 349x331 ) <br>
                                                            Dòng 4 : Link ảnh cơ sở vật chất 4 ( Size 349x331 ) <br>
                                                        ',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 5,
                                                        'new_lines' => '',
                                                    ),
                                                    
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END BASIS 1.2.2*/ 
                                            
                                            /*BASIS 1.3.0*/
                                            'id_basis_1_3_0' => array(
                                                'key' => 'id_basis_1_3_0',
                                                'name' => 'basis_1_3_0',
                                                'label' => 'Basis 1.3.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*B?t d?u field*/
                                                    array(
                                                        /* Tab ti�u d?*/
                                                        'key' => 'id_basis_1_3_0_tab1',
                                                        'label' => 'Thông Tin Chung',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_basis_1_3_0_tab1_sub1',
                                                        'label' => 'Tiêu đề',
                                                        'name' => 'basis_title',
                                                        'type' => 'text',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_basis_1_3_0_tab1_sub4',
                                                        'label' => 'Mô tả chung',
                                                        'name' => 'mota',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                            
                                                        ',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 4,
                                                        'new_lines' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_basis_1_3_0_tab1_sub2',
                                                        'label' => 'Link ảnh banner PC',
                                                        'name' => 'img_banner_pc',
                                                        'type' => 'text',
                                                        'instructions' => 'Size 1920x517',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_basis_1_3_0_tab1_sub3',
                                                        'label' => 'Link ảnh banner MB',
                                                        'name' => 'img_banner_mb',
                                                        'type' => 'text',
                                                        'instructions' => 'Size 414x205',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        /* Tab Basis*/
                                                        'key' => 'id_basis_1_3_0_tab2',
                                                        'label' => 'Cơ Sở Vật Chất',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_basis_1_3_0_tab2_box1',
                                                        'label' => 'Mô tả',
                                                        'name' => 'basis_text',
                                                        'type' => 'wysiwyg',
                                                        'instructions' => 'ul > li',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'tabs' => 'all',
                                                        'toolbar' => 'full',
                                                        'media_upload' => 1,
                                                        'delay' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_basis_1_3_0_tab2_box2',
                                                        'label' => 'Cơ Sở Vật Chất',
                                                        'name' => 'basis_main',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                            Dòng 1 : Link ảnh cơ sở vật chất 1 ( Size 349x331 ) <br>
                                                            Dòng 2 : Link ảnh cơ sở vật chất 2 ( Size 349x331 ) <br>
                                                            Dòng 3 : Link ảnh cơ sở vật chất 3 ( Size 349x331 ) <br>
                                                            Dòng 4 : Link ảnh cơ sở vật chất 4 ( Size 349x331 ) <br>
                                                        ',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 5,
                                                        'new_lines' => '',
                                                    ),
                                                    
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END BASIS 1.3.0*/

                                        // End Module
                                        ),
                                        'button_label' => 'Thêm Basis',
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END BASIS*/   

                            /*DOCTOR*/
                            'doctor_new' => array(
                                'key' => 'doctor_new',
                                'name' => 'doctor_new',
                                'label' => 'Doctor Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/
                                    array(
                                        'key' => 'doctor_new_sub_fields',
                                        'label' => '',
                                        'name' => 'doctor_new_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module    
                                            
                                            /*DOCTOR 6.0.0*/
                                            'id_doctor_6_0_0' => array(
                                                'key' => 'id_doctor_6_0_0',
                                                'name' => 'doctor_6_0_0',
                                                'label' => 'Doctor 6.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        /* Tab tiêu đề*/
                                                        'key' => 'id_doctor_6_0_0_tab1',
                                                        'label' => 'Thông Tin Bác Sĩ',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_doctor_6_0_0_tab1_sub1',
                                                        'label' => 'Tiêu đề',
                                                        'name' => 'doctor_title',
                                                        'type' => 'text',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_doctor_6_0_0_tab1_sub2',
                                                        'label' => 'Màu nền',
                                                        'name' => 'doctor_color',
                                                        'type' => 'text',
                                                        'instructions' => 'Ví dụ : #EDEDED',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_doctor_6_0_0_tab1_sub3',
                                                        'label' => 'ID',
                                                        'name' => 'doctor_id',
                                                        'type' => 'text',
                                                        'instructions' => 'Ví dụ : 1',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_doctor_6_0_0_tab2_sub1',
                                                        'label' => 'Bác Sĩ',
                                                        'name' => 'doctor_info',
                                                        'type' => 'flexible_content',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'layouts' => array(
                                                            'layout_homeTitle' => array(
                                                                'key' => 'id_doctor_6_0_0_tab2_sub1_layout1',
                                                                'name' => 'doctor_info_box',
                                                                'label' => 'Bác sĩ',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    // Bat dau Field
                                                                    array(
                                                                        'key' => 'id_doctor_6_0_0_tab2_sub1_layout1_sub1',
                                                                        'label' => 'Thông tin bác sĩ',
                                                                        'name' => 'doctor_info_ct',
                                                                        'type' => 'textarea',
                                                                        'instructions' => '
                                                                            Dòng 1 : Link ảnh bác sĩ ( Size : 270x350 ) <br>
                                                                            Dòng 2 : Chức vụ ( VD : TS Thẩm mỹ Hàn Quốc ) <br>
                                                                            Dòng 3 : Tên bác sĩ <br>
                                                                            Dòng 4 : Công việc đảm nhiệm ( VD: Cố vấn chuyên môn ) <br>
                                                                        ',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'maxlength' => '',
                                                                        'rows' => 4,
                                                                        'new_lines' => '',
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_doctor_6_0_0_tab2_sub1_layout1_sub2',
                                                                        'label' => 'Chi tiết bác sĩ',
                                                                        'name' => 'doctor_des',
                                                                        'type' => 'wysiwyg',
                                                                        'instructions' => 'Nội dung hiển thị trong popup chi tiết của bác sĩ',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'tabs' => 'all',
                                                                        'toolbar' => 'full',
                                                                        'media_upload' => 1,
                                                                        'delay' => 0,
                                                                    ),
                                                                    // End Field Base						
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                        ),
                                                        'button_label' => 'Thêm Dịch Vụ',
                                                        'min' => '',
                                                        'max' => '',
                                                    ),

                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END PAGE DOCTOR 6.0.0*/                                            

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Doctor',
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END DOCTOR*/  

                            /*VIDEO*/
                            'video' => array(
                                'key' => 'video',
                                'name' => 'video',
                                'label' => 'Video Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/
                                    array(
                                        'key' => 'video_sub_fields',
                                        'label' => '',
                                        'name' => 'video_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module                  

                                            /*VIDEO 6.0.0*/
                                            'id_video_6_0_0' => array(
                                                'key' => 'id_video_6_0_0',
                                                'name' => 'video_6_0_0',
                                                'label' => 'Video 6.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_video_6_0_0_tab2',
                                                        'label' => 'Tiêu Đề',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_video_6_0_0_tab2_sub1',
                                                        'label' => 'Tiêu đề',
                                                        'name' => 'title_img',
                                                        'type' => 'text',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_video_6_0_0_tab2_sub2',
                                                        'label' => 'Tiêu đề nhỏ',
                                                        'name' => 'sub_title_video',
                                                        'type' => 'text',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_video_6_0_0_tab2_sub3',
                                                        'label' => 'Link xem tất cả video',
                                                        'name' => 'link_view_video',
                                                        'type' => 'text',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_video_6_0_0_tab1',
                                                        'label' => 'Video',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_video_6_0_0_tab1_sub1',
                                                        'label' => 'Video',
                                                        'name' => 'video_info',
                                                        'type' => 'flexible_content',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'layouts' => array(
                                                            'layout_homeTitle' => array(
                                                                'key' => 'id_video_6_0_0_tab1_sub1_layout1',
                                                                'name' => 'video_info_box1',
                                                                'label' => 'Video',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    // Bat dau Field
                                                                    array(
                                                                        'key' => 'id_video_6_0_0_tab1_sub1_layout1_child2',
                                                                        'label' => 'Chi tiết video',
                                                                        'name' => 'content_video',
                                                                        'type' => 'textarea',
                                                                        'instructions' => '
                                                                            Dòng 1 : Tiêu đề video <br>
                                                                            Dòng 2 : Link ảnh ( Size 715x403 ) <br>
                                                                            Dòng 3 : Link youtube
                                                                        ',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'maxlength' => '',
                                                                        'rows' => 4,
                                                                        'new_lines' => '',
                                                                    ),
                                                                    
                                                                    // End Field Base                       
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                        ),
                                                        'button_label' => 'Thêm Dịch Vụ',
                                                        'min' => '',
                                                        'max' => '',
                                                    ),

                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END VIDEO 6.0.0*/

                                            /*VIDEO 7.0.0*/
                                            'id_video_7_0_0' => array(
                                                'key' => 'id_video_7_0_0',
                                                'name' => 'video_7_0_0',
                                                'label' => 'Video 7.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        /* Tab tiêu đề*/
                                                        'key' => 'id_video_7_0_0_tab1',
                                                        'label' => 'Tiêu đề',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_video_7_0_0_sub1',
                                                        'label' => 'Tiêu đề',
                                                        'name' => 'title',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                            Dòng 1 : Tiêu đề <br>
                                                            Dòng 2 : Link ảnh
                                                        ',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 2,
                                                        'new_lines' => '',
                                                    ),
                                                    array(
                                                        /* Tab tiêu đề*/
                                                        'key' => 'id_video_7_0_0_tab2',
                                                        'label' => 'Dịch vụ',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_video_7_0_0_sub2',
                                                        'label' => '',
                                                        'name' => 'album_info',
                                                        'type' => 'flexible_content',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'layouts' => array(
                                                            'layout_homeTitle' => array(
                                                                'key' => 'id_video_7_0_0_sub2_layout1',
                                                                'name' => 'album_info_box',
                                                                'label' => 'Dịch vụ chính',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    // Bat dau Field
                                                                    
                                                                    array(
                                                                        'key' => 'id_video_7_0_0_sub2_layout1_sub1',
                                                                        'label' => '',
                                                                        'name' => 'title',
                                                                        'type' => 'text',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'prepend' => '',
                                                                        'append' => '',
                                                                        'maxlength' => '',
                                                                    ),  
                                                                    array(
                                                                        'key' => 'id_video_7_0_0_sub2_layout1_sub2',
                                                                        'label' => '',
                                                                        'name' => 'album_info2',
                                                                        'type' => 'flexible_content',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'layouts' => array(
                                                                            'layout_homeTitle' => array(
                                                                                'key' => 'id_video_7_0_0_sub2_layout1_sub2_layout',
                                                                                'name' => 'album_info2_box',
                                                                                'label' => 'Danh sách dịch vụ',
                                                                                'display' => 'block',
                                                                                'sub_fields' => array(
                                                                                    // Bat dau Field
                                                                                    array(
                                                                                        'key' => 'id_video_7_0_0_sub2_layout1_sub2_layout_sub1',
                                                                                        'label' => '',
                                                                                        'name' => 'title_2',
                                                                                        'type' => 'text',
                                                                                        'instructions' => '',
                                                                                        'required' => 0,
                                                                                        'conditional_logic' => 0,
                                                                                        'wrapper' => array(
                                                                                            'width' => '',
                                                                                            'class' => '',
                                                                                            'id' => '',
                                                                                        ),
                                                                                        'default_value' => '',
                                                                                        'placeholder' => '',
                                                                                        'prepend' => '',
                                                                                        'append' => '',
                                                                                        'maxlength' => '',
                                                                                    ),
                                                                                    array(
                                                                                        'key' => 'id_video_7_0_0_sub2_layout1_sub2_layout_sub2',
                                                                                        'label' => '',
                                                                                        'name' => 'album_info3',
                                                                                        'type' => 'flexible_content',
                                                                                        'instructions' => '',
                                                                                        'required' => 0,
                                                                                        'conditional_logic' => 0,
                                                                                        'wrapper' => array(
                                                                                            'width' => '',
                                                                                            'class' => '',
                                                                                            'id' => '',
                                                                                        ),
                                                                                        'layouts' => array(
                                                                                            'layout_homeTitle' => array(
                                                                                                'key' => 'id_video_7_0_0_sub2_layout1_sub2_layout_sub2_layout1',
                                                                                                'name' => 'album_info3_box',
                                                                                                'label' => 'Dịch Vụ',
                                                                                                'display' => 'block',
                                                                                                'sub_fields' => array(
                                                                                                    // Bat dau Field
                                                                                                    array(
                                                                                                        'key' => 'id_video_7_0_0_sub2_layout1_sub2_layout_sub2_layout1_sub',
                                                                                                        'label' => '',
                                                                                                        'name' => 'album_images',
                                                                                                        'type' => 'textarea',
                                                                                                        'instructions' => '
                                                                                                            Dòng 1 : Tiêu đề |
                                                                                                            Dòng 2 : Mô tả |
                                                                                                            Dòng 3 : Link ảnh đại diện (271x160) |
                                                                                                            Dòng 4 : ID Youtobe |
                                                                                                        ',
                                                                                                        'required' => 0,
                                                                                                        'conditional_logic' => 0,
                                                                                                        'wrapper' => array(
                                                                                                            'width' => '',
                                                                                                            'class' => '',
                                                                                                            'id' => '',
                                                                                                        ),
                                                                                                        'default_value' => '',
                                                                                                        'placeholder' => '',
                                                                                                        'maxlength' => '',
                                                                                                        'rows' => 8,
                                                                                                        'new_lines' => '',
                                                                                                    ),
                                                                                                    // End Field Base                       
                                                                                                ),
                                                                                                'min' => '',
                                                                                                'max' => '',
                                                                                            ),
                                                                                        ),
                                                                                        'button_label' => 'Thêm Khách Hàng',
                                                                                        'min' => '',
                                                                                        'max' => '',
                                                                                    ),
                                                                                    // End Field Base                       
                                                                                ),
                                                                                'min' => '',
                                                                                'max' => '',
                                                                            ),
                                                                        ),
                                                                        'button_label' => 'Add Row',
                                                                        'min' => '',
                                                                        'max' => '',
                                                                    ),
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                        ),
                                                        'button_label' => 'Thêm Dịch Vụ',
                                                        'min' => '',
                                                        'max' => '',
                                                    ),
                                                    

                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END VIDEO 7.0.0*/ 
                                            
                                            /*VIDEO 7.0.1*/
                                            'id_video_7_0_1' => array(
                                                'key' => 'id_video_7_0_1',
                                                'name' => 'video_7_0_1',
                                                'label' => 'Video 7.0.1',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        /* Tab tiêu đề*/
                                                        'key' => 'id_video_7_0_1_tab1',
                                                        'label' => 'Tiêu đề',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_video_7_0_1_sub1',
                                                        'label' => 'Tiêu đề',
                                                        'name' => 'title',
                                                        'type' => 'text',
                                                        'instructions' => '
                                                            Dòng 1 : Tiêu đề 
                                                        ',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 2,
                                                        'new_lines' => '',
                                                    ),
                                                    array(
                                                        /* Tab tiêu đề*/
                                                        'key' => 'id_video_7_0_1_tab2',
                                                        'label' => 'Dịch vụ',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_video_7_0_1_sub2',
                                                        'label' => '',
                                                        'name' => 'album_info',
                                                        'type' => 'flexible_content',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'layouts' => array(
                                                            'layout_homeTitle' => array(
                                                                'key' => 'id_video_7_0_1_sub2_layout1',
                                                                'name' => 'album_info_box',
                                                                'label' => 'Dịch vụ chính',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    // Bat dau Field
                                                                    
                                                                    array(
                                                                        'key' => 'id_video_7_0_1_sub2_layout1_sub1',
                                                                        'label' => '',
                                                                        'name' => 'title',
                                                                        'type' => 'text',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'prepend' => '',
                                                                        'append' => '',
                                                                        'maxlength' => '',
                                                                    ),  
                                                                    array(
                                                                        'key' => 'id_video_7_0_1_sub2_layout1_sub2',
                                                                        'label' => '',
                                                                        'name' => 'album_info2',
                                                                        'type' => 'flexible_content',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'layouts' => array(
                                                                            'layout_homeTitle' => array(
                                                                                'key' => 'id_video_7_0_1_sub2_layout1_sub2_layout',
                                                                                'name' => 'album_info2_box',
                                                                                'label' => 'Danh sách dịch vụ',
                                                                                'display' => 'block',
                                                                                'sub_fields' => array(
                                                                                    // Bat dau Field
                                                                                    array(
                                                                                        'key' => 'id_video_7_0_1_sub2_layout1_sub2_layout_sub1',
                                                                                        'label' => '',
                                                                                        'name' => 'title_2',
                                                                                        'type' => 'text',
                                                                                        'instructions' => '',
                                                                                        'required' => 0,
                                                                                        'conditional_logic' => 0,
                                                                                        'wrapper' => array(
                                                                                            'width' => '',
                                                                                            'class' => '',
                                                                                            'id' => '',
                                                                                        ),
                                                                                        'default_value' => '',
                                                                                        'placeholder' => '',
                                                                                        'prepend' => '',
                                                                                        'append' => '',
                                                                                        'maxlength' => '',
                                                                                    ),
                                                                                    array(
                                                                                        'key' => 'id_video_7_0_1_sub2_layout1_sub2_layout_sub2',
                                                                                        'label' => '',
                                                                                        'name' => 'album_info3',
                                                                                        'type' => 'flexible_content',
                                                                                        'instructions' => '',
                                                                                        'required' => 0,
                                                                                        'conditional_logic' => 0,
                                                                                        'wrapper' => array(
                                                                                            'width' => '',
                                                                                            'class' => '',
                                                                                            'id' => '',
                                                                                        ),
                                                                                        'layouts' => array(
                                                                                            'layout_homeTitle' => array(
                                                                                                'key' => 'id_video_7_0_1_sub2_layout1_sub2_layout_sub2_layout1',
                                                                                                'name' => 'album_info3_box',
                                                                                                'label' => 'Dịch Vụ',
                                                                                                'display' => 'block',
                                                                                                'sub_fields' => array(
                                                                                                    // Bat dau Field
                                                                                                    array(
                                                                                                        'key' => 'id_video_7_0_1_sub2_layout1_sub2_layout_sub2_layout1_sub',
                                                                                                        'label' => '',
                                                                                                        'name' => 'album_images',
                                                                                                        'type' => 'textarea',
                                                                                                        'instructions' => '
                                                                                                            Dòng 1 : Tiêu đề |
                                                                                                            Dòng 2 : Mô tả |
                                                                                                            Dòng 3 : Link liên kết |
                                                                                                            Dòng 4 : Link ảnh đại diện (271x160) |
                                                                                                        ',
                                                                                                        'required' => 0,
                                                                                                        'conditional_logic' => 0,
                                                                                                        'wrapper' => array(
                                                                                                            'width' => '',
                                                                                                            'class' => '',
                                                                                                            'id' => '',
                                                                                                        ),
                                                                                                        'default_value' => '',
                                                                                                        'placeholder' => '',
                                                                                                        'maxlength' => '',
                                                                                                        'rows' => 4,
                                                                                                        'new_lines' => '',
                                                                                                    ),
                                                                                                    // End Field Base                       
                                                                                                ),
                                                                                                'min' => '',
                                                                                                'max' => '',
                                                                                            ),
                                                                                        ),
                                                                                        'button_label' => 'Thêm Khách Hàng',
                                                                                        'min' => '',
                                                                                        'max' => '',
                                                                                    ),
                                                                                    // End Field Base                       
                                                                                ),
                                                                                'min' => '',
                                                                                'max' => '',
                                                                            ),
                                                                        ),
                                                                        'button_label' => 'Add Row',
                                                                        'min' => '',
                                                                        'max' => '',
                                                                    ),
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                        ),
                                                        'button_label' => 'Thêm Dịch Vụ',
                                                        'min' => '',
                                                        'max' => '',
                                                    ),
                                                    

                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END VIDEO 7.0.1*/ 

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Video',
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END VIDEO*/  

                            /*PHOTO*/
                            'photo' => array(
                                'key' => 'photo',
                                'name' => 'photo',
                                'label' => 'Photo Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/
                                    array(
                                        'key' => 'photo_sub_fields',
                                        'label' => '',
                                        'name' => 'photo_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module
                      
                                            /*PHOTO 2.2.0*/
                                            'id_photo_2_2_0' => array(
                                                'key' => 'id_photo_2_2_0',
                                                'name' => 'photo_2_2_0',
                                                'label' => 'Photo 2.2.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        /* Tab tiêu đề*/
                                                        'key' => 'id_photo_2_2_0_tab3',
                                                        'label' => 'Tiêu Đề',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_photo_2_2_0_tab3_layout1',
                                                        'label' => 'Tiêu đề',
                                                        'name' => 'img_title',
                                                        'type' => 'text',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_photo_2_2_0_tab3_layout2',
                                                        'label' => 'Tiêu đề nhỏ',
                                                        'name' => 'sub_title',
                                                        'type' => 'text',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_photo_2_2_0_tab1',
                                                        'label' => 'Dịch vụ',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_photo_2_2_0_tab1_sub1',
                                                        'label' => 'Dịch vụ',
                                                        'name' => 'photo_info',
                                                        'type' => 'flexible_content',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'layouts' => array(
                                                            'layout_homeTitle' => array(
                                                                'key' => 'id_photo_2_2_0_tab1_sub1_layout1',
                                                                'name' => 'photo_info_box',
                                                                'label' => 'Dịch vụ',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    // Bat dau Field
                                                                    array(
                                                                        'key' => 'id_photo_2_2_0_tab1_sub1_layout1_sub2',
                                                                        'label' => 'Tên dịch vụ',
                                                                        'name' => 'name_dv',
                                                                        'type' => 'text',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'prepend' => '',
                                                                        'append' => '',
                                                                        'maxlength' => '',
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_photo_2_2_0_tab1_sub1_layout1_sub1',
                                                                        'label' => 'Ảnh',
                                                                        'name' => 'photo_info1',
                                                                        'type' => 'flexible_content',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'layouts' => array(
                                                                            'layout_homeTitle' => array(
                                                                                'key' => 'id_photo_2_2_0_tab1_sub1_layout1_sub1_box1',
                                                                                'name' => 'photo_info1_box',
                                                                                'label' => 'Ảnh',
                                                                                'display' => 'block',
                                                                                'sub_fields' => array(
                                                                                    // Bat dau Field
                                                                                    array(
                                                                                        'key' => 'id_photo_2_2_0_tab1_sub1_layout1_sub1_box1_layout1',
                                                                                        'label' => 'Link ảnh',
                                                                                        'name' => 'img_link',
                                                                                        'type' => 'text',
                                                                                        'instructions' => 'Size 820x353',
                                                                                        'required' => 0,
                                                                                        'conditional_logic' => 0,
                                                                                        'wrapper' => array(
                                                                                            'width' => '',
                                                                                            'class' => '',
                                                                                            'id' => '',
                                                                                        ),
                                                                                        'default_value' => '',
                                                                                        'placeholder' => '',
                                                                                        'prepend' => '',
                                                                                        'append' => '',
                                                                                        'maxlength' => '',
                                                                                    ),
                                                                                    // End Field Base                       
                                                                                ),
                                                                                'min' => '',
                                                                                'max' => '',
                                                                            ),
                                                                        ),
                                                                        'button_label' => 'Thêm Dịch Vụ',
                                                                        'min' => '',
                                                                        'max' => '',
                                                                    ),
                                                                    
                                                                    // End Field Base                       
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                        ),
                                                        'button_label' => 'Thêm Dịch Vụ',
                                                        'min' => '',
                                                        'max' => '',
                                                    ),

                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END PHOTO 2.2.0*/
                                            
                                            /*BANNER 1.0.0*/
                                            'id_banner_1_0_0' => array(
                                                'key' => 'id_banner_1_0_0',
                                                'name' => 'banner_1_0_0',
                                                'label' => 'Banner 1.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*B?t d?u field*/
                                                    array(
                                                        /* Tab ti�u d?*/
                                                        'key' => 'id_banner_1_0_0_tab1',
                                                        'label' => 'Thông Tin Chung',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_banner_1_0_0_tab1_sub1',
                                                        'label' => 'Tiêu đề',
                                                        'name' => 'banner_title',
                                                        'type' => 'text',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_banner_1_0_0_tab1_sub2',
                                                        'label' => 'Link ảnh PC',
                                                        'name' => 'img_banner_pc',
                                                        'type' => 'text',
                                                        'instructions' => 'Size 1400x500',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_banner_1_0_0_tab1_sub3',
                                                        'label' => 'Link ảnh MB',
                                                        'name' => 'img_banner_mb',
                                                        'type' => 'text',
                                                        'instructions' => 'Size 414x390',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END BANNER 1.0.0*/

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm photo',
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END PHOTO*/   

                            /*QUESTION*/
                            'question' => array(
                                'key' => 'question',
                                'name' => 'question',
                                'label' => 'Question Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/
                                    array(
                                        'key' => 'question_sub_fields',
                                        'label' => '',
                                        'name' => 'question_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                            /*QUESTION.2.0.0*/
                                            'id_question_2_0_0' => array(
                                                'key' => 'id_question_2_0_0',
                                                'name' => 'question_2_0_0',
                                                'label' => 'Question 2.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/

                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END QUESTION.2.0.0*/

                                            /*QUESTION 3.0.0*/
                                            'id_question_3_0_0' => array(
                                                'key' => 'id_question_3_0_0',
                                                'name' => 'question_3_0_0',
                                                'label' => 'Question 3.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        /* Tab tiêu đề*/
                                                        'key' => 'id_question_3_0_0_tab1',
                                                        'label' => 'Tiêu đề',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_question_3_0_0_sub1',
                                                        'label' => 'Nhập tiêu đề theo hướng dẫn',
                                                        'name' => 'title',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                            Dòng 1 : Tiêu đề <br>
                                                            Dòng 2 : Link ảnh
                                                        ',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 2,
                                                        'new_lines' => '',
                                                    ),
                                                    array(
                                                        /* Tab tiêu đề*/
                                                        'key' => 'id_question_3_0_0_tab2',
                                                        'label' => 'Dịch vụ',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_question_3_0_0_sub2',
                                                        'label' => '',
                                                        'name' => 'qs_info',
                                                        'type' => 'flexible_content',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'layouts' => array(
                                                            'layout_qs_info_box' => array(
                                                                'key' => 'id_question_3_0_0_sub2_layout1',
                                                                'name' => 'qs_info_box',
                                                                'label' => 'Dịch vụ',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    // Bat dau Field
                                                                    array(
                                                                        /* Tab tiêu đề*/
                                                                        'key' => 'id_question_3_0_0_sub2_layout1_tab1',
                                                                        'label' => 'Câu hỏi',
                                                                        'name' => '',
                                                                        'type' => 'tab',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'placement' => 'top',
                                                                        'endpoint' => 0,
                                                                    ),
                                                                    
                                                                    array(
                                                                        'key' => 'id_question_3_0_0_sub2_layout1_sub1',
                                                                        'label' => 'Nhập tên dịch vụ',
                                                                        'name' => 'qs_title',
                                                                        'type' => 'text',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'prepend' => '',
                                                                        'append' => '',
                                                                        'maxlength' => '',
                                                                    ),                                                                      
                                                                    array(
                                                                        'key' => 'id_question_3_0_0_sub2_layout1_sub2',
                                                                        'label' => '',
                                                                        'name' => 'qs_info2',
                                                                        'type' => 'flexible_content',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'layouts' => array(
                                                                            'layout_homeTitle' => array(
                                                                                'key' => 'id_question_3_0_0_sub2_layout1_sub2_layout',
                                                                                'name' => 'qs_info2_box',
                                                                                'label' => 'Câu hỏi',
                                                                                'display' => 'block',
                                                                                'sub_fields' => array(
                                                                                    // Bat dau Field
                                                                                    array(
                                                                                        'key' => 'id_question_3_0_0_sub2_layout1_sub2_layout_sub1',
                                                                                        'label' => 'Tiêu đề câu hỏi',
                                                                                        'name' => 'title',
                                                                                        'type' => 'text',
                                                                                        'instructions' => '',
                                                                                        'required' => 0,
                                                                                        'conditional_logic' => 0,
                                                                                        'wrapper' => array(
                                                                                            'width' => '',
                                                                                            'class' => '',
                                                                                            'id' => '',
                                                                                        ),
                                                                                        'default_value' => '',
                                                                                        'placeholder' => '',
                                                                                        'prepend' => '',
                                                                                        'append' => '',
                                                                                        'maxlength' => '',
                                                                                    ),
                                                                                    array(
                                                                                        'key' => 'id_question_3_0_0_sub2_layout1_sub2_layout_sub2',
                                                                                        'label' => 'Nội dung câu trả lời',
                                                                                        'name' => 'content',
                                                                                        'type' => 'wysiwyg',
                                                                                        'instructions' => '',
                                                                                        'required' => 0,
                                                                                        'conditional_logic' => 0,
                                                                                        'wrapper' => array(
                                                                                            'width' => '',
                                                                                            'class' => '',
                                                                                            'id' => '',
                                                                                        ),
                                                                                        'default_value' => '',
                                                                                        'tabs' => 'all',
                                                                                        'toolbar' => 'full',
                                                                                        'media_upload' => 1,
                                                                                        'delay' => 0,
                                                                                    ),
                                                                                    
                                                                                    // End Field Base                       
                                                                                ),
                                                                                'min' => '',
                                                                                'max' => '',
                                                                            ),
                                                                        ),
                                                                        'button_label' => 'Thêm Câu Hỏi',
                                                                        'min' => '',
                                                                        'max' => '',
                                                                    ),
                                                                    array(
                                                                        /* Tab tiêu đề*/
                                                                        'key' => 'id_question_3_0_0_sub2_layout1_tab2',
                                                                        'label' => 'Ảnh trước sau',
                                                                        'name' => '',
                                                                        'type' => 'tab',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'placement' => 'top',
                                                                        'endpoint' => 0,
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_question_3_0_0_sub2_layout1_sub3',
                                                                        'label' => 'Nhập Tiêu Đề theo hướng dẫn',
                                                                        'name' => 'ts_title',
                                                                        'type' => 'textarea',
                                                                        'instructions' => '
                                                                            Dòng 1 : Tiêu đề <br> 
                                                                            Dòng 2 : Link xem thêm
                                                                        ',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'maxlength' => '',
                                                                        'rows' => 3,
                                                                        'new_lines' => '',
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_question_3_0_0_sub2_layout1_sub4',
                                                                        'label' => 'Danh sách khách hàng',
                                                                        'name' => 'ts_list',
                                                                        'type' => 'repeater',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'hide_admin' => 0,
                                                                        'collapsed' => '',
                                                                        'min' => 0,
                                                                        'max' => 0,
                                                                        'layout' => 'row',
                                                                        'button_label' => '',
                                                                        'sub_fields' => array(
                                                                            array(
                                                                                'key' => 'id_question_3_0_0_sub2_layout1_sub4_sub1',
                                                                                'label' => '',
                                                                                'name' => 'ts_content',
                                                                                'type' => 'textarea',
                                                                                'instructions' => '
                                                                                    Dòng 1 : Tên Khách Hàng <br> 
                                                                                    Dòng 2 : Link ảnh 
                                                                                ',
                                                                                'required' => 0,
                                                                                'conditional_logic' => 0,
                                                                                'wrapper' => array(
                                                                                    'width' => '',
                                                                                    'class' => '',
                                                                                    'id' => '',
                                                                                ),
                                                                                'default_value' => '',
                                                                                'placeholder' => '',
                                                                                'maxlength' => '',
                                                                                'rows' => 2,
                                                                                'new_lines' => '',
                                                                            ),
                                                                        ),
                                                                    ),
                                                                    array(
                                                                        /* Tab tiêu đề*/
                                                                        'key' => 'id_question_3_0_0_sub2_layout1_tab3',
                                                                        'label' => 'Dịch vụ nổi bật',
                                                                        'name' => '',
                                                                        'type' => 'tab',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'placement' => 'top',
                                                                        'endpoint' => 0,
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_question_3_0_0_sub2_layout1_sub5',
                                                                        'label' => 'Nhập Tiêu Đề theo hướng dẫn',
                                                                        'name' => 'sv_title',
                                                                        'type' => 'textarea',
                                                                        'instructions' => '
                                                                            Dòng 1 : Tiêu đề <br> 
                                                                            Dòng 2 : Link xem thêm
                                                                        ',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'maxlength' => '',
                                                                        'rows' => 3,
                                                                        'new_lines' => '',
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_question_3_0_0_sub2_layout1_sub6',
                                                                        'label' => 'Danh sách dịch vụ',
                                                                        'name' => 'sv_list',
                                                                        'type' => 'repeater',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'hide_admin' => 0,
                                                                        'collapsed' => '',
                                                                        'min' => 0,
                                                                        'max' => 0,
                                                                        'layout' => 'row',
                                                                        'button_label' => '',
                                                                        'sub_fields' => array(
                                                                            array(
                                                                                'key' => 'id_question_3_0_0_sub2_layout1_sub6_sub1',
                                                                                'label' => '',
                                                                                'name' => 'sv_content',
                                                                                'type' => 'textarea',
                                                                                'instructions' => '
                                                                                    Dòng 1 : Tên Dịch vụ <br> 
                                                                                    Dòng 2 : Link Dịch vụ <br> 
                                                                                    Dòng 3 : Link ảnh đại diện ( Size 260x180 )
                                                                                ',
                                                                                'required' => 0,
                                                                                'conditional_logic' => 0,
                                                                                'wrapper' => array(
                                                                                    'width' => '',
                                                                                    'class' => '',
                                                                                    'id' => '',
                                                                                ),
                                                                                'default_value' => '',
                                                                                'placeholder' => '',
                                                                                'maxlength' => '',
                                                                                'rows' => 4,
                                                                                'new_lines' => '',
                                                                            ),
                                                                        ),
                                                                    ),
                                                                    
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                            
                                                        ),
                                                        'button_label' => 'Thêm Dịch Vụ',
                                                        'min' => '',
                                                        'max' => '',
                                                    ),
                                                    

                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END QUESTION 3.0.0*/                                           

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Question',
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END QUESTON*/  

                            /*COMMIT*/
                            'commit' => array(
                                'key' => 'commit',
                                'name' => 'commit',
                                'label' => 'Commit Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/
                                    array(
                                        'key' => 'commit_sub_fields',
                                        'label' => '',
                                        'name' => 'commit_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module
                      

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Commit',
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END COMMIT*/   

                            /*PERSON*/
                            'person' => array(
                                'key' => 'person',
                                'name' => 'person',
                                'label' => 'Person Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/
                                    array(
                                        'key' => 'person_sub_fields',
                                        'label' => '',
                                        'name' => 'person_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module    

                                            /*Person 5.1.0*/
                                            'id_person_5_1_0' => array(
                                                'key' => 'id_person_5_1_0',
                                                'name' => 'person_5_1_0',
                                                'label' => 'Person 5.1.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_person_5_1_0_sub1',
                                                        'label' => 'Thông tin chung',
                                                        'name' => 'title',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                            Dòng 1: Tiêu đề <br>
                                                            Dòng 2: Link liên kết <br>
                                                            Dòng 3: Tên CTA 
                                                        ',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'hide_admin' => 0,
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'rows' => 3,
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_person_5_1_0_sub2',
                                                        'label' => 'Nội dung',
                                                        'name' => 'p_info',
                                                        'type' => 'repeater',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'hide_admin' => 0,
                                                        'collapsed' => '',
                                                        'min' => 0,
                                                        'max' => 0,
                                                        'layout' => 'table',
                                                        'button_label' => '',
                                                        'sub_fields' => array(
                                                            array(
                                                                'key' => 'id_person_5_1_0_sub2_sub2',
                                                                'label' => 'Cập nhật 2 ảnh một cột',
                                                                'name' => 'header_place',
                                                                'type' => 'repeater',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'collapsed' => '',
                                                                'min' => 0,
                                                                'max' => 0,
                                                                'layout' => 'table',
                                                                'button_label' => '',
                                                                'sub_fields' => array(
                                                                    array(
                                                                        'key' => 'id_person_5_1_0_sub2_sub2_sub1',
                                                                        'label' => 'Link ảnh',
                                                                        'name' => 'p_img',
                                                                        'type' => 'text',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'hide_admin' => 0,
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'prepend' => '',
                                                                        'append' => '',
                                                                        'maxlength' => '',
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_person_5_1_0_sub2_sub2_sub2',
                                                                        'label' => 'Mô tả ảnh',
                                                                        'name' => 'p_sub',
                                                                        'type' => 'text',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'hide_admin' => 0,
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'prepend' => '',
                                                                        'append' => '',
                                                                        'maxlength' => '',
                                                                    ),
                                                                ),
                                                            ),
                                                        
                                                        ),
                                                    ),
                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Person 5.1.0*/

                                            /*PERSON 8.0.0*/
                                            'id_person_8_0_0' => array(
                                                'key' => 'id_person_8_0_0',
                                                'name' => 'person_8_0_0',
                                                'label' => 'Person 8.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'person_8_0_0_tab2',
                                                        'label' => 'Tiêu đề',
                                                        'name' => 'person_headIMG',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                                Cập nhật thông tin theo chỉ dẫn:<br>
                                                                    Dòng 1 : Tiêu đề 1 <br>
                                                                    Dòng 2 : Tiêu đề 2',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 4,
                                                        'new_lines' => '',
                                                    ),
                                                    array(
                                                        'key' => 'person_8_0_0_tab1',
                                                        'label' => 'Thông tin Person',
                                                        'name' => 'person_info',
                                                        'type' => 'flexible_content',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'layouts' => array(
                                                            'layout_homeTitle' => array(
                                                                'key' => 'person_8_0_0_tab1_sub1',
                                                                'name' => 'person_info_box',
                                                                'label' => 'Thông tin Person',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    // Bat dau Field
                                                                    array(
                                                                        'key' => 'id_slider_3_0_0_tab1_sub1_layout2',
                                                                        'label' => 'Thông Tin',
                                                                        'name' => 'person_info2',
                                                                        'type' => 'textarea',
                                                                        'instructions' => '
                                                                            Cập nhật thông tin theo chỉ dẫn:<br>
                                                                            Dòng 1 : Tên khách hàng <br>
                                                                            Dòng 2 : Ảnh nhỏ của khách hàng <br>
                                                                            Dòng 3 : Nội dung tình trạng <br>
                                                                            Dòng 4 : Tiêu đề nút CTA <br>
                                                                            Dòng 5 : Đường dẫn link CTA 
                                                                        ',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'maxlength' => '',
                                                                        'rows' => 5,
                                                                        'new_lines' => '',
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_slider_8_0_0_tab1_sub1_layout1',
                                                                        'label' => 'Ảnh Khách Hàng Lớn',
                                                                        'name' => 'slider_info',
                                                                        'type' => 'flexible_content',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'layouts' => array(
                                                                            'layout_homeTitle' => array(
                                                                                'key' => 'id_slider_8_0_0_tab1_sub1_layout1_sub1',
                                                                                'name' => 'person_info_boxContent',
                                                                                'label' => 'Ảnh khách hàng',
                                                                                'display' => 'block',
                                                                                'sub_fields' => array(
                                                                                    // Bat dau Field
                                                                                    array(
                                                                                        'key' => 'id_slider_8_0_0_tab1_sub1_layout1_sub1_layout1',
                                                                                        'label' => 'Ảnh khách hàng lớn',
                                                                                        'name' => 'person_listIMG',
                                                                                        'type' => 'text',
                                                                                        'instructions' => '',
                                                                                        'required' => 0,
                                                                                        'conditional_logic' => 0,
                                                                                        'wrapper' => array(
                                                                                            'width' => '',
                                                                                            'class' => '',
                                                                                            'id' => '',
                                                                                        ),
                                                                                        'default_value' => '',
                                                                                        'placeholder' => '',
                                                                                        'prepend' => '',
                                                                                        'append' => '',
                                                                                        'maxlength' => '',
                                                                                    )
                                                            
                                                                                    // End Field Base                       
                                                                                ),
                                                                                'min' => '',
                                                                                'max' => '',
                                                                            ),
                                                                        ),
                                                                        'button_label' => 'Thêm ảnh Person',
                                                                        'min' => '',
                                                                        'max' => '',
                                                                    ),
                                            
                                                                    // End Field Base                       
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                        ),
                                                        'button_label' => 'Thêm Person',
                                                        'min' => '',
                                                        'max' => '',
                                                    ),
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END PERSON 8.0.0*/

                                            /*PERSON 9.0.0*/
                                            'id_person_9_0_0' => array(
                                                'key' => 'id_person_9_0_0',
                                                'name' => 'person_9_0_0',
                                                'label' => 'Person 9.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'person_9_0_0_tab2',
                                                        'label' => 'Tiêu đề',
                                                        'name' => 'title',
                                                        'type' => 'text',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        'key' => 'person_9_0_0_tab1',
                                                        'label' => 'Thông tin Person',
                                                        'name' => 'person_info',
                                                        'type' => 'flexible_content',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'layouts' => array(
                                                            'layout_homeTitle' => array(
                                                                'key' => 'person_9_0_0_tab1_sub1',
                                                                'name' => 'person_info_box',
                                                                'label' => 'Thông tin Person',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    // Bat dau Field
                                                                    array(
                                                                        'key' => 'person_9_0_0_tab1_sub1_tab1',
                                                                        'label' => 'Thông Tin',
                                                                        'name' => 'person_info2',
                                                                        'type' => 'textarea',
                                                                        'instructions' => '
                                                                            Cập nhật thông tin theo chỉ dẫn:<br>
                                                                            Dòng 1 : Ảnh của khách hàng size(485x460) <br>
                                                                            Dòng 2 : Tên khách hàng <br>
                                                                            Dòng 3 : Tuổi khách hàng <br>
                                                                            Dòng 4 : Tình trạng khách hàng <br>
                                                                        ',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'maxlength' => '',
                                                                        'rows' => 4,
                                                                        'new_lines' => '',
                                                                    ),
                                                                    // End Field Base                       
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                        ),
                                                        'button_label' => 'Thêm Person',
                                                        'min' => '',
                                                        'max' => '',
                                                    ),
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END PERSON 9.0.0*/

                                            /*Person 6.0.0*/
                                            'id_person_6_0_0' => array(
                                                'key' => 'id_person_6_0_0',
                                                'name' => 'person_6_0_0',
                                                'label' => 'Person 6.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_person_6_0_0_sub1',
                                                        'label' => 'Tiêu đề',
                                                        'name' => 'title',
                                                        'type' => 'text',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_person_6_0_0_sub2',
                                                        'label' => 'Nội dung',
                                                        'name' => 'p_info',
                                                        'type' => 'repeater',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'hide_admin' => 0,
                                                        'collapsed' => '',
                                                        'min' => 0,
                                                        'max' => 0,
                                                        'layout' => 'table',
                                                        'button_label' => '',
                                                        'sub_fields' => array(
                                                            array(
                                                                'key' => 'id_person_6_0_0_sub2_sub2',
                                                                'label' => 'Cập nhật 2 ảnh một cột',
                                                                'name' => 'header_place',
                                                                'type' => 'repeater',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'collapsed' => '',
                                                                'min' => 0,
                                                                'max' => 0,
                                                                'layout' => 'table',
                                                                'button_label' => '',
                                                                'sub_fields' => array(
                                                                    array(
                                                                        'key' => 'id_person_6_0_0_sub2_sub2_sub1',
                                                                        'label' => 'Link ảnh',
                                                                        'name' => 'p_img',
                                                                        'type' => 'text',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'hide_admin' => 0,
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'prepend' => '',
                                                                        'append' => '',
                                                                        'maxlength' => '',
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_person_6_0_0_sub2_sub2_sub2',
                                                                        'label' => 'Mô tả ảnh',
                                                                        'name' => 'p_sub',
                                                                        'type' => 'text',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'hide_admin' => 0,
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'prepend' => '',
                                                                        'append' => '',
                                                                        'maxlength' => '',
                                                                    ),
                                                                ),
                                                            ),
                                                        
                                                        ),
                                                    ),
                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Person 6.0.0*/

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Person',
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '2',
                            ),
                            /*END PERSON*/    

                            /*NEWS*/
                            'news' => array(
                                'key' => 'news',
                                'name' => 'news',
                                'label' => 'News Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/
                                    array(
                                        'key' => 'news_sub_fields',
                                        'label' => '',
                                        'name' => 'news_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                        // Bat dau Module

                                         /*NEWS 3.3.0*/
                                        'id_news_3_3_0' => array(
                                            'key' => 'id_news_3_3_0',
                                            'name' => 'news_3_3_0',
                                            'label' => 'News 3.3.0',
                                            'display' => 'block',
                                            'sub_fields' => array(
                                                /*Bắt đầu field*/
                                                array(
                                                    'key' => 'id_news_3_3_0_tab1',
                                                    'label' => 'Tin tức',
                                                    'name' => '',
                                                    'type' => 'tab',
                                                    'instructions' => '',
                                                    'required' => 0,
                                                    'conditional_logic' => 0,
                                                    'wrapper' => array(
                                                        'width' => '',
                                                        'class' => '',
                                                        'id' => '',
                                                    ),
                                                    'placement' => 'top',
                                                    'endpoint' => 0,
                                                ),
                                                array(
                                                    'key' => 'id_news_3_3_0_tab1_sub1',
                                                    'label' => 'Tiêu đề',
                                                    'name' => 'news_title',
                                                    'type' => 'textarea',
                                                    'instructions' => '
                                                        Dòng 1: Tiêu đề tiếng việt <br>
                                                        Dòng 2: Tiêu đề tiếng anh.
                                                    ',
                                                    'required' => 0,
                                                    'conditional_logic' => 0,
                                                    'wrapper' => array(
                                                        'width' => '',
                                                        'class' => '',
                                                        'id' => '',
                                                    ),
                                                    'default_value' => '',
                                                    'placeholder' => '',
                                                    'prepend' => '',
                                                    'append' => '',
                                                    'maxlength' => '',
                                                    'rows' => 2,
                                                ),
                                                array(
                                                    'key' => 'id_news_3_3_0_tab1_sub2',
                                                    'label' => 'Danh sách bài viết',
                                                    'name' => 'news_content',
                                                    'type' => 'relationship',
                                                    'instructions' => '',
                                                    'required' => 0,
                                                    'conditional_logic' => 0,
                                                    'wrapper' => array(
                                                        'width' => '',
                                                        'class' => '',
                                                        'id' => '',
                                                    ),
                                                    'post_type' => '',
                                                    'taxonomy' => '',
                                                    'filters' => array(
                                                        0 => 'search',
                                                        1 => 'post_type',
                                                        2 => 'taxonomy',
                                                    ),
                                                    'elements' => array(
                                                        0 => 'featured_image',
                                                    ),
                                                    'min' => '',
                                                    'max' => '',
                                                    'return_format' => 'id',
                                                ),
                                                /*End field*/
                                            ),
                                            'min' => '',
                                            'max' => '',
                                        ),
                                        /*END NEWS 3.3.0*/

                                        /*NEWS 11.0.0*/
                                        'id_news_11_0_0' => array(
                                            'key' => 'id_news_11_0_0',
                                            'name' => 'news_11_0_0',
                                            'label' => 'News 11.0.0',
                                            'display' => 'block',
                                            'sub_fields' => array(
                                                /*Bắt đầu field*/
                                                array(
                                                    'key' => 'id_news_11_0_0_tab1',
                                                    'label' => 'Thông Tin Chung',
                                                    'name' => '',
                                                    'type' => 'tab',
                                                    'instructions' => '',
                                                    'required' => 0,
                                                    'conditional_logic' => 0,
                                                    'wrapper' => array(
                                                        'width' => '',
                                                        'class' => '',
                                                        'id' => '',
                                                    ),
                                                    'placement' => 'top',
                                                    'endpoint' => 0,
                                                ),
                                                array(
                                                    'key' => 'id_news_11_0_0_tab1_sub1',
                                                    'label' => 'Tiêu đề',
                                                    'name' => 'img_title',
                                                    'type' => 'text',
                                                    'instructions' => '',
                                                    'required' => 0,
                                                    'conditional_logic' => 0,
                                                    'wrapper' => array(
                                                        'width' => '',
                                                        'class' => '',
                                                        'id' => '',
                                                    ),
                                                    'default_value' => '',
                                                    'placeholder' => '',
                                                    'prepend' => '',
                                                    'append' => '',
                                                    'maxlength' => '',
                                                ),
                                                array(
                                                    'key' => 'id_news_6_0_0_tab1_sub3',
                                                    'label' => 'Link xem thêm',
                                                    'name' => 'link_more',
                                                    'type' => 'text',
                                                    'instructions' => '',
                                                    'required' => 0,
                                                    'conditional_logic' => 0,
                                                    'wrapper' => array(
                                                        'width' => '',
                                                        'class' => '',
                                                        'id' => '',
                                                    ),
                                                    'default_value' => '',
                                                    'placeholder' => '',
                                                    'prepend' => '',
                                                    'append' => '',
                                                    'maxlength' => '',
                                                ),
                                                array(
                                                    'key' => 'id_news_11_0_0_tab1_sub2',
                                                    'label' => 'Danh sách tin',
                                                    'name' => 'content1',
                                                    'type' => 'relationship',
                                                    'instructions' => 'Chọn 4 bài viết',
                                                    'required' => 0,
                                                    'conditional_logic' => 0,
                                                    'wrapper' => array(
                                                        'width' => '',
                                                        'class' => '',
                                                        'id' => '',
                                                    ),
                                                    'post_type' => '',
                                                    'taxonomy' => '',
                                                    'filters' => array(
                                                        0 => 'search',
                                                        1 => 'post_type',
                                                        2 => 'taxonomy',
                                                    ),
                                                    'elements' => array(
                                                        0 => 'featured_image',
                                                    ),
                                                    'min' => '',
                                                    'max' => 4,
                                                    'return_format' => 'id',
                                                ),

                                                /*End field*/
                                            ),
                                            'min' => '',
                                            'max' => '',
                                        ),
                                        /*END NEWS 11.0.0*/        
                                        
                                        /*NEWS 13.0.0*/
                                        'id_news_13_0_0' => array(
                                            'key' => 'id_news_13_0_0',
                                            'name' => 'news_13_0_0',
                                            'label' => 'news 13.0.0',
                                            'display' => 'block',
                                            'sub_fields' => array(
                                                /*Bắt đầu field*/
                                                array(
                                                    /* Tab 1*/
                                                    'key' => 'id_news_13_0_0_tab1',
                                                    'label' => 'Tư vấn cùng chuyên gia',
                                                    'name' => '',
                                                    'type' => 'tab',
                                                    'instructions' => '',
                                                    'required' => 0,
                                                    'conditional_logic' => 0,
                                                    'wrapper' => array(
                                                        'width' => '',
                                                        'class' => '',
                                                        'id' => '',
                                                    ),
                                                    'placement' => 'top',
                                                    'endpoint' => 0,
                                                ),
                                                array(
                                                    'key' => 'id_news_13_0_0_tab1_sub2',
                                                    'label' => 'Tiêu đề',
                                                    'name' => 'news_title',
                                                    'type' => 'text',
                                                    'instructions' => '',
                                                    'required' => 0,
                                                    'conditional_logic' => 0,
                                                    'wrapper' => array(
                                                        'width' => '',
                                                        'class' => '',
                                                        'id' => '',
                                                    ),
                                                    'default_value' => '',
                                                    'placeholder' => '',
                                                    'prepend' => '',
                                                    'append' => '',
                                                    'maxlength' => '',
                                                ),
                                                array(
                                                    'key' => 'id_news_13_0_0_tab1_sub1',
                                                    'label' => 'Tư vấn',
                                                    'name' => 'news_tuvan',
                                                    'type' => 'repeater',
                                                    'instructions' => '',
                                                    'required' => 0,
                                                    'conditional_logic' => 0,
                                                    'wrapper' => array(
                                                        'width' => '',
                                                        'class' => '',
                                                        'id' => '',
                                                    ),
                                                    'hide_admin' => 0,
                                                    'collapsed' => '',
                                                    'min' => 0,
                                                    'max' => 0,
                                                    'layout' => 'table',
                                                    'button_label' => '',
                                                    'sub_fields' => array(
                                                        array(
                                                            'key' => 'id_news_13_0_0_tab1_sub1_layout1',
                                                            'label' => 'Ảnh video',
                                                            'name' => 'news_img',
                                                            'type' => 'text',
                                                            'instructions' => '',
                                                            'required' => 0,
                                                            'conditional_logic' => 0,
                                                            'wrapper' => array(
                                                                'width' => '',
                                                                'class' => '',
                                                                'id' => '',
                                                            ),
                                                            'hide_admin' => 0,
                                                            'default_value' => '',
                                                            'placeholder' => '',
                                                            'prepend' => '',
                                                            'append' => '',
                                                            'maxlength' => '',
                                                        ),
                                                        array(
                                                            'key' => 'id_news_13_0_0_tab1_sub1_layout2',
                                                            'label' => 'ID video youtube (VD:z222)',
                                                            'name' => 'news_linkYoutube',
                                                            'type' => 'text',
                                                            'instructions' => '',
                                                            'required' => 0,
                                                            'conditional_logic' => 0,
                                                            'wrapper' => array(
                                                                'width' => '',
                                                                'class' => '',
                                                                'id' => '',
                                                            ),
                                                            'hide_admin' => 0,
                                                            'default_value' => '',
                                                            'placeholder' => '',
                                                            'prepend' => '',
                                                            'append' => '',
                                                            'maxlength' => '',
                                                        ),
                                                    ),
                                                ),
                                                array(
                                                    /* Tab 2*/
                                                    'key' => 'id_news_13_0_0_tab2',
                                                    'label' => 'Tin tức',
                                                    'name' => '',
                                                    'type' => 'tab',
                                                    'instructions' => '',
                                                    'required' => 0,
                                                    'conditional_logic' => 0,
                                                    'wrapper' => array(
                                                        'width' => '',
                                                        'class' => '',
                                                        'id' => '',
                                                    ),
                                                    'placement' => 'top',
                                                    'endpoint' => 0,
                                                ),
                                                array(
                                                    'key' => 'id_news_13_0_0_tab2_sub1',
                                                    'label' => 'Tiêu đề',
                                                    'name' => 'news_title1',
                                                    'type' => 'text',
                                                    'instructions' => '',
                                                    'required' => 0,
                                                    'conditional_logic' => 0,
                                                    'wrapper' => array(
                                                        'width' => '',
                                                        'class' => '',
                                                        'id' => '',
                                                    ),
                                                    'default_value' => '',
                                                    'placeholder' => '',
                                                    'prepend' => '',
                                                    'append' => '',
                                                    'maxlength' => '',
                                                ),
                                                array(
                                                    'key' => 'id_news_13_0_0_tab2_sub2',
                                                    'label' => 'Danh sách tin',
                                                    'name' => 'content1',
                                                    'type' => 'relationship',
                                                    'instructions' => '',
                                                    'required' => 0,
                                                    'conditional_logic' => 0,
                                                    'wrapper' => array(
                                                        'width' => '',
                                                        'class' => '',
                                                        'id' => '',
                                                    ),
                                                    'post_type' => '',
                                                    'taxonomy' => '',
                                                    'filters' => array(
                                                        0 => 'search',
                                                        1 => 'post_type',
                                                        2 => 'taxonomy',
                                                    ),
                                                    'elements' => array(
                                                        0 => 'featured_image',
                                                    ),
                                                    'min' => '',
                                                    'max' => '',
                                                    'return_format' => 'id',
                                                ),
                                                /*End field*/
                                            ),
                                            'min' => '',
                                            'max' => '',
                                        ),

                                        /*NEWS 14.0.0*/
                                        'id_news_14_0_0' => array(
                                            'key' => 'id_news_14_0_0',
                                            'name' => 'news_14_0_0',
                                            'label' => 'news 14.0.0',
                                            'display' => 'block',
                                            'sub_fields' => array(
                                                /*Bắt đầu field*/
                                                array(
                                                    /* Tab 1*/
                                                    'key' => 'id_news_14_0_0_tab1',
                                                    'label' => 'Tư vấn cùng chuyên gia',
                                                    'name' => '',
                                                    'type' => 'tab',
                                                    'instructions' => '',
                                                    'required' => 0,
                                                    'conditional_logic' => 0,
                                                    'wrapper' => array(
                                                        'width' => '',
                                                        'class' => '',
                                                        'id' => '',
                                                    ),
                                                    'placement' => 'top',
                                                    'endpoint' => 0,
                                                ),
                                                array(
                                                    'key' => 'id_news_14_0_0_tab1_sub2',
                                                    'label' => 'Tiêu đề',
                                                    'name' => 'news_title',
                                                    'type' => 'text',
                                                    'instructions' => '',
                                                    'required' => 0,
                                                    'conditional_logic' => 0,
                                                    'wrapper' => array(
                                                        'width' => '',
                                                        'class' => '',
                                                        'id' => '',
                                                    ),
                                                    'default_value' => '',
                                                    'placeholder' => '',
                                                    'prepend' => '',
                                                    'append' => '',
                                                    'maxlength' => '',
                                                ),
                                                array(
                                                    'key' => 'id_news_14_0_0_tab1_sub1',
                                                    'label' => 'Tư vấn',
                                                    'name' => 'news_tuvan',
                                                    'type' => 'repeater',
                                                    'instructions' => '',
                                                    'required' => 0,
                                                    'conditional_logic' => 0,
                                                    'wrapper' => array(
                                                        'width' => '',
                                                        'class' => '',
                                                        'id' => '',
                                                    ),
                                                    'hide_admin' => 0,
                                                    'collapsed' => '',
                                                    'min' => 0,
                                                    'max' => 0,
                                                    'layout' => 'table',
                                                    'button_label' => '',
                                                    'sub_fields' => array(
                                                        array(
                                                            'key' => 'id_news_14_0_0_tab1_sub1_layout1',
                                                            'label' => 'Ảnh video',
                                                            'name' => 'news_img',
                                                            'type' => 'text',
                                                            'instructions' => '',
                                                            'required' => 0,
                                                            'conditional_logic' => 0,
                                                            'wrapper' => array(
                                                                'width' => '',
                                                                'class' => '',
                                                                'id' => '',
                                                            ),
                                                            'hide_admin' => 0,
                                                            'default_value' => '',
                                                            'placeholder' => '',
                                                            'prepend' => '',
                                                            'append' => '',
                                                            'maxlength' => '',
                                                        ),
                                                        array(
                                                            'key' => 'id_news_14_0_0_tab1_sub1_layout2',
                                                            'label' => 'ID video youtube (VD:z222)',
                                                            'name' => 'news_linkYoutube',
                                                            'type' => 'text',
                                                            'instructions' => '',
                                                            'required' => 0,
                                                            'conditional_logic' => 0,
                                                            'wrapper' => array(
                                                                'width' => '',
                                                                'class' => '',
                                                                'id' => '',
                                                            ),
                                                            'hide_admin' => 0,
                                                            'default_value' => '',
                                                            'placeholder' => '',
                                                            'prepend' => '',
                                                            'append' => '',
                                                            'maxlength' => '',
                                                        ),
                                                    ),
                                                ),
                                                array(
                                                    /* Tab 2*/
                                                    'key' => 'id_news_14_0_0_tab2',
                                                    'label' => 'Tin tức',
                                                    'name' => '',
                                                    'type' => 'tab',
                                                    'instructions' => '',
                                                    'required' => 0,
                                                    'conditional_logic' => 0,
                                                    'wrapper' => array(
                                                        'width' => '',
                                                        'class' => '',
                                                        'id' => '',
                                                    ),
                                                    'placement' => 'top',
                                                    'endpoint' => 0,
                                                ),
                                                array(
                                                    'key' => 'id_news_14_0_0_tab2_sub1',
                                                    'label' => 'Tiêu đề',
                                                    'name' => 'news_title1',
                                                    'type' => 'text',
                                                    'instructions' => '',
                                                    'required' => 0,
                                                    'conditional_logic' => 0,
                                                    'wrapper' => array(
                                                        'width' => '',
                                                        'class' => '',
                                                        'id' => '',
                                                    ),
                                                    'default_value' => '',
                                                    'placeholder' => '',
                                                    'prepend' => '',
                                                    'append' => '',
                                                    'maxlength' => '',
                                                ),
                                                array(
                                                    'key' => 'id_news_14_0_0_tab2_sub2',
                                                    'label' => 'Danh sách tin',
                                                    'name' => 'content1',
                                                    'type' => 'relationship',
                                                    'instructions' => '',
                                                    'required' => 0,
                                                    'conditional_logic' => 0,
                                                    'wrapper' => array(
                                                        'width' => '',
                                                        'class' => '',
                                                        'id' => '',
                                                    ),
                                                    'post_type' => '',
                                                    'taxonomy' => '',
                                                    'filters' => array(
                                                        0 => 'search',
                                                        1 => 'post_type',
                                                        2 => 'taxonomy',
                                                    ),
                                                    'elements' => array(
                                                        0 => 'featured_image',
                                                    ),
                                                    'min' => '',
                                                    'max' => '',
                                                    'return_format' => 'id',
                                                ),
                                                /*End field*/
                                            ),
                                            'min' => '',
                                            'max' => '',
                                        ),
                                        /*END NEWS 14.0.0*/

                                        // End Module
                                        ),
                                        'button_label' => 'Thêm News',
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END NEWS*/

                            /*PARTNER*/
                            'partner' => array(
                                'key' => 'partner',
                                'name' => 'partner',
                                'label' => 'Partner Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/
                                    array(
                                        'key' => 'partner_sub_fields',
                                        'label' => '',
                                        'name' => 'partner_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module
                                            /*Partner 8.0.0*/
                                            'id_partner_8_0_0' => array(
                                                'key' => 'id_partner_8_0_0',
                                                'name' => 'partner_8_0_0',
                                                'label' => 'Partner 8.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(      
                                                        'key' => 'id_partner_8_0_0_tab1',
                                                        'label' => 'Đối tác',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_partner_8_0_0_tab1_sub2',
                                                        'label' => 'Tiêu đề',
                                                        'name' => 'title',
                                                        'type' => 'text',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_partner_8_0_0_tab1_sub1',
                                                        'label' => 'Đối tác',
                                                        'name' => 'partner_certi',
                                                        'type' => 'repeater',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'hide_admin' => 0,
                                                        'collapsed' => '',
                                                        'min' => 0,
                                                        'max' => 0,
                                                        'layout' => 'table',
                                                        'button_label' => '',
                                                        'sub_fields' => array(
                                                            array(
                                                                'key' => 'id_partner_8_0_0_tab1_sub1_layout1',
                                                                'label' => 'Link ảnh',
                                                                'name' => 'partner_img',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                        ),
                                                    ),
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                                ),
                                            /*END partner 8.0.0*/
                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Partner',
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END PARTNER*/  

                            /*INFO*/
                            'info' => array(
                                'key' => 'info',
                                'name' => 'info',
                                'label' => 'Info Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/
                                    array(
                                        'key' => 'info_sub_fields',
                                        'label' => '',
                                        'name' => 'info_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                             /*Info 1.3.0*/
                                            'id_info_1_3_0' => array(
                                                'key' => 'id_info_1_3_0',
                                                'name' => 'info_1_3_0',
                                                'label' => 'Info 1.3.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_info_1_3_0_sub1',
                                                        'label' => 'Nội dung',
                                                        'name' => 'content',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                            Dòng 1: Tên tiêu đề <br>
                                                            Dòng 2: Mô tả <br>
                                                            Dòng 3: Link ảnh nền (820x432)
                                                        ',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 4,
                                                        'new_lines' => '',
                                                    ),
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Info 1.3.0*/
                        
                                            /*INFO 4.1.0*/
                                            'id_info_4_1_0' => array(
                                                'key' => 'id_info_4_1_0',
                                                'name' => 'info_4_1_0',
                                                'label' => 'Info 4.1.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        /* Tab tiêu đề*/
                                                        'key' => 'id_info_4_1_0_tab1',
                                                        'label' => 'Thông Tin',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_info_4_1_0_tab1_sub1',
                                                        'label' => 'Thông Tin',
                                                        'name' => 'info_place',
                                                        'type' => 'repeater',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'hide_admin' => 0,
                                                        'collapsed' => '',
                                                        'min' => 0,
                                                        'max' => 0,
                                                        'layout' => 'table',
                                                        'button_label' => '',
                                                        'sub_fields' => array(
                                                            array(
                                                                'key' => 'id_info_4_1_0_tab1_sub1_layout1',
                                                                'label' => 'Thông tin chi tiết',
                                                                'name' => 'detail_place',
                                                                'type' => 'textarea',
                                                                'instructions' => '
                                                                    Dòng 1 : Tiêu đề<br>
                                                                    Dòng 2 : Mô tả<br>
                                                                    Dòng 3 : Tiêu đề nút<br>
                                                                    Dòng 4 : Link ảnh icon ( size 43x48 )
                                                                ',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'maxlength' => '',
                                                                'rows' => 4,
                                                                'new_lines' => '',
                                                            ),
                                                        ),
                                                    ),

                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END INFO 3.1.0*/

                                             /*Info 6.0.0*/
                                            'id_info_6_0_0' => array(
                                                'key' => 'id_info_6_0_0',
                                                'name' => 'info_6_0_0',
                                                'label' => 'Info 6.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(      
                                                        'key' => 'id_info_6_0_0_tab1',
                                                        'label' => 'Chứng chỉ',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_info_6_0_0_tab1_sub2',
                                                        'label' => 'Tiều đề',
                                                        'name' => 'info_ttCer',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                            Dòng 1: Tên tiêu đề <br>
                                                            Dòng 2: Mã màu nền <br>
                                                            Dòng 3: Mã màu tiêu đề
                                                        ',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'rows' => '3',
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_info_6_0_0_tab1_sub1',
                                                        'label' => 'Bằng chứng chỉ',
                                                        'name' => 'info_certi',
                                                        'type' => 'repeater',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'hide_admin' => 0,
                                                        'collapsed' => '',
                                                        'min' => 0,
                                                        'max' => 0,
                                                        'layout' => 'table',
                                                        'button_label' => '',
                                                        'sub_fields' => array(
                                                            array(
                                                                'key' => 'id_info_6_0_0_tab1_sub1_layout1',
                                                                'label' => 'Link ảnh',
                                                                'name' => 'info_img',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                            array(
                                                                'key' => 'id_info_6_0_0_tab1_sub1_layout2',
                                                                'label' => 'Mô tả ảnh',
                                                                'name' => 'info_desc',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                        ),
                                                    ),
                                                    array(      
                                                        'key' => 'id_info_6_0_0_tab2',
                                                        'label' => 'Đối tác',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_info_6_0_0_tab2_sub2',
                                                        'label' => 'Tiều đề ',
                                                        'name' => 'info_ttPart',
                                                        'type' => 'text',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_info_6_0_0_tab2_sub1',
                                                        'label' => 'Các đối tác',
                                                        'name' => 'info_partner',
                                                        'type' => 'repeater',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'hide_admin' => 0,
                                                        'collapsed' => '',
                                                        'min' => 0,
                                                        'max' => 0,
                                                        'layout' => 'table',
                                                        'button_label' => '',
                                                        'sub_fields' => array(
                                                            array(
                                                                'key' => 'id_info_6_0_0_tab2_sub1_layout1',
                                                                'label' => 'Link ảnh',
                                                                'name' => 'info_img2',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                            array(
                                                                'key' => 'id_info_6_0_0_tab2_sub1_layout2',
                                                                'label' => 'Mô tả ảnh',
                                                                'name' => 'info_desc2',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                            array(
                                                                'key' => 'id_info_6_0_0_tab2_sub1_layout3',
                                                                'label' => 'Link liên kết',
                                                                'name' => 'info_link',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '#',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                        ),
                                                    ),
                                            
                                            
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                                ),
                                                /*END Info 6.0.0*/

                                            // End Module

                                            /*Info 8.0.0*/
                                            'id_info_8_0_0' => array(
                                                'key' => 'id_info_8_0_0',
                                                'name' => 'info_8_0_0',
                                                'label' => 'Info 8.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(      
                                                        'key' => 'id_info_8_0_0_tab1',
                                                        'label' => 'Chứng chỉ',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_info_8_0_0_tab1_sub2',
                                                        'label' => 'Tiêu đề',
                                                        'name' => 'title',
                                                        'type' => 'text',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_info_8_0_0_tab1_sub1',
                                                        'label' => 'Bằng chứng chỉ',
                                                        'name' => 'info_certi',
                                                        'type' => 'repeater',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'hide_admin' => 0,
                                                        'collapsed' => '',
                                                        'min' => 0,
                                                        'max' => 0,
                                                        'layout' => 'table',
                                                        'button_label' => '',
                                                        'sub_fields' => array(
                                                            array(
                                                                'key' => 'id_info_8_0_0_tab1_sub1_layout1',
                                                                'label' => 'Link ảnh',
                                                                'name' => 'info_img',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                        ),
                                                    ),
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                                ),
                                            /*END Info 8.0.0*/
                                        ),
                                        'button_label' => 'Thêm Info',
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '2',
                            ),
                            /*END INFO*/ 

                            /*POST*/
                            'post' => array(
                                'key' => 'post',
                                'name' => 'post',
                                'label' => 'Post Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/
                                    array(
                                        'key' => 'post_sub_fields',
                                        'label' => '',
                                        'name' => 'post_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                                /*SAPO 2.0.0*/
                                                'id_sapo_2_0_0' => array(
                                                    'key' => 'id_sapo_2_0_0',
                                                    'name' => 'sapo_2_0_0',
                                                    'label' => 'Sapo 2.0.0',
                                                    'display' => 'block',
                                                    'sub_fields' => array(
                                                        /* Code */
                                                        array(
                                                            'key' => 'id_sapo_2_0_0_sub',
                                                            'label' => 'Cập nhật nội dung SAPO',
                                                            'name' => 'info',
                                                            'type' => 'wysiwyg',
                                                            'instructions' => '',
                                                            'required' => 0,
                                                            'conditional_logic' => 0,
                                                            'wrapper' => array(
                                                                'width' => '',
                                                                'class' => '',
                                                                'id' => '',
                                                            ),
                                                            'default_value' => '',
                                                            'tabs' => 'all',
                                                            'toolbar' => 'full',
                                                            'media_upload' => 1,
                                                            'delay' => 0,
                                                        ),
                                                        /* End Code */
                                                    ),
                                                    'min' => '',
                                                    'max' => '',
                                                ),
                                                /*END SAPO 1.0.1*/

                                                /* POST 6.0.0 */
                                                'id_post_6_0_0' => array(
                                                    'key' => 'id_post_6_0_0',
                                                    'name' => 'post_6_0_0',
                                                    'label' => 'Bài Viết Dịch Vụ [Post 6.0.0]',
                                                    'display' => 'block',
                                                    'sub_fields' => array(
                                                        /*Bắt đầu field*/
                                                        array(
                                                            'key' => 'id_post_6_0_0_tab2_sub1',
                                                            'label' => '',
                                                            'name' => 'post_info',
                                                            'type' => 'flexible_content',
                                                            'instructions' => '',
                                                            'required' => 0,
                                                            'conditional_logic' => 0,
                                                            'wrapper' => array(
                                                                'width' => '',
                                                                'class' => '',
                                                                'id' => '',
                                                            ),
                                                            'layouts' => array(
                                                                'layout_homeTitle1' => array(
                                                                    'key' => 'id_post_6_0_0_tab2_sub1_layout1',
                                                                    'name' => 'post_info_box1',
                                                                    'label' => 'Tiêu Đề',
                                                                    'display' => 'block',
                                                                    'sub_fields' => array(
                                                                        // Bat dau Field
                                                                        array(
                                                                            'key' => 'id_post_6_0_0_tab2_sub1_layout1_sub1',
                                                                            'label' => 'Tiêu đề',
                                                                            'name' => 'title',
                                                                            'type' => 'text',
                                                                            'instructions' => '',
                                                                            'required' => 0,
                                                                            'conditional_logic' => 0,
                                                                            'wrapper' => array(
                                                                                'width' => '',
                                                                                'class' => '',
                                                                                'id' => '',
                                                                            ),
                                                                            'default_value' => '',
                                                                            'placeholder' => '',
                                                                            'prepend' => '',
                                                                            'append' => '',
                                                                            'maxlength' => '',
                                                                        )                                    
                                                                    
                                                                        // End Field Base						
                                                                    ),
                                                                    'min' => '',
                                                                    'max' => '',
                                                                ),
                                                                'layout_homeTitle4' => array(
                                                                    'key' => 'id_post_6_0_0_tab2_sub1_layout4',
                                                                    'name' => 'post_info_box4',
                                                                    'label' => 'Chú Thích',
                                                                    'display' => 'block',
                                                                    'sub_fields' => array(
                                                                        // Bat dau Field
                                                                        array(
                                                                            'key' => 'id_post_6_0_0_tab2_sub1_layout4_box1',
                                                                            'label' => 'Chú thích',
                                                                            'name' => 'note_post',
                                                                            'type' => 'textarea',
                                                                            'instructions' => '
                                                                                
                                                                            ',
                                                                            'required' => 0,
                                                                            'conditional_logic' => 0,
                                                                            'wrapper' => array(
                                                                                'width' => '',
                                                                                'class' => '',
                                                                                'id' => '',
                                                                            ),
                                                                            'default_value' => '',
                                                                            'placeholder' => '',
                                                                            'maxlength' => '',
                                                                            'rows' => 2,
                                                                            'new_lines' => '',
                                                                        ),                                           
                                                                    
                                                                        // End Field Base						
                                                                    ),
                                                                    'min' => '',
                                                                    'max' => '',
                                                                ),
                                                                'layout_homeTitle5' => array(
                                                                    'key' => 'id_post_6_0_0_tab2_sub1_layout5',
                                                                    'name' => 'post_info_box5',
                                                                    'label' => 'Content',
                                                                    'display' => 'block',
                                                                    'sub_fields' => array(
                                                                        // Bat dau Field
                                                                        array(
                                                                            'key' => 'id_post_6_0_0_tab2_sub1_layout5_box1',
                                                                            'label' => 'Content',
                                                                            'name' => 'the_p',
                                                                            'type' => 'wysiwyg',
                                                                            'instructions' => '',
                                                                            'required' => 0,
                                                                            'conditional_logic' => 0,
                                                                            'wrapper' => array(
                                                                                'width' => '',
                                                                                'class' => '',
                                                                                'id' => '',
                                                                            ),
                                                                            'default_value' => '',
                                                                            'tabs' => 'all',
                                                                            'toolbar' => 'full',
                                                                            'media_upload' => 1,
                                                                            'delay' => 0,
                                                                        ),                                          
                                                                    
                                                                        // End Field Base						
                                                                    ),
                                                                    'min' => '',
                                                                    'max' => '',
                                                                ),
                                                                'layout_homeTitle6' => array(
                                                                    'key' => 'id_post_6_0_0_tab2_sub1_layout6',
                                                                    'name' => 'post_info_box6',
                                                                    'label' => 'USP & Đối Tượng',
                                                                    'display' => 'block',
                                                                    'sub_fields' => array(
                                                                        // Bat dau Field
                                                                        array(
                                                                            'key' => 'id_post_6_0_0_tab2_sub1_layout6_box1',
                                                                            'label' => 'Danh Sách Bài Viết',
                                                                            'name' => 'list_post',
                                                                            'type' => 'flexible_content',
                                                                            'instructions' => '',
                                                                            'required' => 0,
                                                                            'conditional_logic' => 0,
                                                                            'wrapper' => array(
                                                                                'width' => '',
                                                                                'class' => '',
                                                                                'id' => '',
                                                                            ),
                                                                            'layouts' => array(
                                                                                'layout_homeTitle' => array(
                                                                                    'key' => 'id_post_6_0_0_tab2_sub1_layout6_box1_sub1',
                                                                                    'name' => 'list_post_box',
                                                                                    'label' => 'Danh Sách Bài Viết',
                                                                                    'display' => 'row',
                                                                                    'sub_fields' => array(
                                                                                        // Bat dau Field
                                                                                        array(
                                                                                            'key' => 'id_post_6_0_0_tab2_sub1_layout6_box1_sub1_child1',
                                                                                            'label' => 'Chi tiết bài viết',
                                                                                            'name' => 'post_detail',
                                                                                            'type' => 'textarea',
                                                                                            'instructions' => '
                                                                                                Dòng 1 : Tiêu đề bài viết <br>
                                                                                                Dòng 2 : Link ảnh ( Size 192x110 ) <br>
                                                                                                Dòng 3 : Link bài viết
                                                                                            ',
                                                                                            'required' => 0,
                                                                                            'conditional_logic' => 0,
                                                                                            'wrapper' => array(
                                                                                                'width' => '',
                                                                                                'class' => '',
                                                                                                'id' => '',
                                                                                            ),
                                                                                            'default_value' => '',
                                                                                            'placeholder' => '',
                                                                                            'maxlength' => '',
                                                                                            'rows' => 3,
                                                                                            'new_lines' => '',
                                                                                        ),    
                                                                                        // End Field Base                       
                                                                                    ),
                                                                                    'min' => '',
                                                                                    'max' => '',
                                                                                ),
                                                                            ),
                                                                            'button_label' => 'Add Row',
                                                                            'min' => '',
                                                                            'max' => '',
                                                                        ),
                                                                        // End Field Base						
                                                                    ),
                                                                    'min' => '',
                                                                    'max' => '',
                                                                ),
                                                                'layout_homeTitle7' => array(
                                                                    'key' => 'id_post_6_0_0_tab2_sub1_layout7',
                                                                    'name' => 'post_info_box7',
                                                                    'label' => 'Công Nghệ',
                                                                    'display' => 'block',
                                                                    'sub_fields' => array(
                                                                        // Bat dau Field
                                                                        array(
                                                                            'key' => 'id_post_6_0_0_tab2_sub1_layout7_box1',
                                                                            'label' => 'Link ảnh',
                                                                            'name' => 'img_cn',
                                                                            'type' => 'text',
                                                                            'instructions' => 'Size 405x405 ',
                                                                            'required' => 0,
                                                                            'conditional_logic' => 0,
                                                                            'wrapper' => array(
                                                                                'width' => '',
                                                                                'class' => '',
                                                                                'id' => '',
                                                                            ),
                                                                            'default_value' => '',
                                                                            'placeholder' => '',
                                                                            'prepend' => '',
                                                                            'append' => '',
                                                                            'maxlength' => '',
                                                                        ),
                                                                        array(
                                                                            'key' => 'id_post_6_0_0_tab2_sub1_layout7_box2',
                                                                            'label' => 'Chi tiết',
                                                                            'name' => 'detail_cn',
                                                                            'type' => 'wysiwyg',
                                                                            'instructions' => 'ul > li',
                                                                            'required' => 0,
                                                                            'conditional_logic' => 0,
                                                                            'wrapper' => array(
                                                                                'width' => '',
                                                                                'class' => '',
                                                                                'id' => '',
                                                                            ),
                                                                            'default_value' => '',
                                                                            'tabs' => 'all',
                                                                            'toolbar' => 'full',
                                                                            'media_upload' => 1,
                                                                            'delay' => 0,
                                                                        ),
                                                                        // End Field Base						
                                                                    ),
                                                                    'min' => '',
                                                                    'max' => '',
                                                                ),
                                                                'layout_homeTitle8' => array(
                                                                    'key' => 'id_post_6_0_0_tab2_sub1_layout8',
                                                                    'name' => 'post_info_box8',
                                                                    'label' => 'Đăng Ký',
                                                                    'display' => 'block',
                                                                    'sub_fields' => array(
                                                                        // Bat dau Field
                                                                        array(
                                                                            'key' => 'id_post_6_0_0_tab2_sub1_layout8_box1',
                                                                            'label' => 'Chi tiết',
                                                                            'name' => 'regist',
                                                                            'type' => 'textarea',
                                                                            'instructions' => '
                                                                                Dòng 1 : Mô tả <br>
                                                                                Dòng 2 : Tên nút button <br>
                                                                                Dòng 3 : Class đăng ký
                                                                            ',
                                                                            'required' => 0,
                                                                            'conditional_logic' => 0,
                                                                            'wrapper' => array(
                                                                                'width' => '',
                                                                                'class' => '',
                                                                                'id' => '',
                                                                            ),
                                                                            'default_value' => '',
                                                                            'placeholder' => '',
                                                                            'maxlength' => '',
                                                                            'rows' => 4,
                                                                            'new_lines' => '',
                                                                        ),
                                                                        // End Field Base						
                                                                    ),
                                                                    'min' => '',
                                                                    'max' => '',
                                                                ),
                                                                'layout_homeTitle9' => array(
                                                                    'key' => 'id_post_6_0_0_tab2_sub1_layout9',
                                                                    'name' => 'post_info_box9',
                                                                    'label' => 'Lời Khuyên',
                                                                    'display' => 'block',
                                                                    'sub_fields' => array(
                                                                        // Bat dau Field
                                                                        array(
                                                                            'key' => 'id_post_6_0_0_tab2_sub1_layout9_box1',
                                                                            'label' => 'Lời khuyên',
                                                                            'name' => 'lk_post',
                                                                            'type' => 'textarea',
                                                                            'instructions' => '
                                                                                
                                                                            ',
                                                                            'required' => 0,
                                                                            'conditional_logic' => 0,
                                                                            'wrapper' => array(
                                                                                'width' => '',
                                                                                'class' => '',
                                                                                'id' => '',
                                                                            ),
                                                                            'default_value' => '',
                                                                            'placeholder' => '',
                                                                            'maxlength' => '',
                                                                            'rows' => 2,
                                                                            'new_lines' => '',
                                                                        ),                                           
                                                                    
                                                                        // End Field Base						
                                                                    ),
                                                                    'min' => '',
                                                                    'max' => '',
                                                                ),
                                                                'layout_homeTitle10' => array(
                                                                    'key' => 'id_post_6_0_0_tab2_sub1_layout10',
                                                                    'name' => 'post_info_box10',
                                                                    'label' => 'Quy Trình',
                                                                    'display' => 'block',
                                                                    'sub_fields' => array(
                                                                        // Bat dau Field
                                                                        array(
                                                                            'key' => 'id_post_6_0_0_tab2_sub1_layout10_box1',
                                                                            'label' => 'Chi Tiết Quy Trình',
                                                                            'name' => 'list_qt',
                                                                            'type' => 'flexible_content',
                                                                            'instructions' => '',
                                                                            'required' => 0,
                                                                            'conditional_logic' => 0,
                                                                            'wrapper' => array(
                                                                                'width' => '',
                                                                                'class' => '',
                                                                                'id' => '',
                                                                            ),
                                                                            'layouts' => array(
                                                                                'layout_homeTitle' => array(
                                                                                    'key' => 'id_post_6_0_0_tab2_sub1_layout10_box1_sub1',
                                                                                    'name' => 'list_qt_box',
                                                                                    'label' => 'Chi Tiết Quy Trình',
                                                                                    'display' => 'row',
                                                                                    'sub_fields' => array(
                                                                                        // Bat dau Field
                                                                                        array(
                                                                                            'key' => 'id_post_6_0_0_tab2_sub1_layout10_box1_sub1_child1',
                                                                                            'label' => 'Chi tiết',
                                                                                            'name' => 'detail_qt',
                                                                                            'type' => 'textarea',
                                                                                            'instructions' => '
                                                                                                Dòng 1 : Tiêu đề bước <br>
                                                                                                Dòng 2 : Link ảnh ( Size 192x110 ) <br>
                                                                                                Dòng 3 : Mô ta
                                                                                            ',
                                                                                            'required' => 0,
                                                                                            'conditional_logic' => 0,
                                                                                            'wrapper' => array(
                                                                                                'width' => '',
                                                                                                'class' => '',
                                                                                                'id' => '',
                                                                                            ),
                                                                                            'default_value' => '',
                                                                                            'placeholder' => '',
                                                                                            'maxlength' => '',
                                                                                            'rows' => 3,
                                                                                            'new_lines' => '',
                                                                                        ),    
                                                                                        // End Field Base                       
                                                                                    ),
                                                                                    'min' => '',
                                                                                    'max' => '',
                                                                                ),
                                                                            ),
                                                                            'button_label' => 'Add Row',
                                                                            'min' => '',
                                                                            'max' => '',
                                                                        ),
                                                                        // End Field Base						
                                                                    ),
                                                                    'min' => '',
                                                                    'max' => '',
                                                                ),
                                                                'layout_homeTitle11' => array(
                                                                    'key' => 'id_post_6_0_0_tab2_sub1_layout11',
                                                                    'name' => 'post_info_box11',
                                                                    'label' => 'Bảng Giá Dịch Vụ ( 2 cột )',
                                                                    'display' => 'block',
                                                                    'sub_fields' => array(
                                                                        // Bat dau Field
                                                                        array(
                                                                            'key' => 'id_post_6_0_0_tab2_sub1_layout11_box2',
                                                                            'label' => 'Tiêu đề cột bảng giá',
                                                                            'name' => 'title_col',
                                                                            'type' => 'textarea',
                                                                            'instructions' => '
                                                                                Dòng 1 : Tiêu đề trái<br>
                                                                                Dòng 2 : Tiêu đề phải<br>
                                                                            ',
                                                                            'required' => 0,
                                                                            'conditional_logic' => 0,
                                                                            'wrapper' => array(
                                                                                'width' => '',
                                                                                'class' => '',
                                                                                'id' => '',
                                                                            ),
                                                                            'default_value' => '',
                                                                            'placeholder' => '',
                                                                            'maxlength' => '',
                                                                            'rows' => 2,
                                                                            'new_lines' => '',
                                                                        ),    
                                                                        array(
                                                                            'key' => 'id_post_6_0_0_tab2_sub1_layout11_box1',
                                                                            'label' => 'Chi Tiết Bảng Giá',
                                                                            'name' => 'table_price',
                                                                            'type' => 'flexible_content',
                                                                            'instructions' => '',
                                                                            'required' => 0,
                                                                            'conditional_logic' => 0,
                                                                            'wrapper' => array(
                                                                                'width' => '',
                                                                                'class' => '',
                                                                                'id' => '',
                                                                            ),
                                                                            'layouts' => array(
                                                                                'layout_homeTitle' => array(
                                                                                    'key' => 'id_post_6_0_0_tab2_sub1_layout11_box1_sub1',
                                                                                    'name' => 'table_price_box',
                                                                                    'label' => 'Chi Tiết Bảng Giá',
                                                                                    'display' => 'row',
                                                                                    'sub_fields' => array(
                                                                                        // Bat dau Field
                                                                                        array(
                                                                                            'key' => 'id_post_6_0_0_tab2_sub1_layout11_box1_sub1_child1',
                                                                                            'label' => 'Chi tiết',
                                                                                            'name' => 'detail_table',
                                                                                            'type' => 'textarea',
                                                                                            'instructions' => '
                                                                                                Dòng 1 : Tiêu đề dịch vụ <br>
                                                                                                Dòng 2 : Chi phí <br>
                                                                                            ',
                                                                                            'required' => 0,
                                                                                            'conditional_logic' => 0,
                                                                                            'wrapper' => array(
                                                                                                'width' => '',
                                                                                                'class' => '',
                                                                                                'id' => '',
                                                                                            ),
                                                                                            'default_value' => '',
                                                                                            'placeholder' => '',
                                                                                            'maxlength' => '',
                                                                                            'rows' => 2,
                                                                                            'new_lines' => '',
                                                                                        ),    
                                                                                        // End Field Base                       
                                                                                    ),
                                                                                    'min' => '',
                                                                                    'max' => '',
                                                                                ),
                                                                            ),
                                                                            'button_label' => 'Add Row',
                                                                            'min' => '',
                                                                            'max' => '',
                                                                        ),
                                                                        // End Field Base						
                                                                    ),
                                                                    'min' => '',
                                                                    'max' => '',
                                                                ),
                                                                'layout_homeTitle16' => array(
                                                                    'key' => 'id_post_6_0_0_tab2_sub1_layout16',
                                                                    'name' => 'post_info_box16',
                                                                    'label' => 'Bảng Giá Dịch Vụ ( 3 cột )',
                                                                    'display' => 'block',
                                                                    'sub_fields' => array(
                                                                        // Bat dau Field
                                                                        array(
                                                                            'key' => 'id_post_6_0_0_tab2_sub1_layout16_box2',
                                                                            'label' => 'Tiêu đề cột bảng giá',
                                                                            'name' => 'title_col',
                                                                            'type' => 'textarea',
                                                                            'instructions' => '
                                                                                Dòng 1 : Tiêu đề trái<br>
                                                                                Dòng 2 : Tiêu đề giữa<br>
                                                                                Dòng 3 : Tiêu đề phải<br>
                                                                            ',
                                                                            'required' => 0,
                                                                            'conditional_logic' => 0,
                                                                            'wrapper' => array(
                                                                                'width' => '',
                                                                                'class' => '',
                                                                                'id' => '',
                                                                            ),
                                                                            'default_value' => '',
                                                                            'placeholder' => '',
                                                                            'maxlength' => '',
                                                                            'rows' => 3,
                                                                            'new_lines' => '',
                                                                        ),    
                                                                        array(
                                                                            'key' => 'id_post_6_0_0_tab2_sub1_layout16_box1',
                                                                            'label' => 'Chi Tiết Bảng Giá',
                                                                            'name' => 'table_price',
                                                                            'type' => 'flexible_content',
                                                                            'instructions' => '',
                                                                            'required' => 0,
                                                                            'conditional_logic' => 0,
                                                                            'wrapper' => array(
                                                                                'width' => '',
                                                                                'class' => '',
                                                                                'id' => '',
                                                                            ),
                                                                            'layouts' => array(
                                                                                'layout_homeTitle' => array(
                                                                                    'key' => 'id_post_6_0_0_tab2_sub1_layout16_box1_sub1',
                                                                                    'name' => 'table_price_box',
                                                                                    'label' => 'Chi Tiết Bảng Giá',
                                                                                    'display' => 'block',
                                                                                    'sub_fields' => array(
                                                                                        // Bat dau Field
                                                                                        array(
                                                                                            'key' => 'id_post_6_0_0_tab2_sub1_layout16_box1_sub1_child1',
                                                                                            'label' => 'Chi tiết',
                                                                                            'name' => 'detail_table',
                                                                                            'type' => 'textarea',
                                                                                            'instructions' => '
                                                                                                Dòng 1 : Tiêu đề dịch vụ <br>
                                                                                                Dòng 2 : Chi phí <br>
                                                                                                Dòng 3 : Liệu trình <br>
                                                                                            ',
                                                                                            'required' => 0,
                                                                                            'conditional_logic' => 0,
                                                                                            'wrapper' => array(
                                                                                                'width' => '',
                                                                                                'class' => '',
                                                                                                'id' => '',
                                                                                            ),
                                                                                            'default_value' => '',
                                                                                            'placeholder' => '',
                                                                                            'maxlength' => '',
                                                                                            'rows' => 3,
                                                                                            'new_lines' => '',
                                                                                        ),    
                                                                                        // End Field Base                       
                                                                                    ),
                                                                                    'min' => '',
                                                                                    'max' => '',
                                                                                ),
                                                                            ),
                                                                            'button_label' => 'Add Row',
                                                                            'min' => '',
                                                                            'max' => '',
                                                                        ),
                                                                        // End Field Base						
                                                                    ),
                                                                    'min' => '',
                                                                    'max' => '',
                                                                ),
                                                                'layout_homeTitle12' => array(
                                                                    'key' => 'id_post_6_0_0_tab2_sub1_layout12',
                                                                    'name' => 'post_info_box12',
                                                                    'label' => 'Banner',
                                                                    'display' => 'block',
                                                                    'sub_fields' => array(
                                                                        // Bat dau Field
                                                                        array(
                                                                            'key' => 'id_post_6_0_0_tab2_sub1_layout12_box1',
                                                                            'label' => 'Chi tiết banner',
                                                                            'name' => 'banner',
                                                                            'type' => 'textarea',
                                                                            'instructions' => '
                                                                                Dòng 1 : Link ảnh ( Size 610x310 ) <br>
                                                                                Dòng 2 : Link xem chi tiết
                                                                            ',
                                                                            'required' => 0,
                                                                            'conditional_logic' => 0,
                                                                            'wrapper' => array(
                                                                                'width' => '',
                                                                                'class' => '',
                                                                                'id' => '',
                                                                            ),
                                                                            'default_value' => '',
                                                                            'placeholder' => '',
                                                                            'maxlength' => '',
                                                                            'rows' => 2,
                                                                            'new_lines' => '',
                                                                        ),                                           
                                                                    
                                                                        // End Field Base						
                                                                    ),
                                                                    'min' => '',
                                                                    'max' => '',
                                                                ),
                                                                'layout_homeTitle13' => array(
                                                                    'key' => 'id_post_6_0_0_tab2_sub1_layout13',
                                                                    'name' => 'post_info_box13',
                                                                    'label' => 'Ảnh Trước Sau',
                                                                    'display' => 'block',
                                                                    'sub_fields' => array(
                                                                        // Bat dau Field
                                                                        array(
                                                                            'key' => 'id_post_6_0_0_tab2_sub1_layout13_box2',
                                                                            'label' => 'Link xem tất cả hình ảnh trước sau',
                                                                            'name' => 'link_view_img',
                                                                            'type' => 'text',
                                                                            'instructions' => '',
                                                                            'required' => 0,
                                                                            'conditional_logic' => 0,
                                                                            'wrapper' => array(
                                                                                'width' => '',
                                                                                'class' => '',
                                                                                'id' => '',
                                                                            ),
                                                                            'default_value' => '',
                                                                            'placeholder' => '',
                                                                            'prepend' => '',
                                                                            'append' => '',
                                                                            'maxlength' => '',
                                                                        ),
                                                                        array(
                                                                            'key' => 'id_post_6_0_0_tab2_sub1_layout13_box1',
                                                                            'label' => 'Ảnh trước sau',
                                                                            'name' => 'img_bf',
                                                                            'type' => 'flexible_content',
                                                                            'instructions' => '',
                                                                            'required' => 0,
                                                                            'conditional_logic' => 0,
                                                                            'wrapper' => array(
                                                                                'width' => '',
                                                                                'class' => '',
                                                                                'id' => '',
                                                                            ),
                                                                            'layouts' => array(
                                                                                'layout_homeTitle' => array(
                                                                                    'key' => 'id_post_6_0_0_tab2_sub1_layout13_box1_sub1',
                                                                                    'name' => 'img_bf_box',
                                                                                    'label' => 'Ảnh trước sau',
                                                                                    'display' => 'row',
                                                                                    'sub_fields' => array(
                                                                                        // Bat dau Field
                                                                                        array(
                                                                                            'key' => 'id_post_6_0_0_tab2_sub1_layout13_box1_sub1_child1',
                                                                                            'label' => 'Chi tiết',
                                                                                            'name' => 'img_bf_detail',
                                                                                            'type' => 'textarea',
                                                                                            'instructions' => '
                                                                                                Dòng 1 : Tiêu đề 
                                                                                                Dòng 2 : Link ảnh ( Size 610x262 ) <br>
                                                                                            ',
                                                                                            'required' => 0,
                                                                                            'conditional_logic' => 0,
                                                                                            'wrapper' => array(
                                                                                                'width' => '',
                                                                                                'class' => '',
                                                                                                'id' => '',
                                                                                            ),
                                                                                            'default_value' => '',
                                                                                            'placeholder' => '',
                                                                                            'maxlength' => '',
                                                                                            'rows' => 2,
                                                                                            'new_lines' => '',
                                                                                        ),    
                                                                                        // End Field Base                       
                                                                                    ),
                                                                                    'min' => '',
                                                                                    'max' => '',
                                                                                ),
                                                                            ),
                                                                            'button_label' => 'Add Row',
                                                                            'min' => '',
                                                                            'max' => '',
                                                                        ),
                                                                        // End Field Base						
                                                                    ),
                                                                    'min' => '',
                                                                    'max' => '',
                                                                ),
                                                                'layout_homeTitle14' => array(
                                                                    'key' => 'id_post_6_0_0_tab2_sub1_layout14',
                                                                    'name' => 'post_info_box14',
                                                                    'label' => 'Icon Quy Trình',
                                                                    'display' => 'block',
                                                                    'sub_fields' => array(
                                                                        // Bat dau Field
                                                                        array(
                                                                            'key' => 'id_post_6_0_0_tab2_sub1_layout14_box1',
                                                                            'label' => 'Icon Quy Trình',
                                                                            'name' => 'icon_bf',
                                                                            'type' => 'flexible_content',
                                                                            'instructions' => '',
                                                                            'required' => 0,
                                                                            'conditional_logic' => 0,
                                                                            'wrapper' => array(
                                                                                'width' => '',
                                                                                'class' => '',
                                                                                'id' => '',
                                                                            ),
                                                                            'layouts' => array(
                                                                                'layout_homeTitle' => array(
                                                                                    'key' => 'id_post_6_0_0_tab2_sub1_layout14_box1_sub1',
                                                                                    'name' => 'icon_bf_box',
                                                                                    'label' => 'Icon Quy Trình',
                                                                                    'display' => 'block',
                                                                                    'sub_fields' => array(
                                                                                        // Bat dau Field
                                                                                        array(
                                                                                            'key' => 'id_post_6_0_0_tab2_sub1_layout14_box1_sub1_child1',
                                                                                            'label' => 'Chi tiết',
                                                                                            'name' => 'icon_bf_detail',
                                                                                            'type' => 'textarea',
                                                                                            'instructions' => '
                                                                                                
                                                                                            ',
                                                                                            'required' => 0,
                                                                                            'conditional_logic' => 0,
                                                                                            'wrapper' => array(
                                                                                                'width' => '',
                                                                                                'class' => '',
                                                                                                'id' => '',
                                                                                            ),
                                                                                            'default_value' => '',
                                                                                            'placeholder' => '',
                                                                                            'maxlength' => '',
                                                                                            'rows' => 2,
                                                                                            'new_lines' => '',
                                                                                        ),    
                                                                                        // End Field Base                       
                                                                                    ),
                                                                                    'min' => '',
                                                                                    'max' => '',
                                                                                ),
                                                                            ),
                                                                            'button_label' => 'Add Row',
                                                                            'min' => '',
                                                                            'max' => '',
                                                                        ),
                                                                        // End Field Base						
                                                                    ),
                                                                    'min' => '',
                                                                    'max' => '',
                                                                ),
                                                                'layout_homeTitle15' => array(
                                                                    'key' => 'id_post_6_0_0_tab2_sub1_layout15',
                                                                    'name' => 'post_info_box15',
                                                                    'label' => 'Nút Xem Thêm',
                                                                    'display' => 'block',
                                                                    'sub_fields' => array(
                                                                        // Bat dau Field
                                                                        array(
                                                                            'key' => 'id_post_6_0_0_tab2_sub1_layout15_box1',
                                                                            'label' => 'Chi tiết',
                                                                            'name' => 'button',
                                                                            'type' => 'textarea',
                                                                            'instructions' => '
                                                                                Dòng 1 : Tiêu đề nút <br>
                                                                                Dòng 2 : Link xem chi tiết
                                                                            ',
                                                                            'required' => 0,
                                                                            'conditional_logic' => 0,
                                                                            'wrapper' => array(
                                                                                'width' => '',
                                                                                'class' => '',
                                                                                'id' => '',
                                                                            ),
                                                                            'default_value' => '',
                                                                            'placeholder' => '',
                                                                            'maxlength' => '',
                                                                            'rows' => 2,
                                                                            'new_lines' => '',
                                                                        ),    
                                                                        // End Field Base						
                                                                    ),
                                                                    'min' => '',
                                                                    'max' => '',
                                                                ),
                                                                'layout_homeTitle17' => array(
                                                                    'key' => 'id_post_6_0_0_tab2_sub1_layout17',
                                                                    'name' => 'post_info_box17',
                                                                    'label' => 'Đăng ký theo dịch vụ',
                                                                    'display' => 'block',
                                                                    'sub_fields' => array(
                                                                        // Bat dau Field
                                                                        array(
                                                                            'key' => 'id_post_6_0_0_tab2_sub1_layout17_box1',
                                                                            'label' => 'Chi tiết',
                                                                            'name' => 'regist',
                                                                            'type' => 'textarea',
                                                                            'instructions' => '
                                                                                Dòng 1 : Mô tả <br>
                                                                                Dòng 2 : Tên nút button <br>
                                                                            ',
                                                                            'required' => 0,
                                                                            'conditional_logic' => 0,
                                                                            'wrapper' => array(
                                                                                'width' => '',
                                                                                'class' => '',
                                                                                'id' => '',
                                                                            ),
                                                                            'default_value' => '',
                                                                            'placeholder' => '',
                                                                            'maxlength' => '',
                                                                            'rows' => 4,
                                                                            'new_lines' => '',
                                                                        ),
                                                                        // End Field Base						
                                                                    ),
                                                                    'min' => '',
                                                                    'max' => '',
                                                                ),
                                                            ),
                                                            'button_label' => 'Thêm Dịch Vụ',
                                                            'min' => '',
                                                            'max' => '',
                                                        ),

                                                        
                                                        /*End field*/
                                                    ),
                                                    'min' => '',
                                                    'max' => '',
                                                ),
                                                /*END POST 6.0.0 */                                            
                        
                                            

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Post',
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END POST*/ 

                            /*REGIST*/
                            'regist' => array(
                                'key' => 'regist',
                                'name' => 'regist',
                                'label' => 'Regist Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/
                                    array(
                                        'key' => 'regist_sub_fields',
                                        'label' => '',
                                        'name' => 'regist_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                          /*Regist 3.1.0*/
                                            'id_regist_3_1_0' => array(
                                                'key' => 'id_regist_3_1_0',
                                                'name' => 'regist_3_1_0',
                                                'label' => 'Regist 3.1.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_regist_3_1_0_sub1',
                                                        'label' => 'Tiêu đề form',
                                                        'name' => 'title',
                                                        'type' => 'text',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_regist_3_1_0_sub2',
                                                        'label' => 'Hình Ảnh (4 ảnh)',
                                                        'name' => 'img',
                                                        'type' => 'repeater',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'hide_admin' => 0,
                                                        'collapsed' => '',
                                                        'min' => 0,
                                                        'max' => 0,
                                                        'layout' => 'table',
                                                        'button_label' => '',
                                                        'sub_fields' => array(
                                                            array(
                                                                'key' => 'id_regist_3_1_0_sub2_sub1',
                                                                'label' => 'Link ảnh hiển thị',
                                                                'name' => 'url_img',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                            array(
                                                                'key' => 'id_regist_3_1_0_sub2_sub2',
                                                                'label' => 'Mô tả ảnh',
                                                                'name' => 'sub',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                        ),
                                                    ),

                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END Regist 3.1.0*/

                                            /*regist6.0.0*/
                                            'id_regist_6_0_0' => array(
                                                'key' => 'id_regist_6_0_0',
                                                'name' => 'regist_6_0_0',
                                                'label' => 'Regist6.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_regist_6_0_0_tab1',
                                                        'label' => 'Tiêu đề tư vấn',
                                                        'name' => 'regist_title',
                                                        'type' => 'text',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_regist_6_0_0_tab2',
                                                        'label' => 'Liên hệ',
                                                        'name' => 'regist_sub',
                                                        'type' => 'text',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_regist_6_0_0_tab3',
                                                        'label' => 'Nút đăng ký',
                                                        'name' => 'regist_info',
                                                        'type' => 'text',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END regist 6.0.0*/

                                            /*regist8.0.0*/
                                            'id_regist_8_0_0' => array(
                                                'key' => 'id_regist_8_0_0',
                                                'name' => 'regist_8_0_0',
                                                'label' => 'Regist8.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_regist_8_0_0_tab1',
                                                        'label' => 'Tiêu đề tư vấn',
                                                        'name' => 'regist_title',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                            Dòng 1 : Tiêu đề trái <br>
                                                            Dòng 2 : Tiêu đề phải<br>
                                                            Dòng 3 : Địa chỉ 1<br>
                                                            Dòng 4 : Địa chỉ 2<br>
                                                        ',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 4,
                                                        'new_lines' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_regist_8_0_0_tab2',
                                                        'label' => 'Thông tin liên hệ',
                                                        'name' => 'regist_lh',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                            Dòng 1 : Số đt <br>
                                                            Dòng 2 : Link sđt<br>
                                                            Dòng 3 : Địa chỉ mail<br>
                                                            Dòng 4 : Link mail
                                                        ',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 4,
                                                        'new_lines' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_regist_8_0_0_tab3',
                                                        'label' => 'Thông tin mở cửa',
                                                        'name' => 'regist_mc',
                                                        'type' => 'repeater',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'hide_admin' => 0,
                                                        'collapsed' => '',
                                                        'min' => 0,
                                                        'max' => 0,
                                                        'layout' => 'table',
                                                        'button_label' => '',
                                                        'sub_fields' => array(
                                                            array(
                                                                'key' => 'id_regist_8_0_0_tab3_sub1',
                                                                'label' => 'Thứ',
                                                                'name' => 'regist_week',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                            array(
                                                                'key' => 'id_regist_8_0_0_tab3_sub2',
                                                                'label' => 'Khoảng giờ',
                                                                'name' => 'regist_time',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                        ),
                                                    ),
                                                    
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END regist 8.0.0*/

                                            /*regist2.0.0*/
                                            'id_regist_2_0_0' => array(
                                                'key' => 'id_regist_2_0_0',
                                                'name' => 'regist_2_0_0',
                                                'label' => 'Regist2.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_regist_2_0_0_tab1',
                                                        'label' => 'Thông tin',
                                                        'name' => 'about',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                            Dòng 1 : Gặp gỡ <br>
                                                            Dòng 2 : Cơ hội tư vấn <br>
                                                            Dòng 3 : Số điện thoại liên hệ<br>
                                                            Dòng 4 : Số gọi
                                                        ',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 4,
                                                        'new_lines' => '',
                                                    ),
                                                   
                                                    array(
                                                        'key' => 'id_regist_2_0_0_tab2',
                                                        'label' => 'Dịch vụ quan tâm',
                                                        'name' => 'service_qt',
                                                        'type' => 'repeater',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'hide_admin' => 0,
                                                        'collapsed' => '',
                                                        'min' => 0,
                                                        'max' => 0,
                                                        'layout' => 'table',
                                                        'button_label' => '',
                                                        'sub_fields' => array(
                                                            array(
                                                                'key' => 'id_regist_2_0_0_tab2_sub1',
                                                                'label' => 'Dịch vụ',
                                                                'name' => 'service_sub',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                        ),
                                                    ),
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END regist 2.0.0*/

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Regist',
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '2',
                            ),
                            /*END REGIST*/     
                            
                            /*PRICE MODULE*/
                            'price' => array(
                                'key' => 'price',
                                'name' => 'price',
                                'label' => 'Price Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                
                                    array(
                                        'key' => 'price_sub_fields',
                                        'label' => '',
                                        'name' => 'price_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                            /*PRICE 1.0.0*/
                                            'id_price_1_0_0' => array(
                                                'key' => 'id_price_1_0_0',
                                                'name' => 'price_1_0_0',
                                                'label' => 'Price 1.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        /* Tab tiêu đề*/
                                                        'key' => 'id_price_1_0_0_tab1',
                                                        'label' => 'Dịch vụ',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_price_1_0_0_tab1_sub2',
                                                        'label' => 'Tiêu đề',
                                                        'name' => 'price_title',
                                                        'type' => 'text',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_price_1_0_0_tab1_sub3',
                                                        'label' => 'ID Dịch vụ',
                                                        'name' => 'price_id',
                                                        'type' => 'text',
                                                        'instructions' => 'VD : 1',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_price_1_0_0_tab1_sub1',
                                                        'label' => 'Chi tiết bảng giá dịch vụ',
                                                        'name' => 'price_info',
                                                        'type' => 'flexible_content',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'layouts' => array(
                                                            'layout_homeTitle' => array(
                                                                'key' => 'id_price_1_0_0_tab1_sub1_layout1',
                                                                'name' => 'price_info_box',
                                                                'label' => 'Chi tiết bảng giá dịch vụ',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    // Bat dau Field
                                                                    array(
                                                                        'key' => 'id_price_1_0_0_tab1_sub1_layout1_box2',
                                                                        'label' => 'Tiêu đề dịch vụ con',
                                                                        'name' => 'child_title',
                                                                        'type' => 'text',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'prepend' => '',
                                                                        'append' => '',
                                                                        'maxlength' => '',
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_price_1_0_0_tab1_sub1_layout1_box1',
                                                                        'label' => 'Chi tiết bảng giá',
                                                                        'name' => 'price_place',
                                                                        'type' => 'repeater',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'hide_admin' => 0,
                                                                        'collapsed' => '',
                                                                        'min' => 0,
                                                                        'max' => 0,
                                                                        'layout' => 'table',
                                                                        'button_label' => '',
                                                                        'sub_fields' => array(
                                                                            array(
                                                                                'key' => 'id_price_1_0_0_tab1_sub1_layout1_box1_sub1',
                                                                                'label' => 'Tiêu đề',
                                                                                'name' => 'place_title',
                                                                                'type' => 'text',
                                                                                'instructions' => '',
                                                                                'required' => 0,
                                                                                'conditional_logic' => 0,
                                                                                'wrapper' => array(
                                                                                    'width' => '',
                                                                                    'class' => '',
                                                                                    'id' => '',
                                                                                ),
                                                                                'hide_admin' => 0,
                                                                                'default_value' => '',
                                                                                'placeholder' => '',
                                                                                'prepend' => '',
                                                                                'append' => '',
                                                                                'maxlength' => '',
                                                                            ),
                                                                            array(
                                                                                'key' => 'id_price_1_0_0_tab1_sub1_layout1_box1_sub2',
                                                                                'label' => 'Link Ảnh',
                                                                                'name' => 'place_img',
                                                                                'type' => 'text',
                                                                                'instructions' => 'Size 295x166',
                                                                                'required' => 0,
                                                                                'conditional_logic' => 0,
                                                                                'wrapper' => array(
                                                                                    'width' => '',
                                                                                    'class' => '',
                                                                                    'id' => '',
                                                                                ),
                                                                                'hide_admin' => 0,
                                                                                'default_value' => '',
                                                                                'placeholder' => '',
                                                                                'prepend' => '',
                                                                                'append' => '',
                                                                                'maxlength' => '',
                                                                            ),
                                                                            array(
                                                                                'key' => 'id_price_1_0_0_tab1_sub1_layout1_box1_sub3',
                                                                                'label' => 'Link Url',
                                                                                'name' => 'place_url',
                                                                                'type' => 'text',
                                                                                'instructions' => '',
                                                                                'required' => 0,
                                                                                'conditional_logic' => 0,
                                                                                'wrapper' => array(
                                                                                    'width' => '',
                                                                                    'class' => '',
                                                                                    'id' => '',
                                                                                ),
                                                                                'hide_admin' => 0,
                                                                                'default_value' => '#',
                                                                                'placeholder' => '',
                                                                                'prepend' => '',
                                                                                'append' => '',
                                                                                'maxlength' => '',
                                                                            ),
                                                                        ),
                                                                    ),
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                        ),
                                                        'button_label' => 'Thêm Dịch Vụ',
                                                        'min' => '',
                                                        'max' => '',
                                                    ),
                                                    

                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END PRICE 1.0.0*/ 

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Module',
                                        'min' => '',
                                        'max' => '',
                                    ),                     
                                ),
                                'min' => '',
                                'max' => '',
                            ),
                            /*END PRICE*/

                             /*CATE*/
                             'cate' => array(
                                'key' => 'cate',
                                'name' => 'cate',
                                'label' => 'Cate Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/
                                    array(
                                        'key' => 'cate_sub_fields',
                                        'label' => '',
                                        'name' => 'cate_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module
                      
                                            /*CATE 4.1.0*/
                                            'id_cate_4_1_0' => array(
                                                'key' => 'id_cate_4_1_0',
                                                'name' => 'cate_4_1_0',
                                                'label' => 'Cate 4.1.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        /* Tab tiêu đề*/
                                                        'key' => 'id_cate_4_1_0_tab1',
                                                        'label' => 'Case Dịch Vụ',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_cate_4_1_0_tab1_sub1',
                                                        'label' => 'Thông tin chung',
                                                        'name' => 'cate_detail',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                            Dòng 1 : Tiêu đề case dịch vụ <br>
                                                            Dòng 2 : Link ảnh ( Size 400x533 ) <br>
                                                            Dòng 3 : Link xem chi tiết case dịch vụ 
                                                        ',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 3,
                                                        'new_lines' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_cate_4_1_0_tab1_sub2',
                                                        'label' => 'Chọn bài viết liên quan',
                                                        'name' => 'content',
                                                        'type' => 'relationship',
                                                        'instructions' => ' Chọn tối đa 10 bài viết ',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'post_type' => '',
                                                        'taxonomy' => '',
                                                        'filters' => array(
                                                            0 => 'search',
                                                            1 => 'post_type',
                                                            2 => 'taxonomy',
                                                        ),
                                                        'elements' => array(
                                                            0 => 'featured_image',
                                                        ),
                                                        'min' => '',
                                                        'max' => 10,
                                                        'return_format' => 'id',
                                                    ),

                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END CATE 4.1.0*/

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm cate',
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END CATE*/
                        
                        
                        // End Module                                    
                        ),
                        'button_label' => 'Thêm Module',
                        'min' => '',
                        'max' => '',
                    ),
                    array(      
                        'key' => 'group_page_field_sidebar',
                        'label' => 'Cài đặt Sidebar',
                        'name' => '',
                        'type' => 'tab',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'group_admin',
                                    'operator' => '==',
                                    'value' => 'show_module_sidebar',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'placement' => 'top',
                        'endpoint' => 0,
                    ),
                    array(
                        'key' => 'sidebar_custom',
                        'label' => '',
                        'name' => 'sidebar_custom',
                        'type' => 'flexible_content',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'group_admin',
                                    'operator' => '==',
                                    'value' => 'show_module_sidebar',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'layouts' => array(
                        // Bat dau Module

                            /*SIDEBAR 3.0.0*/
                            'id_sidebar_3_0_0' => array(
                                'key' => 'id_sidebar_3_0_0',
                                'name' => 'sidebar_3_0_0',
                                'label' => 'Sidebar Bài Dịch Vụ [Sidebar 3.0.0]',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/

                                    array(
                                        'key' => 'id_sidebar_3_0_0_sub',
                                        'label' => '',
                                        'name' => 'sidebar',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            'id_sidebar_3_0_0_sub_layout5' => array(
                                                'key' => 'id_sidebar_3_0_0_sub_layout5',
                                                'name' => 'sidebar_menu',
                                                'label' => 'Menu Dịch Vụ',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    array(
                                                        'key' => 'id_sidebar_3_0_0_sub_layout5_box1',
                                                        'label' => 'Menu dịch vụ',
                                                        'name' => 'menu_dv',
                                                        'type' => 'flexible_content',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'layouts' => array(
                                                            'layout_homeTitle' => array(
                                                                'key' => 'id_sidebar_3_0_0_sub_layout5_box1_sub1',
                                                                'name' => 'menu_dv_box',
                                                                'label' => 'Menu dịch vụ',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    // Bat dau Field
                                                                    array(
                                                                        'key' => 'id_sidebar_3_0_0_sub_layout5_box1_sub1_child1',
                                                                        'label' => 'Dịch vụ chính',
                                                                        'name' => 'dv_chinh',
                                                                        'type' => 'text',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'prepend' => '',
                                                                        'append' => '',
                                                                        'maxlength' => '',
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_sidebar_3_0_0_sub_layout5_box1_sub1_child11',
                                                                        'label' => 'Active theo Chuyên mục',
                                                                        'name' => 'active_theo_chuyen_muc',
                                                                        'type' => 'taxonomy',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'taxonomy' => 'category',
                                                                        'field_type' => 'select',
                                                                        'allow_null' => 0,
                                                                        'add_term' => 1,
                                                                        'save_terms' => 0,
                                                                        'load_terms' => 0,
                                                                        'return_format' => 'id',
                                                                        'multiple' => 0,
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_sidebar_3_0_0_sub_layout5_box1_sub1_child2',
                                                                        'label' => 'Dịch vụ con',
                                                                        'name' => 'dv_child',
                                                                        'type' => 'flexible_content',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'layouts' => array(
                                                                            'layout_homeTitle' => array(
                                                                                'key' => 'id_sidebar_3_0_0_sub_layout5_box1_sub1_child2_box1',
                                                                                'name' => 'dv_child_box',
                                                                                'label' => 'Dịch vụ con',
                                                                                'display' => 'row',
                                                                                'sub_fields' => array(
                                                                                    // Bat dau Field
                                                                                    array(
                                                                                        'key' => 'id_sidebar_3_0_0_sub_layout5_box1_sub1_child2_box1_sub1',
                                                                                        'label' => 'Tiêu đề menu & Link chi tiết',
                                                                                        'name' => 'tit_child',
                                                                                        'type' => 'textarea',
                                                                                        'instructions' => '
                                                                                            Dòng 1 : Tiêu đề <br>
                                                                                            Dòng 2 : Link xem tất cả
                                                                                        ',
                                                                                        'required' => 0,
                                                                                        'conditional_logic' => 0,
                                                                                        'wrapper' => array(
                                                                                            'width' => '',
                                                                                            'class' => '',
                                                                                            'id' => '',
                                                                                        ),
                                                                                        'default_value' => '',
                                                                                        'placeholder' => '',
                                                                                        'maxlength' => '',
                                                                                        'rows' => 2,
                                                                                        'new_lines' => '',
                                                                                    ),
                                                                                    // End Field Base                       
                                                                                ),
                                                                                'min' => '',
                                                                                'max' => '',
                                                                            ),
                                                                        ),
                                                                        'button_label' => 'Thêm dịch vụ con',
                                                                        'min' => '',
                                                                        'max' => '',
                                                                    ),
                                                                    // End Field Base                       
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                        ),
                                                        'button_label' => 'Thêm dịch vụ',
                                                        'min' => '',
                                                        'max' => '',
                                                    ),
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                        ),
                                        'button_label' => 'Add Row',
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '',
                            ),
                            /*END SIDEBAR 3.0.0*/

                            /*SIDEBAR 3.0.1*/
                            'id_sidebar_3_0_1' => array(
                                'key' => 'id_sidebar_3_0_1',
                                'name' => 'sidebar_3_0_1',
                                'label' => 'Sidebar Bài Tin Tức [Sidebar 3.0.1]',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/

                                    array(
                                        'key' => 'id_sidebar_3_0_1_sub',
                                        'label' => '',
                                        'name' => 'sidebar',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            'id_sidebar_3_0_1_sub_layout1' => array(
                                                'key' => 'id_sidebar_3_0_1_sub_layout1',
                                                'name' => 'sidebar_lq',
                                                'label' => 'Tin Tức Liên Quan',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    array(
                                                        'key' => 'id_sidebar_3_0_1_sub_layout1_sub1',
                                                        'label' => 'Tiêu đề',
                                                        'name' => 'title_lq',
                                                        'type' => 'text',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_sidebar_3_0_1_sub_layout1_sub2',
                                                        'label' => 'Danh Sách Bài Viết',
                                                        'name' => 'content_lq',
                                                        'type' => 'relationship',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'post_type' => '',
                                                        'taxonomy' => '',
                                                        'filters' => array(
                                                            0 => 'search',
                                                            1 => 'post_type',
                                                            2 => 'taxonomy',
                                                        ),
                                                        'elements' => '',
                                                        'min' => '',
                                                        'max' => '',
                                                        'return_format' => 'object',
                                                    ),
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            'id_sidebar_3_0_1_sub_layout3' => array(
                                                'key' => 'id_sidebar_3_0_1_sub_layout3',
                                                'name' => 'sidebar_nb',
                                                'label' => 'Tin Tức Nổi Bật',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    array(
                                                        'key' => 'id_sidebar_3_1_0_sub_layout3_sub1',
                                                        'label' => 'Tiêu đề & Link chi tiết',
                                                        'name' => 'title_nb',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                            Dòng 1 : Tiêu đề <br>
                                                            Dòng 2 : Link xem tất cả
                                                        ',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 2,
                                                        'new_lines' => '',
                                                    ),
                                                    
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            'id_sidebar_3_0_1_sub_layout4' => array(
                                                'key' => 'id_sidebar_3_0_1_sub_layout4',
                                                'name' => 'sidebar_img',
                                                'label' => 'Hình Ảnh Trước Sau',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    array(
                                                        'key' => 'id_sidebar_3_0_1_sub_layout4_box2',
                                                        'label' => 'Tiêu đề & Link chi tiết',
                                                        'name' => 'title_img',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                            Dòng 1 : Tiêu đề <br>
                                                            Dòng 2 : Link xem tất cả
                                                        ',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 2,
                                                        'new_lines' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_sidebar_3_0_1_sub_layout4_box1',
                                                        'label' => 'Hình Ảnh Trước Sau',
                                                        'name' => 'img_bf',
                                                        'type' => 'flexible_content',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'layouts' => array(
                                                            'layout_homeTitle' => array(
                                                                'key' => 'id_sidebar_3_0_1_sub_layout4_box1_sub1',
                                                                'name' => 'img_bf_box',
                                                                'label' => 'Hình Ảnh Trước Sau',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    // Bat dau Field
                                                                    array(
                                                                        'key' => 'id_sidebar_3_0_1_sub_layout4_box1_sub1_child1',
                                                                        'label' => 'Chi tiết ảnh',
                                                                        'name' => 'detail_img_bf',
                                                                        'type' => 'text',
                                                                        'instructions' => ' Dòng 1 : Link ảnh (Size 294x127 )',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'prepend' => '',
                                                                        'append' => '',
                                                                        'maxlength' => '',
                                                                    ),
                                                                    // End Field Base                       
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                        ),
                                                        'button_label' => 'Add Row',
                                                        'min' => '',
                                                        'max' => '',
                                                    ),
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                        ),
                                        'button_label' => 'Add Row',
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '',
                            ),
                            /*END SIDEBAR 3.0.1*/         
                            
                            /*SIDEBAR 3.0.2*/
                            'id_sidebar_3_0_2' => array(
                                'key' => 'id_sidebar_3_0_2',
                                'name' => 'sidebar_3_0_2',
                                'label' => 'Sidebar Cate [Sidebar 3.0.2]',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/

                                    array(
                                        'key' => 'id_sidebar_3_0_2_sub',
                                        'label' => '',
                                        'name' => 'sidebar',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            'id_sidebar_3_0_2_sub_layout1' => array(
                                                'key' => 'id_sidebar_3_0_2_sub_layout1',
                                                'name' => 'sidebar_lq',
                                                'label' => 'Tin Tức Liên Quan',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    array(
                                                        'key' => 'id_sidebar_3_0_2_sub_layout1_sub1',
                                                        'label' => 'Tiêu đề',
                                                        'name' => 'title_lq',
                                                        'type' => 'text',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_sidebar_3_0_2_sub_layout1_sub2',
                                                        'label' => 'Danh Sách Bài Viết',
                                                        'name' => 'content_lq',
                                                        'type' => 'relationship',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'post_type' => '',
                                                        'taxonomy' => '',
                                                        'filters' => array(
                                                            0 => 'search',
                                                            1 => 'post_type',
                                                            2 => 'taxonomy',
                                                        ),
                                                        'elements' => '',
                                                        'min' => '',
                                                        'max' => '',
                                                        'return_format' => 'object',
                                                    ),
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            'id_sidebar_3_0_2_sub_layout3' => array(
                                                'key' => 'id_sidebar_3_0_2_sub_layout3',
                                                'name' => 'sidebar_nb',
                                                'label' => 'Tin Tức Nổi Bật',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    array(
                                                        'key' => 'id_sidebar_3_1_0_sub_layout3_sub1',
                                                        'label' => 'Tiêu đề & Link chi tiết',
                                                        'name' => 'title_nb',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                            Dòng 1 : Tiêu đề <br>
                                                            Dòng 2 : Link xem tất cả
                                                        ',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 2,
                                                        'new_lines' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_sidebar_3_0_2_sub_layout3_sub2',
                                                        'label' => 'Danh Sách Bài Viết',
                                                        'name' => 'content_nb',
                                                        'type' => 'relationship',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'post_type' => '',
                                                        'taxonomy' => '',
                                                        'filters' => array(
                                                            0 => 'search',
                                                            1 => 'post_type',
                                                            2 => 'taxonomy',
                                                        ),
                                                        'elements' => '',
                                                        'min' => '',
                                                        'max' => '',
                                                        'return_format' => 'object',
                                                    ),
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            'id_sidebar_3_0_2_sub_layout4' => array(
                                                'key' => 'id_sidebar_3_0_2_sub_layout4',
                                                'name' => 'sidebar_img',
                                                'label' => 'Hình Ảnh Trước Sau',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    array(
                                                        'key' => 'id_sidebar_3_0_2_sub_layout4_box2',
                                                        'label' => 'Tiêu đề & Link chi tiết',
                                                        'name' => 'title_img',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                            Dòng 1 : Tiêu đề <br>
                                                            Dòng 2 : Link xem tất cả
                                                        ',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 2,
                                                        'new_lines' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_sidebar_3_0_2_sub_layout4_box1',
                                                        'label' => 'Hình Ảnh Trước Sau',
                                                        'name' => 'img_bf',
                                                        'type' => 'flexible_content',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'layouts' => array(
                                                            'layout_homeTitle' => array(
                                                                'key' => 'id_sidebar_3_0_2_sub_layout4_box1_sub1',
                                                                'name' => 'img_bf_box',
                                                                'label' => 'Hình Ảnh Trước Sau',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    // Bat dau Field
                                                                    array(
                                                                        'key' => 'id_sidebar_3_0_2_sub_layout4_box1_sub1_child1',
                                                                        'label' => 'Chi tiết ảnh',
                                                                        'name' => 'detail_img_bf',
                                                                        'type' => 'text',
                                                                        'instructions' => ' Dòng 1 : Link ảnh (Size 294x127 )',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'prepend' => '',
                                                                        'append' => '',
                                                                        'maxlength' => '',
                                                                    ),
                                                                    // End Field Base                       
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                        ),
                                                        'button_label' => 'Add Row',
                                                        'min' => '',
                                                        'max' => '',
                                                    ),
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            'id_sidebar_3_0_2_sub_layout5' => array(
                                                'key' => 'id_sidebar_3_0_2_sub_layout5',
                                                'name' => 'sidebar_banner',
                                                'label' => 'Banner',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    array(
                                                        'key' => 'id_sidebar_3_0_2_sub_layout5_box2',
                                                        'label' => 'Chi tiết banner',
                                                        'name' => 'banner',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                            Dòng 1 : Link ảnh ( Size 295x590 ) <br>
                                                            Dòng 2 : Link xem tất cả
                                                        ',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 2,
                                                        'new_lines' => '',
                                                    ),
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            'id_sidebar_3_0_2_sub_layout6' => array(
                                                'key' => 'id_sidebar_3_0_2_sub_layout6',
                                                'name' => 'sidebar_video',
                                                'label' => 'Video',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    array(
                                                        'key' => 'id_sidebar_3_0_2_sub_layout6_box2',
                                                        'label' => 'Tiêu đề & Link chi tiết',
                                                        'name' => 'title_video',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                            Dòng 1 : Tiêu đề <br>
                                                            Dòng 2 : Link xem tất cả
                                                        ',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 2,
                                                        'new_lines' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_sidebar_3_0_2_sub_layout6_box1',
                                                        'label' => 'Chi tiết video',
                                                        'name' => 'detail_video',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                            Dòng 1 : Tiêu đề video <br>
                                                            Dòng 2 : Link ảnh ( Size 610x340 ) <br>
                                                            Dòng 3 : Mô tả video <br>
                                                            Dòng 4 : Link youtube video
                                                        ',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 4,
                                                        'new_lines' => '',
                                                    ),
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            'id_sidebar_3_0_2_sub_layout7' => array(
                                                'key' => 'id_sidebar_3_0_2_sub_layout7',
                                                'name' => 'sidebar_menu',
                                                'label' => 'Menu Dịch Vụ',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    array(
                                                        'key' => 'id_sidebar_3_0_2_sub_layout7_box1',
                                                        'label' => 'Menu dịch vụ',
                                                        'name' => 'menu_dv',
                                                        'type' => 'flexible_content',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'layouts' => array(
                                                            'layout_homeTitle' => array(
                                                                'key' => 'id_sidebar_3_0_2_sub_layout7_box1_sub1',
                                                                'name' => 'menu_dv_box',
                                                                'label' => 'Menu dịch vụ',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    // Bat dau Field
                                                                    array(
                                                                        'key' => 'id_sidebar_3_0_2_sub_layout7_box1_sub1_child1',
                                                                        'label' => 'Dịch vụ chính',
                                                                        'name' => 'dv_chinh',
                                                                        'type' => 'text',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'prepend' => '',
                                                                        'append' => '',
                                                                        'maxlength' => '',
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_sidebar_3_0_2_sub_layout7_box1_sub1_child2',
                                                                        'label' => 'Dịch vụ con',
                                                                        'name' => 'dv_child',
                                                                        'type' => 'flexible_content',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'layouts' => array(
                                                                            'layout_homeTitle' => array(
                                                                                'key' => 'id_sidebar_3_0_2_sub_layout7_box1_sub1_child2_box1',
                                                                                'name' => 'dv_child_box',
                                                                                'label' => 'Dịch vụ con',
                                                                                'display' => 'block',
                                                                                'sub_fields' => array(
                                                                                    // Bat dau Field
                                                                                    array(
                                                                                        'key' => 'id_sidebar_3_0_2_sub_layout7_box1_sub1_child2_box1_sub1',
                                                                                        'label' => 'Tiêu đề menu & Link chi tiết',
                                                                                        'name' => 'tit_child',
                                                                                        'type' => 'textarea',
                                                                                        'instructions' => '
                                                                                            Dòng 1 : Tiêu đề <br>
                                                                                            Dòng 2 : Link xem tất cả
                                                                                        ',
                                                                                        'required' => 0,
                                                                                        'conditional_logic' => 0,
                                                                                        'wrapper' => array(
                                                                                            'width' => '',
                                                                                            'class' => '',
                                                                                            'id' => '',
                                                                                        ),
                                                                                        'default_value' => '',
                                                                                        'placeholder' => '',
                                                                                        'maxlength' => '',
                                                                                        'rows' => 2,
                                                                                        'new_lines' => '',
                                                                                    ),
                                                                                    // End Field Base                       
                                                                                ),
                                                                                'min' => '',
                                                                                'max' => '',
                                                                            ),
                                                                        ),
                                                                        'button_label' => 'Add Row',
                                                                        'min' => '',
                                                                        'max' => '',
                                                                    ),
                                                                    // End Field Base                       
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                        ),
                                                        'button_label' => 'Add Row',
                                                        'min' => '',
                                                        'max' => '',
                                                    ),
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                        ),
                                        'button_label' => 'Add Row',
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '',
                            ),
                            /*END SIDEBAR 3.0.2*/    
                            
                            /*SIDEBAR 3.3.0*/
                            'id_sidebar_3_3_0' => array(
                                'key' => 'id_sidebar_3_3_0',
                                'name' => 'sidebar_3_3_0',
                                'label' => 'Sidebar 3.3.0',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/

                                    array(
                                        'key' => 'id_sidebar_3_3_0_sub',
                                        'label' => 'Sidebar',
                                        'name' => 'sidebar',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            'id_sidebar_3_3_0_sub_layout1' => array(
                                                'key' => 'id_sidebar_3_3_0_sub_layout1',
                                                'name' => 'sidebar_lq',
                                                'label' => 'Bài Phát Biểu',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    array(
                                                        'key' => 'id_sidebar_3_3_0_sub_layout1_sub1',
                                                        'label' => 'Tiêu đề',
                                                        'name' => 'title_lq',
                                                        'type' => 'text',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_sidebar_3_3_0_sub_layout1_sub2',
                                                        'label' => 'Danh Sách Bài Viết',
                                                        'name' => 'content_lq',
                                                        'type' => 'relationship',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'post_type' => '',
                                                        'taxonomy' => '',
                                                        'filters' => array(
                                                            0 => 'search',
                                                            1 => 'post_type',
                                                            2 => 'taxonomy',
                                                        ),
                                                        'elements' => '',
                                                        'min' => '',
                                                        'max' => '',
                                                        'return_format' => 'object',
                                                    ),
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            'id_sidebar_3_3_0_sub_layout3' => array(
                                                'key' => 'id_sidebar_3_3_0_sub_layout3',
                                                'name' => 'sidebar_nb',
                                                'label' => 'Bài viết mới nhất',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    array(
                                                        'key' => 'id_sidebar_3_3_0_sub_layout3_sub1',
                                                        'label' => 'Tiêu đề',
                                                        'name' => 'title_nb',
                                                        'type' => 'text',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    // array(
                                                    //     'key' => 'id_sidebar_3_3_0_sub_layout3_sub2',
                                                    //     'label' => 'Danh Sách Bài Viết',
                                                    //     'name' => 'content_nb',
                                                    //     'type' => 'relationship',
                                                    //     'instructions' => '',
                                                    //     'required' => 0,
                                                    //     'conditional_logic' => 0,
                                                    //     'wrapper' => array(
                                                    //         'width' => '',
                                                    //         'class' => '',
                                                    //         'id' => '',
                                                    //     ),
                                                    //     'post_type' => '',
                                                    //     'taxonomy' => '',
                                                    //     'filters' => array(
                                                    //         0 => 'search',
                                                    //         1 => 'post_type',
                                                    //         2 => 'taxonomy',
                                                    //     ),
                                                    //     'elements' => '',
                                                    //     'min' => '',
                                                    //     'max' => '',
                                                    //     'return_format' => 'object',
                                                    // ),
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            'id_sidebar_3_3_0_sub_layout4' => array(
                                                'key' => 'id_sidebar_3_3_0_sub_layout4',
                                                'name' => 'sidebar_img',
                                                'label' => 'Hình Ảnh Trước Sau',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    array(
                                                        'key' => 'id_sidebar_3_3_0_sub_layout4_box2',
                                                        'label' => 'Tiêu đề',
                                                        'name' => 'title_img',
                                                        'type' => 'text',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_sidebar_3_3_0_sub_layout4_box1',
                                                        'label' => 'Hình ảnh',
                                                        'name' => 'images_place',
                                                        'type' => 'repeater',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'hide_admin' => 0,
                                                        'collapsed' => '',
                                                        'min' => 0,
                                                        'max' => 0,
                                                        'layout' => 'table',
                                                        'button_label' => '',
                                                        'sub_fields' => array(
                                                            array(
                                                                'key' => 'id_sidebar_3_3_0_sub_layout4_box1_sub1',
                                                                'label' => 'Link ảnh',
                                                                'name' => 'place_img',
                                                                'type' => 'text',
                                                                'instructions' => 'Size 296x180',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                            array(
                                                                'key' => 'id_sidebar_3_3_0_sub_layout4_box1_sub2',
                                                                'label' => 'Tiêu đề ảnh',
                                                                'name' => 'place_title',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                        ),
                                                    ),
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            'id_sidebar_3_3_0_sub_layout5' => array(
                                                'key' => 'id_sidebar_3_3_0_sub_layout5',
                                                'name' => 'sidebar_video',
                                                'label' => 'Video',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    array(
                                                        'key' => 'id_sidebar_3_3_0_sub_layout5_box2',
                                                        'label' => 'Tiêu đề',
                                                        'name' => 'title_vd',
                                                        'type' => 'text',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'hide_admin' => 0,
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_sidebar_3_3_0_sub_layout5_box1',
                                                        'label' => 'Thông tin video',
                                                        'name' => 'title_video',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                            Dòng 1 : Tiêu đề video <br>
                                                            Dòng 2 : Link ảnh video <br>
                                                            Dòng 3 : Link youtube
                                                        ',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 3,
                                                        'new_lines' => '',
                                                    ),
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            'id_sidebar_3_3_0_sub_layout6' => array(
                                                'key' => 'id_sidebar_3_3_0_sub_layout6',
                                                'name' => 'sidebar_dichvu',
                                                'label' => 'Các dịch vụ',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    array(
                                                        'key' => 'id_sidebar_3_3_0_sub_layout6_box1',
                                                        'label' => 'Tiêu đề',
                                                        'name' => 'title',
                                                        'type' => 'text',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'hide_admin' => 0,
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_sidebar_3_3_0_sub_layout6_box2',
                                                        'label' => 'Dịch vụ',
                                                        'name' => 'dichvu_place',
                                                        'type' => 'repeater',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'hide_admin' => 0,
                                                        'collapsed' => '',
                                                        'min' => 0,
                                                        'max' => 0,
                                                        'layout' => 'table',
                                                        'button_label' => '',
                                                        'sub_fields' => array(
                                                            array(
                                                                'key' => 'id_sidebar_3_3_0_sub_layout6_box1_lay1',
                                                                'label' => 'Tên dịch vụ',
                                                                'name' => 'place_namedv',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                            array(
                                                                'key' => 'id_sidebar_3_3_0_sub_layout6_box1_lay2',
                                                                'label' => 'Link Url',
                                                                'name' => 'place_url',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                        ),
                                                    ),
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                        ),
                                        'button_label' => 'Add Row',
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '',
                            ),
                            /*END SIDEBAR 3.3.0*/

                        // End Module
                        ),
                        'button_label' => 'Thêm Module',
                        'min' => '',
                        'max' => '',
                    ),
                               
                    array(      
                        'key' => 'group_page_field_site',
                        'label' => 'Cài đặt Website',
                        'name' => '',
                        'type' => 'tab',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'group_admin',
                                    'operator' => '==',
                                    'value' => 'show_module_site',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'placement' => 'top',
                        'endpoint' => 0,
                    ),
                    array(
                        'key' => 'site_custom',
                        'label' => '',
                        'name' => 'site_custom',
                        'type' => 'flexible_content',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'group_admin',
                                    'operator' => '==',
                                    'value' => 'show_module_site',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'layouts' => array(
                        // Bat dau Module

                            /*CHECKING*/
                            'checking' => array(
                                'key' => 'checking',
                                'name' => 'checking',
                                'label' => 'Checking Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    
                                    array(
                                        'key' => 'checking_sub_fields',
                                        'label' => '',
                                        'name' => 'checking_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                            /*HEADER CHECKING 1.0.0*/
                                            'id_h_checking_1_0_0' => array(
                                                'key' => 'id_h_checking_1_0_0',
                                                'name' => 'h_checking_1_0_0',
                                                'label' => 'H-Checking 1.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        /* Tab tiêu đề*/
                                                        'key' => 'id_h_checking_1_0_tab1',
                                                        'label' => 'Tiêu Đề',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_h_checking_1_0_tab1_sub',
                                                        'label' => 'Code',
                                                        'name' => 'data',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 10,
                                                        'new_lines' => '',
                                                    ),
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END HEADER CHECKING 1.0.0*/

                                            /*CHECKING SITE 1.0.0*/
                                            'id_checking_site_1_0_0' => array(
                                                'key' => 'id_checking_site_1_0_0',
                                                'name' => 'checking_site_1_0_0',
                                                'label' => 'Checking Site 1.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_checking_site_1_0_0_sub',
                                                        'label' => 'Code',
                                                        'name' => 'data',
                                                        'type' => 'textarea',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 10,
                                                        'new_lines' => '',
                                                    ),
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END CHECKING SITE 1.0.0*/

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Module',
                                        'min' => '',
                                        'max' => '',
                                    ),                     
                                ),
                                'min' => '',
                                'max' => '',
                            ),
                            /*END CHECKING*/  


                            /*POPUP */
                            'post_config' => array(
                                'key' => 'post_config',
                                'name' => 'post_config',
                                'label' => 'post_config',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'post_config_sub_fields',
                                        'label' => '',
                                        'name' => 'post_config_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module
                                            
                                            'id_post_CTA_2_0_0' => array(
                                                'key' => 'id_post_CTA_2_0_0',
                                                'name' => 'post_CTA_2_0_0',
                                                'label' => 'CTA Dịch Vụ [post_CTA 2.0.0]',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                        array(
                                                            'key' => 'id_post_CTA_2_0_0_sub1',
                                                            'label' => 'Chi tiết',
                                                            'name' => 'button',
                                                            'type' => 'textarea',
                                                            'instructions' => '
                                                                Dòng 1 : Nội dung mô tả <br>
                                                                Dòng 2 : Tên CTA (VD: Nhận Ưu ĐÃi) <br>
                                                                Dòng 3 : Link LDP/Website <br>
                                                            ',
                                                            'required' => 0,
                                                            'conditional_logic' => 0,
                                                            'wrapper' => array(
                                                                'width' => '',
                                                                'class' => '',
                                                                'id' => '',
                                                            ),
                                                            'default_value' => '',
                                                            'placeholder' => '',
                                                            'maxlength' => '',
                                                            'rows' => 4,
                                                            'new_lines' => '',
                                                        ),    
                                            
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*BANNER 1.0.1*/
                                            'id_banner_1_0_1' => array(
                                                'key' => 'id_banner_1_0_1',
                                                'name' => 'banner_1_0_1',
                                                'label' => 'Banner 1.0.1',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    array(
                                                        'key' => 'id_banner_1_0_1_subsub',
                                                        'label' => 'Chi tiết',
                                                        'name' => 'banner_content',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                            Dòng 1 : Tên Banner <br>
                                                            Dòng 2 : Link ảnh pc<br>
                                                            Dòng 3 : Link ảnh mb <br>
                                                            Dòng 4 : Link LDP/Website <br>
                                                        ',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 4,
                                                        'new_lines' => '',
                                                    ),  
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END BANNER 1.0.1*/

                                            /*POPUP ADV SITE 1.0.1*/
                                            'id_popup_advsite_1_0_1' => array(
                                                'key' => 'id_popup_advsite_1_0_1',
                                                'name' => 'popup_advsite_1_0_1',
                                                'label' => 'Popup Advsite 1.0.1',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        /* Tab tiêu đề*/
                                                        'key' => 'id_popup_advsite_1_0_1_tab1',
                                                        'label' => 'Popup Site',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_popup_advsite_1_0_1_tab1_sub',
                                                        'label' => 'Cập nhật POPUP theo chỉ dẫn',
                                                        'name' => 'data',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                            Dòng 1 : Tiêu đề Popup <br>
                                                            Dòng 2 : Link ảnh hiển thị (645px x 450px) <br>
                                                            Dòng 3 : Link Popup
                                                        ',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'maxlength' => '',
                                                        'rows' => 3,
                                                        'new_lines' => '',
                                                    ),
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END POPUP ADV SITE 1.0.1*/

                           
                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Popup',
                                        'min' => '',
                                        'max' => '',
                                    ),                     
                                ),
                                'min' => '',
                                'max' => '2',
                            ),
                            /*END POPUP */

                            /*PLACE */
                            'place' => array(
                                'key' => 'place',
                                'name' => 'place',
                                'label' => 'Chi Nhánh',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'place_sub_fields',
                                        'label' => '',
                                        'name' => 'place_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                             /*INFO 4.0.0*/
                                             'id_info_4_0_0' => array(
                                                'key' => 'id_info_4_0_0',
                                                'name' => 'info_4_0_0',
                                                'label' => 'Info 4.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        /* Tab tiêu đề*/
                                                        'key' => 'id_info_4_0_0_tab1',
                                                        'label' => 'Liên Hệ',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_info_4_0_0_tab1_sub1',
                                                        'label' => 'Tiêu đề',
                                                        'name' => 'img_tit1',
                                                        'type' => 'text',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_info_4_0_0_tab1_sub2',
                                                        'label' => 'Thông tin liên hệ',
                                                        'name' => 'info_info',
                                                        'type' => 'flexible_content',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'layouts' => array(
                                                            'layout_homeTitle' => array(
                                                                'key' => 'id_info_4_0_0_tab1_sub2_layout1',
                                                                'name' => 'info_info_box',
                                                                'label' => 'Thông tin liên hệ',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    // Bat dau Field
                                                                    array(
                                                                        'key' => 'id_info_4_0_0_tab1_sub2_layout1_box1',
                                                                        'label' => 'Chi tiết',
                                                                        'name' => 'detail_lh',
                                                                        'type' => 'textarea',
                                                                        'instructions' => '
                                                                            Dòng 1 : Tiêu đề <br>
                                                                            Dòng 2 : Thông tin <br>
                                                                            Dòng 3 : Tiêu đề Button <br>
                                                                            Dòng 4 : Link ảnh icon ( Size 38x38 ) <br>
                                                                            Dòng 5 : Link xem chi tiết
                                                                        ',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'maxlength' => '',
                                                                        'rows' => 5,
                                                                        'new_lines' => '',
                                                                    ),

                                                                    // End Field Base                       
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                        ),
                                                        'button_label' => 'Thêm Dịch Vụ',
                                                        'min' => '',
                                                        'max' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_info_4_0_0_tab2',
                                                        'label' => 'Hệ Thống Chi Nhánh',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_info_4_0_0_tab2_sub1',
                                                        'label' => 'Tiêu đề',
                                                        'name' => 'img_tit2',
                                                        'type' => 'text',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_info_4_0_0_tab2_sub2',
                                                        'label' => 'Hệ thống chi nhánh',
                                                        'name' => 'info_info1',
                                                        'type' => 'flexible_content',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'layouts' => array(
                                                            'layout_homeTitle' => array(
                                                                'key' => 'id_info_4_0_0_tab2_sub2_layout1',
                                                                'name' => 'info_info1_box',
                                                                'label' => 'Hệ thống chi nhánh',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    // Bat dau Field
                                                                    array(
                                                                        'key' => 'id_info_4_0_0_tab2_sub2_layout1_box3',
                                                                        'label' => 'Thông tin chung chi nhánh theo vùng miền',
                                                                        'name' => 'detail_cn',
                                                                        'type' => 'text',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'placeholder' => '',
                                                                        'prepend' => '',
                                                                        'append' => '',
                                                                        'maxlength' => '',
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_info_4_0_0_tab2_sub1_layout1_box2',
                                                                        'label' => 'Chi tiết chi nhánh',
                                                                        'name' => 'time_info',
                                                                        'type' => 'flexible_content',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'layouts' => array(
                                                                            'layout_homeTitle' => array(
                                                                                'key' => 'id_info_4_0_0_tab2_sub1_layout1_box2_sub1',
                                                                                'name' => 'time_info_box',
                                                                                'label' => 'Chi tiết chi nhánh',
                                                                                'display' => 'block',
                                                                                'sub_fields' => array(
                                                                                    // Bat dau Field
                                                                                    array(
                                                                                        'key' => 'id_info_4_0_0_tab2_sub1_layout1_box2_sub1_child1',
                                                                                        'label' => 'Chi nhánh',
                                                                                        'name' => 'info_cn',
                                                                                        'type' => 'textarea',
                                                                                        'instructions' => '
                                                                                            Dòng 1 : Thành phố <br>
                                                                                            Dòng 2 : Địa điểm <br>
                                                                                            Dòng 3 : Link ảnh PC ( Size 670x362 ) <br>
                                                                                            Dòng 4 : Link ảnh MB ( Size 400x325 ) <br>
                                                                                            Dòng 5 : Link google map
                                                                                        ',
                                                                                        'required' => 0,
                                                                                        'conditional_logic' => 0,
                                                                                        'wrapper' => array(
                                                                                            'width' => '',
                                                                                            'class' => '',
                                                                                            'id' => '',
                                                                                        ),
                                                                                        'default_value' => '',
                                                                                        'placeholder' => '',
                                                                                        'maxlength' => '',
                                                                                        'rows' => 5,
                                                                                        'new_lines' => '',
                                                                                    ),
                                                                                    // End Field Base                       
                                                                                ),
                                                                                'min' => '',
                                                                                'max' => '',
                                                                            ),
                                                                        ),
                                                                        'button_label' => 'Thêm Dịch Vụ',
                                                                        'min' => '',
                                                                        'max' => '',
                                                                    ),
                                                                    // End Field Base                       
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                        ),
                                                        'button_label' => 'Thêm Dịch Vụ',
                                                        'min' => '',
                                                        'max' => '',
                                                    ),

                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END INFO 4.0.0*/

                                            /*INFO 4.1.0*/
                                            'id_info_4_1_0' => array(
                                                'key' => 'id_info_4_1_0',
                                                'name' => 'info_4_1_0',
                                                'label' => 'Info 4.1.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        /* Tab tiêu đề*/
                                                        'key' => 'id_info_4_1_0_tab1',
                                                        'label' => 'Thông Tin',
                                                        'name' => '',
                                                        'type' => 'tab',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'placement' => 'top',
                                                        'endpoint' => 0,
                                                    ),
                                                    array(
                                                        'key' => 'id_info_4_1_0_tab1_sub1',
                                                        'label' => 'Thông Tin',
                                                        'name' => 'info_place',
                                                        'type' => 'repeater',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'hide_admin' => 0,
                                                        'collapsed' => '',
                                                        'min' => 0,
                                                        'max' => 0,
                                                        'layout' => 'table',
                                                        'button_label' => '',
                                                        'sub_fields' => array(
                                                            array(
                                                                'key' => 'id_info_4_1_0_tab1_sub1_layout1',
                                                                'label' => 'Thông tin chi tiết',
                                                                'name' => 'detail_place',
                                                                'type' => 'textarea',
                                                                'instructions' => '
                                                                    Dòng 1 : Tiêu đề<br>
                                                                    Dòng 2 : Mô tả<br>
                                                                    Dòng 3 : Tiêu đề nút<br>
                                                                    Dòng 4 : Link ảnh icon ( size 43x48 )
                                                                ',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'maxlength' => '',
                                                                'rows' => 4,
                                                                'new_lines' => '',
                                                            ),
                                                        ),
                                                    ),

                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END INFO 3.1.0*/

   
                                            // End Module
                                        ),
                                        'button_label' => 'Thêm place',
                                        'min' => '',
                                        'max' => '1',
                                    ),                     
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END PLACE */
                        
                        // End Module                                    
                        ),
                        'button_label' => 'Thêm Module',
                        'min' => '',
                        'max' => '',
                    ),   

                    array(      
                        'key' => 'group_page_field_landing',
                        'label' => 'Cài đặt Landing',
                        'name' => '',
                        'type' => 'tab',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'group_admin',
                                    'operator' => '==',
                                    'value' => 'show_module_landing',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'placement' => 'top',
                        'endpoint' => 0,
                    ),

                    array(
                        'key' => 'landing_custom',
                        'label' => '',
                        'name' => 'landing_custom',
                        'type' => 'flexible_content',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'group_admin',
                                    'operator' => '==',
                                    'value' => 'show_module_landing',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'layouts' => array(
                        // Bat dau Module


                        
                        // End Module                                    
                        ),
                        'button_label' => 'Thêm Module',
                        'min' => '',
                        'max' => '',
                    ),                    
                  
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page',
                ),
            ),
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                ),
            ),
            array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'theme-general-settings',
				),
			),
            array(
                array(
                    'param' => 'taxonomy',
                    'operator' => '==',
                    'value' => 'category',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 1,
    ));
    endif;
?>