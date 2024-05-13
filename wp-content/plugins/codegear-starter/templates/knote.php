<?php

/**
 * Starter Register Demos
 */

function knote_demos_list() {

	$plugins = array(
		array(
			'name'     => 'Elementor Website Builder',
			'slug'     => 'elementor',
			'path'     => 'elementor/elementor.php',
			'required' => true
		),
		array(
			'name'     => esc_html__( 'Designer - Elementor Addon', 'codegear-starter' ),
			'slug'     => 'designer',
			'path'     => 'designer/designer.php',
			'required' => true
		)
	);

	$demos = array(
		'agency'      => array(
			'id'    => 'CGK10000',
			'name'       => esc_html__( 'Agency', 'codegear-starter' ),
			'type'       => 'free',
			'status'	 => 'active',
			'categories' => array( 'Business', 'Editor', 'Agency' ),
			'builders'   => array(
				'elementor',
			),
			'colors' => array(
				'primary' 	=> '#121212',
				'secondary' => '#D0F224',
				'text' 		=> '#757575',
				'accent' 	=> '#000000'
			),
			'thumbnail'  => 'https://demo.codegearthemes.com/knote/agency/wp-assets/thumb.webp',
			'preview'	 => 'https://demo.codegearthemes.com/?id=CGK10000',
			'plugins'    => array_merge(
				array(
					array(
						'name'     => 'Contact Form 7',
						'slug'     => 'contact-form-7',
						'path'     => 'contact-form-7/wp-contact-form-7.php',
						'required' => false
					)
				),
				$plugins
			),
			'import'     => array(
				'content'    => 'https://demo.codegearthemes.com/knote/agency/wp-assets/knote-agency.xml',
				'widgets'    => 'https://demo.codegearthemes.com/knote/agency/wp-assets/knote-agency.wie',
				'customizer' => 'https://demo.codegearthemes.com/knote/agency/wp-assets/knote-agency.dat',
			),
		),
		'electrician'      => array(
			'id'    => 'CGK10028',
			'name'       => esc_html__( 'Electrician', 'codegear-starter' ),
			'type'       => 'pro',
			'status'	 => 'active',
			'categories' => array( 'Business', 'Local Business', 'Local Services', 'Electrician' ),
			'builders'   => array(
				'elementor',
			),
			'thumbnail'  => 'https://demo.codegearthemes.com/knote/electrician/wp-assets/thumb.webp',
			'preview'	 => 'https://demo.codegearthemes.com/?id=CGK10028',
			'plugins'    => array_merge(
				array(
					array(
						'name'     => 'Contact Form 7',
						'slug'     => 'contact-form-7',
						'path'     => 'contact-form-7/wp-contact-form-7.php',
						'required' => false
					)
				),
				$plugins
			),
			'import'     => array(
				'content'    => 'https://demo.codegearthemes.com/knote/electrician/wp-assets/knote-electrician.xml',
				'widgets'    => 'https://demo.codegearthemes.com/knote/electrician/wp-assets/knote-electrician.wie',
				'customizer' => 'https://demo.codegearthemes.com/knote/electrician/wp-assets/knote-electrician.dat',
			),
		),
		'photography'      => array(
			'id'    => 'CGK10001',
			'name'       => esc_html__( 'Photography', 'codegear-starter' ),
			'type'       => 'free',
			'status'	 => 'active',
			'categories' => array( 'Local Services', 'Editor', 'Salon' ),
			'builders'   => array(
				'elementor',
			),
			'colors' => array(
				'primary' 	=> '#222222',
				'secondary' => '#333333',
				'text' 		=> '#999999',
				'accent' 	=> '#c3c487'
			),
			'thumbnail'  => 'https://demo.codegearthemes.com/knote/photography/wp-assets/thumb.webp',
			'preview'	 => 'https://demo.codegearthemes.com/?id=CGK10001',
			'plugins'    => array_merge(
				array(
					array(
						'name'     => 'Contact Form 7',
						'slug'     => 'contact-form-7',
						'path'     => 'contact-form-7/wp-contact-form-7.php',
						'required' => false
					)
				),
				$plugins
			),
			'import'     => array(
				'content'    => 'https://demo.codegearthemes.com/knote/photography/wp-assets/knote-photography.xml',
				'widgets'    => 'https://demo.codegearthemes.com/knote/photography/wp-assets/knote-photography.wie',
				'customizer' => 'https://demo.codegearthemes.com/knote/photography/wp-assets/knote-photography.dat',
			),
		),
		'therapy'      => array(
			'id'    => 'CGK10029',
			'name'       => esc_html__( 'Therapy', 'codegear-starter' ),
			'type'       => 'free',
			'status'	 => 'active',
			'categories' => array( 'Business', 'Local Business', 'Local Services', 'Therapy' ),
			'builders'   => array(
				'elementor',
			),
			'thumbnail'  => 'https://demo.codegearthemes.com/knote/therapy/wp-assets/thumb.webp',
			'preview'	 => 'https://demo.codegearthemes.com/?id=CGK10029',
			'plugins'    => array_merge(
				array(
					array(
						'name'     => 'Contact Form 7',
						'slug'     => 'contact-form-7',
						'path'     => 'contact-form-7/wp-contact-form-7.php',
						'required' => false
					)
				),
				$plugins
			),
			'import'     => array(
				'content'    => 'https://demo.codegearthemes.com/knote/therapy/wp-assets/knote-therapy.xml',
				'widgets'    => 'https://demo.codegearthemes.com/knote/therapy/wp-assets/knote-therapy.wie',
				'customizer' => 'https://demo.codegearthemes.com/knote/therapy/wp-assets/knote-therapy.dat',
			),
		),
		'fashion'      => array(
			'id'    => 'CGK10022',
			'name'       => esc_html__( 'Fashion', 'codegear-starter' ),
			'type'       => 'pro',
			'status'	 => 'active',
			'categories' => array( 'Ecommerce', 'Editor', 'Clothing', 'Women Clothing' ),
			'builders'   => array(
				'elementor',
			),
			'thumbnail'  => 'https://demo.codegearthemes.com/knote/fashion/wp-assets/thumb.webp',
			'preview'	 => 'https://demo.codegearthemes.com/?id=CGK10022',
			'plugins'    => array_merge(
				array(
					array(
						'name'     => 'Contact Form 7',
						'slug'     => 'contact-form-7',
						'path'     => 'contact-form-7/wp-contact-form-7.php',
						'required' => false
					)
				),
				$plugins
			),
			'import'     => array(
				'content'    => 'https://demo.codegearthemes.com/knote/fashion/wp-assets/knote-fashion.xml',
				'widgets'    => 'https://demo.codegearthemes.com/knote/fashion/wp-assets/knote-fashion.wie',
				'customizer' => 'https://demo.codegearthemes.com/knote/fashion/wp-assets/knote-fashion.dat',
			),
		),
		'pets-care'      => array(
			'id'    => 'CGK10002',
			'name'       => esc_html__( 'Pet Care', 'codegear-starter' ),
			'type'       => 'free',
			'status'	 => 'active',
			'categories' => array( 'Business', 'Local Services', 'Editor', 'Pets' ),
			'builders'   => array(
				'elementor',
			),
			'thumbnail'  => 'https://demo.codegearthemes.com/knote/pets/wp-assets/thumb.webp',
			'preview'	 => 'https://demo.codegearthemes.com/?id=CGK10002',
			'plugins'    => array_merge(
				array(
					array(
						'name'     => 'Contact Form 7',
						'slug'     => 'contact-form-7',
						'path'     => 'contact-form-7/wp-contact-form-7.php',
						'required' => false
					)
				),
				$plugins
			),
			'import'     => array(
				'content'    => 'https://demo.codegearthemes.com/knote/pets/wp-assets/knote-pets.xml',
				'widgets'    => 'https://demo.codegearthemes.com/knote/pets/wp-assets/knote-pets.wie',
				'customizer' => 'https://demo.codegearthemes.com/knote/pets/wp-assets/knote-pets.dat',
			),
		),
		'asana'      => array(
			'id'    	 => 'CGK10026',
			'name'       => esc_html__( 'Asana', 'codegear-starter' ),
			'type'       => 'pro',
			'status'	 => 'active',
			'categories' => array( 'Business', 'Local Services', 'Health & Fitness', 'Editor', 'Yoga' ),
			'builders'   => array(
				'elementor',
			),
			'thumbnail'  => 'https://demo.codegearthemes.com/knote/asana/wp-assets/thumb.webp',
			'preview'	 => 'https://demo.codegearthemes.com/?id=CGK10026',
			'plugins'    => array_merge(
				array(
					array(
						'name'     => 'Contact Form 7',
						'slug'     => 'contact-form-7',
						'path'     => 'contact-form-7/wp-contact-form-7.php',
						'required' => false
					)
				),
				$plugins
			),
			'import'     => array(
				'content'    => 'https://demo.codegearthemes.com/knote/asana/wp-assets/knote-asana.xml',
				'widgets'    => 'https://demo.codegearthemes.com/knote/asana/wp-assets/knote-asana.wie',
				'customizer' => 'https://demo.codegearthemes.com/knote/asana/wp-assets/knote-asana.dat',
			),
		),
		'yoga'      => array(
			'id'    => 'CGK10003',
			'name'       => esc_html__( 'Yoga', 'codegear-starter' ),
			'type'       => 'free',
			'status'	 => 'active',
			'categories' => array( 'Business', 'Local Services', 'Health & Fitness', 'Editor', 'Yoga' ),
			'builders'   => array(
				'elementor',
			),
			'thumbnail'  => 'https://demo.codegearthemes.com/knote/yoga/wp-assets/thumb.webp',
			'preview'	 => 'https://demo.codegearthemes.com/?id=CGK10003',
			'plugins'    => array_merge(
				array(
					array(
						'name'     => 'Contact Form 7',
						'slug'     => 'contact-form-7',
						'path'     => 'contact-form-7/wp-contact-form-7.php',
						'required' => false
					)
				),
				$plugins
			),
			'import'     => array(
				'content'    => 'https://demo.codegearthemes.com/knote/yoga/wp-assets/knote-yoga.xml',
				'widgets'    => 'https://demo.codegearthemes.com/knote/yoga/wp-assets/knote-yoga.wie',
				'customizer' => 'https://demo.codegearthemes.com/knote/yoga/wp-assets/knote-yoga.dat',
			),
		),
		'wellness'      => array(
			'id'    => 'CGK10030',
			'name'       => esc_html__( 'Wellness', 'codegear-starter' ),
			'type'       => 'pro',
			'status'	 => 'active',
			'categories' => array( 'Business', 'Local Services', 'Health & Fitness', 'Yoga' ),
			'builders'   => array(
				'elementor',
			),
			'thumbnail'  => 'https://demo.codegearthemes.com/knote/wellness-yoga/wp-assets/thumb.webp',
			'preview'	 => 'https://demo.codegearthemes.com/?id=CGK10030',
			'plugins'    => array_merge(
				array(
					array(
						'name'     => 'Contact Form 7',
						'slug'     => 'contact-form-7',
						'path'     => 'contact-form-7/wp-contact-form-7.php',
						'required' => false
					)
				),
				$plugins
			),
			'import'     => array(
				'content'    => 'https://demo.codegearthemes.com/knote/wellness-yoga/wp-assets/knote-wellness-yoga.xml',
				'widgets'    => 'https://demo.codegearthemes.com/knote/wellness-yoga/wp-assets/knote-wellness-yoga.wie',
				'customizer' => 'https://demo.codegearthemes.com/knote/wellness-yoga/wp-assets/knote-wellness-yoga.dat',
			),
		),
		'cleaning'      => array(
			'id'    => 'CGK10004',
			'name'       => esc_html__( 'Cleaning', 'Local Services', 'codegear-starter' ),
			'type'       => 'free',
			'status'	 => 'active',
			'categories' => array( 'Business', 'Editor', 'Cleaning' ),
			'builders'   => array(
				'elementor',
			),
			'thumbnail'  => 'https://demo.codegearthemes.com/knote/cleaning/wp-assets/thumb.webp',
			'preview'	 => 'https://demo.codegearthemes.com/?id=CGK10004',
			'plugins'    => array_merge(
				array(
					array(
						'name'     => 'Contact Form 7',
						'slug'     => 'contact-form-7',
						'path'     => 'contact-form-7/wp-contact-form-7.php',
						'required' => false
					)
				),
				$plugins
			),
			'import'     => array(
				'content'    => 'https://demo.codegearthemes.com/knote/cleaning/wp-assets/knote-cleaning.xml',
				'widgets'    => 'https://demo.codegearthemes.com/knote/cleaning/wp-assets/knote-cleaning.wie',
				'customizer' => 'https://demo.codegearthemes.com/knote/cleaning/wp-assets/knote-cleaning.dat',
			),
		),
		'farm'      => array(
			'id'    => 'CGK10005',
			'name'       => esc_html__( 'Farm Organic', 'codegear-starter' ),
			'type'       => 'free',
			'status'	 => 'active',
			'categories' => array( 'Business', 'Editor', 'Farm' ),
			'builders'   => array(
				'elementor',
			),
			'thumbnail'  => 'https://demo.codegearthemes.com/knote/farm/wp-assets/thumb.webp',
			'preview'	 => 'https://demo.codegearthemes.com/?id=CGK10005',
			'plugins'    => array_merge(
				array(
					array(
						'name'     => 'Contact Form 7',
						'slug'     => 'contact-form-7',
						'path'     => 'contact-form-7/wp-contact-form-7.php',
						'required' => false
					)
				),
				$plugins
			),
			'import'     => array(
				'content'    => 'https://demo.codegearthemes.com/knote/farm/wp-assets/knote-farm.xml',
				'widgets'    => 'https://demo.codegearthemes.com/knote/farm/wp-assets/knote-farm.wie',
				'customizer' => 'https://demo.codegearthemes.com/knote/farm/wp-assets/knote-farm.dat',
			),
		),
		'salon'      => array(
			'id'    => 'CGK10006',
			'name'       => esc_html__( 'Salon - Hair Care', 'codegear-starter' ),
			'type'       => 'free',
			'status'	 => 'active',
			'categories' => array( 'Local Services', 'Editor', 'Salon' ),
			'builders'   => array(
				'elementor',
			),
			'thumbnail'  => 'https://demo.codegearthemes.com/knote/salon/wp-assets/thumb.webp',
			'preview'	 => 'https://demo.codegearthemes.com/?id=CGK10006',
			'plugins'    => array_merge(
				array(
					array(
						'name'     => 'Contact Form 7',
						'slug'     => 'contact-form-7',
						'path'     => 'contact-form-7/wp-contact-form-7.php',
						'required' => false
					)
				),
				$plugins
			),
			'import'     => array(
				'content'    => 'https://demo.codegearthemes.com/knote/salon/wp-assets/knote-salon.xml',
				'widgets'    => 'https://demo.codegearthemes.com/knote/salon/wp-assets/knote-salon.wie',
				'customizer' => 'https://demo.codegearthemes.com/knote/salon/wp-assets/knote-salon.dat',
			),
		),
		'travel'      => array(
			'id'    => 'CGK10007',
			'name'       => esc_html__( 'Travel', 'codegear-starter' ),
			'type'       => 'free',
			'status'	 => 'active',
			'categories' => array( 'Business', 'Editor', 'Travel' ),
			'builders'   => array(
				'elementor',
			),
			'thumbnail'  => 'https://demo.codegearthemes.com/knote/travel/wp-assets/thumb.webp',
			'preview'	 => 'https://demo.codegearthemes.com/?id=CGK10007',
			'plugins'    => array_merge(
				array(
					array(
						'name'     => 'Contact Form 7',
						'slug'     => 'contact-form-7',
						'path'     => 'contact-form-7/wp-contact-form-7.php',
						'required' => false
					)
				),
				$plugins
			),
			'import'     => array(
				'content'    => 'https://demo.codegearthemes.com/knote/travel/wp-assets/knote-travel.xml',
				'widgets'    => 'https://demo.codegearthemes.com/knote/travel/wp-assets/knote-travel.wie',
				'customizer' => 'https://demo.codegearthemes.com/knote/travel/wp-assets/knote-travel.dat',
			),
		),
		'digital-agency'      => array(
			'id'    => 'CGK10008',
			'name'       => esc_html__( 'Digital Agency', 'codegear-starter' ),
			'type'       => 'free',
			'status'	 => 'active',
			'categories' => array( 'Business', 'Editor' ),
			'builders'   => array(
				'elementor',
			),
			'thumbnail'  => 'https://demo.codegearthemes.com/knote/digital-agency/wp-assets/thumb.webp',
			'preview'	 => 'https://demo.codegearthemes.com/?id=CGK10008',
			'plugins'    => array_merge(
				array(
					array(
						'name'     => 'Contact Form 7',
						'slug'     => 'contact-form-7',
						'path'     => 'contact-form-7/wp-contact-form-7.php',
						'required' => false
					)
				),
				$plugins
			),
			'import'     => array(
				'content'    => 'https://demo.codegearthemes.com/knote/digital-agency/wp-assets/knote-digital-agency.xml',
				'widgets'    => 'https://demo.codegearthemes.com/knote/digital-agency/wp-assets/knote-digital-agency.wie',
				'customizer' => 'https://demo.codegearthemes.com/knote/digital-agency/wp-assets/knote-digital-agency.dat',
			),
		),
		'camping'      => array(
			'id'    => 'CGK10009',
			'name'       => esc_html__( 'Camping', 'codegear-starter' ),
			'type'       => 'free',
			'status'	 => 'active',
			'categories' => array( 'Business', 'Editor', 'Travel' ),
			'builders'   => array(
				'elementor',
			),
			'thumbnail'  => 'https://demo.codegearthemes.com/knote/camping/wp-assets/thumb.webp',
			'preview'	 => 'https://demo.codegearthemes.com/?id=CGK10009',
			'plugins'    => array_merge(
				array(
					array(
						'name'     => 'Contact Form 7',
						'slug'     => 'contact-form-7',
						'path'     => 'contact-form-7/wp-contact-form-7.php',
						'required' => false
					)
				),
				$plugins
			),
			'import'     => array(
				'content'    => 'https://demo.codegearthemes.com/knote/camping/wp-assets/knote-camping.xml',
				'widgets'    => 'https://demo.codegearthemes.com/knote/camping/wp-assets/knote-camping.wie',
				'customizer' => 'https://demo.codegearthemes.com/knote/camping/wp-assets/knote-camping.dat',
			),
		),
		'spa'      => array(
			'id'    => 'CGK10010',
			'name'       => esc_html__( 'Spa', 'codegear-starter' ),
			'type'       => 'free',
			'status'	 => 'active',
			'categories' => array( 'Business', 'Editor', 'Spa', 'Health & Fitness' ),
			'builders'   => array(
				'elementor',
			),
			'thumbnail'  => 'https://demo.codegearthemes.com/knote/spa/wp-assets/thumb.webp',
			'preview'	 => 'https://demo.codegearthemes.com/?id=CGK10010',
			'plugins'    => array_merge(
				array(
					array(
						'name'     => 'Contact Form 7',
						'slug'     => 'contact-form-7',
						'path'     => 'contact-form-7/wp-contact-form-7.php',
						'required' => false
					)
				),
				$plugins
			),
			'import'     => array(
				'content'    => 'https://demo.codegearthemes.com/knote/spa/wp-assets/knote-spa.xml',
				'widgets'    => 'https://demo.codegearthemes.com/knote/spa/wp-assets/knote-spa.wie',
				'customizer' => 'https://demo.codegearthemes.com/knote/spa/wp-assets/knote-spa.dat',
			),
		),
		'construction'      => array(
			'id'    => 'CGK10011',
			'name'       => esc_html__( 'Construction', 'codegear-starter' ),
			'type'       => 'free',
			'status'	 => 'active',
			'categories' => array( 'Business', 'Editor', 'Construction', 'Builder' ),
			'builders'   => array(
				'elementor',
			),
			'thumbnail'  => 'https://demo.codegearthemes.com/knote/construction/wp-assets/thumb.webp',
			'preview'	 => 'https://demo.codegearthemes.com/?id=CGK10011',
			'plugins'    => array_merge(
				array(
					array(
						'name'     => 'Contact Form 7',
						'slug'     => 'contact-form-7',
						'path'     => 'contact-form-7/wp-contact-form-7.php',
						'required' => false
					)
				),
				$plugins
			),
			'import'     => array(
				'content'    => 'https://demo.codegearthemes.com/knote/construction/wp-assets/knote-construction.xml',
				'widgets'    => 'https://demo.codegearthemes.com/knote/construction/wp-assets/knote-construction.wie',
				'customizer' => 'https://demo.codegearthemes.com/knote/construction/wp-assets/knote-construction.dat',
			),
		),
		'fitness'      => array(
			'id'    => 'CGK10012',
			'name'       => esc_html__( 'Fitness', 'codegear-starter' ),
			'type'       => 'free',
			'status'	 => 'active',
			'categories' => array( 'Business', 'Editor', 'Fitness', 'Health & Fitness' ),
			'builders'   => array(
				'elementor',
			),
			'thumbnail'  => 'https://demo.codegearthemes.com/knote/fitness/wp-assets/thumb.webp',
			'preview'	 => 'https://demo.codegearthemes.com/?id=CGK10012',
			'plugins'    => array_merge(
				array(
					array(
						'name'     => 'Contact Form 7',
						'slug'     => 'contact-form-7',
						'path'     => 'contact-form-7/wp-contact-form-7.php',
						'required' => false
					)
				),
				$plugins
			),
			'import'     => array(
				'content'    => 'https://demo.codegearthemes.com/knote/fitness/wp-assets/knote-fitness.xml',
				'widgets'    => 'https://demo.codegearthemes.com/knote/fitness/wp-assets/knote-fitness.wie',
				'customizer' => 'https://demo.codegearthemes.com/knote/fitness/wp-assets/knote-fitness.dat',
			),
		),
		'solar-energy'      => array(
			'id'    => 'CGK10013',
			'name'       => esc_html__( 'Solar Energy', 'codegear-starter' ),
			'type'       => 'free',
			'status'	 => 'active',
			'categories' => array( 'Business', 'Editor', 'Solar Installation', 'Builder' ),
			'builders'   => array(
				'elementor',
			),
			'thumbnail'  => 'https://demo.codegearthemes.com/knote/solar-energy/wp-assets/thumb.webp',
			'preview'	 => 'https://demo.codegearthemes.com/?id=CGK10013',
			'plugins'    => array_merge(
				array(
					array(
						'name'     => 'Contact Form 7',
						'slug'     => 'contact-form-7',
						'path'     => 'contact-form-7/wp-contact-form-7.php',
						'required' => false
					)
				),
				$plugins
			),
			'import'     => array(
				'content'    => 'https://demo.codegearthemes.com/knote/solar-energy/wp-assets/knote-solar-energy.xml',
				'widgets'    => 'https://demo.codegearthemes.com/knote/solar-energy/wp-assets/knote-solar-energy.wie',
				'customizer' => 'https://demo.codegearthemes.com/knote/solar-energy/wp-assets/knote-solar-energy.dat',
			),
		),
		'lawyer'      => array(
			'id'    => 'CGK10014',
			'name'       => esc_html__( 'Lawyer', 'codegear-starter' ),
			'type'       => 'free',
			'status'	 => 'active',
			'categories' => array( 'Business', 'Lawyer', 'Builder' ),
			'builders'   => array(
				'elementor',
			),
			'thumbnail'  => 'https://demo.codegearthemes.com/knote/lawyer/wp-assets/thumb.webp',
			'preview'	 => 'https://demo.codegearthemes.com/?id=CGK10014',
			'plugins'    => array_merge(
				array(
					array(
						'name'     => 'Contact Form 7',
						'slug'     => 'contact-form-7',
						'path'     => 'contact-form-7/wp-contact-form-7.php',
						'required' => false
					)
				),
				$plugins
			),
			'import'     => array(
				'content'    => 'https://demo.codegearthemes.com/knote/lawyer/wp-assets/knote-solar-energy.xml',
				'widgets'    => 'https://demo.codegearthemes.com/knote/lawyer/wp-assets/knote-solar-energy.wie',
				'customizer' => 'https://demo.codegearthemes.com/knote/lawyer/wp-assets/knote-solar-energy.dat',
			),
		),
		'restaurant'      => array(
			'id'    => 'CGK10015',
			'name'       => esc_html__( 'Restaurant', 'codegear-starter' ),
			'type'       => 'free',
			'status'	 => 'active',
			'categories' => array( 'Business', 'Restaurant', 'Builder' ),
			'builders'   => array(
				'elementor',
			),
			'colors' => array(
				'primary' 	=> '#c2873f',
				'secondary' => '#dfb57a',
				'accent' 	=> '#000000',
				'text' 		=> '#626262'
			),
			'thumbnail'  => 'https://demo.codegearthemes.com/knote/restaurant/wp-assets/thumb.webp',
			'preview'	 => 'https://demo.codegearthemes.com/?id=CGK10015',
			'plugins'    => array_merge(
				array(
					array(
						'name'     => 'Contact Form 7',
						'slug'     => 'contact-form-7',
						'path'     => 'contact-form-7/wp-contact-form-7.php',
						'required' => false
					)
				),
				$plugins
			),
			'import'     => array(
				'content'    => 'https://demo.codegearthemes.com/knote/restaurant/wp-assets/knote-restaurant.xml',
				'widgets'    => 'https://demo.codegearthemes.com/knote/restaurant/wp-assets/knote-restaurant.wie',
				'customizer' => 'https://demo.codegearthemes.com/knote/restaurant/wp-assets/knote-restaurant.dat',
			),
		),
		'car-service'      => array(
			'id'    => 'CGK10016',
			'name'       => esc_html__( 'Car service', 'codegear-starter' ),
			'type'       => 'free',
			'status'	 => 'active',
			'categories' => array( 'Business', 'Car service', 'Builder' ),
			'builders'   => array(
				'elementor',
			),
			'colors' => array(
				'primary' 	=> '#de4313',
				'secondary' => '#54595f',
				'accent' 	=> '#61ce70',
				'text' 		=> '#525252'
			),
			'thumbnail'  => 'https://demo.codegearthemes.com/knote/car-service/wp-assets/thumb.webp',
			'preview'	 => 'https://demo.codegearthemes.com/?id=CGK10016',
			'plugins'    => array_merge(
				array(
					array(
						'name'     => 'Contact Form 7',
						'slug'     => 'contact-form-7',
						'path'     => 'contact-form-7/wp-contact-form-7.php',
						'required' => false
					)
				),
				$plugins
			),
			'import'     => array(
				'content'    => 'https://demo.codegearthemes.com/knote/car-service/wp-assets/knote-car-service.xml',
				'widgets'    => 'https://demo.codegearthemes.com/knote/car-service/wp-assets/knote-car-service.wie',
				'customizer' => 'https://demo.codegearthemes.com/knote/car-service/wp-assets/knote-car-service.dat',
			),
		),
		'charity'      => array(
			'id'    => 'CGK10017',
			'name'       => esc_html__( 'Charity', 'codegear-starter' ),
			'type'       => 'free',
			'status'	 => 'active',
			'categories' => array( 'Charity', 'Builder' ),
			'builders'   => array(
				'elementor',
			),
			'thumbnail'  => 'https://demo.codegearthemes.com/knote/charity/wp-assets/thumb.webp',
			'preview'	 => 'https://demo.codegearthemes.com/?id=CGK10017',
			'plugins'    => array_merge(
				array(
					array(
						'name'     => 'Contact Form 7',
						'slug'     => 'contact-form-7',
						'path'     => 'contact-form-7/wp-contact-form-7.php',
						'required' => false
					)
				),
				$plugins
			),
			'import'     => array(
				'content'    => 'https://demo.codegearthemes.com/knote/charity/wp-assets/knote-charity.xml',
				'widgets'    => 'https://demo.codegearthemes.com/knote/charity/wp-assets/knote-charity.wie',
				'customizer' => 'https://demo.codegearthemes.com/knote/charity/wp-assets/knote-charity.dat',
			),
		),
		'gardening'      => array(
			'id'    => 'CGK10018',
			'name'       => esc_html__( 'Gardening', 'codegear-starter' ),
			'type'       => 'free',
			'status'	 => 'active',
			'categories' => array( 'Business', 'Local Services', 'Gardening', 'Builder' ),
			'builders'   => array(
				'elementor',
			),
			'thumbnail'  => 'https://demo.codegearthemes.com/knote/gardening/wp-assets/thumb.webp',
			'preview'	 => 'https://demo.codegearthemes.com/?id=CGK10018',
			'plugins'    => array_merge(
				array(
					array(
						'name'     => 'Contact Form 7',
						'slug'     => 'contact-form-7',
						'path'     => 'contact-form-7/wp-contact-form-7.php',
						'required' => false
					)
				),
				$plugins
			),
			'import'     => array(
				'content'    => 'https://demo.codegearthemes.com/knote/gardening/wp-assets/knote-gardening.xml',
				'widgets'    => 'https://demo.codegearthemes.com/knote/gardening/wp-assets/knote-gardening.wie',
				'customizer' => 'https://demo.codegearthemes.com/knote/gardening/wp-assets/knote-gardening.dat',
			),
		),
		'child-care'      => array(
			'id'    => 'CGK10021',
			'name'       => esc_html__( 'Child care', 'codegear-starter' ),
			'type'       => 'free',
			'status'	 => 'active',
			'categories' => array( 'Others', 'Child Care', 'Builder' ),
			'builders'   => array(
				'elementor',
			),
			'colors' => array(
				'primary' 	=> '#FAFAFA',
				'secondary' => '#000000',
				'text' 		=> '#000000',
				'accent' 	=> '#000000'
			),
			'thumbnail'  => 'https://demo.codegearthemes.com/knote/child-care/wp-assets/thumb.webp',
			'preview'	 => 'https://demo.codegearthemes.com/?id=CGK10021',
			'plugins'    => array_merge(
				array(
					array(
						'name'     => 'Contact Form 7',
						'slug'     => 'contact-form-7',
						'path'     => 'contact-form-7/wp-contact-form-7.php',
						'required' => false
					)
				),
				$plugins
			),
			'import'     => array(
				'content'    => 'https://demo.codegearthemes.com/knote/child-care/wp-assets/knote-child-care.xml',
				'widgets'    => 'https://demo.codegearthemes.com/knote/child-care/wp-assets/knote-child-care.wie',
				'customizer' => 'https://demo.codegearthemes.com/knote/child-care/wp-assets/knote-child-care.dat',
			),
		),
		'towing-services'      => array(
			'id'    	 => 'CGK10025',
			'name'       => esc_html__( 'Towing services', 'codegear-starter' ),
			'type'       => 'pro',
			'status'	 => 'active',
			'categories' => array( 'Business', 'Local Business', 'Local Services' ),
			'builders'   => array(
				'elementor',
			),
			'thumbnail'  => 'https://demo.codegearthemes.com/knote/towing-services/wp-assets/thumb.webp',
			'preview'	 => 'https://demo.codegearthemes.com/?id=CGK10025',
			'plugins'    => array_merge(
				array(
					array(
						'name'     => 'Contact Form 7',
						'slug'     => 'contact-form-7',
						'path'     => 'contact-form-7/wp-contact-form-7.php',
						'required' => false
					)
				),
				$plugins
			),
			'import'     => array(
				'content'    => 'https://demo.codegearthemes.com/knote/towing-services/wp-assets/knote-towing-services.xml',
				'widgets'    => 'https://demo.codegearthemes.com/knote/towing-services/wp-assets/knote-towing-services.wie',
				'customizer' => 'https://demo.codegearthemes.com/knote/towing-services/wp-assets/knote-towing-services.dat',
			),
		),
		'photographer'      => array(
			'id'    => 'CGK10019',
			'name'       => esc_html__( 'Photographer', 'codegear-starter' ),
			'type'       => 'free',
			'status'	 => 'inactive',
			'categories' => array( 'Business', 'Photographer', 'Builder', 'Travel' ),
			'builders'   => array(
				'elementor',
			),
			'thumbnail'  => 'https://demo.codegearthemes.com/knote/photographer/wp-assets/thumb.webp',
			'preview'	 => 'https://demo.codegearthemes.com/?id=CGK10019',
			'plugins'    => array_merge(
				array(
					array(
						'name'     => 'Contact Form 7',
						'slug'     => 'contact-form-7',
						'path'     => 'contact-form-7/wp-contact-form-7.php',
						'required' => false
					)
				),
				$plugins
			),
			'import'     => array(
				'content'    => 'https://demo.codegearthemes.com/knote/photographer/wp-assets/knote-photographer.xml',
				'widgets'    => 'https://demo.codegearthemes.com/knote/photographer/wp-assets/knote-photographer.wie',
				'customizer' => 'https://demo.codegearthemes.com/knote/photographer/wp-assets/knote-photographer.dat',
			),
		),
		'personal-portfolio'      => array(
			'id'    	 => 'CGK10020',
			'name'       => esc_html__( 'Personal Portfolio', 'codegear-starter' ),
			'type'       => 'free',
			'status'	 => 'inactive',
			'categories' => array( 'Business', 'Personal Portfolio', 'Builder' ),
			'builders'   => array(
				'elementor',
			),
			'thumbnail'  => 'https://demo.codegearthemes.com/knote/personal-portfolio/wp-assets/thumb.webp',
			'preview'	 => 'https://demo.codegearthemes.com/?id=CGK10020',
			'plugins'    => array_merge(
				array(
					array(
						'name'     => 'Contact Form 7',
						'slug'     => 'contact-form-7',
						'path'     => 'contact-form-7/wp-contact-form-7.php',
						'required' => false
					)
				),
				$plugins
			),
			'import'     => array(
				'content'    => 'https://demo.codegearthemes.com/knote/personal-portfolio/wp-assets/knote-personal-portfolio.xml',
				'widgets'    => 'https://demo.codegearthemes.com/knote/personal-portfolio/wp-assets/knote-personal-portfolio.wie',
				'customizer' => 'https://demo.codegearthemes.com/knote/personal-portfolio/wp-assets/knote-personal-portfolio.dat',
			),
		)
	);

	return $demos;
}
add_filter( 'codegear_register_demos_list', 'knote_demos_list' );

