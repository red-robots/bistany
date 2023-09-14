<?php
get_header();

?>
<div class="wrapper">

<section class="portfolio  js-scroll-div">
<?php if( have_posts() ) : while( have_posts() ) : the_post();

$desc = get_field('description');

?>

  <h1 style="display:none"><?php the_title(); ?></h1>

  <?php if( have_rows('masonry') ) { ?>

    <?php while( have_rows('masonry') ): the_row(); ?>
        <?php if( get_row_layout() == '1_image_row' ) {
            $image = get_sub_field('image_1');
            if($image) { ?>
            <div class="grid 1_image_row">
              <div class="grid-item row-1-image wow fadeIn">
                <a href="<?php echo $image['url']; ?>" data-fancybox="gallery">
                  <span style="background-image:url('<?php echo $image['url'] ?>');">
                  <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['title'] ?>" class="lazy">
                  <img src="<?php echo get_stylesheet_directory_uri() ?>/images/resizer.png" alt="" class="resizer" aria-hidden="true">
                  </span>
                </a>
              </div>
            </div>
            <?php } ?>
          <?php }

          else if( get_row_layout() == '2_image_row' ) {
            $images = [];
            for($n=1; $n<=2; $n++) {
              $image = get_sub_field('image_'.$n);
              if($image) {
                $images[] = $image;
              }
            }

            if($images) { ?>
            <div class="grid 2_image_row">
              <?php
								$count = count($images);
								foreach ($images as $img) { ?>
                <div class="grid-item row-2-image wow fadeIn">
                  <a href="<?php echo $img['url']; ?>" data-fancybox="gallery">
                    <span style="background-image:url('<?php echo $img['url'] ?>');">
                    <img src="<?php echo $img['url'] ?>" alt="<?php echo $img['title'] ?>" class="lazy">
										<img src="<?php echo get_stylesheet_directory_uri() ?>/images/resizer.png" alt="" class="resizer" aria-hidden="true">
									</span>
                  </a>
                </div>
              <?php } ?>
            </div>
            <?php } ?>

          <?php }

          else if( get_row_layout() == '3_image_row' ) {
            $images = [];
            for($n=1; $n<=3; $n++) {
              $image = get_sub_field('image_'.$n);
              if($image) {
                $images[] = $image;
              }
            }

            if($images) { ?>
            <div class="grid 3_image_row">
              <?php foreach ($images as $img) { ?>
                <div class="grid-item row-3-image wow fadeIn">
                  <a href="<?php echo $img['url']; ?>" data-fancybox="gallery">
                    <span style="background-image:url('<?php echo $img['url'] ?>');">
                    <img src="<?php echo $img['url'] ?>" alt="<?php echo $img['title'] ?>" class="lazy">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/rectangle-vertical.png" alt="" class="resizer" aria-hidden="true">
                    </span>
                  </a>
                </div>
              <?php } ?>
            </div>
            <?php } ?>

          <?php } ?>

    <?php endwhile; ?>
  <?php } ?>

<?php endwhile; endif; ?>
</section>
</div><!-- wrapper -->
<?php get_footer(); ?>
