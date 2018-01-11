<?php
/**
 * WooCommerce General Options for Astra Theme.
 *
 * @package     Astra
 * @author      Astra
 * @copyright   Copyright (c) 2018, Astra
 * @link        http://wpastra.com/
 * @since       Astra 1.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

	/**
	 * Option: Divider
	 */
	$wp_customize->add_control(
		new Astra_Control_Divider(
			$wp_customize, ASTRA_THEME_SETTINGS . '[woo-button-divider]', array(
				'section'  => 'section-woo-general',
				'type'     => 'ast-divider',
				'label'    => __( 'Button', 'astra-addon' ),
				'settings' => array(),
				'priority' => 10,
			)
		)
	);

	/**
	 * Option: Vertical Padding
	 */
	$wp_customize->add_setting(
		ASTRA_THEME_SETTINGS . '[woo-button-v-padding]', array(
			'default'           => astra_get_option( 'woo-button-v-padding' ),
			'type'              => 'option',
			'transport'         => 'postMessage',
			'sanitize_callback' => array( 'Astra_Customizer_Sanitizes', 'sanitize_number' ),
		)
	);
	$wp_customize->add_control(
		ASTRA_THEME_SETTINGS . '[woo-button-v-padding]', array(
			'section'     => 'section-woo-general',
			'label'       => __( 'Vertical Padding', 'astra-addon' ),
			'type'        => 'number',
			'priority' => 20,
			'input_attrs' => array(
				'min'  => 1,
				'step' => 1,
				'max'  => 200,
			),
		)
	);

	/**
	 * Option: Horizontal Padding
	 */
	$wp_customize->add_setting(
		ASTRA_THEME_SETTINGS . '[woo-button-h-padding]', array(
			'default'           => astra_get_option( 'woo-button-h-padding' ),
			'type'              => 'option',
			'transport'         => 'postMessage',
			'sanitize_callback' => array( 'Astra_Customizer_Sanitizes', 'sanitize_number' ),
		)
	);
	$wp_customize->add_control(
		ASTRA_THEME_SETTINGS . '[woo-button-h-padding]', array(
			'section'     => 'section-woo-general',
			'label'       => __( 'Horizontal Padding', 'astra-addon' ),
			'type'        => 'number',
			'priority' => 30,
			'input_attrs' => array(
				'min'  => 1,
				'step' => 1,
				'max'  => 200,
			),
		)
	);
