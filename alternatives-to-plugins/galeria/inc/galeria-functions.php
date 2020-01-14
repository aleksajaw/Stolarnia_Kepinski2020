<?php
	
// automatically add gallery to menu
	function add_gallery_to_menu(){
		$loc = get_theme_mod( 'nav_menu_locations' );

	// if there only one theme location (second element of $loc is null - whatever it means, i don't know where it came from)
		if(count($loc) <= 2){

		// get first of locations
			$menu = wp_get_nav_menu_items(array_values($loc)[0]);

		// if has items
			if($menu != null){

			// array with items' titles
				$menu_item_titles_array = null;
				foreach($menu as $item){
					$menu_item_titles_array[$item->menu_order-1] = $item->title;
				}

			// check if gallery already exist, using above array
				if(!in_array('Galeria zdjęć', $menu_item_titles_array )){
					$menu_length = count($menu);
					$last_item_id = $menu_length-1;

				// get object of last item
					$last_item = wp_get_nav_menu_items(array_values($loc)[0])[$last_item_id];

				// get id of menu at location
					$locationHasMenu = wp_get_nav_menu_object(array_values($loc)[0])->term_id;

				// add gallery permalink to menu as penultimate
					wp_update_nav_menu_item($locationHasMenu, 0,
						array(
						// penultimate position
							'menu-item-order'	=> $menu_length-1,
							'menu-item-title' 	=>  'Galeria zdjęć',
							'menu-item-url' 	=> home_url( '/galeria' ),
							'menu-item-classes' => 'nav-item',
							'menu-item-status'	=> 'publish'
					));

				// and then set penultimate permalink as last
					wp_update_nav_menu_item($locationHasMenu, $last_item->ID,
						array(
						// last position
							'menu_item_order'	=> $menu_length,
							'menu-item-title' 	=>  $last_item->title,
							'menu-item-url' 	=> $last_item->url,
							'menu-item-classes' => 'nav-item',
							'menu-item-status'	=> 'publish'
						));
				}
			}
		}	
	}
	add_action( 'init', 'add_gallery_to_menu');


// generator custom post type 'galeria' item
    function galeriaItemGenerator($thumbnail, $link, $title){

	    if($thumbnail === null){
	    	$thumbnail = get_template_directory_uri() . '/alternatives-to-plugins/galeria/public/assets/img/' . 'default_image_Stolarnia_Kępiński_opacity.png';
	    }

	    echo '<div class="galeriaItem col-md-4 mb-2 mx-1 px-0 position-relative" style="background-image:url(' . $thumbnail . ')">
		    	<a class="d-block w-100 h-100 text-my-dark" href="' . $link . '">
			    	<h6 class="galeriaItemTyt font-weight-bold my-0 position-absolute w-100 px-4 py-1 align-items-center d-flex">'
				    	. $title .
					'</h6>
				</a>
			</div>';
    }



?>
