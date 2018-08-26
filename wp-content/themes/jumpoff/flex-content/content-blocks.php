<?php if ( get_row_layout() == 'feature_block' ) { ?>

	<?php get_template_part( 'blocks/content', 'feature-block' ); ?>

<?php } elseif ( get_row_layout() == 'call_out_block' ) { ?>

	<?php get_template_part( 'blocks/content', 'callout-block' ); ?>

<?php } elseif ( get_row_layout() == 'image_testimonial_block' ) { ?>

	<?php get_template_part( 'blocks/content', 'testimonial-image-block' ); ?>

<?php } elseif ( get_row_layout() == 'testimonial_block' ) { ?>

	<?php get_template_part( 'blocks/content', 'testimonial-block' ); ?>

<?php } elseif ( get_row_layout() == 'action_block' ) { ?>

	<?php get_template_part( 'blocks/content', 'action-block' ); ?>

<?php } elseif ( get_row_layout() == 'blog_block' ) { ?>

	<?php get_template_part( 'blocks/content', 'blog-block' ); ?>

<?php } elseif ( get_row_layout() == 'module_block' ) { ?>

	<?php get_template_part( 'blocks/content', 'module-block' ); ?>

<?php } elseif ( get_row_layout() == 'staff_block' ) { ?>

	<?php get_template_part( 'blocks/content', 'staff-block' ); ?>


<?php } else { ?>

<?php } ?>

