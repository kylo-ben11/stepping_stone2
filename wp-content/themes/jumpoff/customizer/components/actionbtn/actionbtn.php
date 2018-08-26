<?php


add_action( 'customize_register', 'tx_actionbtn_settings' );
function tx_actionbtn_settings( $wp_customize ) {


	$wp_customize->add_section( 'tx_actionbtn', array(
		'title'    => 'Top Action Button',
		'priority' => 6,
	) );

	$wp_customize->add_setting( 'tx_actionbtn_text', array(
		'default'   => 'Subscribe',
		'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'tx_actionbtn_text', array(
		'label'   => 'Action Button Text',
		'section' => 'tx_actionbtn',
		'type'    => 'text',
	) );

	$wp_customize->selective_refresh->add_partial( 'tx_actionbtn_text', array(
		'selector'        => '.actionBtn',
		'render_callback' => 'tx_actionbtn',
	) );


	$wp_customize->add_setting( 'tx_actionbtn_url', array(
		'default'   => '#',
		'transport' => 'refresh',
	) );

	$wp_customize->add_control( 'tx_actionbtn_url', array(
		'label'   => 'Action Button URL',
		'section' => 'tx_actionbtn',
		'type'    => 'text',
	) );



}


function tx_actionbtn() {

	echo get_theme_mod( 'tx_actionbtn_text', 'Subscribe' );


}


add_action( 'customize_preview_init', 'tx_actionbtn_js' );
function tx_actionbtn_js() {
	wp_enqueue_script(
		'tx_actionbtn_js',
		get_template_directory_uri() . '/customizer/components/js/actionbtn.js',
		array( 'jquery', 'customize-preview' ),
		'',
		true
	);
}




