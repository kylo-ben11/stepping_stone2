<?php



add_action( 'customize_register', 'tx_colors_settings' );
function tx_colors_settings( $wp_customize ) {


	// add new section
	$wp_customize->add_section( 'tx_site_colors', array(
		'title' => __( 'Theme Colors', 'bwpy' ),
		'priority' => 100,
	) );

// add color picker setting
	$wp_customize->add_setting( 'tx_primary_color', array(
		'default' => '#ff0000'
	) );

// add color picker control
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tx_primary_color', array(
		'label' => 'Link Color',
		'section' => 'tx_site_colors',
		'settings' => 'tx_primary_color',
	) ) );




	// Call out btn color
	$wp_customize->add_setting( 'tx_callout_btn', array(
		'default' => '#ff0000'
	) );

// add color picker control
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tx_callout_btn', array(
		'label' => 'Nav call out button color',
		'section' => 'tx_site_colors',
		'settings' => 'tx_callout_btn',
	) ) );


}





function bwpy_customizer_head_styles() {
	$primary_color = get_theme_mod( 'tx_primary_color' );

	if ( $primary_color != '#ff0000' ) :
		?>
        <style type="text/css">
            .topBar-block {
                background: <?php echo $primary_color; ?>;
            }
            .featureCover__heading{
                border-left: 5px solid <?php echo $primary_color; ?>;
            }
            .featureCover {
                border-top: 7px solid <?php echo $primary_color; ?>;
            }

            .blog.post h1:after, .h4-alt:after, .recentblogh1:after {
                background: <?php echo $primary_color; ?>;
            }
            .linkChev {
                color: <?php echo $primary_color; ?>;
            }
            .navStack.navStack-alt a:before {
                color: <?php echo $primary_color; ?>;
            }

            .iconList:before{
                color: <?php echo $primary_color; ?>;
            }
            .dropit-trigger>a:after {
                color:  <?php echo $primary_color; ?>;
            }

            .title-plugin__title {
                border-left: 5px solid <?php echo $primary_color; ?>;
            }

            .intro.intro-color {
                background-color: <?php echo $primary_color; ?>;
            }

            .carousel-dark-arrows .glyphicon {
                color: <?php echo $primary_color; ?>;
            }

            .navSimple .dropit-submenu {
                border-top: 5px solid <?php echo $primary_color; ?>;
            }

            .upLink{
                background: <?php echo $primary_color; ?>;
            }
            .brandColor {
                color: <?php echo $primary_color; ?>;
            }
            .slogan-block {
                background: <?php echo $primary_color; ?>;
            }

            .navIsOpen .navContainer {
                border-top: 5px solid <?php echo $primary_color; ?>;
            }

            .navTrigger-close {
                color: <?php echo $primary_color; ?>;
            }




        </style>
		<?php
	endif;
}
add_action( 'wp_head', 'bwpy_customizer_head_styles' );






function tx_btn_styles() {
	$btn_color = get_theme_mod( 'tx_callout_btn' );

	if ( $btn_color != '#ff0000' ) :
		?>
        <style type="text/css">

            li.call-out a {
                background: <?php echo $btn_color; ?>;
            }

        </style>
		<?php
	endif;
}
add_action( 'wp_head', 'tx_btn_styles' );
