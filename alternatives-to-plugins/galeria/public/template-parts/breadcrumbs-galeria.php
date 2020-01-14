<?php
	
	function oneElement($link, $name){
		return '<a class="breadcrumbs font-weight-bold px-2" href="'.$link.'">'. $name .'</a>';
	}
	
	// I put &nbsp; in to be sure that breadcrumbs will be splitted in the way I want to
	// here we start
		echo '<div class="w-100 text-right px-3 pt-3 pb-2">'
		        . oneElement(site_url(), 'Strona główna') . ' &#187 '
		        . oneElement(get_post_type_archive_link('galeria'), 'Galeria');


    // for categories
		if($wp_query->query_vars['galeria_kategorie']){
			echo ' &#187 ' . oneElement(get_category_link(get_queried_object_id()), $wp_query->get_queried_object()->name);
		}


    // for posts
		if($wp_query->query_vars['galeria']){
			if(has_category('',get_queried_object_id())){
				echo ' &#187 ' . oneElement(get_the_category(get_queried_object_id()), $wp_query->get_queried_object()->name);
			}
			echo ' &#187 ' . oneElement(get_post_permalink(get_queried_object_id()), get_the_title());

		}
		
		
		echo '</div>';




	echo '';

?>