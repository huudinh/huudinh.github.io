<?php
add_action('admin_menu', 'OS_plugin_menu_config');

function OS_plugin_menu_config()
{
    add_menu_page('Cấu hình website', 'Cấu hình website', 'manage_options', 'web_config', 'OS_plugin_options_config');
}

function OS_plugin_options_config() {
    if (isset($_POST['options_web']) && $_POST['options_web']) {
        $myNewOptions = array(
            'header'   => esc_html($_POST['header']),
            'footer'   => esc_html($_POST['footer']),
            'sidebar'  => esc_html($_POST['sidebar']),
            'tracking' => esc_html($_POST['tracking']),
            'module'   => esc_html($_POST['module']),
        );
		update_option('MyOptionsConfig', wp_unslash($myNewOptions));

    }

    $bg = get_option('MyOptionsConfig', [
        'header' => '',
        'footer' => '',
        'sidebar' => '',
        'tracking' => '',
        'module' => ''
    ]);

    echo "<h1>Cấu Hình Website</h1><form action='' method='post'>
        <h2>Header</h2>
		<p class='dbdb'>Code HTML</p>
        <textarea id='header' name='header'>" . $bg['header'] . "</textarea><br />
        <h2>Footer</h2>
		<p class='dbdb'>Code HTML</p>
        <textarea id='footer' name='footer'>" . $bg['footer'] . "</textarea><br />
        <h2>Sidebar</h2>
		<p class='dbdb'>Code HTML</p>
        <textarea id='sidebar' name='sidebar'>" . $bg['sidebar'] . "</textarea><br />
        <h2>Tracking</h2>
		<p class='dbdb'>Mã GA</p>
        <textarea id='tracking' name='tracking'>" . $bg['tracking'] . "</textarea><br />
        <h2>Module</h2>
		<p class='dbdb'>Dòng 1: Module Header - Footer - All | Dòng 2: Module Home | Dòng 3: Shortcode</p>
        <textarea id='module' name='module'>" . $bg['module'] . "</textarea><br />
        <input style='margin-top:5px' class='button button-primary' type='submit' name='options_web' value='Submit'>
    </form>

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/codemirror.min.css' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/theme/neat.min.css' />
    <script src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/codemirror.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/mode/javascript/javascript.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/addon/edit/closebrackets.min.js'></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            ['header', 'footer', 'sidebar', 'tracking', 'module'].forEach(id => {
                CodeMirror.fromTextArea(document.getElementById(id), {
                    mode: 'javascript',
                    lineNumbers: true,
                    theme: 'neat', // Sử dụng theme tối phù hợp với hình ảnh của bạn
                    autoCloseBrackets: true
                });
            });
        });
    </script>
	<style>
		.CodeMirror {
			line-height: 1.5em;
			font-size: 14px;
		}
		.cm-s-neat span.cm-variable {
			color: #170;
		}
		.CodeMirror pre.CodeMirror-line, .CodeMirror pre.CodeMirror-line-like{
			color: #170;
		}
		.cm-s-neat span.cm-keyword {
			color: #00c;
			font-weight:normal;
		}
		.cm-s-neat span.cm-string {
			color: #a11;
		}
		.dbdb {
			font-size: 12px;
			padding: 0 0 5px 0px;
			margin: -10px 0 10px 2px;
			color: #666;
		}
	</style>
	";
}
