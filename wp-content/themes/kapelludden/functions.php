<?php
/**
 * Recommended way to include parent theme styles.
 * (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
 *
 */  

add_action( 'wp_enqueue_scripts', 'kapelludden_style' );
                function kapelludden_style() {
                    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
                    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style') );
                }

/**
 * Your code goes below.
 */


function enqueue_custom_fonts() {
    // Lägg till Google Fonts
    wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;400;500;600;700&display=swap', array(), null);

    wp_enqueue_style('custom-additional-font', 'Bricolage+Grotesque:opsz@12..96&display=swap', array(), null);
    
}

add_action('wp_enqueue_scripts', 'enqueue_custom_fonts');



