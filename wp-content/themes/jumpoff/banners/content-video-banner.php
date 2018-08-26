<div class="fixedTop fixedTopCarousel fixedTopCarousel-video">
	<div id="carousel-banner" class="carousel slide carousel-fade" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">


			<?php if( have_rows('videos') ): ?>

				<?php $slideCount = 0; ?>

				<?php  while ( have_rows('slides') ) : the_row(); ?>
					<?php $slideCount++;  ?>
				<?php endwhile; ?>

			<?php endif; ?>

			<?php if ($slideCount > 1) { ?>
				<?php if( have_rows('videos') ): ?>
					<?php $i = 0; ?>
					<?php  while ( have_rows('videos') ) : the_row(); ?>
						<li data-target="#carousel-banner" data-slide-to="<?php echo $i ?>" class="<?php if($i === 0): ?>active<?php endif; ?>"></li>

						<?php $i++; ?>
					<?php endwhile; ?>
				<?php endif; ?>
			<?php } else { ?>

			<?php } ?>

		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">

			<?php if( have_rows('videos') ): ?>
				<?php $i = 0; ?>
				<?php  while ( have_rows('videos') ) : the_row(); ?>


					<?php
					$image = get_sub_field('video_backup_image');
					if( !empty($image) ): ?>
						<?php
						$size = 'large';
						$size = $image['sizes'][ $size ];
						$alt = $image['alt'];
						?>
					<?php endif; ?>


					<div class="item <?php if($i === 0): ?>active<?php endif; ?>">



						<?php if (get_sub_field('youtube_video')) { ?>


							<?php

// get iframe HTML
							$iframe = get_sub_field('video_oembed');


// use preg_match to find iframe src
							preg_match('/src="(.+?)"/', $iframe, $matches);
							$src = $matches[1];


// add extra params to iframe src
							$params = array(
								'controls'    => 0,
								'hd'        => 1,
								'autohide'    => 1,
								'autoplay'    => 1,
								'loop'    => 1
							);

							$new_src = add_query_arg($params, $src);

							$iframe = str_replace($src, $new_src, $iframe);


// add extra attributes to iframe html
							$attributes = 'frameborder="0"';

							$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);


// echo $iframe
							echo $iframe;

							?>


							<?php /*the_sub_field('video_oembed'); */?>







						<?php } else { ?>
							<video id="vidload1" width="100%" preload="true" autoplay="" loop="" >
								<source src="<?php the_sub_field('video_url'); ?>" type="video/mp4">
								<img src="<?php echo $size; ?>">
							</video>
						<?php } ?>




						<div class="banner__caption">
							<h2 class="banner__heading"><?php the_sub_field('slide_headline'); ?></h2>
							<div class="btnRow">

								<?php if( get_sub_field('slide_button_text') ): ?>
									<a href="<?php the_sub_field('slide_button_url'); ?>" class="btns btn1 btn1-alt"><?php the_sub_field('slide_button_text'); ?></a>
								<?php endif; ?>

								<?php if( get_sub_field('slide_button_2_text') ): ?>
									<a href="<?php the_sub_field('slide_button_2_url'); ?>" class="btns btn1 btn1-alt"><?php the_sub_field('slide_button_2_text'); ?></a>
								<?php endif; ?>

							</div>
						</div>
						<div class="banner__overlay"></div>
					</div>
					<?php $i++; ?>
				<?php endwhile; ?>
			<?php endif; ?>







		</div>

	</div>
	<div class="bannerBase__arrow floating">
		<a href="#contentAnchor" class="pageDown" aria-hidden="true">
			<img src="http://welcome.wisnetcreative.com/clientwhys-themes/theme1/img/chev-thin.png" alt="">
		</a>
	</div>
</div>
<div class="fixedTop-space"></div>








