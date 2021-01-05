<?php
/*
  Plugin Name: Empty Categories In Widgets
  Plugin URI: http://www.clariontech.com
  Description: Empty Categories In Widgets
  Version: 2.2.0
  Author: Yogesh Pawar, Clarion Technologies
  Author URI: http://www.clariontech.com
  License: GPLv2 or later
  Text Domain: Empty Categories In Widgets
 */

//Plugin Constant
defined('ABSPATH') or die('Restricted direct access!');

if (!class_exists('Empty_Categories_Widgets')) {
    require_once 'classes/class.empty.categories.php';
}

?>