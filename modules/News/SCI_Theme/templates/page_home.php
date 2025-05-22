<?php 
	/* Template Name: Page Home
	* Template Post Type: page
    */       
// Custom thông báo bảo trì
// if (!is_user_logged_in()){
// 	echo '<div style="text-align:center; padding: 50px 0; min-height: 500px;">Website đang trong quá trình bảo trì, vui lòng quay lại sau !
// 		Rất xin lỗi vì sự bất tiện này !</div>
// 	';
// 	exit();
// } 
//set headers to NOT cache a page
header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
header("Pragma: no-cache"); //HTTP 1.0
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past

//or, if you DO want a file to cache, use:
header("Cache-Control: max-age=31557600"); //30days (60sec  60min  24hours * 30days)

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        if (current_user_can('administrator') || current_user_can('editor')) {
        wp_admin_bar_render();
        echo '
            <meta name="robots" content="noindex,follow"/>
            <link id="pagestyle" rel="stylesheet" type="text/css" href="/wp-includes/css/admin-bar.min.css?ver=4.9.10" />
            <link id="pagestyle" rel="stylesheet" type="text/css" href="/wp-includes/css/dashicons.min.css?ver=4.9.10" />
        ';
        }
    ?>
    <meta charset="UTF-8">
	<link type="image/x-icon" rel="shortcut icon" href="/wp-content/themes/SCI_Theme/Module/assets/images/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title() ?></title>
    <?php wp_head(); ?>

    <style>
        <?php include(locate_template('options/theme_css.php')); ?>
    </style>

</head>

<body>
    <div class="page">
        <?php 
            get_template_part('Module/Control/module_header'); 
            get_template_part('Module/Control/module');	
            get_template_part('Module/Control/module_footer');    
        ?>
    </div>
    <div id="loading"></div>
    
    <?php include(locate_template('options/code_tracking.php')); ?>

    <script>
        <?php include(locate_template('options/theme_js.php')); ?>
    </script>
    
</body>