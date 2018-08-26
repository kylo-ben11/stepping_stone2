<?php


add_action( 'customize_register', 'tx_date_settings' );
function tx_date_settings( $wp_customize ) {


	$wp_customize->add_section( 'tx_date', array(
		'title'    => 'Your TEDx date',
		'priority' => 4,
	) );

	$wp_customize->add_setting( 'tx_date_text', array(
		'default'   => 'Saturday January 6, 2020',
		'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'tx_date_text', array(
		'label'   => 'Date Text',
		'section' => 'tx_date',
		'type'    => 'text',
	) );

	$wp_customize->selective_refresh->add_partial( 'tx_date_text', array(
		'selector'        => '.eventDate__date',
		'render_callback' => 'tx_date',
	) );

}


function tx_date() {

	echo get_theme_mod( 'tx_date_text', 'Saturday January 6, 2020' );


}


add_action( 'customize_preview_init', 'tx_date_js' );
function tx_date_js() {
	wp_enqueue_script(
		'tx_date_js',
		get_template_directory_uri() . '/customizer/components/js/date.js',
		array( 'jquery', 'customize-preview' ),
		'',
		true
	);
}




