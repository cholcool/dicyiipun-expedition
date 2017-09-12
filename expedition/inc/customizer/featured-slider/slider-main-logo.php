<?php
global $expedition_panels;
global $expedition_sections;
global $expedition_settings_controls;
global $expedition_repeated_settings_controls;
global $expedition_customizer_defaults;

/*defaults values*/
$expedition_customizer_defaults['expedition-im-slide-main-logo-image'] = '';
$expedition_customizer_defaults['expedition-im-slide-main-logo-image-title'] = '';
$expedition_customizer_defaults['expedition-im-slide-main-logo-image-content'] = '';
$expedition_customizer_defaults['expedition-im-slide-main-logo-image-link'] = '';
$expedition_customizer_defaults['expedition-im-slide-main-logo-image-tagline'] = '';

/*defaults options*/
$expedition_sections['expedition-im-slide-main-logo-options'] =
    array(
        'priority'       => 90,
        'title'          => __( 'Slide Main Logo Options', 'expedition' ),
        'panel'          => 'expedition-featured-slider'
    );

/*defaults customizer*/
$expedition_settings_controls['expedition-im-slide-main-logo-image'] =
    array(
        'setting' =>     array(
            'default'              => $expedition_customizer_defaults['expedition-im-slide-main-logo-image'],
        ),
        'control' => array(
            'label'                 =>  __( 'Upload Main Image', 'expedition' ),
            'description'           =>  __( 'Recommended Image size 580*223', 'expedition' ),
            'section'               => 'expedition-im-slide-main-logo-options',
            'type'                  => 'image',
            'priority'              => 10,
        )
    );

$expedition_settings_controls['expedition-im-slide-main-logo-image-title'] =
    array(
        'setting' =>     array(
            'default'              => $expedition_customizer_defaults['expedition-im-slide-main-logo-image-title'],
        ),
        'control' => array(
            'label'                 =>  __( 'Title Main ', 'expedition' ),
            'section'               => 'expedition-im-slide-main-logo-options',
            'type'                  => 'text',
            'priority'              => 20,
            'active_callback'       => ''
        )
    );

$expedition_settings_controls['expedition-im-slide-main-logo-image-content'] =
    array(
        'setting' =>     array(
            'default'              => $expedition_customizer_defaults['expedition-im-slide-main-logo-image-content'],
        ),
        'control' => array(
            'label'                 =>  __( 'Content Main', 'expedition' ),
            'section'               => 'expedition-im-slide-main-logo-options',
            'type'                  => 'textarea_html',
            'priority'              => 30,
            'active_callback'       => ''
        )
    );
    
$expedition_settings_controls['expedition-im-slide-main-logo-image-link'] =
    array(
        'setting' =>     array(
            'default'              => $expedition_customizer_defaults['expedition-im-slide-main-logo-image-link'],
        ),
        'control' => array(
            'label'                 =>  __( 'Link', 'expedition' ),
            'section'               => 'expedition-im-slide-main-logo-options',
            'type'                  => 'text',
            'priority'              => 40,
            'active_callback'       => ''
        )
    );
    
$expedition_settings_controls['expedition-im-slide-main-logo-image-tagline'] =
    array(
        'setting' =>     array(
            'default'              => $expedition_customizer_defaults['expedition-im-slide-main-logo-image-tagline'],
        ),
        'control' => array(
            'label'                 =>  __( 'Tagline Main Image', 'expedition' ),
            'section'               => 'expedition-im-slide-main-logo-options',
            'type'                  => 'text',
            'priority'              => 50,
            'active_callback'       => ''
        )
    );