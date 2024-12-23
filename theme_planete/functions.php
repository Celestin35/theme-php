<?php 
require_once('options/apparence.php');

function theme_planete_support (){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'En tête du menu');
    register_nav_menu('footer', 'Pied de page');
    add_theme_support('custom-logo', []);
}

function theme_planete_inject_style (){
   
    ?>
    <style>

        footer {
            background-color: <?= get_theme_mod('footer-color') ?>;
        }
    </style>

    <?php
}

add_action('wp_head', 'theme_planete_inject_style');
add_action('after_setup_theme', 'theme_planete_support');

function child_theme_style () {
    wp_enqueue_style('child_theme_style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'child_theme_style');

function ajouter_fonts_css() {
    wp_enqueue_style('fonts-style', get_template_directory_uri() . '/fonts.css');
}
add_action('wp_enqueue_scripts', 'ajouter_fonts_css');

function ajouter_font_awesome() {
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'ajouter_font_awesome');


?>
