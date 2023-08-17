<?php
    // Home Page
    if(is_home() || is_front_page()) {
        include(locate_template('Module/assets/js/tiny-slider.min.js')); 
    } 
    // All Page
    include(locate_template('Module/assets/js/lib.min.js')); 
    include(locate_template('Module/assets/js/module.min.js')); 
    include(locate_template('Module/Header/header_mz_1_0_0/js/header_mz_1_0_0.min.js')); 
?>