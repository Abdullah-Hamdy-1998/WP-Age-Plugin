<?php

/*
Plugin Name: Age Attribute
Description: A plugin that adds an Age attribute to WordPress users
Version: 1.0
Author: Abdullah Hamdy
*/

if (!defined('AGE_ATTRIBUTE_FILE')) {
    define('AGE_ATTRIBUTE_FILE', __FILE__);
}

if (!defined('AGE_ATTRIBUTE_DIR')) {
    define('AGE_ATTRIBUTE_DIR', plugin_dir_path(AGE_ATTRIBUTE_FILE));
}

// Age Attribute plugin setup

if (!function_exists('age_attribute_setup')) :
    function age_attribute_setup()
    {

        require_once AGE_ATTRIBUTE_DIR . 'src/controller.php';
        require_once AGE_ATTRIBUTE_DIR . 'src/view.php';

        new AdminController();
    }

    add_action('plugins_loaded', 'age_attribute_setup');

endif;
