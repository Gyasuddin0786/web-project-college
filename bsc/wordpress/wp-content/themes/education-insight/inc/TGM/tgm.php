<?php
	
load_template( get_template_directory() . '/inc/TGM/class-tgm-plugin-activation.php' );

/**
 * Recommended plugins.
 */
function education_insight_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'WooCommerce', 'education-insight' ),
			'slug'             => 'woocommerce',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Ovation Elements', 'education-insight' ),
			'slug'             => 'ovation-elements',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	education_insight_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'education_insight_register_recommended_plugins' );