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
if( $phone != '' ) {
	$links[] = $phone;
}
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
				<a href="<?php echo $pintrest_link; ?>" target="_blank">
				<i class="fa fa-pinterest" aria-hidden="true"></i>
				<span class="social-name">Pinterest</span>
				</a>
			</li>
		<?php } ?>
		<?php if( $houzz_link != '') { ?>
			<li>
				<a href="<?php echo $houzz_link; ?>" target="_blank">
				<i class="fa fa-houzz" aria-hidden="true"></i>
				<span class="social-name">Houzz</span>
				</a>
			</li>
		<?php } ?>
	</ul>
</section>
<section class="footer-info">
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
		
	</body>
</html>