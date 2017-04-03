<?php
get_header(); 

 $post = get_post(2); 
  setup_postdata( $post );
   
    $background_image_url = get_field('featured_image');
    $content = get_the_content();
    $content = wpautop($content);
   
  wp_reset_postdata();
?>

<div class="background-image" style="background-image: url(<?php echo $background_image_url; ?>);"></div>

<div class="home-content js-scroll-div">
     <div class="intro-text">
	  	<?php echo $content; ?>
     </div>
     
     
     <?php
	$wp_query = new WP_Query();
	$wp_query->query(array(
		'post_type'=>'portfolio',
		'posts_per_page' => -1,
		'orderby' => 'menu_order',
		'order' => 'ASC'
	));
	if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); 
    // Get the ID
    $id = get_the_ID();
    // Background image with featured image
    $thumb_id = get_post_thumbnail_id();
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'large', true);
	$thumb_url = $thumb_url_array[0];
    
    if( $id == 13 ) {
    	$class = 'kitchen home-left';
    } elseif( $id == 17 ) {
    	$class = 'bath home-right';
    } elseif( $id == 21 ) {
    	$class = 'other home-right';
    } else {
    	$class = '';
    }
    ?>
     
     <a href="<?php the_permalink(); ?>">
	  <div class="<?php echo $class; ?>" style="background-image: url(<?php echo $thumb_url; ?>);">
	       <h3><?php the_title(); ?></h3>
	       <p><?php the_content(); ?></p>
	  </div>
     </a>

     <?php 
     endwhile;
     endif;
     wp_reset_postdata(); ?>

     
</div>

<?php  get_footer(); ?>