<?php
global $expedition_panels;
global $expedition_sections;
global $expedition_settings_controls;
global $expedition_repeated_settings_controls;
global $expedition_customizer_defaults;

/*creating panel for general*/
$expedition_panels['expedition-colors'] =
    array(
        'title'          => __( 'Colors', 'expedition' ),
        'description'    => __( 'Customize colors of you awesome site', 'expedition' ),
        'priority'       => 42,
    );

/*Default color*/
$expedition_sections['colors'] =
    array(
        'priority'       => 40,
        'title'          => __( 'Basic Colors Options', 'expedition' ),
        'panel'          => 'expedition-colors',
    );

/*expedition colors*/
$expedition_sections['expedition-colors-reset'] =
    array(
        'priority'       => 60,
        'title'          => __( 'Expedition Colors Reset', 'expedition' ),
        'panel'          => 'expedition-colors',
    );
/*defaults values*/
$expedition_customizer_defaults['expedition-primary-color'] = '#2e5077';
$expedition_customizer_defaults['expedition-alternate-primary-color'] = '#555C68';
$expedition_customizer_defaults['expedition-site-identity-color'] = '#545C68';
$expedition_customizer_defaults['expedition-main-title-color'] = '#313131';
$expedition_customizer_defaults['expedition-main-sub-title-color'] = '#6d6d6d';
$expedition_customizer_defaults['expedition-menu-color'] = '#545c68';
$expedition_customizer_defaults['expedition-text-over-image-color'] = '#fff';
$expedition_customizer_defaults['expedition-button-standard-color'] = '#2e5077';
$expedition_customizer_defaults['expedition-button-border-color'] = '#fff';
$expedition_customizer_defaults['expedition-link-color'] = '#2E5077';
$expedition_customizer_defaults['expedition-primary-hover-color'] = '#DFB200';
$expedition_customizer_defaults['expedition-button-standard-hover-color'] = '#DFB200';

$expedition_customizer_defaults['expedition-bg-header-color'] = '#fff';
$expedition_customizer_defaults['expedition-bg-popular-trip-color'] = '#fff';
$expedition_customizer_defaults['expedition-bg-breadcrumb-color'] = '#1D3A5B';
$expedition_customizer_defaults['expedition-bg-testimonial-color'] = '#656565';
$expedition_customizer_defaults['expedition-bg-letest-post-color'] = '#f1f1f1';
$expedition_customizer_defaults['expedition-bg-footer-color'] = '#636B6B';

$expedition_customizer_defaults['expedition-color-reset'] = '';


/**
 * Reset color settings to default
 *
 * @since expedition 1.0
 */
if ( ! function_exists( 'expedition_color_reset' ) ) :
    function expedition_color_reset(  ) {
        global $expedition_customizer_saved_values;
        $expedition_customizer_saved_values = expedition_get_all_options();
        if ( $expedition_customizer_saved_values['expedition-color-reset'] == 1 ) {
            global $expedition_customizer_defaults;
            global $expedition_customizer_saved_values;
            /*setting fields */
            $expedition_customizer_saved_values['expedition-primary-color'] = $expedition_customizer_defaults['expedition-primary-color'];
            $expedition_customizer_saved_values['expedition-alternate-primary-color'] = $expedition_customizer_defaults['expedition-alternate-primary-color'];
            $expedition_customizer_saved_values['expedition-site-identity-color'] = $expedition_customizer_defaults['expedition-site-identity-color'];
            $expedition_customizer_saved_values['expedition-main-title-color'] = $expedition_customizer_defaults['expedition-main-title-color'];
            $expedition_customizer_saved_values['expedition-main-sub-title-color'] = $expedition_customizer_defaults['expedition-main-sub-title-color'];
            $expedition_customizer_saved_values['expedition-text-over-image-color'] = $expedition_customizer_defaults['expedition-text-over-image-color'];
            $expedition_customizer_saved_values['expedition-menu-color'] =$expedition_customizer_defaults['expedition-menu-color'];
            $expedition_customizer_saved_values['expedition-button-standard-color'] = $expedition_customizer_defaults['expedition-button-standard-color'];
            $expedition_customizer_saved_values['expedition-button-border-color'] = $expedition_customizer_defaults['expedition-button-border-color'];
            $expedition_customizer_saved_values['expedition-link-color'] = $expedition_customizer_defaults['expedition-link-color'];
            $expedition_customizer_saved_values['expedition-home-color-message'] = sprintf( __( '%s Hover Color Options %s', 'expedition' ), '<h3>','</h3>' );
            $expedition_customizer_saved_values['expedition-primary-hover-color'] = $expedition_customizer_defaults['expedition-primary-hover-color'];
            $expedition_customizer_saved_values['expedition-button-standard-hover-color'] = $expedition_customizer_defaults['expedition-button-standard-hover-color'];
            
            $expedition_customizer_saved_values['expedition-bg-header-color'] = $expedition_customizer_defaults['expedition-bg-header-color'];
            $expedition_customizer_saved_values['expedition-bg-popular-trip-color'] = $expedition_customizer_defaults['expedition-bg-popular-trip-color'];
            $expedition_customizer_saved_values['expedition-bg-breadcrumb-color'] = $expedition_customizer_defaults['expedition-bg-breadcrumb-color'];
            $expedition_customizer_saved_values['expedition-bg-testimonial-color'] = $expedition_customizer_defaults['expedition-bg-testimonial-color'];
            $expedition_customizer_saved_values['expedition-bg-letest-post-color'] = $expedition_customizer_defaults['expedition-bg-letest-post-color'];
            $expedition_customizer_saved_values['expedition-bg-footer-color'] = $expedition_customizer_defaults['expedition-bg-footer-color'];
            remove_theme_mod( 'background_color' );
            $expedition_customizer_saved_values['expedition-color-reset'] = '';
            /*resetting fields*/
            expedition_reset_options( $expedition_customizer_saved_values );
        }
        else {
            return '';
        }
    }
