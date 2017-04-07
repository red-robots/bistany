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
$phone = get_field('phone_number', 'option');
$email = get_field('email', 'option');
$address = get_field('address', 'option');
$spambot = antispambot($email);
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

		<div class="contact-left">
			<?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
		</div>

		<div class="contact-right">
			<section class="content entry-content">
				<?php the_content(); ?>
				<section class="contact-info">
					<?php if($phone) { ?>
						<div class="row">
							<div class="first-col">Phone: </div>
							<div class="last-col"><?php echo $phone; ?></div>
						</div>
					<?php } ?>
					<?php if($email) { ?>
						<div class="row">
							<div class="first-col">Email: </div>
							<div class="last-col"><a href="mailto:<?php echo $spambot; ?>"><?php echo $spambot; ?></a></div>
						</div>
					<?php } ?>
					<?php if($address) { ?>
						<div class="row">
							<div class="first-col">Address: </div>
							<div class="last-col"><?php echo $address; ?></div>
						</div>
					<?php } ?>
				</section>
				<?php the_field('showroom_notice'); ?>
				<div class="map">
					<?php the_field('map'); ?>
				</div>
			</section>
		</div>
		<!-- right -->

	<?php endwhile; ?>

</div>

<?php get_footer(); ?>