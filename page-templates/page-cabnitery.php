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
<div class="primary <?php echo $theClass; ?> js-scroll-div">
	<?php while(have_posts()) : the_post(); ?>

		<header class="title">
			<h1><?php the_title(); ?></h1>
		</header>

		<section class="content entry-content">
			<?php the_content();

			if( is_page(9) ) {
				get_template_part('inc/faq');
			}

			?>
		</section>

	<?php endwhile; ?>


	<?php
	$i = 0;
	$wp_query = new WP_Query();
	$wp_query->query(array(
		'post_type'=>'vendor',
		'posts_per_page' => -1,
		'orderby' => 'menu_order',
		'order' => 'ASC'
	));
	if ($wp_query->have_posts()) : ?>
		<section class="vendorList">
			<div class="flexbox">
			<?php while ($wp_query->have_posts()) : $wp_query->the_post(); $i++;
				$desc = get_field('description');
				$weblink = get_field('website_link');
				$vendorSite = ($weblink) ? $weblink : 'javascript:void(0)';
				$target = ($weblink) ? ' target="_blank"':'';

				// video or gallery choice

				// $upload_dir = wp_upload_dir();
				// $video = $upload_dir['baseurl'].'/Harmoni-Kitchens-HD.mp4';
				$ID = get_the_ID();
				// echo '<pre>';
				// print_r($video);
				// echo '</pre>';
				// set class to float right or left
				if( $i == 2 ) {
					$floatClass = 'last';
				} else {
					$floatClass = 'first';
				}
			?>
				<div class="vendorInfo">
					<a href="<?php echo $vendorSite?>" class="vendorLink"<?php echo $target?>>
						<?php if( get_the_post_thumbnail() ) { ?>
						<figure class="vendorImage" style="background-image:url('<?php echo get_the_post_thumbnail_url()?>')">
							<img src="<?php echo get_template_directory_uri(); ?>/images/resizer2.png" alt="" aria-hidden="true" />
						</figure>
						<?php } ?>
						<h3 class="vendorName"><?php the_title(); ?></h3>
					</a>
				</div><!-- vendor half -->
			<?php endwhile; ?>
			</div>
		</section>
	<?php endif;

	wp_reset_query();
	?>

</div>
<!-- primary -->
<?php get_footer(); ?>