endif;
add_action( 'customize_save_after','expedition_color_reset' );

$expedition_settings_controls['expedition-site-identity-color'] =
    array(
        'setting' =>     array(
            'default'              => $expedition_customizer_defaults['expedition-site-identity-color'],
        ),
        'control' => array(
            'label'                 =>  __( 'Site Identity Color', 'expedition' ),
            'description'           =>  __( 'Site title and tagline color', 'expedition' ),
            'section'               => 'colors',
            'type'                  => 'color',
            'priority'              => 30,
            'active_callback'       => ''
        )
    );

$expedition_settings_controls['expedition-main-title-color'] =
    array(
        'setting' =>     array(
            'default'              => $expedition_customizer_defaults['expedition-main-title-color'],
        ),
        'control' => array(
            'label'                 =>  __( 'Section Title Color', 'expedition' ),
            'description'           =>  __( 'Each of main section title color', 'expedition' ),
            'section'               => 'colors',
            'type'                  => 'color',
            'priority'              => 40,
            'active_callback'       => ''
        )
    );

$expedition_settings_controls['expedition-main-sub-title-color'] =
    array(
        'setting' =>     array(
            'default'              => $expedition_customizer_defaults['expedition-main-sub-title-color'],
        ),
        'control' => array(
            'label'                 =>  __( 'Section Sub Title Color', 'expedition' ),
            'description'           =>  __( 'Each of main section sub title color', 'expedition' ),
            'section'               => 'colors',
            'type'                  => 'color',
            'priority'              => 45,
            'active_callback'       => ''
        )
    );

$expedition_settings_controls['expedition-link-color'] =
    array(
        'setting' =>     array(
            'default'              => $expedition_customizer_defaults['expedition-link-color'],
        ),
        'control' => array(
            'label'                 =>  __( 'Link Color', 'expedition' ),
            'section'               => 'colors',
            'type'                  => 'color',
            'priority'              => 65,
            'active_callback'       => ''
        )
    );


$expedition_settings_controls['expedition-bg-letest-post-color'] =
    array(
        'setting' =>     array(
            'default'              => $expedition_customizer_defaults['expedition-bg-letest-post-color'],
        ),
        'control' => array(
            'label'                 =>  __( 'bg letest post Color', 'expedition' ),
            'section'               => 'colors',
            'type'                  => 'color',
            'priority'              => 75,
            'active_callback'       => ''
        )
    );

$expedition_settings_controls['expedition-bg-testimonial-color'] =
    array(
        'setting' =>     array(
            'default'              => $expedition_customizer_defaults['expedition-bg-testimonial-color'],
        ),
        'control' => array(
            'label'                 =>  __( 'bg testimonial Color', 'expedition' ),
            'section'               => 'colors',
            'type'                  => 'color',
            'priority'              => 85,
            'active_callback'       => ''
        )
    );

$expedition_settings_controls['expedition-bg-breadcrumb-color'] =
    array(
        'setting' =>     array(
            'default'              => $expedition_customizer_defaults['expedition-bg-breadcrumb-color'],
        ),
        'control' => array(
            'label'                 =>  __( 'bg breadcrumb Color', 'expedition' ),
            'section'               => 'colors',
            'type'                  => 'color',
            'priority'              => 95,
            'active_callback'       => ''
        )
    );

