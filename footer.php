<?php 
$links = array();
$sitemap_link = get_field('sitemap_link','option');
$contact_link = get_field('contact_link','option');
$terms_and_conditions_link = get_field('terms_and_conditions_link','option');
$houzz_link = get_field('houzz_link','option');
$pintrest_link = get_field('pintrest_link','option');
$instagram_link = get_field('instagram_link','option');
$facebook_link = get_field('facebook_link','option');
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
  <div class="footer-inner">
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
    		<?php if( $facebook_link != '') { ?>
    			<li>
    				<a href="<?php echo $facebook_link; ?>" target="_blank">
    				<i class="fa fa-facebook" aria-hidden="true"></i>
    				<span class="social-name">Facebook</span>
    				</a>
    			</li>
    		<?php } ?>
    		<?php if( $instagram_link != '') { ?>
    			<li>
    				<a href="<?php echo $instagram_link; ?>" target="_blank">
    				<i class="fa fa-instagram" aria-hidden="true"></i>
    				<span class="social-name">Instagram</span>
    				</a>
    			</li>
    		<?php } ?>
    	</ul>
    </section>
    <section class="footer-info">
    	<ul>
    	<?php foreach( $links as $link ) { ?>
    		<li>
    			<a title="<?php echo $link['title'] ?>" href="tel:<?php echo $link['link'] ?>"><?php echo $link['wording'] ?></a>
    		</li>
    	<?php } ?>
    	</ul>	
    </section>			
  </div>
</footer>

			
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
</div>

<script>
jQuery(document).ready(function($){
  $('#mobile-toggle').on('click', function(){
    $(this).toggleClass('active');
    $('#site-navigation').toggleClass('active');
  });
});
</script>
<?php wp_footer(); ?>
		
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-62511039-1', 'auto');
	ga('send', 'pageview');
</script>
		
	</body>
</html>
