<?php
/*
Plugin Name: Galeria "plugin"
Description: Plugin adding gallery
Author: Aleksandra Jaworksa (Griese)
Version: 1.0
*/


// if in some kind of strange or atypical way somebody get in this file, just exit
	if(!defined('ABSPATH')) {
		exit;
	}



	include(get_template_directory() . '/alternatives-to-plugins/galeria/inc/' . 'galeria-admin.php');



// enqueue css only if it's plugin's pages
	function galeria_plugin_css() {

		global $wp_query;
		$queryTax = $wp_query -> query_vars['taxonomy'];
		$queryPost = $wp_query -> query_vars['post_type'];

		if ( $wp_query -> is_single() || $queryPost === 'galeria' || $queryTax === 'galeria_category' ) {
			wp_register_style( 'galeria_style', get_template_directory_uri() . '/alternatives-to-plugins/galeria/public/assets/css/' . 'galeria-style.css');
			wp_enqueue_style( 'galeria_style' );
		}
	}
	add_action( 'wp_enqueue_scripts', 'galeria_plugin_css' );



// adjust templates to queries
	function adjust_templates( $template ) {

		global $wp_query;
		$queryTax = $wp_query -> query_vars['taxonomy'];
		$queryPost = $wp_query -> query_vars['post_type'];

		if ( $wp_query -> is_single()){
			return get_template_directory() . '/alternatives-to-plugins/galeria/public/' . 'single-galeria.php';
		} elseif ( $queryPost === 'galeria' ) {
			return get_template_directory() . '/alternatives-to-plugins/galeria/public/' . 'page-galeria.php';
		} elseif ( $queryTax === 'galeria_category' ) {
			return get_template_directory() . '/alternatives-to-plugins/galeria/public/' . 'taxonomy-galeria_category.php';
		} else {
			return $template;
		}
	}
	add_filter( 'template_include', 'adjust_templates' );



    include('inc/' . 'galeria-functions.php');



?>
