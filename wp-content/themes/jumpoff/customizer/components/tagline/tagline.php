<?php


add_action( 'customize_register', 'tx_tagline_settings' );
function tx_tagline_settings( $wp_customize ) {


	$wp_customize->add_section( 'tx_tagline', array(
		'title'    => 'Your TEDx Tagline',
		'priority' => 3,
	) );

	$wp_customize->add_setting( 'tx_tagline_text', array(
		'default'   => 'Optional Theme Tagline',
		'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'tx_tagline_text', array(
		'label'   => 'Tagline Text',
		'section' => 'tx_tagline',
		'type'    => 'text',
	) );

	$wp_customize->selective_refresh->add_partial( 'tx_tagline_text', array(
		'selector'        => '#tagline',
		'render_callback' => 'tx_tagline',
	) );

}


function tx_tagline() {

	if ( get_theme_mod( 'tx_tagline_text', 'Optional Theme Tagline' ) ) {
		echo ' <span class="tag_divider"> -</span> <span class="tag_lower">' . get_theme_mod( 'tx_tagline_text', 'Optional Theme Tagline' ) . ' </span>';

	}


}


add_action( 'customize_preview_init', 'tx_tagline_js' );
function tx_tagline_js() {
	wp_enqueue_script(
		'tx_tagline_js',
		get_template_directory_uri() . '/customizer/components/js/tagline.js',
		array( 'jquery', 'customize-preview' ),
		'',
		true
	);
}




