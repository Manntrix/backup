<?php

function medizco_fw_ext_backups_demos( $demos ) {
	$demo_content_installer	 = 'http://xpeedstudio.net/demo-content/medizco';
	$demos_array			 = array(
		'default'			 => array(
			'title'			 => esc_html__( 'Medical, Dental, SkinCare 3 style together', 'medizco' ),
			'screenshot'	 => $demo_content_installer . '/default/screenshot.png',
			'preview_link'	 => esc_url( 'https://wp.xpeedstudio.com/medizco/' ),
		),
		'home_four'			 => array(
			'title'			 => esc_html__( 'Child care', 'medizco' ),
			'screenshot'	 => $demo_content_installer . '/home_four/screenshot.png',
			'preview_link'	 => esc_url( 'https://wp.xpeedstudio.com/medizco/home-4/' ),
		),
		'home_five'			 => array(
			'title'			 => esc_html__( 'Specialist', 'medizco' ),
			'screenshot'	 => $demo_content_installer . '/home_five/screenshot.png',
			'preview_link'	 => esc_url( 'https://wp.xpeedstudio.com/medizco/home-5/' ),
		),
		'home_six'			 => array(
			'title'			 => esc_html__( 'Eye Specialist', 'medizco' ),
			'screenshot'	 => $demo_content_installer . '/home_six/screenshot.png',
			'preview_link'	 => esc_url( 'https://wp.xpeedstudio.com/medizco/home-6/' ),
		),
		'covid_one'			 => array(
			'title'			 => esc_html__( 'Covid 19 One', 'medizco' ),
			'screenshot'	 => $demo_content_installer . '/covid_one/screenshot.png',
			'preview_link'	 => esc_url( 'https://wp.xpeedstudio.com/medizco/covid-one/' ),
		),
		'covid_two'			 => array(
			'title'			 => esc_html__( 'Covid 19 Two', 'medizco' ),
			'screenshot'	 => $demo_content_installer . '/covid_two/screenshot.png',
			'preview_link'	 => esc_url( 'https://wp.xpeedstudio.com/medizco/covid-two/' ),
		),
		'rtl'			 => array(
			'title'			 => esc_html__( 'RTL', 'medizco' ),
			'screenshot'	 => $demo_content_installer . '/rtl/screenshot.png',
			'preview_link'	 => esc_url( 'https://wp.xpeedstudio.com/rtl/medizco/' ),
		),
	);
	$download_url = esc_url( $demo_content_installer ) . '/manifest.php';
	foreach ( $demos_array as $id => $data ) {
		$demo = new FW_Ext_Backups_Demo( $id, 'piecemeal', array(
			'url'		 => $download_url,
			'file_id'	 => $id,
		) );
		$demo->set_title( $data[ 'title' ] );
		$demo->set_screenshot( $data[ 'screenshot' ] );
		$demo->set_preview_link( $data[ 'preview_link' ] );
		$demos[ $demo->get_id() ] = $demo;
		unset( $demo );
	}
	return $demos;
}
add_filter( 'fw:ext:backups-demo:demos', 'medizco_fw_ext_backups_demos' );
