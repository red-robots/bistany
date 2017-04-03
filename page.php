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
   
<div class="background-image" style="background-image: url(<?php echo $background_image_url; ?>);"></div>

<div class="grad"></div>
<div class="primary <?php echo $theClass; ?>">

	<?php while(have_posts()) : the_post(); ?>
		<header class="title">
			<h1><?php the_title(); ?></h1>
		</header>

		<section class="content entry-content">
			<?php 

			the_content(); 

			if( is_page('sitemap') ) {
				wp_nav_menu( array( 'theme_location' => 'sitemap') ); 
			}
			?>
		</section>

	<?php endwhile; ?>

</div>

<?php get_footer(); ?>