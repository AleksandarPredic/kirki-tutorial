<?php
/**
 * Class responsible for adding options in Customizer
 */
class Twentysixteen_Child_Kirki_Fields {

	/**
	 * Constructor
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'setup_options' ) );
	}	
	
	/**
	 * Add our custom fields to the Customizer
	 */
	public function setup_options() {
		
		// Add configuration
		Twentysixteen_Child_Kirki::add_config( 'twentysixteen_child_config', array(
			'capability' => 'edit_theme_options',
			'option_type' => 'theme_mod',
		) );
		
		// Add section
		Twentysixteen_Child_Kirki::add_section( 'twentysixteen_child_custom_css', array(
			'title'          => esc_html__( 'Custom colors', 'twenty-sixteen-child' ),
			'description'    => esc_html__( 'Add custom colors here', 'twenty-sixteen-child' ),
			'priority'       => 160,
			'capability'     => 'edit_theme_options',
		) );
		
		// Add field
		Twentysixteen_Child_Kirki::add_field( 'twentysixteen_child_config', array(
			'type'        => 'color',
			'settings'    => 'site_color',
			'label'       => esc_html__( 'This is the label', 'twenty-sixteen-child' ),
			'section'     => 'twentysixteen_child_custom_css',
			'default'     => '#0088CC',
			'priority'    => 10,
			'alpha'       => true,
			'output'       => array(
				array(
					'element'  => '.site',
					'property' => 'background',
				),
			),
		) );
		
	}
}
// Init class
new Twentysixteen_Child_Kirki_Fields();