<?php
// this is the uninstall handler
// include unregister_setting, delete_option, and other uninstall behavior here

require_once('wp-plugin.php');

function uninstall_options($name) {
    unregister_setting("${name}_group", $name);
    SC_WPPlugin::remove_options($name);
}

// spamcaptcher
uninstall_options('spamcaptcher_options');

?>