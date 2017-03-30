<?php
/*
*
* Template Name: Our Work
*
*
*
*/
get_header();

?>


<div class="grad"></div>


	


<?php
$i=0;
	$wp_query = new WP_Query();
	$wp_query->query(array(
	'post_type'=>'portfolio',
	'posts_per_page' => -1, 
	'orderby' => 'menu_order', 
	'order' => 'ASC'
));
	if ($wp_query->have_posts()) : ?>
    
<div class="our-work">
	<?php while ($wp_query->have_posts()) : $wp_query->the_post(); $i++;
			$before = get_field('before');
			$after = get_field('after');

			$beforealt = $before['alt'];
			$afterealt = $after['alt'];

			$size = 'large';
			$beforethumb = $before['sizes'][ $size ];
			$afterthumb = $after['sizes'][ $size ];

			$desc = get_field('description');

			$bg = get_the_post_thumbnail_url();

			if( $i == 3 ) {
				$postClass = 'last';
				$i=0;
			} else {
				$postClass = 'first';
			}

	?>	

	
  <a href="<?php the_permalink(); ?>">
    <div class="our-work-type <?php echo $postClass; ?>" style="background-image: url(<?php echo $bg; ?>);">
      <h3><?php the_title(); ?></h3>
    </div>
  </a>
  
   

<?php endwhile; ?>
</div>
<!-- our work -->
	<?php endif; wp_reset_query(); ?>


<div class="primary">
	<?php while(have_posts()) : the_post(); ?>
		<header class="title">
			<h1><?php the_title(); ?></h1>
		</header>

		<section class="content entry-content">
			<?php the_content(); ?>
		</section>

	<?php endwhile; ?>


</div>
<!-- primary -->
<?php get_footer(); ?>