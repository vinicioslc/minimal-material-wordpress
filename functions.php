<?php

/* Carrega scripts
*************************************************/
function  CarregarScripts () {
    wp_enqueue_style( 'template', get_template_directory_uri().'/css/template.css',array(),'all');
    wp_enqueue_script( 'template', get_template_directory_uri().'/js/scripts.js', array(), true);    
}

add_action( 'wp_enqueue_scripts', 'CarregarScripts');
/*Função para registro de nossos menus
 *************************************************/
register_nav_menus(
	array(
		'sidebar_menu' => 'Sidebar Menu',
		'footer_menu' => 'Footer Menu'
	)
);

/* Remove configuração padrão
**************************************************/
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');


/* Suportes que o tema possui
**************************************************/
add_theme_support( 'custom-header' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', array('video','image','gallery' ));

?>