$expedition_settings_controls['expedition-bg-popular-trip-color'] =
    array(
        'setting' =>     array(
            'default'              => $expedition_customizer_defaults['expedition-bg-popular-trip-color'],
        ),
        'control' => array(
            'label'                 =>  __( 'bg popular trip Color', 'expedition' ),
            'section'               => 'colors',
            'type'                  => 'color',
            'priority'              => 105,
            'active_callback'       => ''
        )
    );

$expedition_settings_controls['expedition-bg-header-color'] =
    array(
        'setting' =>     array(
            'default'              => $expedition_customizer_defaults['expedition-bg-header-color'],
        ),
        'control' => array(
            'label'                 =>  __( 'bg header Color', 'expedition' ),
            'section'               => 'colors',
            'type'                  => 'color',
            'priority'              => 115,
            'active_callback'       => ''
        )
    );

$expedition_settings_controls['expedition-bg-footer-color'] =
    array(
        'setting' =>     array(
            'default'              => $expedition_customizer_defaults['expedition-bg-footer-color'],
        ),
        'control' => array(
            'label'                 =>  __( 'footer Color', 'expedition' ),
            'section'               => 'colors',
            'type'                  => 'color',
            'priority'              => 125,
            'active_callback'       => ''
        )
    );

$expedition_settings_controls['expedition-button-standard-color'] =
    array(
        'setting' =>     array(
            'default'              => $expedition_customizer_defaults['expedition-button-standard-color'],
        ),
        'control' => array(
            'label'                 =>  __( 'button standard Color', 'expedition' ),
            'section'               => 'colors',
            'type'                  => 'color',
            'priority'              => 135,
            'active_callback'       => ''
        )
    );

$expedition_settings_controls['expedition-button-standard-hover-color'] =
    array(
        'setting' =>     array(
            'default'              => $expedition_customizer_defaults['expedition-button-standard-hover-color'],
        ),
        'control' => array(
            'label'                 =>  __( 'button standard hover Color', 'expedition' ),
            'section'               => 'colors',
            'type'                  => 'color',
            'priority'              => 145,
            'active_callback'       => ''
        )
    );

$expedition_settings_controls['expedition-button-border-color'] =
    array(
        'setting' =>     array(
            'default'              => $expedition_customizer_defaults['expedition-button-border-color'],
        ),
        'control' => array(
            'label'                 =>  __( 'button border Color', 'expedition' ),
            'section'               => 'colors',
            'type'                  => 'color',
            'priority'              => 155,
            'active_callback'       => ''
        )
    );

$expedition_settings_controls['expedition-alternate-primary-color'] =
    array(
        'setting' =>     array(
            'default'              => $expedition_customizer_defaults['expedition-alternate-primary-color'],
        ),
        'control' => array(
            'label'                 =>  __( 'button search Color', 'expedition' ),
            'section'               => 'colors',
            'type'                  => 'color',
            'priority'              => 165,
            'active_callback'       => ''
        )
    );

$expedition_settings_controls['expedition-primary-color'] =
    array(
        'setting' =>     array(
            'default'              => $expedition_customizer_defaults['expedition-primary-color'],
        ),
        'control' => array(
            'label'                 =>  __( 'primary Color', 'expedition' ),
            'section'               => 'colors',
            'type'                  => 'color',
            'priority'              => 175,
            'active_callback'       => ''
        )
    );

$expedition_settings_controls['expedition-primary-hover-color'] =
    array(
        'setting' =>     array(
            'default'              => $expedition_customizer_defaults['expedition-primary-hover-color'],
        ),
        'control' => array(
            'label'                 =>  __( 'primary hover Color', 'expedition' ),
            'section'               => 'colors',
            'type'                  => 'color',
            'priority'              => 185,
            'active_callback'       => ''
        )
    );


$expedition_settings_controls['expedition-text-over-image-color'] =
    array(
        'setting' =>     array(
            'default'              => $expedition_customizer_defaults['expedition-text-over-image-color'],
        ),
        'control' => array(
            'label'                 =>  __( 'text over Color', 'expedition' ),
            'section'               => 'colors',
            'type'                  => 'color',
            'priority'              => 195,
            'active_callback'       => ''
        )
    );


$expedition_settings_controls['expedition-color-reset'] =
    array(
        'setting' =>     array(
            'default'              => $expedition_customizer_defaults['expedition-color-reset'],
            'sanitize_callback'    => 'evision_customizer_sanitize_checkbox',
            'transport'            => 'postmessage',
        ),
        'control' => array(
            'label'                 =>  __( 'Reset', 'expedition' ),
            'description'           =>  __( 'Caution: Reset all above color settings to default. Refresh the page after save to view the effects. ', 'expedition' ),
            'section'               => 'expedition-colors-reset',
            'type'                  => 'checkbox',
            'priority'              => 220,
            'active_callback'       => ''
        )
    );