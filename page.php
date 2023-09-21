<?php
/*
*
* Default Template
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

<div class="hero-block">
	<div class="background-image" style="background-image: url(<?php echo $background_image_url; ?>);"></div>
</div>
<main class="primary">
	<?php while(have_posts()) : the_post(); ?>
		<section class="flexwrap entry-content">
			<?php
			the_content();
			if( is_page('sitemap') ) {
				wp_nav_menu( array( 'theme_location' => 'sitemap') );
			}
			?>
		</section>
	<?php endwhile; ?>
</main>

<?php get_footer(); ?>
