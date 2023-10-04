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

$banner_visibility = get_field('banner_visibilty');
$banner_types = get_field('banner_types');
$banner = '';
if($banner_types) {
  $banner = get_field('banner_'.$banner_types);
}

$bannerResizer = get_stylesheet_directory_uri() . '/images/rectangle-h.png';
if($banner_visibility=='hide') {
  $banner = false;
}
?>
<?php if($banner) { ?>
<figure class="pageHeroBlock <?php echo $banner_types ?>">
  <span style="background-image:url('<?php echo $banner['url']?>')"></span>
</figure>
<?php } ?>
<!-- <div class="hero-block">
	<div class="background-image" style="background-image: url(<?php //echo $background_image_url; ?>);"></div>
</div> -->

<main class="primary">
	<?php while(have_posts()) : the_post(); ?>
		<section class="entry-content">
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
