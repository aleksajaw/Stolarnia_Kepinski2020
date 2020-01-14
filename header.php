<?php
/*
 * The header template file
 *
 * @package Stolarnia Kępiński
 *
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="UTF-8">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400&subset=latin-ext&display=swap" rel="stylesheet" type="text/css">
   		<meta name="google-site-verification" content="zpca9H5vnaOLQulpYKsTFTS2HJf_p0h9I2y8wCoz8-k" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=yes"/>
    	<link rel="profile" href="http://gmpg.org/xfn/11" />
    	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css"/>
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/alternatives-to-plugins/slider/slick-slider/slick.css" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/alternatives-to-plugins/slider/slick-slider/slick-theme.css">
    	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<?php get_template_part('template-parts/menu');?>

				<header id="header" class="position-fixed container-fluid px-0" style="<?php if(header_image()!=null){ echo 'background-image:url(' . header_image() . ')';}?>">

					<?php

						echo "<a class='biggerLogoCont m-3 h1 position-absolute text-decoration-none text-center' href='";
						bloginfo('url');
						echo "'><span class='biggerLogo d-block logo text-uppercase p-4'>" . get_bloginfo('name') . "</span></a>";

					?>


				</header>

				<div class="main-container container-fluid position-relative px-0">
                    <div class="ragged_elements beige-elements ragged_elements-top flip-hv container-fluid position-absolute p-0"></div>
