<?php
/*
*
* Template Name: Before / After
*
*
*
*/
get_header();
$background_image_url = get_field('featured_image');

?>
   
<div class="background-image" style="background-image: url(<?php echo $background_image_url; ?>);"></div>

<div class="grad"></div>
<div class="primary">

	<?php while(have_posts()) : the_post(); ?>
		<header class="title">
			<h1><?php the_title(); ?></h1>
		</header>

		<section class="content">
			<?php the_content(); ?>
		</section>

	<?php endwhile; ?>


<?php
	$wp_query = new WP_Query();
	$wp_query->query(array(
	'post_type'=>'before_after',
	'posts_per_page' => -1
));
	if ($wp_query->have_posts()) : ?>
    
<section class="before-after">
	<?php while ($wp_query->have_posts()) : $wp_query->the_post(); 
			$before = get_field('before');
			$after = get_field('after');

			$beforealt = $before['alt'];
			$afterealt = $after['alt'];

			$size = 'large';
			$beforethumb = $before['sizes'][ $size ];
			$afterthumb = $after['sizes'][ $size ];

			$desc = get_field('description');

	?>	

	<div class="row">
		<h2><?php the_title(); ?></h2>
		<div class="half left">
			<img src="<?php echo $beforethumb; ?>" alt="<?php echo $beforealt; ?>"  />
		</div>
		<div class="half right">
			<img src="<?php echo $afterthumb; ?>" alt="<?php echo $afterealt; ?>"  />
		</div>
		<?php if( $desc ) { ?>
			<div class="desc"><?php echo $desc; ?></div>
		<?php } ?>
	</div>
<?php endwhile; ?>
</section>
	<?php endif; ?>
</div>

<?php get_footer(); ?>