<?php
add_action('admin_menu', 'OS_plugin_menu_config');

function OS_plugin_menu_config()
{
    add_menu_page('Cấu hình website', 'Cấu hình website', 'manage_options', 'web_config', 'OS_plugin_options_config');
}

function OS_plugin_options_config()
{
    if (isset($_POST['options_web']) && $_POST['options_web']) {
        $ar1          = array('\"', "\'");
        $ar2          = array("'", "'");
        $myNewOptions = array(
            'header'   => esc_html(str_replace($ar1, $ar2, $_POST['header'])),
            'footer'    => esc_html(str_replace($ar1, $ar2, $_POST['footer'])),
            'sidebar'       => esc_html(str_replace($ar1, $ar2, $_POST['sidebar'])),
            'tracking'       => esc_html(str_replace($ar1, $ar2, $_POST['tracking'])),
            'module'       => esc_html(str_replace($ar1, $ar2, $_POST['module'])),
        );

        update_option('MyOptionsConfig', $myNewOptions);
    }

    $bg = get_option('MyOptionsConfig');

	if (!is_array($bg)) {
		$bg = [
			'header' => '',
			'footer' => '',
			'sidebar' => '',
			'tracking' => '',
			'module' => ''
		]; // Gán giá trị mặc định nếu dữ liệu không hợp lệ
	}

    echo "<h1>Cấu Hình Website</h1><form action='' method=post>
	<h2>Header</h2>
		<div class='dbdb'>Code HTML</div>
		<textarea placeholder='' class='textarea_menu' class='textfull' name='header'>" . $bg['header'] . "</textarea><br />
	<h2>Footer</h2>
		<div class='dbdb'>Code HTML</div>
		<textarea placeholder='' class='textarea_menu' class='textfull' name='footer'>" . $bg['footer'] . "</textarea><br />
	<h2>Sidebar</h2>
		<div class='dbdb'>Code HTML</div>
		<textarea placeholder='' class='textarea_menu' class='textfull' name='sidebar'>" . $bg['sidebar'] . "</textarea><br />
	<h2>Tracking</h2>
		<div class='dbdb'>Mã GA</div>
		<textarea placeholder='' class='textarea_menu' class='textfull' name='tracking'>" . $bg['tracking'] . "</textarea><br />
	<h2>Module</h2>
		<div class='dbdb'>Dòng 1: Module Home | Dòng 2: Module Header - Footer - All | Dòng 3: Shortcode</div>
		<textarea placeholder='' class='textarea_menu' class='textfull' name='module'>" . $bg['module'] . "</textarea><br />
		<input style='margin-top:5px' class='button button-primary' type=submit name=options_web value=Submit>
</form>

<style>.dbdb{float: left;width: 100%;font-weight:normal;font-size:12px;padding:5px 0px;} .textarea_menu{height: 200px;width: 98%}</style> ";
} 