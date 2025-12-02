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
                $tag = is_page_template('templates/page_home.php') ? 'h1' : 'div';
                echo '
                    <'.$tag.' class="header_mz_1_0_0__logoTitle">
                        <a href="/" class="header_mz_1_0_0__logoTitle">'.$info[0].'</a>
                    </'.$tag.'>
                ';
            ?>

            <div class="header_mz_1_0_0__menu">
                <ul class="header_mz_1_0_0__menuMain" id="headerSideBar">
                    <li class="header_mz_1_0_0__logoTitle header_mz_1_0_0__logoTitle--mb"><?php echo $info[0] ?></li>
                    <li class="header_mz_1_0_0__menuItem">
                        <a class="header_mz_1_0_0__link" href="/">Trang chủ</a>
                    </li>
                    <?php
                    if (is_array($field) || is_object($field)) {
                        foreach( $field['id_header_mz_1_0_0_sub1'] as $list){
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
<script>
    <?php include(locate_template('Module/Header/header_mz_1_0_0/js/header_mz_1_0_0.min.js'));  ?>
</script>