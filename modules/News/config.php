<?php
define('WP_DEBUG', false); 
define('WP_DEBUG_LOG', false); 
define('WP_DEBUG_DISPLAY', false); 
@ini_set('display_errors', 0);

// Cách tắt cập nhật WordsPress
define( 'WP_AUTO_UPDATE_CORE', false );

//Khong cho edit theme
define( 'DISALLOW_FILE_EDIT', false );

//Disable updating everything for WordPress
define( 'DISALLOW_FILE_MODS', true );
define( 'AUTOMATIC_UPDATER_DISABLED', true );

