<?php

	get_header();

    include('template-parts/first-element-of-page.php');

	
							    $args = array('taxonomy' => 'galeria_category',
										       'orderby' => 'name',
										       'order'   => 'ASC'
									       );

							    $cats = get_categories($args);

							    foreach($cats as $cat) {
                                    
                                    $thumbnail = null;

                                // here we use https://pl.wordpress.org/plugins/sf-taxonomy-thumbnail/, in the future I will create my own code for adding a taxonomy thumbnail :)
                                    if(has_term_thumbnail($cat->term_id )){
                                    	$thumbnail_id = get_term_thumbnail_id( $cat->term_id );
                                        $thumbnail = wp_get_attachment_url( $thumbnail_id );
                                    }
                                    
                                    $title = $cat->name;
                                    $link = get_category_link( $cat->term_id );
                                           
                                            
                                    galeriaItemGenerator($thumbnail, $link, $title);
								   


							    }


            include('template-parts/last-element-of-page.php');	

    	
	    get_footer();

?>