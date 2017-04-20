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
			<?php the_content(); ?>
		</section>

	<?php endwhile; ?>

	<section class="cta-show">
		<div class="show">
		<h3>See our Showroom Below</h3>
			<div class="carrot">
				<a href="#showroom">
					<i class="fa fa-chevron-down" aria-hidden="true"></i>
				</a>
			</div>
		</div>
	</section>
	
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
		<section class="vendors">
		<?php while ($wp_query->have_posts()) : $wp_query->the_post(); $i++;
			$desc = get_field('description');
			$weblink = get_field('website_link');
			// video or gallery choice
			
			
			// set class to float right or left
			if( $i == 2 ) {
				$floatClass = 'last';
			} else {
				$floatClass = 'first';
			}
		?>
			<div class="vendor-half <?php echo $floatClass; ?>">
			
					<h3><?php the_title(); ?></h3>
				
				    <div id="slider" class="flexslider">
				        <ul class="slides">
				            <?php if(have_rows('slider')) : while(have_rows('slider')) : the_row(); 

				            		$image = get_sub_field('image');
				            		$video = get_sub_field('video');
				            		if( $image ) {
				            			$alt = $image['alt'];
										// thumbnail
										$size = 'large';
				            		}
				            		

				            ?>
				                <li>
				                <?php if( $image != '' ) { ?>
				                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $alt; ?>" />
				                <?php } elseif( $video  != '' ) { 
				                	echo $video;
				                 } else { echo ' ';} ?>
				                </li>
				            <?php endwhile; endif; ?>
				        </ul>
				        <div class="flex-grad"></div>
				    </div>
			    
			<?php 

			 if( $desc ) { ?>
					<div class="desc">
						<?php echo $desc; ?>
						<?php if( $weblink != '' ) { ?>
							<div class="viewsite">
								<a href="<?php echo $weblink; ?>" target="_blank">View Site <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
							</div>
						<?php } ?>
					</div>
				<?php } ?>
			</div><!-- vendor half -->
			<?php if( $i == 2 ) {
				echo '<div class="clear"></div>';
				$i=0;
			} ?>
		<?php endwhile; ?>
		</section>
	<?php endif; 

	wp_reset_query();

	?>


	<section class="slider" id="showroom">
	<h2>Showroom</h2>
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