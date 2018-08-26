<?php


add_action( 'customize_register', 'tx_email_settings' );
function tx_email_settings( $wp_customize ) {

	//SECTION TITLE
	$wp_customize->add_section( 'tx_contact_section', array(
		'title'    => 'Contact Information',
		'priority' => 1,
	) );



	//STREET
	$wp_customize->add_setting( 'tx_street_text', array(
		'default'   => '987 S Main ST',
		'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'tx_street_text', array(
		'label'   => 'Street Address',
		'section' => 'tx_contact_section',
		'type'    => 'text',
	) );

	$wp_customize->selective_refresh->add_partial( 'tx_street_text', array(
		'selector'        => '.iconList__street',
		'render_callback' => 'tx_street',
	) );


	//CITY STATE ZIP
	$wp_customize->add_setting( 'tx_csz_text', array(
		'default'   => 'Fond du Lac, WI 54935',
		'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'tx_csz_text', array(
		'label'   => 'City, State, Zip',
		'section' => 'tx_contact_section',
		'type'    => 'text',
	) );

	$wp_customize->selective_refresh->add_partial( 'tx_csz_text', array(
		'selector'        => '.iconList__csz',
		'render_callback' => 'tx_csz',
	) );


	//PHONE
	$wp_customize->add_setting( 'tx_phone_text', array(
		'default'   => '920-555-1234',
		'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'tx_phone_text', array(
		'label'   => 'Phone',
		'section' => 'tx_contact_section',
		'type'    => 'text',
	) );

	$wp_customize->selective_refresh->add_partial( 'tx_phone_text', array(
		'selector'        => '.phoneText',
		'render_callback' => 'tx_phone',
	) );



	//EMAIL
	$wp_customize->add_setting( 'tx_email_text', array(
		'default'   => 'youremail@you.com',
		'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'tx_email_text', array(
		'label'   => 'Email',
		'section' => 'tx_contact_section',
		'type'    => 'text',
	) );

	$wp_customize->selective_refresh->add_partial( 'tx_email_text', array(
		'selector'        => '.emailText',
		'render_callback' => 'tx_email',
	) );


	//HOURS
	$wp_customize->add_setting( 'tx_hours_text', array(
		'default'   => 'Hours Here',
		'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'tx_hours_text', array(
		'label'   => 'Hours',
		'section' => 'tx_contact_section',
		'type'    => 'textarea',
	) );

	$wp_customize->selective_refresh->add_partial( 'tx_hours_text', array(
		'selector'        => '.hoursText',
		'render_callback' => 'tx_hours',
	) );





	//MAP
	$wp_customize->add_setting( 'tx_map_text', array(
		'default'   => 'Add your google map iFrame here',
		'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'tx_map_text', array(
		'label'   => 'Google Map iFrame',
		'section' => 'tx_contact_section',
		'type'    => 'text',
	) );

	$wp_customize->selective_refresh->add_partial( 'tx_map_text', array(
		'selector'        => '.mapBlock',
		'render_callback' => 'tx_map',
	) );




}

//EMAIL
function tx_email() {

	echo get_theme_mod( 'tx_email_text', 'youremail@you.com' );

}

add_action( 'customize_preview_init', 'tx_email_js' );
function tx_email_js() {
	wp_enqueue_script(
		'tx_email_js',
		get_template_directory_uri() . '/customizer/components/js/contact.js',
		array( 'jquery', 'customize-preview' ),
		'',
		true
	);
}




//PHONE
function tx_phone() {

	echo get_theme_mod( 'tx_phone_text', '920-555-1234' );

}

add_action( 'customize_preview_init', 'tx_phone_js' );
function tx_phone_js() {
	wp_enqueue_script(
		'tx_phone_js',
		get_template_directory_uri() . '/customizer/components/js/contact.js',
		array( 'jquery', 'customize-preview' ),
		'',
		true
	);
}




//HOURS
function tx_hours() {

	echo get_theme_mod( 'tx_hours_text', 'Hours Here' );

}

add_action( 'customize_preview_init', 'tx_hours_js' );
function tx_hours_js() {
	wp_enqueue_script(
		'tx_hours_js',
		get_template_directory_uri() . '/customizer/components/js/contact.js',
		array( 'jquery', 'customize-preview' ),
		'',
		true
	);
}









//MAP
function tx_map() {

	echo get_theme_mod( 'tx_map_text', 'Add your google map iFrame here' );

}

add_action( 'customize_preview_init', 'tx_map_js' );
function tx_map_js() {
	wp_enqueue_script(
		'tx_map_js',
		get_template_directory_uri() . '/customizer/components/js/contact.js',
		array( 'jquery', 'customize-preview' ),
		'',
		true
	);
}




//STREET
function tx_street() {

	echo get_theme_mod( 'tx_street_text', '987 S Main ST' );

}

add_action( 'customize_preview_init', 'tx_street_js' );
function tx_street_js() {
	wp_enqueue_script(
		'tx_street_js',
		get_template_directory_uri() . '/customizer/components/js/contact.js',
		array( 'jquery', 'customize-preview' ),
		'',
		true
	);
}



//CSZ
function tx_csz() {

	echo get_theme_mod( 'tx_csz_text', 'Fond du Lac, WI 54935' );

}

add_action( 'customize_preview_init', 'tx_csz_js' );
function tx_csz_js() {
	wp_enqueue_script(
		'tx_csz_js',
		get_template_directory_uri() . '/customizer/components/js/contact.js',
		array( 'jquery', 'customize-preview' ),
		'',
		true
	);
}





