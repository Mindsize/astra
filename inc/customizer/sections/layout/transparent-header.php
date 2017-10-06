<?php
/**
 * Transparent Header Options for Astra Theme.
 *
 * @package     Astra
 * @author      Astra
 * @copyright   Copyright (c) 2017, Astra
 * @link        http://wpastra.com/
 * @since       Astra 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

	/**
	 * Option: Transparent header logo selector
	 */
	$wp_customize->add_setting(
		ASTRA_THEME_SETTINGS . '[transparent-header-logo]', array(
			'default'           => astra_get_option( 'transparent-header-logo' ),
			'type'              => 'option',
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize, ASTRA_THEME_SETTINGS . '[transparent-header-logo]', array(
				'section'  => 'section-transparent-header',
				'priority' => 5,
				'label'    => __( 'Logo', 'astra-addon' ),
				'library_filter' => array( 'gif', 'jpg', 'jpeg', 'png', 'ico' ),
			)
		)
	);

	/**
	 * Option: Transparent header logo selector
	 */
	$wp_customize->add_setting(
		ASTRA_THEME_SETTINGS . '[transparent-header-retina-logo]', array(
			'default'           => astra_get_option( 'transparent-header-retina-logo' ),
			'type'              => 'option',
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize, ASTRA_THEME_SETTINGS . '[transparent-header-retina-logo]', array(
				'section'  => 'section-transparent-header',
				'priority' => 10,
				'label'    => __( 'Retina Logo', 'astra-addon' ),
				'library_filter' => array( 'gif', 'jpg', 'jpeg', 'png', 'ico' ),
			)
		)
	);

	/**
	 * Option: Transparent header logo width
	 */
	$wp_customize->add_setting(
		ASTRA_THEME_SETTINGS . '[transparent-header-logo-width]', array(
			'default'           => astra_get_option( 'transparent-header-logo-width' ),
			'type'              => 'option',
			'transport'         => 'postMessage',
			'sanitize_callback' => array( 'Astra_Customizer_Sanitizes', 'sanitize_number_n_blank' ),
		)
	);
	$wp_customize->add_control(
		new Astra_Control_Slider(
			$wp_customize, ASTRA_THEME_SETTINGS . '[transparent-header-logo-width]', array(
				'type'        => 'ast-slider',
				'section'     => 'section-transparent-header',
				'priority'    => 15,
				'label'       => __( 'Logo Width', 'astra-addon' ),
				'input_attrs' => array(
					'min'  => 50,
					'step' => 1,
					'max'  => 600,
				),
			)
		)
	);
	
	/**
	 * Option: Enable Transparent Header
	 */
	$wp_customize->add_setting(
		ASTRA_THEME_SETTINGS . '[transparent-header-enable]', array(
			'default'           => astra_get_option( 'transparent-header-enable' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'Astra_Customizer_Sanitizes', 'sanitize_checkbox' ),
		)
	);
	$wp_customize->add_control(
		ASTRA_THEME_SETTINGS . '[transparent-header-enable]', array(
			'section'  => 'section-transparent-header',
			'label'    => __( 'Enable on Complete Website', 'astra-addon' ),
			'priority' => 20,
			'type'     => 'checkbox',
		)
	);

	/**
	 * Option: Disable Transparent Header on Archive Pages
	 */
	$wp_customize->add_setting(
		ASTRA_THEME_SETTINGS . '[transparent-header-disable-archive]', array(
			'default'           => astra_get_option( 'transparent-header-disable-archive' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'Astra_Customizer_Sanitizes', 'sanitize_checkbox' ),
		)
	);
	$wp_customize->add_control(
		ASTRA_THEME_SETTINGS . '[transparent-header-disable-archive]', array(
			'section'  => 'section-transparent-header',
			'label'    => __( 'Force Disable on Archive Pages?', 'astra-addon' ),
			'priority' => 25,
			'type'     => 'checkbox',
		)
	);