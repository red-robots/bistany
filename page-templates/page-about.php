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

<div class="primary <?php echo $theClass; ?> js-scroll-div">
	<?php while(have_posts()) : the_post(); ?>
  <div class="flexwrap">
		<?php the_content(); ?>
  </div>
	<?php endwhile; ?>
</div>
<!-- primary -->
<?php get_footer(); ?>
