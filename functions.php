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

//function theme_scripts_method(){
//    wp_enqueue_script( 'jquery');
//}

//add_action( 'wp_enqueue_scripts', 'theme_scripts_method' );

add_action( 'wp_ajax_comment_send', 'comment_send' ); // wp_ajax_{ЗНАЧЕНИЕ ПАРАМЕТРА ACTION!!}
add_action( 'wp_ajax_nopriv_comment_send', 'comment_send' );  // wp_ajax_nopriv_{ЗНАЧЕНИЕ ACTION!!}
// первый хук для авторизованных, второй для не авторизованных пользователей

function comment_send()
{
    $data = array(
        'comment_author'       => $_POST['comment_name'],
        'comment_author_email' => $_POST['comment_email'],
        'comment_content'      => $_POST['comment_content'],
        'comment_date'         => current_time('mysql')
    );

    wp_insert_comment( wp_slash($data) );

    die; // даём понять, что обработчик закончил выполнение
}