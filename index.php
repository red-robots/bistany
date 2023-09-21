<?php
get_header(); 

 $post = get_post(2); 
  setup_postdata( $post );
   
    $background_image_url = get_field('featured_image');
    $content = get_the_content();
    $introTitle = get_field('intro_title');
    $sectionTitle = get_field('section_title');
    $bisDif = get_field('bistany_difference');
    $content = wpautop($content);
   
  wp_reset_postdata();
?>
<div class="hero-block">
  <div class="background-image" style="background-image: url(<?php echo $background_image_url; ?>);"></div>
</div>
<?php  get_footer(); ?>