<?php
/**
* Wrapper around all theme-specific option logic.
*/
function do_customize_register( $wp_customize ) {
	// --------------------------------------------------
	// Add panel(s).
	// --------------------------------------------------
	$wp_customize->add_panel( 'yt_footer', array(
		'title' => __( 'Footer', 'yt' ),
		'capability'  => 'edit_theme_options',
	) );

	// --------------------------------------------------
	// Add section(s).
	// --------------------------------------------------
	$wp_customize->add_section( 'yt_footer_msg', array(
		'title'       => __( 'Footer Message', 'yt' ),
		'panel' => 'yt_footer',
	) );

	$wp_customize->add_section( 'yt_footer_attribution', array(
		'title'       => __( 'Footer Attribution', 'yt' ),
		'panel' => 'yt_footer',
	) );

	$wp_customize->add_section( 'yt_preheader', array(
		'title'       => __( 'Preheader', 'yt' ),
		'capability'  => 'edit_theme_options',
	) );

	// --------------------------------------------------
	// Add field(s).
	// --------------------------------------------------
	/**
	* Logo.
	*/
	$wp_customize->add_setting( 'yt_header_logo', array(
		'default' => '',
		'transport' => 'refresh',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'yt_header_logo', array(
		'label'      => __( 'Logo', 'yt' ),
		'description' => 'Use this field upload the site logo. Asset should be 3:1 aspect ratio, minimum dimensions: 300px x 100px.',
		'section'    => 'title_tagline',
		'settings'   => 'yt_header_logo',
	) ) );

	/**
	* Hide logo.
	*/
	$wp_customize->add_setting( 'yt_header_hide_logo', array(
		'default' => '',
		'transport' => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'yt_header_hide_logo', array(
		'label'      => __( 'Hide Logo', 'yt' ),
		'description' => 'If checked, the header will display the site title <em>instead</em> of the logo.',
		'section'    => 'title_tagline',
		'settings'   => 'yt_header_hide_logo',
		'type' => 'checkbox',
	) ) );

	/**
	* Footer Message.
	*/
	$wp_customize->add_setting( 'yt_footer_msg_title', array(
		'default' => '',
		'transport' => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'yt_footer_msg_title', array(
		'label'      => __( 'Title', 'yt' ),
		'description' => 'Use this field to include a title above the footer message.',
		'section'    => 'yt_footer_msg',
		'settings'   => 'yt_footer_msg_title',
	) ) );

	$wp_customize->add_setting( 'yt_footer_msg_text', array(
		'default' => '',
		'transport' => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'yt_footer_msg_text', array(
		'label'      => __( 'Text', 'yt' ),
		'description' => 'Use this field to populate the footer element with a short message. Leave this field blank to omit the message.',
		'section'    => 'yt_footer_msg',
		'settings'   => 'yt_footer_msg_text',
		'type' => 'textarea',
	) ) );

	/**
	* Footer Attribution.
	*/
	$wp_customize->add_setting( 'yt_footer_attribution_text', array(
		'default' => '',
		'transport' => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'yt_footer_attribution_text', array(
		'label'      => __( 'Text', 'yt' ),
		'description' => 'Use this field to insert a short string of legal/attribution text.',
		'section'    => 'yt_footer_attribution',
		'settings'   => 'yt_footer_attribution_text',
		'type' => 'textarea',
	) ) );

	/**
	* Preheader.
	*/
	$wp_customize->add_setting( 'yt_preheader_msg' , array(
		'default'   => '',
		'transport' => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'yt_preheader_msg', array(
		'label'      => __( 'Message', 'yt' ),
		'description' => 'Use this field to populate the preheader element with a short message.',
		'section'    => 'yt_preheader',
		'settings'   => 'yt_preheader_msg',
		'type' => 'textarea',
	) ) );

	$wp_customize->add_setting( 'yt_preheader_show' , array(
		'default'   => '',
		'transport' => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'yt_preheader_show', array(
		'label'      => __( 'Show Preheader', 'yt' ),
		'description' => 'Use this checkbox to specify whether the preheader element should be displayed.',
		'section'    => 'yt_preheader',
		'settings'   => 'yt_preheader_show',
		'type' => 'checkbox',
	) ) );
}

add_action( 'customize_register', 'do_customize_register' );
?>
