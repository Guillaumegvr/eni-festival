<?php

// Ajoute automatiquement la balise Title à chacune de vos pages et articles et //récupère son titre
add_theme_support( 'title-tag' );

// Vous permet d'ajouter la possibilité de mettre une image en avant dans les articles //et les pages
add_theme_support( 'post-thumbnails');

// Déclarer votre Css
function register_fichier_css() {
    wp_enqueue_style('mafonction-style', get_stylesheet_uri(), array(), '1.0');
}
add_action( 'wp_enqueue_scripts', 'register_fichier_css' );

// Vous permet d’enregistrer les emplacements de menu.
register_nav_menus( array(
    'main' => 'Menu Principal',
    'footer' => 'Bas de page',
) );

// On désactive le Javascript de CF7 par défaut
add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );

function faker_input($cf7) {
if(isset($_POST['fake-field']) && $_POST['fake-field'] != ''){
wp_safe_redirect( get_bloginfo("url") . '/confirmation-fake/');
exit;
 }
}

add_action("wpcf7_before_send_mail", "faker_input");



//Ajouter Boostrap
function charger_bootstrap(){
    wp_enqueue_script('jquery');

    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array( 'jquery' ), null, true );

    wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
}
add_action('wp_enqueue_scripts', 'charger_bootstrap');


function charger_googleFont() {
    wp_enqueue_style('google-font-preconnect', 'https://fonts.googleapis.com', [], null);
    wp_enqueue_style('google-font-preconnect-gstatic', 'https://fonts.gstatic.com', [], null, false);
    wp_enqueue_style('google-font-poppins', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', [], null);
}
add_action('wp_enqueue_scripts', 'charger_googleFont');

