<?php
/*
*
* Template Name: Cabnitery
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
			<?php the_content(); ?>
		</section>

	<?php endwhile; ?>
<section class="slider">
    <?php $images = get_field('gallery');
	    if( $images ): ?>
	    <div id="slider" class="flexslider">
	        <ul class="slides">
	            <?php foreach( $images as $image ): ?>
	                <li>
	                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
	                </li>
	            <?php endforeach; ?>
	        </ul>
	        <div class="flex-grad"></div>
	    </div>
	    
	<?php endif; ?> 
</section>

</div>
<!-- primary -->
<?php get_footer(); ?>