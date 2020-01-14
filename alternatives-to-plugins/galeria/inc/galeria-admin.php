<?php

	if(!defined('ABSPATH')) {
		exit;
	}



	function create_galeria_category() {

    // C U S T O M  C A T E G O R Y
		$args = array(
					'labels' => array('name'              => _x( 'Categories', 'taxonomy general name' ),
									  'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
									  'search_items'      => __( 'Search Categories' ),
									  'all_items'         => __( 'All Categories' ),
									  'parent_item'       => __( 'Parent Category' ),
									  'parent_item_colon' => __( 'Parent Category:' ),
									  'edit_item'         => __( 'Edit Category' ),
									  'update_item'       => __( 'Update Category' ),
									  'add_new_item'      => __( 'Add New Category' ),
									  'new_item_name'     => __( 'New Category Name' ),
									  'menu_name'         => __( 'Categories' ),
								),
					'hierarchical'      => true, // set this to 'false' for non-hierarchical taxonomy (like tags)
					'show_ui'           => true,
					'show_admin_column' => true,
					'query_var'         => true,
					'has_archive'		=> true,
					'rewrite'           => array( 'slug' => 'galeria/kategoria' ),
				);
		register_taxonomy( 'galeria_category', array( 'galeria' ), $args );

	}
	add_action( 'init', 'create_galeria_category', 0 );



	function create_galeria_post_type() {
    
    // C U S T O M  P O S T  T Y P E
		 $args = array(
					 'labels' => array ('name' 			=> __( 'Galeria'), 
										'all_items'		=> __('Wszystkie wyroby'),
										'singular_name'	=> __( 'Galeria Item'),
										'add_new'		=> __('Dodaj nowy'),
										'menu_name'		=> __('Galeria', 'galeria-plugin'),
								),
					'search items'		=> __('search items', 'search-items'),
					'description'		=> 'Dodaj produkt do galerii.',
					'supports'			=> array( 'title', 'editor', 'author', 'thumbnail' ),
					//'taxonomies'		=> array('category','post_tag'),
					'publicly_queryable'=> true,
					'public'			=> true,
					'menu_position'		=> 25,
					'menu_icon'			=> 'dashicons-images-alt2',  
					'has_archive'		=> true,
					'capability_type'	=> 'post',
					'rewrite'			=> array('slug' => 'galeria'),
					'show_in_rest'		=> true,
					'show_ui' 			=> true,
					'query_var' 		=> true,
					'yarpp_support'		=> true,
				);
		register_post_type( 'galeria', $args );
	}
	add_action( 'init', 'create_galeria_post_type' );



	function custom_columns( $columns ) {

	// need this to add post's thumbnail	
    	$columns = array(
						'cb' 				=> '<input type="checkbox" />',
						'featured_image'	=> __('Image'),
						'title' 			=> __('Title'),
						'galeria_category'	=> __('Categories'),
						'author' 			=> __('Author'),
						'date' 				=> __('Date'),
						'ID' 				=> __('ID'),
					 );
		return $columns;
		
	}
	add_filter('manage_posts_columns' , 'custom_columns');



	function custom_columns_data( $column, $post_id ) {

		global $wpdb;
		global $post;

		$taxonomy = $column;
        $post_type = get_post_type($post_id);
        $terms = get_the_terms($post_id, $taxonomy);

    // what I want to see in specific columns
	    switch ($column) {

			case 'featured_image':
				add_image_size('mini', 60, 60, true);
				the_post_thumbnail('mini');
				break;

			case 'ID':
				echo $post_id;
				break;

			case 'galeria_category':
			
			// if we don't have any categories (galeria_category) 
				if(!$terms){
					wp_set_object_terms( $post_id, 'brak kategorii', 'galeria_category' );
				}

				if($terms){
					foreach($terms as $term) {

					// add terms to an array
						$out[] = sprintf( '<a href="%s">%s</a>',
						                // what we want to put in first %s (s means string type)
							                esc_url( add_query_arg( array( 'post_type' => $post->post_type, 'galeria_category' => $term->slug ), 'edit.php' ) ),
						                // what we want to put in second %s
							                esc_html( sanitize_term_field( 'name', $term->name, $term->term_id, 'galeria_category', 'display' ) )
					             );
					}
					// join terms to a string, separating them with a comma
					echo join( ', ', $out );
				}
				break;
		}

	}
	add_action( 'manage_posts_custom_column' , 'custom_columns_data', 10, 2 ); 



?>