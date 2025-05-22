<?php
	//set headers to NOT cache a page
	header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
	header("Pragma: no-cache"); //HTTP 1.0
	header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
	//or, if you DO want a file to cache, use:
	header("Cache-Control: max-age=31557600"); //30days (60sec  60min  24hours * 30days)
?>

<?php
	$myOptions = get_option('MyOptionsConfig');

	$pattern = '/onclick="(.*?);"/';
	$replace = "onclick='$1;'";

	$header=preg_replace($pattern,$replace, str_replace("&#039;","\"",$myOptions['header']));
	$module=preg_replace($pattern,$replace, str_replace("&#039;","\"",$myOptions['module']));
?>

<!DOCTYPE html>
<html lang="vi">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3">	
	<meta name="facebook-domain-verification" content="dl3nkzqisijlbsmieelv7wolomf1lw" />
	<link type="image/x-icon" rel="shortcut icon" href="/wp-content/themes/SCI_Theme/Module/assets/images/favicon.png?v=1">
	<?php 
	  if(is_search()){
		echo '<meta name="googlebot" content="noindex">'; } 
	?>
	<title><?php wp_title(); ?></title>
	<?php 
		wp_head();
		// if (current_user_can('editor')) {
		// 	echo '<style>#wp-admin-bar-wp-rocket{display:none}</style>';
		// } 
	?>

	<style>
		<?php include(locate_template('options/theme_css.php')); ?>
	</style>
	<?php
		// Gọi Module
		if(html_entity_decode($module)){
			$data = explode("\n", html_entity_decode($module));
			$module_home = explode(' | ', $data[0]);
			$module_all = explode(' | ', $data[1]);
			
			// Remove whitespace from each element
			$module_home = array_map('trim', $module_home);
			$module_all = array_map('trim', $module_all);

			// Gọi Module Home
			if(!empty($module_home) && is_page_template( 'templates/page_canvas.php' )){
				foreach($module_home as $field){
					include(locate_template('Module/Home/'.$field.'/'.$field.'.php'));
				}
			}

			// Gọi Module All
			if(!empty($module_all)){
				foreach($module_all as $field){
					include(locate_template('Module/Home/'.$field.'/'.$field.'.php'));
				}
			}
		}
	?>

</head>
<body>

<?php // get_template_part('Module/module_header'); ?>

<?php 
	if(html_entity_decode($header)){
		echo html_entity_decode($header); 
	}
?> 
