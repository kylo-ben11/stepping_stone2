<!-- components/blocks/cardRow-block.php -->

<section class="cardRow-block section-block section-block-4 grid-row">
	<h2 class="h2"><span><?php the_sub_field('section_title'); ?></span></h2>
	<div class="section-block__inner">
		<?php if( have_rows('feature_blocks') ): ?>

			<?php $counter = 0; ?>

			<?php  while ( have_rows('feature_blocks') ) : the_row(); ?>
				<?php $counter++;  ?>
			<?php endwhile; ?>

			<?php

			if( $counter == 1){
				$classCount = "nb-12";
			}
			elseif($counter == 2){
				$classCount = "nb-6";
			}
			elseif($counter == 3){
				$classCount = "nb-4";
			}
			elseif($counter == 4){
				$classCount = "nb-3";
			}

			?>
		<?php endif; ?>

		<?php if( have_rows('feature_blocks') ): ?>



			<?php  while ( have_rows('feature_blocks') ) : the_row(); ?>




				<div class="section-block__item <?php echo $classCount;  ?>">
					<div class="card cardRow-animate">
						<div class="card__top">
							<img src="<?php the_sub_field('block_image'); ?>" alt="">
						</div>
						<div class="card__bottom">
							<h3 class="card__heading"><?php the_sub_field('block_title'); ?></h3>
							<?php the_sub_field('block_content'); ?>
							<div class="btnFull">
								<a
									href="<?php the_sub_field('block_button_url'); ?>"
									class="btns btn2"
									<?php if( get_sub_field('open_in_new_window') ): ?>
										target="blank"
									<?php endif; ?>
								>
									<?php the_sub_field('block_button_text'); ?>

								</a>
							</div>
						</div>
					</div>
				</div>

			<?php endwhile; ?>
		<?php endif; ?>



	</div>

</section>