<?php

	echo '<div class="galeriaSidebar galeria-light-bg text-my-dark col-lg-2 order-lg-1 py-3 mx-auto">

			<h6 class="m-3 font-weight-bold">Sprawdź też</h6>

				<ul class="galeriaSidebarUl pl-4">';

		$args = array(
				   'taxonomy' => 'galeria_category',
				   'orderby' => 'name',
				   'order'   => 'ASC'
			   );

	   $cats = get_categories($args);

	   foreach($cats as $cat) {
	
		    echo '<li>
					  <a class="galeriaSidebarLink font-weight-bold" href="' . get_category_link( $cat->term_id ) . '">'
						  . $cat->name .
					  '</a>
					</li>';
	
	   }

		echo '</ul>
			</div>';



?>