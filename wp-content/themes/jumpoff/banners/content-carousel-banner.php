<div class="fixedTop fixedTopCarousel">
	<div id="carousel-banner" class="carousel slide carousel-fade" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">


			<?php if( have_rows('slides') ): ?>

				<?php $slideCount = 0; ?>

				<?php  while ( have_rows('slides') ) : the_row(); ?>
					<?php $slideCount++;  ?>
				<?php endwhile; ?>

			<?php endif; ?>

			<?php if ($slideCount > 1) { ?>
				<?php if( have_rows('slides') ): ?>
					<?php $i = 0; ?>
					<?php  while ( have_rows('slides') ) : the_row(); ?>
						<li data-target="#carousel-banner" data-slide-to="<?php echo $i ?>" class="<?php if($i === 0): ?>active<?php endif; ?>"></li>

						<?php $i++; ?>
					<?php endwhile; ?>
				<?php endif; ?>
			<?php } else { ?>

			<?php } ?>

		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">

			<?php if( have_rows('slides') ): ?>
				<?php $i = 0; ?>
				<?php  while ( have_rows('slides') ) : the_row(); ?>


					<?php
					      $image = get_sub_field('slide_image');
					      if( !empty($image) ): ?>
					       <?php
					        $size = 'large';
					        $size = $image['sizes'][ $size ];
					        $alt = $image['alt'];
					       ?>
					<?php endif; ?>


					<div class="item <?php if($i === 0): ?>active<?php endif; ?>" style="background-image:url('<?php echo $size; ?>');">
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