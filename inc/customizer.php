<?php
/**
 * GYM: Customizer
 *
 * @package WordPress
 * @subpackage GYM
 * @since GYM 1.0
 */

 /*
   Including Customization Support 
*/

function mytheme_customize_register( $wp_customize ) {
   //All our sections, settings, and controls will be added here

    $wp_customize->add_panel('panel_id',array(
        'panel'=>'panel_id',
        'title'=>__('Theme Options'),
        'priority'=>10,
    ));

    // Sections here.
    $wp_customize->add_section( 'mytheme_new_section_name' , array(
        'panel' => 'panel_id',
    'title'      => __( 'Visible Section Name', 'mytheme' ),
    'priority'   => 10,
    ) );

    $wp_customize->add_section('mytheme_new_section', array(
        'panel' => 'panel_id',
        'title' => __('Second Section Name', 'mytheme'),
        'priority' => 20,
    ));

    $wp_customize->add_section('mytheme_new_new_section', array(
        'panel' => 'panel_id',
        'title' => __('Third Section Name', 'mytheme'),
        'priority' => 30,
    ));



    // First Section.
        $wp_customize->add_setting(
        'primary_color',
        array(
            'default'           => 'default',
            'transport'         => 'postMessage',
            'sanitize_callback' => 'twentynineteen_sanitize_color_option',
        )
    );

    $wp_customize->add_control(
        'primary_color',
        array(
            'type'     => 'radio',
            'label'    => __( 'Primarys Color', 'twentynineteen' ),
            'choices'  => array(
                'default' => _x( 'Default', 'primary color', 'twentynineteen' ),
                'custom'  => _x( 'Custom', 'primary color', 'twentynineteen' ),
            ),
            'section'  => 'mytheme_new_section',
            'priority' => 5,
        )
    );

    // Second Section 
        $wp_customize->add_setting(
        'primary_colors',
        array(
            'default'           => 'default',
            'transport'         => 'postMessage',
            'sanitize_callback' => 'twentynineteen_sanitize_color_option',
        )
    );

    $wp_customize->add_control(
        'primary_colors',
        array(
            'type'     => 'radio',
            'label'    => __( 'Primary Text Color', 'gym' ),
            'choices'  => array(
                'default' => _x( 'Default', 'primary color', 'gym' ),
                'custom'  => _x( 'Custom', 'primary color', 'gym' ),
            ),
            'section'  => 'mytheme_new_section_name',
            'priority' => 5,
        )
    );

    //Third Section
    $wp_customize->add_setting(
        'primarys_colors',
        array(
            'default'           => 'default',
            'transport'         => 'postMessage',
            'sanitize_callback' => 'gym_sanitize_color_option',
            'type' => 'theme_mod',
        )
    );

    $wp_customize->add_control(
        'primarys_colors',
        array(
            'type'     => 'radio',
            'label'    => __( 'Primary Updated Text Color', 'gym' ),
            'choices'  => array(
                'default' => _x( 'Default', 'primary color', 'gym' ),
                'custom'  => _x( 'Custom', 'primary color', 'gym' ),
            ),
            'section'  => 'mytheme_new_new_section',
            'priority' => 5,
        )
    );
}
add_action( 'customize_register', 'mytheme_customize_register' );