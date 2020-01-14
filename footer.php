<?php
/*
 * The footer template file
 *
 * @package Stolarnia Kępiński
 *
 */
?>
					<footer class="font-weight-bold font-italic position-absolute w-100 pt-2">

						<div class="mw-1900 mx-auto row px-2">

							<div class="col pb-2">
								Stolarnia Kępiński 2018-2020 ©&nbsp;Wszelkie&nbsp;prawa&nbsp;zastrzeżone
							</div>
							<div class="col text-right">
								Created&nbsp;by&nbsp;Aleksandra&nbsp;Jaworska
							</div>
						</div>

					</footer>

		</div>

	    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	    <script src="<?php echo get_template_directory_uri();?>/alternatives-to-plugins/slider/slick-slider/slick.js" type="text/javascript" charset="utf-8"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/js/menu.js" type="text/javascript"></script>

		<script>

			$(document).on('ready', function() {

			  $(".slider-container").slick({
				autoplay:true,
				autoplaySpeed:2000
			  });

			});

		</script>

    </body>
</html>
<?php wp_footer(); ?>
