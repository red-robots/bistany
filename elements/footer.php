<?php defined("C5_EXECUTE") or die("Access Denied."); ?>

			<footer>
				<?php
				$st = Stack::getByName('Footer Nav');
				$st->display();
				?>
				<a class="back-to-top" href="#page-body-wrap">&#10094;</a>
			</footer>

			<script src="<?php echo $this->getThemePath(); ?>/js/menu.js"></script>
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

		</div>
		<?php Loader::element('footer_required'); ?>

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
	</body>
</html>
