<section class="feature-block section-block section-block-2">
	<div class="section-block__inner grid-row wrap">
		<div class="feature-block__left feature-block__item nb-6">


			<?php
			$args = array(
				'post_type' => 'post',
				'category_name' => 'featured'
			);
			$query = new WP_Query( $args );
			?>
			<?php if($query->have_posts()) : ?>
				<?php while($query->have_posts()) : $query->the_post() ?>

					<div class="featureCover">
						<div class="featureCover__content">
							<h4 class="featureCover__heading">FEATURED POST</h4>
							<h3 class="featureCover__title"><?php the_title(); ?></h3>
							<p class="featureCover__excerpt"><?php the_excerpt(); ?></p>
							<a href="<?php the_permalink(); ?>" class="btns btn1 featureCover__link">Read More</a>
						</div>
						<div class="featureOverlay"></div>
					</div>

				<?php endwhile ?>
			<?php endif ?>
			<?php wp_reset_postdata(); ?>






		</div>
		<div class="feature-block__right  feature-block__item nb-6">
			<div class="latestItem-plugin plugin">
				<h4 class="h4 h4-alt plugin__heading">Latest Posts</h4>


				<?php

				global $post;


				$cats = get_sub_field( 'blog_category', $post->ID );


				//var_dump($cats);

				$args  = array(
					'post_type'      => 'post',
					'orderby'        => 'date',
					'order'          => 'DESC',
					'cat'            => $cats,
					'posts_per_page' => 3
				);
				$query = new WP_Query( $args );
				?>
				<?php if ( $query->have_posts() ) : ?>
					<?php while ( $query->have_posts() ) : $query->the_post() ?>


						<a href="<?php the_permalink(); ?>" class="latestItem latestItem-pic grid-row">
							<div class="latestItem__img"
							     style="background-image: url('<?php $theUrl = the_post_thumbnail_url(); echo $theUrl; ?>');">

							</div>
							<div class="latestItem__content">
								<h5 class="latestItem__title"><?php the_title(); ?></h5>
								<p class="latestItem__meta"><span
										class="latestItem__date"><?php echo get_the_date(); ?></span></p>
							</div>
						</a>


					<?php endwhile ?>
				<?php endif ?>
				<?php wp_reset_postdata(); ?>


				<a href="#" class="linkChev">View All Posts <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
</section>

