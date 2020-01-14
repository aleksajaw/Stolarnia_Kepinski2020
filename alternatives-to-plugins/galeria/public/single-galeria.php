<?php

	get_header();

    include('template-parts/first-element-of-page.php');


					echo '<div class="galeria-single-post galeria-light-bg py-3 px-5">';

						if(have_posts()) : while (have_posts()) :
									the_post();

									echo '<h3 class="font-weight-bold">'
										    . get_the_title() .
										 '</h3>
										  <hr>
										  <div class="galeria-single-post-content">'
											. get_the_content() .
										  '</div>';

						endwhile; endif;
	       

                        echo '</div>';


						echo '<span class="galeria-link green-link position-absolute font-weight-bold pb-3 pr-2">
								&#10149
								<a class="green-link" href="' . site_url() . '/galeria">
									Wróć do galerii
								</a>
							</span>';
	       

            include('template-parts/last-element-of-page.php');	

    	
	    get_footer();

?>