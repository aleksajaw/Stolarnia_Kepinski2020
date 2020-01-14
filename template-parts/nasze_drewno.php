<?php

	$folderImgURL = get_template_directory_uri() . '/assets/img/wood/';
    $kindsOfWood = array('sosna', 'olcha', 'dab', 'brzoza', 'topola');

?>

<section id="drewno" class="pb-70 pt-5 position-relative text-center">

	<h3 class="section-title text-shadow-light font-weight-light">Nasze drewno</h3>
	
	<div class="m-auto w-100">
	
	<?php foreach($kindsOfWood as $oneKind){
		echo '<div class="col-lg drewno-oneKind position-relative d-inline-flex align-items-center justify-content-center my-5 mx-4">
				<picture class="drewno-img overflow-hidden position-absolute m-0 border border-white">
					<source type="image/webp" srcset="'. $folderImgURL . $oneKind .'.webp"> 
					<img src="'. $folderImgURL . $oneKind .'.png"/>
				</picture>
				<h4 class="drewno-oneKind-title m-0 position-absolute">'. $oneKind .'</h4>
			</div>';
		}?>

	</div>
	
    <div class="ragged_elements ragged_elements-top brown-elements container-fluid position-absolute p-0"></div>
    <div class="ragged_elements beige-elements container-fluid position-absolute p-0"></div>
</section>
