<?php
/**
 * Single Post Options for Astra Theme.
 *
 * @package     Astra
 * @author      Astra
 * @copyright   Copyright (c) 2018, Astra
 * @link        http://wpastra.com/
 * @since       Astra 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

	/**
	 * Option: Display Post Structure
	 */
	$wp_customize->add_setting(
		ASTRA_THEME_SETTINGS . '[blog-single-post-structure]', array(
			'default'           => astra_get_option( 'blog-single-post-structure' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'Astra_Customizer_Sanitizes', 'sanitize_multi_choices' ),
		)
	);
	$wp_customize->add_control(
		new Astra_Control_Sortable(
			$wp_customize, ASTRA_THEME_SETTINGS . '[blog-single-post-structure]', array(
				'type'     => 'ast-sortable',
				'section'  => 'section-blog-single',
				'priority' => 5,
				'label'    => __( 'Single Post Structure', 'astra' ),
				'choices'  => array(
					'single-image'      => __( 'Featured Image', 'astra' ),
					'single-title-meta' => __( 'Title & Blog Meta', 'astra' ),
				),
			)
		)
	);

	/**
	 * Option: Single Post Meta
	 */
	$wp_customize->add_setting(
		ASTRA_THEME_SETTINGS . '[blog-single-meta]', array(
			'default'           => astra_get_option( 'blog-single-meta' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'Astra_Customizer_Sanitizes', 'sanitize_multi_choices' ),
		)
	);
	$wp_customize->add_control(
		new Astra_Control_Sortable(
			$wp_customize, ASTRA_THEME_SETTINGS . '[blog-single-meta]', array(
				'type'     => 'ast-sortable',
				'section'  => 'section-blog-single',
				'priority' => 5,
				'label'    => __( 'Single Post Meta', 'astra' ),
				'choices'  => array(
					'comments' => __( 'Comments', 'astra' ),
					'category' => __( 'Category', 'astra' ),
					'author'   => __( 'Author', 'astra' ),
					'date'     => __( 'Publish Date', 'astra' ),
					'tag'      => __( 'Tag', 'astra' ),
				),
			)
		)
	);

	/**
	 * Option: Divider
	 */
	$wp_customize->add_control(
		new Astra_Control_Divider(
			$wp_customize, ASTRA_THEME_SETTINGS . '[ast-styling-section-single-blog-layouts]', array(
				'type'     => 'ast-divider',
				'section'  => 'section-blog-single',
				'priority' => 10,
				'settings' => array(),
			)
		)
	);

	/**
	 * Option: Single Post Content Width
	 */
	$wp_customize->add_setting(
		ASTRA_THEME_SETTINGS . '[blog-single-width]', array(
			'default'           => astra_get_option( 'blog-single-width' ),
			'type'              => 'option',
			'sanitize_callback' => array( 'Astra_Customizer_Sanitizes', 'sanitize_choices' ),
		)
	);
	$wp_customize->add_control(
		ASTRA_THEME_SETTINGS . '[blog-single-width]', array(
			'type'     => 'select',
			'section'  => 'section-blog-single',
			'priority' => 15,
			'label'    => __( 'Single Post Content Width', 'astra' ),
			'choices'  => array(
				'default' => __( 'Default', 'astra' ),
				'custom'  => __( 'Custom', 'astra' ),
			),
		)
	);

	/**
	 * Option: Enter Width
	 */
	$wp_customize->add_setting(
		ASTRA_THEME_SETTINGS . '[blog-single-max-width]', array(
			'default'           => 1200,
			'type'              => 'option',
			'transport'         => 'postMessage',
			'sanitize_callback' => array( 'Astra_Customizer_Sanitizes', 'sanitize_number' ),
		)
	);
	$wp_customize->add_control(
		new Astra_Control_Slider(
			$wp_customize, ASTRA_THEME_SETTINGS . '[blog-single-max-width]', array(
				'type'        => 'ast-slider',
				'section'     => 'section-blog-single',
				'priority'    => 20,
				'label'       => __( 'Enter Width', 'astra' ),
				'suffix'      => '',
				'input_attrs' => array(
					'min'  => 768,
					'step' => 1,
					'max'  => 1920,
				),
			)
		)
	);
