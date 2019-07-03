<?php
/*
 * @package SSFPlugin
 */
/*
 Plugin Name: SSF Plugin
 Plugin URI: https://84.83.80.186/wordpress
 Description: ...
 Version: 1.0.0
 Author: ...
 Author URI: https://84.83.80.186/wordpress
 License: ...
 Text Domain: ...
 */
defined( 'ABSPATH' ) or die;

function short_code_two() {
  if(is_page(162)) {
    include('login.php');
  }
}

add_shortcode('login', 'short_code_two');

function short_code() {
    if(is_page(160)) {
    include('register.php');
  }
}
add_shortcode('register', 'short_code');

function short_code_three() {
  if(is_page(171)) {
    include('leden.php');
  }
}
add_shortcode('mijnprofiel', 'short_code_three');

function short_code_four() {
  if(is_page(178)) {
    include('logout.php');
  }
}

add_shortcode('logout', 'short_code_four');

function short_code_five() {
  if(is_page(186)) {
    include('insert.php');
  }
}
add_shortcode('insert', 'short_code_five');

function short_code_six() {
  if(is_page(198)) {
    include('delete.php');
  }
}
add_shortcode('delete', 'short_code_six');

function short_code_seven() {
  if(is_page(200)) {
    include('edit.php');
  }
}
add_shortcode('edit', 'short_code_seven');

function short_code_eight() {
  if(is_page(202)) {
    include('profiles.php');
  }
}
add_shortcode('leden', 'short_code_eight');

// function short_code_six() {
//   if(is_page(188)) {
//     include('profiles.php');
//   }
// }
// add_shortcode('leden', 'short_code_six');
?>
