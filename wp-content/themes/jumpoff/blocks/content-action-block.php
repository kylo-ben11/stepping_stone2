<section class="fixedStrip-block" style="background: url('<?php the_sub_field('action_strip_background_image'); ?>') center center fixed; background-size: cover">
	<div class="fixedStrip-block__overlay"></div>
	<div class="fixedStrip-block__inner">
		<div class="fixedStrip-block__content">

			<h2 class="h2 fixedStrip-block__heading"><?php the_sub_field('action_strip_headline'); ?></h2>
			<h3 class="h3 fixedStrip-block__sub"><?php the_sub_field('action_strip_content'); ?></h3>
			<div class="btnRow">
				<a href="<?php the_sub_field('action_strip_button_url'); ?>" class="btns btn1 btn1-alt"><?php the_sub_field('action_strip_button_text'); ?></a>
			</div>


		</div>
	</div>
</section>