<?php
get_header();

?>
<div class="wrapper">

<section class="portfolio  js-scroll-div">
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>


    <?php $images = get_field('gallery');
    if( $images ): ?>
    <div id="slider" class="flexslider">
        <ul class="slides">
            <?php foreach( $images as $image ): ?>
                <li>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                </li>
            <?php endforeach; ?>
        </ul>
        <div class="flex-grad"></div>
    </div>
    <div class="desc entry-content">
    <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
    </div>
<?php endif; ?> 

<?php endwhile; endif; ?>
</section>
</div><!-- wrapper -->
<?php get_footer(); ?>
