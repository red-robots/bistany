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

<!-- 
<div class="grad"></div> -->


	


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
    
<div class="our-work-wrap">

  <div class="wrapper">
    <div class="flexwrap">
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

  	<div class="image-block">
      <a href="<?php the_permalink(); ?>" class="imagelink <?php echo ($bg) ? 'has-image':'no-image' ?>">
        <figure>
          <?php if ($bg) { ?>
          <span class="image" style="background-image:url('<?php echo $bg ?>');"></span> 
          <?php } ?>
          <h3><?php the_title(); ?></h3>
        </figure>
        <img src="<?php echo get_template_directory_uri() ?>/images/rectangle-vertical.png" class="resizer" alt="resizer" />
      </a>
    </div>
    
     

    <?php endwhile; ?>
    </div>
  </div>
</div>
<!-- our work -->
	<?php endif; wp_reset_query(); ?>

<h1 style="display:none"><?php the_title(); ?></h1>

<!-- primary -->
<?php get_footer(); ?>