

		<?php if ( get_row_layout() == 'carousel_banner' ) { ?>

			<?php get_template_part( 'banners/content', 'carousel-banner' ); ?>

		<?php } elseif ( get_row_layout() == 'video_carousel_banner' ) { ?>

			<?php get_template_part( 'banners/content', 'video-banner' ); ?>


		<?php } elseif (get_row_layout() == 'inner_image_banner') { ?>

			<?php get_template_part( 'banners/content', 'inner-image-banner' ); ?>

		<?php } elseif (get_row_layout() == 'color_block_banner') { ?>

			<?php get_template_part( 'banners/content', 'color-block-banner' ); ?>


		<?php } else { ?>

		<?php } ?>







