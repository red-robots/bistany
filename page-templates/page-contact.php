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
$showroom = get_field('showroom_notice');
if( $background_image_url != '') {
	$theClass = 'with-feat-image';
} else {
	$theClass = 'no-feat-image';
}
?>

<div class="primary <?php echo $theClass; ?>">

	<?php while(have_posts()) : the_post(); ?>

	<section class="contact-main-content">
		<div class="flexwrap">
			
			<?php if( $background_image_url ) { ?>
			<div class="leftcol feature-image">
        <figure class="feat-image" style="background-image: url(<?php echo $background_image_url; ?>);"></figure>
      </div>
			<?php } ?>

			<div class="rightcol contact-info">
				<header class="title"> <h1><?php the_title(); ?></h1></header>
				<?php if( get_the_content() ) { ?>
				<div class="intro"><?php the_content(); ?></div>
				<?php } ?>

				<?php if($address) { ?>
          <div class="contact-row has-icon info--address">
						<?php echo $address; ?>
          </div>
        <?php } ?>

        <?php if($phone) { ?>
        <div class="contact-row has-icon info--phone">
					<?php echo $phone; ?>
        </div>
        <?php } ?>

        <?php if($email) { ?>
          <div class="contact-row has-icon info--email">
						<a href="mailto:<?php echo $spambot; ?>"><?php echo $spambot; ?></a>
          </div>
        <?php } ?>

        <?php if($showroom) { ?>
          <div class="contact-row info--showroom">
						Showroom: <?php echo $showroom; ?>
          </div>
        <?php } ?>

        <!-- <div class="map">
          <?php //the_field('map'); ?>
        </div> -->

				<?php if( do_shortcode('[gravityform id="1" title="false" description="false"]') ) { ?>
        <div class="contact-form-block">
          <?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
        </div>
        <?php } ?>
			</div>

		</div>
	</section>

	<?php endwhile; ?>

</div>

<?php get_footer(); ?>