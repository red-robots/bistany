<?php
get_header();

?>
<div class="wrapper">
<section class="portfolio  js-scroll-div">

<?php
  if( have_posts() ) : while( have_posts() ) : the_post();
  $desc = get_field('description');
  $count = 1;
?>

  <h1 style="display:none"><?php the_title(); ?></h1>

  <?php if( have_rows('masonry') ) { ?>

    <?php while( have_rows('masonry') ): the_row(); ?>
        <?php if( get_row_layout() == '1_image_row' ) {
            $image = get_sub_field('image_1');
            if($image) { ?>
            <div class="grid grid_1_image_row <?php echo ($count == 1) ? 'grid_overlap' : ''; ?>">
              <div class="grid-item row-1-image wow fadeIn">
                <figure>
                  <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['title'] ?>" class="lazy">
                </figure>
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
            <div class="grid grid_2_image_row">
              <div class="grid-inner">
                <?php
  								$count = count($images);
  								foreach ($images as $img) { ?>
                  <div class="grid-item row-2-image wow fadeIn">
                    <figure>
                      <img src="<?php echo $img['url'] ?>" alt="<?php echo $img['title'] ?>" class="lazy">
                    </figure>
                  </div>
                <?php } ?>
              </div>
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
            <div class="grid grid_3_image_row">
              <div class="grid-inner">
                <?php foreach ($images as $img) { ?>
                  <div class="grid-item row-3-image wow fadeIn">
                    <figure>
                      <img src="<?php echo $img['url'] ?>" alt="<?php echo $img['title'] ?>" class="lazy">
                    </figure>
                  </div>
                <?php } ?>
              </div>
            </div>
            <?php } ?>

          <?php }

            else if( get_row_layout() == '4_image_row' ) {
              $images = [];
              for($n=1; $n<=2; $n++) {
                $image = get_sub_field('image_'.$n);
                if($image) {
                  $images[] = $image;
                }
              }

              $i = 1;
              if($images) { ?>
              <div class="grid grid_4_image_row">
                <div class="grid-inner">
                <?php
                  $count = count($images);
                  foreach ($images as $img) { ?>
                  <div class="grid-item row-4-image wow fadeIn ratio-1-3 ratio-image-<?php echo $i; ?>">
                    <figure>
                      <img src="<?php echo $img['url'] ?>" alt="<?php echo $img['title'] ?>" class="lazy">
                    </figure>
                  </div>
                <?php $i++; } ?>
                </div>
              </div>
              <?php } ?>

          <?php } ?>

    <?php $count ++;
      endwhile;
    ?>
  <?php } ?>

<?php endwhile; endif; ?>
</section>
</div><!-- wrapper -->
<?php get_footer(); ?>
