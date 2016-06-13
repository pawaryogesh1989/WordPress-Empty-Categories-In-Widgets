<?php

/**
 * @package Empty Categories In Widgets
 */
/*
  Plugin Name: Empty Categories In Widgets
  Plugin URI: http://www.clariontechnologies.co.in
  Description: Empty Categories In Widgets
  Version: 1.0.0
  Author: Yogesh Pawar, Clarion Technologies
  Author URI: http://www.clariontechnologies.co.in
  License: GPLv2 or later
  Text Domain: Empty Categories In Widgets
 */

//Plugin Constant
defined('ABSPATH') or die('Restricted direct access!');

if (!class_exists('Empty_Categories_Widgets')) {
    require_once 'classes/class.empty.categories.php';
}

//Initialising Class Plugin
new Empty_Categories_Widgets();
?>