<?php 
	function wpb_customize_register($wp_customize){
		// Showcase Section
		$wp_customize->add_section('showcase', array(
			'title' => __('Showcase', 'themehagane'),
			'description' => sprintf(__('Options for Showcase', 'themehagane')),
			'priority' => 130
		));
		
		$wp_customize->add_setting('showcase_image', array(
			'default' => get_bloginfo('template_directory').'/img/showcase.jpg',
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control(new WP_Customize_Image_control($wp_customize, 'showcase_image', array(
			'label' => __('Showcase Image', 'themehagane'),
			'section' => 'showcase',
			'settings' => 'showcase_image',
			'priority' => 1
			)));
		
		$wp_customize->add_setting('showcase_heading', array(
			'default' => _x('Theme name', 'themehagane'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('showcase_heading', array(
			'label' => __('Heading', 'themehagane'),
			'section' => 'showcase',
			'priority' => 2
			));
			
		$wp_customize->add_setting('showcase_text', array(
			'default' => _x('Tagline', 'themehagane'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('showcase_text', array(
			'label' => __('Tagline', 'themehagane'),
			'section' => 'showcase',
			'priority' => 3
			));
			
		$wp_customize->add_setting('btn_url', array(
			'default' => _x('http://hagane.96.lt/about/', 'themehagane'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('btn_url', array(
			'label' => __('Button URL', 'themehagane'),
			'section' => 'showcase',
			'priority' => 4
			));
			
		$wp_customize->add_setting('btn_text', array(
			'default' => _x('Read More', 'themehagane'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('btn_text', array(
			'label' => __('Button Text', 'themehagane'),
			'section' => 'showcase',
			'priority' => 5
			));
	}
	
add_action('customize_register', 'wpb_customize_register');	