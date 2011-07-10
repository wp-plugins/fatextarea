<?php
/*
Plugin Name: fatextarea
Plugin URI: http://www.yonadi.com
Description: change textarea from rtl to ltr .
Version: 1.0
Author: abdolmajed shah bakhsh ( ijbari )
Author URI: http://www.yonadi.com/
*/
function addHeaderCode_fatextarea() {
		echo "\n".'<!-- Start fatextarea by abdolmajed -->'."\n";
		echo '<style type="text/css">' . "\n";
		echo ' textarea {direction:ltr;}' . "\n";
		echo '</style>'."\n";
		echo '<!-- Stop fatextarea by http://yonadi.com -->'."\n";
}
add_action('admin_head' , 'addHeaderCode_fatextarea');
?>