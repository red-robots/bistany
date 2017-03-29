<?php
/*
*
* Template Name: Contact
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

		<div class="contact-left">
			<?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
		</div>

		<div class="contact-right">
			<section class="content">
				<?php the_content(); ?>
				<div class="map">
					<?php the_field('map'); ?>
				</div>
			</section>
		</div>
		<!-- right -->

	<?php endwhile; ?>

</div>

<?php get_footer(); ?>