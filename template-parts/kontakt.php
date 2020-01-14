<section id="kontakt" class="front-page section-style1 position-relative py-4">

		<h3 class="section-title text-shadow-dark font-weight-light text-center mt-3 mb-2">Kontakt</h3>

	    <div class="mx-auto mw-1300 row">

        <?php $contactDetails = array(
				'phone' => 'tel.: 606 168 693<br>pn.-ndz. 9:00 - 22:00',
				'location' => 'Korczyska 51,<br>98-160 Sędziejowice',
				'mail-alt' => '<a href="mailto:kontakt@stolarniakepinski.pl" target="_blank" class="text-white">kontakt@stolarniakepinski.pl</a>'
               );

               foreach($contactDetails as $detail => $description){

                   echo '<div class="col-md align-items-center row justify-content-center px-0 py-3 mx-auto">
						<h2 class="icon-'. $detail .' contactDetails-icon m-0">
						</h2>
						<span class="pl-2">'
						    . $description .'
						</span>
				    </div>';

			   }?>



			</div>

		   <div class="ragged_elements brown-elements flip-h container-fluid position-absolute p-0"></div>

</section>
