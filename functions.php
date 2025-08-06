<?php 

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

//Menu Here
if (function_exists('register_nav_menus')) {
    register_nav_menus (array('superior'=> 'main-nav'));# code...
}

//clases para <a>
add_filter('nav_menu_link_attributes', 'clase_menu', 10, 3 );

    function clase_menu($atts, $item, $args){
        $class = 'nav-link';
        $atts['class'] = $class;
        return $atts;
    }
//imagenes destacadas
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
 }    

// Habilitar la barra de administración en el frontend
//add_filter('show_admin_bar', '__return_true');
