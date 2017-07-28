<?php
	function setup_theme(){
		/* define value default */
		define('THEME_URL', get_template_directory_uri());

	    add_theme_support( 'post-thumbnails' , array( 'post' ));
	    add_post_type_support( 'post', 'excerpt' );
	}
	add_action('init', 'setup_theme');

	/* function registry css, js */
	function registry_css_js() {
		/* registry css */
		/* wp_enqueue_style( 'style', get_stylesheet_uri()); */

        wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
        wp_enqueue_style( 'style', THEME_URL . '/css/style.css' );

	    /* registry js */
	    wp_enqueue_script( 'jquery-min', THEME_URL . '/js/jquery-1.11.3.min.js', false, true );
	    wp_enqueue_script( 'main', THEME_URL . '/js/main.js', false, true );

	}
	add_action( 'wp_enqueue_scripts', 'registry_css_js', 10, 0 );
?>
