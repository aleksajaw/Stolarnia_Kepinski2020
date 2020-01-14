<?php
	if ( ! function_exists( 'stolarniaKepinski_setup' ) ) :

		function stolarniaKepinski_setup() {

			add_theme_support( 'title-tag' );

			add_theme_support( 'custom-header' );
			add_theme_support( 'custom-logo' );

			require_once( get_template_directory() . '/inc/functions_custom_menu.php' );

			add_theme_support( 'automatic-feed-links' );

			add_theme_support( 'html5', array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption'
			) );

			add_theme_support( 'post-thumbnails' );

			add_action( 'wp_before_admin_bar_render', function() {
				global $wp_admin_bar;
				$wp_admin_bar->remove_menu('wp-logo');
				}, 7 );



			include( get_template_directory() . '/inc/functions_disable_emoji.php');

            include( get_template_directory(). '/alternatives-to-plugins/galeria/' . 'galeria-core.php');
            
		}
		add_action( 'after_setup_theme', 'stolarniaKepinski_setup' );


	endif;
?>