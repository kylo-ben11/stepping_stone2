<?php


add_action( 'customize_register', 'tx_email_settings' );
function tx_email_settings( $wp_customize ) {


	$wp_customize->add_section( 'tx_email', array(
		'title'    => 'Your email',
		'priority' => 7,
	) );

	$wp_customize->add_setting( 'tx_email_text', array(
		'default'   => 'example@email.com',
		'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'tx_email_text', array(
		'label'   => 'Email Text',
		'section' => 'tx_email',
		'type'    => 'text',
	) );

	$wp_customize->selective_refresh->add_partial( 'tx_email_text', array(
		'selector'        => '.emailText',
		'render_callback' => 'tx_email',
	) );

}


function tx_email() {

	echo get_theme_mod( 'tx_email_text', 'example@email.com' );


}


add_action( 'customize_preview_init', 'tx_email_js' );
function tx_email_js() {
	wp_enqueue_script(
		'tx_email_js',
		get_template_directory_uri() . '/customizer/components/js/email.js',
		array( 'jquery', 'customize-preview' ),
		'',
		true
	);
}




