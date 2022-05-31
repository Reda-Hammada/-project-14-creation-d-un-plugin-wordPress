<?php

/*
Plugin Name: dupliquer
Plugin URI: https://github.com/Ouailagzenay/project-14-creation-d-un-plugin-wordPress
Description: Permet de dupliquer le articles de WordPress !
Version: 0.1
Author: ouail agzenay
Author URI: https://github.com/Ouailagzenay
*/

use Pentiminax\DuplicatePost\PentiminaxPlugin;

if ( ! defined( 'ABSPATH' ) )
	exit;

define('PENTIMINAX_PLUGIN_DIR', plugin_dir_path(__FILE__));

require PENTIMINAX_PLUGIN_DIR . 'vendor/autoload.php';

$plugin = new PentiminaxPlugin(__FILE__);