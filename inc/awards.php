<section class="awards">
	<h3>Awards</h3>
<?php if(have_rows('awards')) : while(have_rows('awards')) : the_row(); 
		$theTitle = get_sub_field('award_title');
		$desc = get_sub_field('award_description');
		$pdf = get_sub_field('pdf');
?>
		<div class="award">
			<?php if( $theTitle ) { ?><h4><?php echo $theTitle; ?></h4><?php } ?>
			<?php if( $desc ) { ?><div class="desc "><?php echo $desc; ?></div><?php } ?>
			<?php if( $pdf ) { ?><div class="view"><a href="<?php echo $pdf; ?>">view pdf</a></div><?php } ?>
		</div>
		<!-- award -->
<?php endwhile; endif; wp_reset_query(); ?>
</section>