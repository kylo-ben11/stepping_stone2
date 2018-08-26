<?php if( get_sub_field('select_color') ): ?>
	 <?php $bgColor = get_sub_field('select_color');?>
<?php endif; ?>


<div class="intro intro-color section-block" style="background-color: <?php echo $bgColor ?>">
	<div class="intro__inner">



		<?php if (get_sub_field('headline')) { ?>

			<h2 class="intro__heading h1"><?php the_sub_field('headline'); ?></h2>

			<?php if (get_sub_field('sub_headline')) { ?>
				<p class="intro-color__content"><?php the_sub_field('sub_headline'); ?></p>
			<?php } ?>

		<?php } else { ?>
			<h2 class="intro__heading h1"><?php the_title(); ?></h2>
		<?php } ?>


	</div>
</div>