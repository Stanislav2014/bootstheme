<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 04.04.19
 * Time: 13:52
 */

function load_bootstrap()
{
    wp_enqueue_style( 'bootstrap.min',  get_template_directory_uri() .  '/css/bootstrap.min.css');
    wp_enqueue_style( 'style.css',  get_template_directory_uri() .  '/style.css');
}

add_action('wp_enqueue_scripts', 'load_bootstrap');