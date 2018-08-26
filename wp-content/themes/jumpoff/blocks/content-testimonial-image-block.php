<?php
      $image = get_sub_field('section_background');
      if( !empty($image) ): ?>
       <?php
        $size = 'large';
        $size = $image['sizes'][ $size ];
        $alt = $image['alt'];
       ?>
<?php endif; ?>


<div class="review-block review-block-test section-block" style="background-image: url('<?php echo $size; ?>')">
	<div class="fixedStrip-block__overlay"></div>
	<div class="review-block__heading">

		<h3 class="review-block-test__heading"><?php the_sub_field('section_title'); ?></h3>

	</div>
	<div class="section-block__inner">
		<div id="carousel-review-block-test" class="carousel carousel-no-shadow  slide" data-ride="carousel">

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
							<cite><?php the_title(); ?></cite>
						</div>
						<?php $i++; ?>
					<?php endwhile ?>
				<?php endif ?>
				<?php wp_reset_postdata(); ?>





			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-review-block-test" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-review-block-test" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</div>