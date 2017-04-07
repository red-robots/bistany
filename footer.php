<?php 
$links = array();
$sitemap_link = get_field('sitemap_link','option');
$contact_link = get_field('contact_link','option');
$terms_and_conditions_link = get_field('terms_and_conditions_link','option');
$houzz_link = get_field('houzz_link','option');
$pintrest_link = get_field('pintrest_link','option');
$phone_number = get_field('phone_number','option');
$sitemap = array(
		'link' => $sitemap_link,
		'title' => 'sitemap', 
		'wording' => 'Sitemap'
	);
$terms = array(
		'link' => $terms_and_conditions_link,
		'title' => 'terms', 
		'wording' => 'Terms &amp; Conditions'
	);
$contact = array(
		'link' => $contact_link,
		'title' => 'contact', 
		'wording' => 'Contact'
	);
$phone = array(
		'link' => $phone_number,
		'title' => $phone_number, 
		'wording' => $phone_number
	);
if( $contact != '' ) {
	$links[] = $contact;
}
if( $terms != '' ) {
	$links[] = $terms;
}
if( $sitemap != '' ) {
	$links[] = $sitemap;
}

 ?>
<footer class="site-footer">

<section class="social">
	<ul>
		<?php if( $pintrest_link != '') { ?>
			<li>
				<a href="<?php echo $pintrest_link; ?>"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
			</li>
		<?php } ?>
		<?php if( $houzz_link != '') { ?>
			<li>
				<a href="<?php echo $houzz_link; ?>"><i class="fa fa-houzz" aria-hidden="true"></i></a>
			</li>
		<?php } ?>
	</ul>
</section>
<section class="footer-info">
	<div class="phone-number">
		<?php echo $phone_number; ?>
	</div>
	<ul>
	<?php foreach( $links as $link ) { ?>
		<li>
			<a title="<?php echo $link['title'] ?>" href="<?php echo $link['link'] ?>"><?php echo $link['wording'] ?></a>
		</li>
	<?php } ?>
	</ul>	
</section>			


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