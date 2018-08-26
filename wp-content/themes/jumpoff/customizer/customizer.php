<?php


include 'components/colors/colors.php';
//include 'components/tagline/tagline.php';
//include 'components/date/date.php';
include 'components/contact/contact.php';
//include 'components/actionbtn/actionbtn.php';
//include 'components/email/email.php';
include 'components/logo/logo.php';

add_action( "customize_register", "ruth_sherman_theme_customize_register" );
function ruth_sherman_theme_customize_register( $wp_customize ) {

	//=============================================================
	// Remove header image and widgets option from theme customizer
	//=============================================================
	$wp_customize->remove_control("header_image");
	$wp_customize->remove_panel("widgets");
	$wp_customize->remove_section("static_front_page");
	$wp_customize->remove_section("title_tagline ");

}





