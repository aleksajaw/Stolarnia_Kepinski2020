<?php

	$folderImgURL = get_template_directory_uri() . '/assets/img/white-icons/';
    $partsOfAboutUs = array(
							'doradzamy' 	 => array('Telefonicznie lub&nbsp;osobiście, jednak najczęściej przyjeżdżamy do&nbsp;klienta.'),
							'planujemy'		 => array('Ustalamy termin wykonania, pomagamy udoskonalić Twoją&nbsp;wizję.'),
							'projektujemy'	 => array('Dopasowujemy wymiary, najlepszy rodzaj drewna oraz&nbsp;technikę wykonania.'),
							'realizujemy'	 => array('Sami montujemy każdy element, by&nbsp;mieć pewność, że&nbsp;razem stworzą solidną całość.'),
							'osiągamy sukces'=> array('Bo największym sukcesem jest Twoja&nbsp;satysfakcja!', 'osiagamy-sukces')
						);
    $i = 0;
?>

<section id="jak-dzialamy" class="section-style1 text-center position-relative pb-4">


  <div class="mw-1900 row m-auto justify-content-center">

    
    <?php foreach($partsOfAboutUs as $oneElement => $content){
    		
			$src = $folderImgURL;
			$description = $content[0];
			(!$content[1]) ? $src .= $oneElement : $src .= $content[1];
	
        	($i!=0) ? $arrow = '<div class="jak-dzialamy-arrow position-absolute">&#10142;</div>' : $arrow = null;
        	
        	echo '<div class="col-lg jak-dzialamy-one mt-5">' . $arrow . '
					<picture> 
						<source type="image/webp" srcset="' . $src . '_white-wx120.webp"> 
	   			        <img class="jak-dzialamyimg mt-5" src="' . $src . '_white-wx120.png"/>
					</picture>
					
    			    <h6 class="font-weight-bold">' . $oneElement . '</h6>
					<p>' . $description . '</p>
				  </div>';
            $i++;
        }?>

  </div>

  <div class="ragged_elements brown-elements flip-h container-fluid position-absolute p-0"></div>

</section>
