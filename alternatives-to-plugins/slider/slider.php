<?php

    $URIForSlider = get_template_directory_uri() . '/alternatives-to-plugins/slider/assets/img/';
    
    $sliderContent = array(
                           'toaleta',
                           'budy',
                           'plac zabaw1',
                           'plac zabaw2',
                           'domek z drewna',
                           'doniczki',
                           'drewutnia',
                           'huśtawka',
                           'drewutnia z ławką',
                           'ławka',
                           'jasny zestaw1',
                           'zestaw metalowe nogi',
                           'altana',
                           'taras i schodki',
                           'jasny zestaw2',
                           'altana z zestawem',
                           'trójkątna toaleta'
                        );

    //$sliderContent = shuffle($sliderContent);

		

	
	echo '<style>
            .slick-slide img {
            	object-fit:cover;
            	height:500px;
            }
	      </style>

	      <div class="slider-container">';
		    

		foreach($sliderContent as $itemName){
		    
			echo '<img class="mw-100" src="' . $URIForSlider . $itemName . '.webp">';
		}


    echo '</div>';


?>