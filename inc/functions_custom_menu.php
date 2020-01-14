<?php

	function add_menu_link_class( $atts, $item, $args ) {
	  if (property_exists($args, 'link_class')) {
		$atts['class'] = $args->link_class;
	  }
	  return $atts;
	}
	add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );


// register a navigation menu location for a theme
	$menuLocation = 'stolarniaKepinski-menu';
	register_nav_menu( $menuLocation, 'Stolarnia Kepinski Menu' );

	$menuName = 'Stolarnia Kępiński Menu';
	$menu_exists = wp_get_nav_menu_object( $menuName );

// if our menu doesn't exist, let's create it
	if(!$menu_exists){
		$menu_id = wp_create_nav_menu($menuName);

	// our theme's menu items
		$sK_menu_array = array('Aktualności', 'O nas', 'Jak działamy?', 'Nasze drewno', 'Spod naszych rąk...', 'Kontakt');

	// automatically add items to menu using above array
		foreach($sK_menu_array as $sK_menu_item){

		// for links it's not necessary to have upper letters, it'll be easier later
			$sK_menu_item_url = mb_strtolower($sK_menu_item);
		// replace polish characters
			//it has bug with 'ś'
			//$sK_menu_item_url = iconv('UTF-8', 'ISO-8859-1//TRANSLIT', $sK_menu_item_url);
			//We want to have something more universal for us :)
			$polishCharacters_array = array('ą'=>'a', 'ć'=>'c', 'ę'=>'e', 'ł'=>'l', 'ń'=>'n', 'ó'=>'o', 'ś'=>'s', 'ż'=>'z', 'ź'=>'z');
			$sK_menu_item_url = strtr( $sK_menu_item_url, $polishCharacters_array );
		// replace with spaces all characters which aren't letters
			$sK_menu_item_url = preg_replace("/[^a-zA-Z]/", " ", $sK_menu_item_url);
		// remove spaces from beginning and end of string, then replace spaces left with '-'
			$sK_menu_item_url = str_replace(' ', '-', trim($sK_menu_item_url));

		  // set up default links and add them to the menu
			wp_update_nav_menu_item($menu_id, 0, array(
				'menu-item-title' =>  $sK_menu_item,
			// add custom classes for making easier CSS and linking with gallery plugin :)
				'menu-item-classes' => 'nav-item',     
			  	'menu-item-url' => home_url( '#' . $sK_menu_item_url ),
			  	'menu-item-status' => 'publish'));
			}
		  }


		// if our theme's menu location has no menu
		  if( !has_nav_menu( $menuLocation ) ){
			$locations = get_theme_mod('nav_menu_locations');
			$locations[$menuLocation] = $menu_id;
			set_theme_mod( 'nav_menu_locations', $locations );
		  }

  ?>
