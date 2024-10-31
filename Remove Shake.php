<?php
/*
Plugin Name: Remove Wrong Password Shake
Plugin URI: http://lamp.sangkrit.net/
Description: Disable screen shake when entered wrong password in login page.
Version: 0.1
Author: Shardul Pandey
Author URI: http://sangkrit.net/shardul

License: GPLv2 or later
*/

function my_login_head() {
	remove_action('login_head', 'wp_shake_js', 12);
}
add_action('login_head', 'my_login_head');