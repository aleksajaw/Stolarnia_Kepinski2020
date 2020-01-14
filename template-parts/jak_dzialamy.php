<?php

	$folderImgURL = get_template_directory_uri() . '/assets/img/white-icons/';
    $partsOfAboutUs = array(
							'doradzamy' => 'Telefonicznie lub&nbsp;osobiście, jednak najczęściej przyjeżdżamy do&nbsp;klienta.',
							'planujemy' => 'Ustalamy termin wykonania, pomagamy udoskonalić Twoją&nbsp;wizję.',
							'projektujemy' => 'Dopasowujemy wymiary, najlepszy rodzaj drewna oraz&nbsp;technikę wykonania.',
							'realizujemy' => 'Sami montujemy każdy element, by&nbsp;mieć pewność, że&nbsp;razem stworzą solidną całość.',
							'osiagamy-sukces' => 'Bo największym sukcesem jest Twoja&nbsp;satysfakcja!'
						);
    $i = 0;
?>

<section id="jak-dzialamy" class="section-style1 text-center position-relative pb-4">


  <div class="mw-1900 row m-auto justify-content-center">

    
    <?php foreach($partsOfAboutUs as $onePart => $description){
    	
        	if($i!=0){
        		$arrow = '<div class="jak-dzialamy-arrow position-absolute">&#10142;</div>';
        	} else {
        		$arrow = null;
        	}
        	echo '<div class="col-lg jak-dzialamy-one mt-5">'. $arrow .'
					<picture> 
						<source type="image/webp" srcset="'. $folderImgURL . $onePart .'_white-wx120.webp"> 
	   			        <img class="jak-dzialamyimg mt-5" src="'. $folderImgURL . $onePart .'_white-wx120.png"/>
					</picture>
					
    			    <h6 class="font-weight-bold">'. $onePart .'</h6>
					<p>'. $description .'</p>
				  </div>';
            $i++;
        }?>

  </div>

  <div class="ragged_elements brown-elements flip-h container-fluid position-absolute p-0"></div>

</section>