<?php if ( !defined( 'FW' ) ) {	die( 'Forbidden' ); }

$options = array(
	'settings-featured-video' => array(
		'title'		 => esc_html__( 'Featured video', 'medizco' ),
		'type'		 => 'box',
		'priority'	 => 'default',
		'context'	 => 'side',
		'options'	 => array(
			'featured_video'	 => array(
				'type'	 => 'text',
				'label'	 => esc_html__( 'Video URL', 'medizco' ),
				'desc'	 => esc_html__( 'Paste a video link from Youtube, Vimeo, Dailymotion, Facebook or Twitter it will be embedded in the post and the thumb used as the featured image of this post. You need to choose "Video Format" as post format to use "Featured Video".', 'medizco' ),
			)
		),
	),


	'settings-featured-audio' => array(
		'title'		 => esc_html__( 'Featured audio', 'medizco' ),
		'type'		 => 'box',
		'priority'	 => 'default',
		'context'	 => 'side',
		'options'	 => array(
			'featured_audio'	 => array(
				'type'	 => 'text',
				'label'	 => esc_html__( 'Audio URL', 'medizco' ),
				'desc'	 => esc_html__( 'Paste a soundcloud link here.', 'medizco' ),
			)
		),
	),
	
	'settings-featured-gallery' => array(
		'title'		 => esc_html__( 'Featured gallary', 'medizco' ),
		'type'		 => 'box',
		'priority'	 => 'default',
		'context'	 => 'side',
		'options'	 => array(
			'featured_gallery'	 => array(
				'type'	 => 'multi-upload',
				'images_only' => true,
				'label'	 => esc_html__( 'Featured gallery', 'medizco' ),
				'desc'	 => esc_html__( 'Select featured gallery images for this post.', 'medizco' ),
			)
		),
	),

);
