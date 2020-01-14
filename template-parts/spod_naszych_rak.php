
<section id="spod-naszych-rak" class="section-style1 position-relative text-center">

	<div class="mw-1900 pb-2 m-auto row">


		<div class="col-lg-4 py-4 px-0 overflow-hidden" style="height:480px">
			<?php include(get_template_directory() . '/alternatives-to-plugins/slider/slider.php');?>
			<div class="arrows arrows-left arrows-side"></div>


		</div>


		<div class="col-lg section-style1 m-auto">

			<h3 class="section-title text-shadow-dark font-weight-light">
			    Spod naszych rąk...
			</h3>

			<div class="w-100">

				<p class="mb-5">
					...wychodzą projekty stworzone z pasją:
				</p>
                <ul class="mw-900 row mx-auto list-unstyled">
				<?php $categories = get_categories(array('taxonomy'=>'galeria_category'));

                        $amount = count($categories);
                        $i=0;

						foreach($categories as $category) {
						    echo'<li class="spod-naszych-rak-li col-sm-4 ml-3 px-0 text-left" style="max-width:fit-content">
						           <a class="text-white pl-1" href="'. get_category_link($category->term_id) . '">
						            '. $category->name .'
						           </a>
						        </li>';
						    $i++;
						 } ?>
                </ul>

                <span class="green-link text-shadow-dark float-right font-weight-bold pb-3 pr-2">
                    &#10149
                    <a class="green-link" href="<?php bloginfo('url')?>/galeria">
					    Przejdź do galerii
				    </a>
				</span>

			</div>

		</div>



	</div>

  <div class="ragged_elements brown-elements flip-h container-fluid position-absolute p-0"></div>

</section>
