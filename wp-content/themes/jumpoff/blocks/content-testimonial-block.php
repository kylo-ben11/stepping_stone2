<!-- components/blocks/review-block.php -->

<?php if( !is_front_page() ): ?>
        <?php $bgClass = "section-bg"; ?>
<?php endif; ?>


<section class="review-block section-block <?php echo $bgClass; ?>">
	<div class="review-block__heading">


        <?php

        echo '<img class="review-block__icon" src="'.get_theme_mod( 'tx_logo_upload', $defaultLogo ).'" alt="">';

        ?>


	</div>
	<div class="section-block__inner">
		<div id="carousel-review-block" class="carousel carousel-no-shadow carousel-dark-arrows slide" data-ride="carousel">

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">




				<?php
				$args = array(
					'post_type' => 'testimonials',
					'orderby' => 'rand',
				);
				$query = new WP_Query( $args );
				?>
				<?php if($query->have_posts()) : ?>
					<?php $i = 0; ?>
					<?php while($query->have_posts()) : $query->the_post() ?>
						<div class="item <?php if($i === 0): ?>active<?php endif; ?>">

							<blockquote class="slogan-block__content"><?php the_content(); ?></blockquote>

							<cite class="review-block__cite"><?php the_title(); ?></cite>
						</div>
						<?php $i++; ?>
					<?php endwhile ?>
				<?php endif ?>
				<?php wp_reset_postdata(); ?>



			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-review-block" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-review-block" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>

</section>