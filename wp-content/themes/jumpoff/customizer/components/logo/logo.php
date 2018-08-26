<?php


add_action( 'customize_register', 'tx_logo_settings' );
function tx_logo_settings( $wp_customize ) {


	$wp_customize->add_section( 'tx_logo', array(
		'title'    => 'Logo',
		'priority' => 1,
	) );


	$wpuri = get_stylesheet_directory_uri();
	$defaultLogo = $wpuri.'/img/default-logo.png';

	$wp_customize->add_setting( 'tx_logo_upload', array(
		'default'   => $defaultLogo,
		'transport' => 'postMessage',
	) );




	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'logo',
			array(
				'label'      => __( 'Upload a logo', 'TEDx' ),
				'section'    => 'tx_logo',
				'settings'   => 'tx_logo_upload'
			)
		)
	);





	$wp_customize->selective_refresh->add_partial( 'tx_logo_upload', array(
		'selector'        => '#logoUpload',
		'render_callback' => 'tx_logo',
	) );

}



function tx_logo() {


	$wpuri = get_stylesheet_directory_uri();
	$defaultLogo = $wpuri.'/img/default-logo.png';

	if(is_front_page()){
		echo '<img class="logo" src="'.get_theme_mod( 'tx_logo_upload', $defaultLogo ).'" alt="">';
	}
	else{
		echo '<img class="logo logo-x-small" src="'.get_theme_mod( 'tx_logo_upload', $defaultLogo ).'" alt="">';
	}



}


add_action( 'customize_preview_init', 'tx_logo_js' );
function tx_logo_js() {
	wp_enqueue_script(
		'tx_logo_js',
		get_template_directory_uri() . '/customizer/components/js/logo.js',
		array( 'jquery', 'customize-preview' ),
		'',
		true
	);
}




