<!DOCTYPE html>
<html lang="en">
     <head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	  <!-- Always force latest IE rendering engine or request Chrome Frame -->
	  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
	       
	  <link type='text/css' href='https://fonts.googleapis.com/css?family=Lato:300,400,700,400italic,300italic' rel='stylesheet'>
    <link type="text/css" href="<?php bloginfo('template_url'); ?>/style.min.css" rel="stylesheet" />
    <!-- <link type="text/css" href="<?php bloginfo('template_url'); ?>/menu.css" rel="stylesheet" /> -->
	  
	  
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />



	
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/images/favicon/manifest.json">
<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">



<?php wp_head(); 
$postType = get_post_type();
if( is_single() && $postType = 'portfolio') {
  $navClass = 'scrolled';
} else {
  $navClass = '';
}

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/custom.css">
</head>
<body>
<div id="page-body-wrap">


<header id="masthead" class="site-header <?php echo $navClass; ?>" role="banner">
<?php if(is_home()) { ?>
    <h1 class="logo ">
      <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
    </h1>
<?php } else { ?>
    <div class="logo <?php echo $navClass; ?>">
      <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
    </div>
<?php } ?>


    <nav id="site-navigation" class="main-navigation js-main-nav <?php echo $navClass; ?>" role="navigation">
      <div class="wrapper">
         <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'MENU', 'acstarter' ); ?></button>
          <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
        </div>
        <!-- wrapper -->
      </nav><!-- #site-navigation -->
      <?php if( is_single() && get_post_type() == 'portfolio') : 
        $i=0;
        $wp_query = new WP_Query();
        $wp_query->query(array(
        'post_type'=>'portfolio',
        'posts_per_page' => -1, 
        'orderby' => 'menu_order', 
        'order' => 'ASC'
      ));
        if ($wp_query->have_posts()) : ?>
        <nav id="work-navigation" class=" <?php echo $navClass; ?>" role="navigation">
        <div class="wrapper">
          <ul>
          <?php while($wp_query->have_posts()) : $wp_query->the_post(); ?>
              <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
          <?php endwhile; ?>
          </ul>
          </div>
        <?php endif; wp_reset_query(); ?>
      </nav><!-- #site-navigation -->
      <?php endif; ?>

</header>


<div id="c-mask" class="mask"></div>

