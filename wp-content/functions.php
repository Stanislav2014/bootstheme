<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 04.04.19
 * Time: 13:52
 */

function load_bootstrap()
{
    wp_enqueue_style( 'bootstrap.min', get_theme_file_uri( '/css/bootstrap.min.css' );
}

add_action('wp_enqueue_scripts', 'load_bootstrap');