function knote_update_settings( $settings ){

	$settings['filter'] = true;

	return $settings;

}
add_filter( 'codegear_register_settings', 'knote_update_settings' );

/**
 * Define actions that happen after import
 */
function knote_setup_after_import() {

	$demos = knote_demos_list();
	$demo_id = get_transient( 'starter_importer_demo_id' );
	// Assign the menu.

	$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
    set_theme_mod(
        'nav_menu_locations',
        array(
            'primary' => $main_menu->term_id,
        )
    );

	// Asign the static front page and the blog page.
	update_option( 'show_on_front', 'page' );
	$frontpage = get_posts(
        array(
            'post_type'              => 'page',
            'title'                  => 'Home',
            'post_status'            => 'publish',
            'numberposts'            => 1,
            'orderby'                => 'date',
            'order'                  => 'DESC',
        )
    );
    if( !empty( $frontpage) ){
        $frontpage = $frontpage[0];
        if( !empty( $frontpage ) ){
            update_option( 'show_on_front', 'page' );
            update_option( 'page_on_front', $frontpage->ID );
        }
    }

    $blogpage = get_posts(
        array(
            'post_type'              => 'page',
            'title'                  => 'Blog',
            'post_status'            => 'publish',
            'numberposts'            => 1,
            'orderby'                => 'date',
            'order'                  => 'DESC',
        )
    );
    if( !empty( $blogpage) ){
        $blogpage = $blogpage[0];
        if( !empty( $blogpage ) ){
            update_option( 'page_for_posts', $blogpage->ID );
        }
    }

	// Delete the transient for demo id
	delete_transient( 'starter_importer_demo_id' );


}
add_action( 'starter_finish_import', 'knote_setup_after_import' );
