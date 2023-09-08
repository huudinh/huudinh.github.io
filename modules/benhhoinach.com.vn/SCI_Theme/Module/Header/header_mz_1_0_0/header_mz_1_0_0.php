<style>
    :root {
        --primary-color:<?php echo $field['theme'] ?>;
    }
</style>
<header class="header_mz_1_0_0">
    <div class="container">
        <div class="header_mz_1_0_0__box">
            <div class="header_mz_1_0_0__nav" id="headerMenuBtn">
                <img width="30" height="25" src="<?php echo $path ?>images/icon-menu.svg" alt="menu">
            </div>
            <?php
                $info = explode("\n", $field['info']);

                $postId = get_the_ID();
                //if($postId == $info[1]){
                if ( is_page_template( 'templates/page_home.php' ) ) {
                    $div = 'h1';
                } else {
                    $div = 'div';
                }
                echo '
                    <'.$div.' class="header_mz_1_0_0__logoTitle">
                        <a href="/" class="header_mz_1_0_0__logoTitle">'.$info[0].'</a>
                    </'.$div.'>
                ';
            ?>
            <div class="header_mz_1_0_0__menu">
                <ul class="header_mz_1_0_0__menuMain" id="headerSideBar">
                    <li class="header_mz_1_0_0__logoTitle header_mz_1_0_0__logoTitle--mb"><?php echo $info[0] ?></li>
                    <li class="header_mz_1_0_0__menuItem">
                        <a class="header_mz_1_0_0__link" href="/">Trang chủ</a>
                    </li>
                    <?php
                        foreach( $field as $key => $value){
                            foreach($value as $key2 => $list){
                                if( $list['acf_fc_layout'] == 'menu_don' ):
                                    $main_tt = explode(" | ",  $list["title"]);
                                    echo '
                                        <li class="header_mz_1_0_0__menuItem">
                                            <a class="header_mz_1_0_0__link" href="'.$main_tt[1].'">'.$main_tt[0].'</a>
                                        </li>
                                    ';
                                elseif( $list['acf_fc_layout'] == 'menu_sub' ):
                                    $main_tt = explode(" | ",  $list["title"]);
                                    echo '
                                        <li class="header_mz_1_0_0__menuItem">
                                            <div class="header_mz_1_0_0__link">'.$main_tt[0].' <i class="header_mz_1_0_0__iconDown"></i></div>
                                            <div class="header_mz_1_0_0__dropdown">
                                                '.$list["col1"].'
                                            </div>
                                        </li>
                                    ';
                                // elseif ( $list['acf_fc_layout'] == 'menu_sub_full' ):
                                //     $main_tt = explode(" | ",  $list["title"]);
                                //     $main_ct = explode("&nbsp;",  $list["col1"]);
                                //     echo '
                                //         <div class="header_lhl_1_0_0__menuItem haveDropdown">
                                //             <a class="header_lhl_1_0_0__menuTitle" href="'.$main_tt[1].'">'.$main_tt[0].'</a>
                                //             <div class="header_lhl_1_0_0__dropdown">
                                //                 <div class="header_lhl_1_0_0__dropdownBox">
                                //     ';
                                //         foreach($main_ct as $num => $value){
                                //             echo '
                                //                 <div class="header_lhl_1_0_0__dropdownCate">
                                //                     '.$value.'
                                //                 </div>
                                //             ';
                                //         }
                                //     echo '
                                //                 </div>
                                //             </div>
                                //         </div>
                                //     ';
                                endif;
                            }
                        }
                    ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="header_mz_1_0_0__bg" id="headerBg"></div>
</header>