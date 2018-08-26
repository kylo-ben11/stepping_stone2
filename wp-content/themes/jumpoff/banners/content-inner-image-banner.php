<div class="bannerBase" style="background-image:url('http://orlandosmilesinc.com/wp-content/uploads/2014/12/dental-office.jpg');">
	<div class="fixedStrip-block__overlay"></div>
	<div class="bannerBase__inner">

		<div class="bannerBase__content">


			<?php if (get_sub_field('headline')) { ?>
				<h2 class="bannerBase__heading"><?php the_sub_field('headline'); ?></h2>

				<?php if (get_sub_field('sub_headline')) { ?>
					<h2 class="bannerBase__sub"><?php the_sub_field('sub_headline'); ?></h2>
				<?php } ?>

			<?php } else { ?>
				<h2 class="bannerBase__heading"><?php the_title(); ?></h2>
			<?php } ?>




		</div>

	</div>
	<div class="bannerBase__arrow floating">
		<a href="#mainContent" class="pageDown" aria-hidden="true">
			<img src="http://welcome.wisnetcreative.com/clientwhys-themes/theme1/img/chev-thin.png" alt="">
		</a>
	</div>
</div>
<div class="fixedTop-space"></div>