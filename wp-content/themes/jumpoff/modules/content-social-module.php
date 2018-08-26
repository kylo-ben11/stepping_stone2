<div class="title-plugin plugin">

	<?php if ( get_sub_field('module_title') ) { ?>
        <h3 class="title-plugin__title"><?php the_sub_field('module_title'); ?></h3>
	<?php } else { ?>
        <h3 class="title-plugin__title">Law Office of Lynne Peace, LLC</h3>
	<?php } ?>


	<?php if ( get_sub_field('module_content') ) { ?>
        <p><?php the_sub_field('module_content'); ?></p>
	<?php } else { ?>

	<?php } ?>

	<div class="socialBlock">
		<div class="socialBlock__icons">
			<?php get_template_part( 'parts/content', 'social-links' ); ?>
		</div>
	</div>
</div>