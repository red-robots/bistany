<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package ACStarter
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function acstarter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	if ( is_front_page() || is_home() ) {
		$classes[] = 'homepage';
	} else {
			$classes[] = 'subpage';
	}
	if(is_page() && $post) {
		$classes[] = $post->post_name;
	}

	$browsers = ['is_iphone', 'is_chrome', 'is_safari', 'is_NS4', 'is_opera', 'is_macIE', 'is_winIE', 'is_gecko', 'is_lynx', 'is_IE', 'is_edge'];
	$classes[] = join(' ', array_filter($browsers, function ($browser) {
			return $GLOBALS[$browser];
	}));

	return $classes;
}
add_filter( 'body_class', 'acstarter_body_classes' );

add_shortcode( 'staff_info_section', 'staff_information_func' );
function staff_information_func( $atts ) {
	$a = shortcode_atts( array(
    'perpage' => 10
  ), $atts );
	$perpage = (isset($a['perpage']) && $a['perpage']) ? $a['perpage'] : -1;
	$args = array(
		'post_type'=>'staff',
		'posts_per_page' => $perpage,
		'orderby' => 'menu_order',
		'order' => 'ASC'
	);
	$output = '';
	$posts = new WP_Query($args);
	ob_start();
	if ($posts->have_posts()) { ?>
	<section class="peopleInfo people">
		<div class="inner">
		<?php while ($posts->have_posts()) : $posts->the_post();
			$image = get_field('image'); ?>
			<div class="person <?php echo ($image) ? 'has-photo':'no-photo';?>">
				<div class="image">
					<?php if($image) { 
						$alt = $image['alt'];
						$size = 'large';
						$thumb = $image['sizes'][ $size ];	
					?>
					<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>"  />
					<?php } ?>
				</div>
				<div class="desc entry-content">
				<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
				</div>
			</div>
		<?php endwhile; wp_reset_query(); ?>
		</div>
	</section>
	<?php }

	$output = ob_get_contents();
	ob_end_clean();

	return $output;
}


add_shortcode( 'vendors_information', 'vendors_information_func' );
function vendors_information_func( $atts ) {
  $a = shortcode_atts( array(
    'perpage' => 10,
    'column' => 2
  ), $atts );
  $perpage = (isset($a['perpage']) && $a['perpage']) ? $a['perpage'] : -1;
  $colnum= (isset($a['column']) && $a['column']) ? $a['column'] : 2;
  $args = array(
    'post_type'=>'vendor',
    'posts_per_page' => $perpage,
    'orderby' => 'menu_order',
    'order' => 'ASC'
  );
  $output = '';
  $posts = new WP_Query($args);
  ob_start();
  if ($posts->have_posts()) { ?>
  <div class="info-columns-images-wrap">
    <div class="info-columns-images colnum-<?php echo $colnum?>">
      <?php while ($posts->have_posts()) : $posts->the_post(); 
        $weblink = get_field('website_link');
        $vendorSite = ($weblink) ? $weblink : 'javascript:void(0)';
        $target = ($weblink) ? ' target="_blank"':'';
        ?>
        <div class="info-column">
          <a href="<?php echo $vendorSite?>" class="info-link"<?php echo $target?>>
            <?php if( get_the_post_thumbnail() ) { ?>
            <figure class="info-image" style="background-image:url('<?php echo get_the_post_thumbnail_url()?>')">
              <img src="<?php echo get_template_directory_uri(); ?>/images/resizer2.png" alt="" aria-hidden="true" />
            </figure>
            <?php } ?>
            <span class="info-title"><?php the_title(); ?></span>
          <a>
        </div>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>
  </div>
  <?php }
  $output = ob_get_contents();
  ob_end_clean();

  return $output;
}


