<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * register required plugins
 */

function medizco_register_required_plugins() {
	$plugins	 = array(
		array(
			'name'		 => __( 'Unyson', 'medizco' ),
			'slug'		 => 'unyson',
			'required'	 => true,
		),
		array(
			'name'		 => __( 'Elementor', 'medizco' ),
			'slug'		 => 'elementor',
			'required'	 => true,
		),
		array(
			'name'		 => __( 'ElementsKit Lite', 'medizco' ),
			'slug'		 => 'elementskit-lite',
			'required'	 => true,
		),
		array(
			'name'		 => __( 'MetForm', 'medizco' ),
			'slug'		 => 'metform',
			'required'	 => true,
		),
		array(
			'name'		 => __( 'Corona Virus Data', 'medizco' ),
			'slug'		 => 'corona-virus-data',
			'required'	 => true,
		),
		array(
			'name'		 => __( 'Medizco Essentials', 'medizco' ),
			'slug'		 => 'medizco-essential',
			'required'	 => true,
			'version'	 => '1.2',
      		'source'	 => MEDIZCO_REMOTE_CONTENT . '/plugins/medizco-essential.zip',
		),
		array(
			'name'		 => __( 'Slider Revolution', 'medizco' ),
			'slug'		 => 'revslider',
			'required'	 => true,
			'version'	 => '6.2.22',
			'source'	 => MEDIZCO_REMOTE_CONTENT . '/plugins/revslider.zip',
		),
		array(
			'name'		 => __( 'Timetable and Event Schedule', 'medizco' ),
			'slug'		 => 'mp-timetable',
			'required'	 => true,
		),
		array(
			'name'		 => __( 'Woocommerce', 'medizco' ),
			'slug'		 => 'woocommerce',
			'required'	 => true,
		),
	);


	$config = array(
		'id'			 => 'medizco', // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path'	 => '', // Default absolute path to bundled plugins.
		'menu'			 => 'medizco-install-plugins', // Menu slug.
		'parent_slug'	 => 'themes.php', // Parent menu slug.
		'capability'	 => 'edit_theme_options', // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'	 => true, // Show admin notices or not.
		'dismissable'	 => true, // If false, a user cannot dismiss the nag message.
		'dismiss_msg'	 => '', // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic'	 => false, // Automatically activate plugins after installation or not.
		'message'		 => '', // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}

add_action( 'tgmpa_register', 'medizco_register_required_plugins' );
