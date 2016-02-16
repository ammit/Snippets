<!-- Advanced Custom Fields -->
<?php the_field('ENTER_FIELD_NAME'); ?>

<!-- ACF: Repeater field -->
<?php if( have_rows('slider_images') ): ?>
	<?php while ( have_rows('slider_images') ) : the_row();	?>
		<?php echo wp_get_attachment_image( get_sub_field('slider_image'), 'head-slider-image' ); ?>
	<?php endwhile; ?> 
<?php endif; ?>