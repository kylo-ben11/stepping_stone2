<section class="cardRow-block cardRow-block-alt section-block grid-row">
	<h2 class="h2"><span><?php the_sub_field('section_title'); ?></span></h2>
	<div class="section-block__inner">




			<?php

			$staffIDs = get_sub_field('select_staff');

			$args = array(
				'post_type' => 'staff',
				'orderby' => 'menu_order title',
				'post__in'      => $staffIDs
			);
			$query = new WP_Query( $args );
			?>
			<?php if($query->have_posts()) : ?>
				 <?php while($query->have_posts()) : $query->the_post() ?>



				<div class="section-block__item">
					<div class="card cardRow-animate">
						<div class="card__top">


							<?php
							      $image = get_field('staff_image');
							      if( !empty($image) ): ?>
							       <?php
							        $size = 'large';
							        $size = $image['sizes'][ $size ];
							        $alt = $image['alt'];
							       ?>

								      <img src="<?php echo $size; ?>" alt="">
							<?php endif; ?>



						</div>
						<div class="card__bottom">
							<h3 class="card__heading"><?php the_title(); ?></h3>
							<?php the_content(); ?>
							<div class="btnFull">
								<a href="<?php the_permalink(); ?>" class="btns btn2">Read More</a>


							</div>
						</div>
					</div>
				</div>

				<?php endwhile ?>
			<?php endif ?>
		<?php wp_reset_postdata(); ?>



	</div>

</section>