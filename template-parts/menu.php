<span id="menuIcon" class="icon-menu icon-menu fixed-top text-white"></span>

	<div id="sideMenu" class="fixed-top pt-5" style="transform:translateX(300px)">

		<?php
			echo "<a id='menuLogo' class='text-decoration-none d-block' style='opacity:0;cursor:default' href='";
			bloginfo('url');
			echo "'><h3 class='smallerLogo logo p-3 mt-3 text-center font-weight-light'>" . get_bloginfo('name') . "</h3></a>";

			wp_nav_menu( array('theme_location' => 'stolarniaKepinski-menu', 'container' => '', 'items_wrap' => '<ul class="menu nav flex-column mx-auto my-5">%3$s</ul>', 'link_class' => 'nav-link p-0') );
		

		?>

	</div>