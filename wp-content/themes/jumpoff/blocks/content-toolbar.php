<div class="topBar-block">

    <div class="topBar-block__inner">


		<?php if ( have_rows( 'top_tool_bar', 'option' ) ): ?>
			<?php while ( have_rows( 'top_tool_bar', 'option' ) ) : the_row(); ?>


				<?php if ( get_row_layout() == 'social_icons' ) { ?>

                    <div class="topBar-block__item isPhone topBar-block__item-social">
						<?php get_template_part( 'parts/content', 'social-links' ); ?>
                    </div>


				<?php } elseif ( get_row_layout() == 'toolbar_links' ) { ?>


					<?php if ( have_rows( 'links', 'option' ) ): ?>
						<?php while ( have_rows( 'links', 'option' ) ) : the_row(); ?>

                            <div class="topBar-block__item isPhone">
                                <a
                                        class="tel"


									<?php if ( get_sub_field( 'email_link' ) ) { ?>
                                        href="mailto:<?php the_sub_field( 'link_url' ); ?>"
									<?php } elseif ( get_sub_field( 'phone_link' ) ) { ?>
                                        href="tel:<?php the_sub_field( 'link_url' ); ?>"
									<?php } else { ?>
                                        href="<?php the_sub_field( 'link_url' ); ?>"
									<?php } ?>

									<?php if ( get_sub_field( 'external_link' ) ) { ?>
                                        target="_blank"
									<?php } else { ?>

									<?php } ?>

                                >

	                                <?php if ( get_sub_field( 'email_link' ) ) { ?>
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
	                                <?php } elseif ( get_sub_field( 'phone_link' ) ) { ?>
                                        <i class="fa fa-phone-square" aria-hidden="true"></i>
	                                <?php } else { ?>
                                        <span class="text"><?php the_sub_field( 'link_text' ); ?></span>
	                                <?php } ?>






                                </a>
                            </div>


						<?php endwhile; ?>
					<?php endif; ?>


				<?php } else { ?>

				<?php } ?>

			<?php endwhile;
		else: ?>

		<?php endif; ?>


    </div>
</div>