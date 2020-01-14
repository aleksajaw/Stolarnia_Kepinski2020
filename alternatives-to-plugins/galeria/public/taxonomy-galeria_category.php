<?php
/*
Template Name:
*/

	
	get_header();

    include('template-parts/first-element-of-page.php');


								global $wp;
								global $wpdb;

								$args = array('orderby'	        => 'rand',
									          'post_type'	    => 'galeria',
										      'posts_per_page'	=> '99999',
											  'tax_query' => array( array('taxonomy' => $wp_query->query_vars['taxonomy'],
																		  'field' => 'slug',
																		  'terms' => $wp_query->get_queried_object()->slug
																		)
											                      )
											);

								$loop = new WP_Query($args);
								
								if ($loop ->have_posts()) : while ($loop->have_posts()) : $loop->the_post();



											if(get_the_post_thumbnail()!=null){
												$thumbnail = get_the_post_thumbnail_url();
											}

                                            $title = get_the_title();
                                            $link = get_the_permalink();
                                            

                                            galeriaItemGenerator($thumbnail, $link, $title);



							endwhile; endif; wp_reset_query(); wp_reset_postdata();
	

            include('template-parts/last-element-of-page.php');	

    	
	    get_footer();

?>