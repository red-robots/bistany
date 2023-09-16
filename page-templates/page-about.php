<?php
/*
*
* Template Name: About
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
<div class="primary <?php echo $theClass; ?> js-scroll-div">

	<?php while(have_posts()) : the_post(); ?>
		<header class="title">
			<h1><?php the_title(); ?></h1>
		</header>

		<section class="work-content entry-content">
			<?php the_content(); ?>
		</section>

	<?php endwhile; ?>


</div>
<!-- primary -->
<?php get_footer(); ?>
