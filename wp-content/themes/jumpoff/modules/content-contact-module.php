<div class="connect-plugin plugin">

    <?php if ( get_sub_field('module_title') ) { ?>
        <h4 class="h4 h4-alt"><?php the_sub_field('module_title'); ?></h4>
    <?php } else { ?>
        <h4 class="h4 h4-alt">Contact</h4>
    <?php } ?>


	<ul class="iconList iconList-marker">
		<li class="iconList__street">
			<?php tx_street() ?>
        </li>

        <li class="iconList__csz">
			<?php tx_csz() ?>
        </li>

	</ul>
	<ul class="iconList iconList-phone">
        <li>
            <a class="phoneText"
               href="tel:<?php echo get_theme_mod( 'tx_phone_text', '920-555-1234' ); ?>">
				<?php tx_phone() ?>
            </a>
        </li>
	</ul>
	<ul class="iconList iconList-email">
        <li>
            <a class="emailText"
               href="mailto:<?php echo get_theme_mod( 'tx_email_text', 'example@email.com' ); ?>">
				<?php tx_email() ?>
            </a>
        </li>
	</ul>

    <ul class="iconList iconList-hours">
        <li class="hoursText">
				<?php tx_hours() ?>
        </li>
    </ul>


	<div class="google-maps mapBlock">

		<?php tx_map() ?>

	</div>
</div>



