<?php
/**
 * Plugin Name: Hello Spaceman
 * Plugin URI: https://github.com/lukecav/hello-space-man/
 * Description: A simple plugin which replaces the Howdy wording in the admin bar to be reflective of everyone's favorite space man.
 * Author: Luke Cavanagh
 * Author URI: https://github.com/lukecav/hello-space-man/
 * Version: 1.0
 * License: GPL2
 *
 */
function replace_howdy( $wp_admin_bar ) {
 $my_account=$wp_admin_bar->get_node('my-account');
 $newtitle = str_replace( 'Howdy,', 'Hello, Spaceman!', $my_account->title );
 $wp_admin_bar->add_node( array(
 'id' => 'my-account',
 'title' => $newtitle,
 ) );
 }
 add_filter( 'admin_bar_menu', 'replace_howdy',25 );
