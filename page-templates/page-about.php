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


	<section class="people">
		
			<?php
			$wp_query = new WP_Query();
			$wp_query->query(array(
				'post_type'=>'staff',
				'posts_per_page' => -1,
				'orderby' => 'menu_order', 
				'order' => 'ASC'
			));
			if ($wp_query->have_posts()) : ?>
		    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); 
		    $image = get_field('image');

			$alt = $image['alt'];

			$size = 'large';
			$thumb = $image['sizes'][ $size ];
		    ?>
		    <div class="person">
		    	<div class="image">
		    		<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>"  />
		    	</div>
		    	<div class="desc entry-content">
		    	<h2><?php the_title(); ?></h2>
		    		<?php the_content(); ?>
		    	</div>
		    </div>	
		    <?php endwhile; endif;  wp_reset_query(); ?>
			
	</section>

	<section class="press-awards">
		<section class="press">
			<h3>Press</h3>
			<div class="images-wrapper">
			<?php if(have_rows('press')) : while(have_rows('press')) : the_row(); 
				$theTitle = get_sub_field('title');
				$image = get_sub_field('press_cover');
				// echo '<pre>';
				// print_r($theTitle);
				// echo '</pre>';
				$pdf = get_sub_field('pdf');

				$alt = $image['alt'];
				$size = 'large';
				$thumb = $image['sizes'][ $size ];
				?>
				<div class="image">
					<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>"  />
					<?php if( $pdf ) { ?><a href="<?php echo $pdf; ?>">view pdf</a><?php } ?>
				</div>
			<?php endwhile; endif;  wp_reset_query(); ?>
			</div>
		</section>
		<?php //get_template_part('inc/awards'); ?>
		
	</section>



</div>
<!-- primary -->
<?php get_footer(); ?>