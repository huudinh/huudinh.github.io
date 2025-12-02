<?php
	//set headers to NOT cache a page
	header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
	header("Pragma: no-cache"); //HTTP 1.0
	header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
	//or, if you DO want a file to cache, use:
	header("Cache-Control: max-age=31557600"); //30days (60sec  60min  24hours * 30days)
?>

<!DOCTYPE html>
<html lang="vi">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link type="image/x-icon" rel="shortcut icon" href="/wp-content/themes/SCI_Theme/Module/assets/images/favicon.png">
	<?php 
	  if(is_search()){
		echo '<meta name="googlebot" content="noindex">'; } 
	?>
	<title><?php wp_title() ?></title>
	<?php wp_head(); ?>
	<?php 
	// fix duplicate listing add noindex automatically to date, author and tag archives
	// if($paged > 1 || is_author() || is_tag() || is_date() || is_attachment()){
	// 	echo '<meta name="robots" content="noindex,nofollow" />'; } 
	?>

    <style>
        <?php include(locate_template('options/theme_css.php')); ?>
    </style>
	
</head>
<body class="site">
<div class="page">			
<?php 
	get_template_part('Module/module_header'); 
?>