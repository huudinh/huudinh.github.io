<?php
	$myOptions = get_option('MyOptionsConfig');

	$pattern = '/onclick="(.*?);"/';
	$replace = "onclick='$1;'";

	$footer=preg_replace($pattern,$replace, str_replace("&#039;","\"",$myOptions['footer']));
	$tracking=preg_replace($pattern,$replace, str_replace("&#039;","\"",$myOptions['tracking']));
	// $module=preg_replace($pattern,$replace, str_replace("&#039;","\"",$myOptions['module']));
?>

<?php 
	if (shortcode_exists('sc')) {
		echo do_shortcode('[sc name="seo_knbm_1_0_0"][/sc]');
		echo do_shortcode('[sc name="tool_knbm_1_0_0"][/sc]');
	} 

	if(html_entity_decode($footer)){
		echo html_entity_decode($footer); 
	}
?>

</body>
<?php  
	wp_footer();  
	include(locate_template('options/theme_js.php')); 
?> 

<?php 
	if(html_entity_decode($tracking)): 
		$data = explode("\n", html_entity_decode($tracking));
		$gaId = $data[0];
?>
<script>
	function gaInit(){
        // Tạo thẻ script
        const scriptTag = document.createElement("script");
        scriptTag.async = true;
        scriptTag.src = "https://www.googletagmanager.com/gtag/js?id=<?php echo $gaId;  ?>";
    
        // Thêm thẻ script vào cuối body
        document.body.appendChild(scriptTag);
    
        // Tạo mã JavaScript để cấu hình Google Analytics
        const scriptConfig = document.createElement("script");
        scriptConfig.textContent = `
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', '<?php echo $gaId ?>');
        `;
    
        // Thêm mã cấu hình vào cuối body
        document.body.appendChild(scriptConfig);

    }
	setTimeout(() => {
        gaInit();     
    }, 3000); // 3 giây
</script>

<?php endif; ?>

