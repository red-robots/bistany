<!DOCTYPE html>
<html lang="en">
     <head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	  <!-- Always force latest IE rendering engine or request Chrome Frame -->
	  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
	       
	  <link type='text/css' href='http://fonts.googleapis.com/css?family=Lato:300,400,700,400italic,300italic' rel='stylesheet'>
    <link type="text/css" href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet" />
    <link type="text/css" href="<?php bloginfo('template_url'); ?>/menu.css" rel="stylesheet" />
	  <!-- <link type="text/css" href="/packages/bistany/themes/bistany/css/normalize.css" rel="stylesheet" />
	  <link type="text/css" href="/files/cache/css/bistany/typography.css" rel="stylesheet" media="all" />
	  <link type="text/css" href="/packages/bistany/themes/bistany/css/all.css" rel="stylesheet" />
	  <link type="text/css" href="/packages/bistany/themes/bistany/css/menu.css" rel="stylesheet" /> -->
	  
	  
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>Award Winning Custom Cabinetry Designer in Charlotte NC</title>
<meta name="description" content="Cabinetry Designed Around You! Let our high-end custom cabinetry design team create the perfect place for your family to live and play together." />
<meta name="generator" content="concrete5 - 5.6.3.3" />


	<link rel="shortcut icon" href="/files/6514/4441/6260/favicon.ico" type="image/x-icon" />
	<link rel="icon" href="/files/6514/4441/6260/favicon.ico" type="image/x-icon" />
<!-- <link rel="stylesheet" type="text/css" href="/concrete/css/ccm.base.css" /> -->
<!-- <script type="text/javascript" src="/concrete/js/jquery.js"></script>
<script type="text/javascript" src="/concrete/js/ccm.base.js"></script> -->



<?php wp_head(); ?> 
     </head>
     <body>
<div id="page-body-wrap">


<header id="masthead" class="site-header" role="banner">
<?php if(is_home()) { ?>
    <h1 class="logo">
      <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
    </h1>
<?php } else { ?>
    <div class="logo">
      <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
    </div>
<?php } ?>


    <nav id="site-navigation" class="main-navigation js-main-nav" role="navigation">
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
        <nav id="work-navigation" class=" " role="navigation">
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

