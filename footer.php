			<footer>
				<ul>
<li><a title="Pinterest" href="https://www.pinterest.com/bistanydesign/" target="_blank">Pinterest</a></li>
<li><a title="Houzz" href="http://www.houzz.com/pro/bistanydesign/bistany-design" target="_blank">Houzz</a></li>
<li><a title="Contact Us" href="/contact-us">Contact</a></li>
<li><a title="Terms &amp; Conditions" href="/terms-conditions">Terms &amp; Conditions</a></li>
</ul>				<a class="back-to-top" href="#page-body-wrap">&#10094;</a>
			</footer>

			

		</div>
		<?php wp_footer(); ?>
		<script type="text/javascript">
						/*
			$(document).ready(function() {
				$('.info').click(function() {
					$(this).find('.personal-bio').show();
				});

				$('.info').click(function(){
					$('.personal-bio').addClass('personalbio-show');
					var $profileContainer = $('.profile-section');

					 $('body').animate({
			        scrollTop: $profileContainer.offset().top - 1000
			    }, 'fast');
				});
				$('.click-to-close').click(function(){
					$('.personal-bio').addClass('personalbio-hide');
				});
			}); */
		</script>
		<script src="<?php bloginfo('template_url'); ?>/js/menu.js"></script>
		<script>

			/**
			* Slide right instantiation and action.
			*/
			var slideRight = new Menu({
			wrapper: '#o-wrapper',
			type: 'slide-right',
			menuOpenerClass: '.c-button',
			maskId: '#c-mask'
			});

			var slideRightBtn = document.querySelector('#c-button--slide-right');

			slideRightBtn.addEventListener('click', function(e) {
			e.preventDefault;
			slideRight.open();
			});

			</script>
	</body>
</html>