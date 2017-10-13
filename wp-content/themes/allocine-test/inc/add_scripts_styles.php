<?php

function add_scripts() {

// enregistrement d'un nouveau script
wp_register_script('bootstrap_script', JS_URL . 'bootstrap.min.js', array('jquery'),'1.1', true);

// appel du script dans la page
wp_enqueue_script('bootstrap_script');

// enregistrement d'un nouveau script
wp_register_script('main_script', JS_URL . 'main.js', array('jquery'),'1.1', true);

// appel du script dans la page
wp_enqueue_script('main_script');

/*****************************************************************************************************

****************************************************************************************************/

// enregistrement d'un nouveau style
wp_register_style('bootstrap_style', CSS_URL . 'bootstrap.min.css');

// appel du style dans la page
wp_enqueue_style('bootstrap_style');

// enregistrement d'un nouveau style
wp_register_style('main_style', CSS_URL . 'main.css');

// appel du style dans la page
wp_enqueue_style('main_style');
}

add_action( 'wp_enqueue_scripts', 'add_scripts' );

 ?>
