<?php
/*
*
* 404
*
*
*
*/
get_header();
$background_image_url = get_field('featured_image');
if( $background_image_url != '') {
	$theClass = 'with-feat-image';
} else {
	$theClass = 'no-feat-image';
}
?>
   
<div class="background-image" style="background-image: url(<?php bloginfo('template_url'); ?>/images/showroom9.jpg);"></div>

<div class="grad"></div>
<div class="primary no-feat-image js-scroll-div">

	
		<header class="title">
			<h1>404 Page Not Found</h1>
		</header>

		<section class="content entry-content">
		Sorry, the page you are looking for cannot be found. Please try again.
			<?php wp_nav_menu( array( 'theme_location' => 'sitemap') ); ?>
		</section>

	

</div>

<?php get_footer(); ?>