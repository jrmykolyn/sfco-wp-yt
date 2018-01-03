<?php

/**
 * Wrapper around all theme-specific option logic.
 */
function do_customize_register( $wp_customize ) {
    // --------------------------------------------------
    // Add section(s).
    // --------------------------------------------------
    $wp_customize->add_section( 'yt_preheader', array(
        'title'       => __( 'Preheader', 'yt' ),
        'capability'  => 'edit_theme_options',
    ) );

    // --------------------------------------------------
    // Add field(s).
    // --------------------------------------------------
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
