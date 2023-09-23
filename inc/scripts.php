<?php

/**
 * Enqueue scripts and styles.
 */
function acstarter_scripts() {
	//wp_enqueue_style( 'acstarter-style', get_stylesheet_uri() );

	wp_deregister_script('jquery');
		wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js', false, '1.7.2', false);
		wp_enqueue_script('jquery');


	wp_enqueue_script( 
			'acstarter-blocks', 
			get_template_directory_uri() . '/assets/js/vendors.js', 
			array(), '20120206', 
			true 
		);

  // wp_enqueue_script( 
  //   'acstarter-masonry', 
  //   'https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js', 
  //   array(), '4.2.2', 
  //   true 
  // );


  wp_enqueue_script( 
    'acstarter-lazyload', 
    'https://cdnjs.cloudflare.com/ajax/libs/lazyload/2.0.3/lazyload-min.js', 
    array(), '3.2.2', 
    true 
  );

  wp_enqueue_script( 
    'acstarter-masonry', 
    'https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js', 
    array(), '3.0.6', 
    true 
  );

	 wp_enqueue_script( 
			'acstarter-custom', 
			get_template_directory_uri() . '/assets/js/custom.js', 
			array(), '20120206', 
			true 
		);


   wp_enqueue_script( 
      'acstarter-portfolio', 
      get_template_directory_uri() . '/assets/js/portfolio.js', 
      array(), '20230907', 
      true 
    );

		// wp_enqueue_script( 
		// 	'acstarter-base', 
		// 	get_template_directory_uri() . '/js/ccm.base.js', 
		// 	array(), '20120206', 
		// 	false 
		// );

		// wp_enqueue_script( 
		// 	'acstarter-all', 
		// 	get_template_directory_uri() . '/js/all.js', 
		// 	array(), '20120206', 
		// 	false 
		// );

		// wp_enqueue_script( 
		// 	'acstarter-menu', 
		// 	get_template_directory_uri() . '/js/menu.js', 
		// 	array(), '20120206', 
		// 	true 
		// );

	

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', 'acstarter_scripts' );


add_action('admin_head', 'my_custom_admin_style');
function my_custom_admin_style() { ?>
<style>
  .acf-field-flexible-content[data-name="masonry"] .acf-fields .acf-field-image {
    display: inline-block;
    padding: 10px;
  }
  .acf-field-flexible-content[data-name="masonry"] .acf-image-uploader .image-wrap img {
    max-height: 80px!important;
  }
</style>
<?php }