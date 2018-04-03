<?php

/* 
 * Check to see if Setup has run, if not run it
 */
 

if ( ! function_exists( 'theme_setup' ) ) :

function theme_setup() {

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	) );
}
endif; // glazzo_setup
add_action( 'after_setup_theme', 'theme_setup' );

/*
 * Load JQuery In Footer
 */
	function jquery_scripts() {
	    wp_deregister_script('jquery');
		wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', false, '1.12.2', true);
		wp_register_script('jqueryui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js', false, '1.11.4', true);
		wp_enqueue_script('jquery');
		wp_enqueue_script('jqueryui');
		
		wp_enqueue_script('awesome-font', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', array('jquery'));
		wp_enqueue_script('isotope', '' . get_template_directory_uri() . '/js/isotope.js', array('jquery'));
		wp_enqueue_script('vp', '' . get_template_directory_uri() . '/js/vp.js', array('jquery'));
		wp_enqueue_script('onLoad', '' . get_template_directory_uri() . '/js/onLoad.js', array('jquery'));
		wp_localize_script( 'onLoad', 'AXAJ', array( 'url' => admin_url('admin-ajax.php')));	
		
	}
	add_action( 'wp_enqueue_scripts', 'jquery_scripts' );
		
	remove_action('wp_head', 'wp_enqueue_scripts', 1);
	add_action('wp_footer', 'wp_enqueue_scripts', 5);

/*
 * Load CSS In Footer
 */
	function prefix_add_footer_styles() {
		wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css' );
	    wp_enqueue_style( 'stylesheet', get_template_directory_uri() . '/css/stylesheet.mini.css' );
	};
	add_action( 'get_footer', 'prefix_add_footer_styles' );
	
/*
 * Vikke Customize, Main
 */
	function vikke_customize_main( $wp_customize ) {
		/*
		 * Remove Unwantet Section
		 */
		$wp_customize->remove_section("colors");
		$wp_customize->remove_section("static_front_page");	
		
			/* == Main Background Setting == */
			$wp_customize->add_setting( 'theme_new_setting_bg', array(
				'transport'   => 'refresh'));
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'theme_new_control_bg', array(
			    'label'    => __( 'Header Background', 'vikke' ),
			    'section'  => 'title_tagline',
			    'settings' => 'theme_new_setting_bg',
			)));
		
		/* == About Section == */
		$wp_customize->add_section( 'theme_new_section_about', array(
			'title'       => __( 'About Settings', 'vikke' ),
			'priority'    => 100,
			'capability'  => 'edit_theme_options',
			'description' => __('Change About settings here.', 'vikke'), 
		));
			/* == About Picture Setting == */
			$wp_customize->add_setting( 'theme_new_setting_about_pic', array(
				'transport'   => 'refresh'));
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'theme_new_control_about_pic', array(
			    'label'    => __( 'Profile Picture', 'vikke' ),
			    'section'  => 'theme_new_section_about',
			    'settings' => 'theme_new_setting_about_pic',
			)));
			/* == About Name Setting == */
			$wp_customize->add_setting( 'theme_new_setting_about_name', array(
				'default' => 'John Doe',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_about_name', array(
			    'label'    => __( 'Name', 'vikke' ),
			    'section'  => 'theme_new_section_about',
			    'settings' => 'theme_new_setting_about_name',
			    'type' => 'text'));
			/* == About Sub Setting == */
			$wp_customize->add_setting( 'theme_new_setting_about_sub', array(
				'default' => 'xxxxxxxxxx',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_about_sub', array(
			    'label'    => __( 'Subline', 'vikke' ),
			    'section'  => 'theme_new_section_about',
			    'settings' => 'theme_new_setting_about_sub',
			    'type' => 'text'));
			/* == About Age Setting == */
			$wp_customize->add_setting( 'theme_new_setting_about_age', array(
				'default' => 'xx',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_about_age', array(
			    'label'    => __( 'Age', 'vikke' ),
			    'section'  => 'theme_new_section_about',
			    'settings' => 'theme_new_setting_about_age',
			    'type' => 'text'));
			/* == About Birthday Setting == */
			$wp_customize->add_setting( 'theme_new_setting_about_birth', array(
				'default' => 'xx/xx - xxxx',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_about_birth', array(
			    'label'    => __( 'Birthday', 'vikke' ),
			    'section'  => 'theme_new_section_about',
			    'settings' => 'theme_new_setting_about_birth',
			    'type' => 'text'));
			/* == About Email Setting == */
			$wp_customize->add_setting( 'theme_new_setting_about_email', array(
				'default' => 'xxxx@xxxx.xx',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_about_email', array(
			    'label'    => __( 'Email', 'vikke' ),
			    'section'  => 'theme_new_section_about',
			    'settings' => 'theme_new_setting_about_email',
			    'type' => 'text'));
			/* == About Birthday Setting == */
			$wp_customize->add_setting( 'theme_new_setting_about_phone', array(
				'default' => '+xx xxxx xxxx',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_about_phone', array(
			    'label'    => __( 'Phone', 'vikke' ),
			    'section'  => 'theme_new_section_about',
			    'settings' => 'theme_new_setting_about_phone',
			    'type' => 'text'));
			/* == About Address Setting == */
			$wp_customize->add_setting( 'theme_new_setting_about_address', array(
				'default' => 'xxxxxxxxxx',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_about_address', array(
			    'label'    => __( 'Address', 'vikke' ),
			    'section'  => 'theme_new_section_about',
			    'settings' => 'theme_new_setting_about_address',
			    'type' => 'text'));
			/* == About Facebook Setting == */
			$wp_customize->add_setting( 'theme_new_setting_about_facebook', array(
				'default' => '',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_about_facebook', array(
			    'label'    => __( 'Facebook Link', 'vikke' ),
			    'section'  => 'theme_new_section_about',
			    'settings' => 'theme_new_setting_about_facebook',
			    'type' => 'text'));
			/* == About Twitter Setting == */
			$wp_customize->add_setting( 'theme_new_setting_about_twitter', array(
				'default' => '',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_about_twitter', array(
			    'label'    => __( 'Twitter Link', 'vikke' ),
			    'section'  => 'theme_new_section_about',
			    'settings' => 'theme_new_setting_about_twitter',
			    'type' => 'text'));
			/* == About LinkedIn Setting == */
			$wp_customize->add_setting( 'theme_new_setting_about_linkedin', array(
				'default' => '',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_about_linkedin', array(
			    'label'    => __( 'LinkedIn Link', 'vikke' ),
			    'section'  => 'theme_new_section_about',
			    'settings' => 'theme_new_setting_about_linkedin',
			    'type' => 'text'));
			/* == About Instagram Setting == */
			$wp_customize->add_setting( 'theme_new_setting_about_instagram', array(
				'default' => '',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_about_instagram', array(
			    'label'    => __( 'Instagram Link', 'vikke' ),
			    'section'  => 'theme_new_section_about',
			    'settings' => 'theme_new_setting_about_instagram',
			    'type' => 'text'));
			/* == About File Setting == */	
			$wp_customize->add_setting( 'theme_new_setting_about_file' );
			$wp_customize->add_control( new WP_Customize_Upload_Control( $wp_customize, 'theme_new_control_about_file', array(
				'label' => 'Resume File',
				'section' => 'theme_new_section_about',
				'settings' => 'theme_new_setting_about_file'
			)));
			/* == About Me Text Setting == */
			$wp_customize->add_setting( 'theme_new_setting_about_me_text', array(
				'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae massa suscipit, vulputate nulla vitae, suscipit metus. Mauris viverra dictum ex vel interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_about_me_text', array(
			    'label'    => __( 'About Me Text', 'vikke' ),
			    'section'  => 'theme_new_section_about',
			    'settings' => 'theme_new_setting_about_me_text',
			    'type' => 'text'));
			
		/* == Skills Section == */
		$wp_customize->add_section( 'theme_new_section_skills', array(
			'title'       => __( 'Skills Settings', 'vikke' ),
			'priority'    => 100,
			'capability'  => 'edit_theme_options',
			'description' => __('Change Skills settings here.', 'vikke'), 
		));
			/* == Skills First Name Setting == */
			$wp_customize->add_setting( 'theme_new_setting_skills_first_name', array(
				'default' => 'XXXXXXX',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_skills_first_name', array(
			    'label'    => __( 'First Skill Name', 'vikke' ),
			    'section'  => 'theme_new_section_skills',
			    'settings' => 'theme_new_setting_skills_first_name',
			    'type' => 'text'));
			/* == Skills First Procentage Setting == */
			$wp_customize->add_setting( 'theme_new_setting_skills_first_proc', array(
				'default' => '1',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_skills_first_proc', array(
			    'label'    => __( 'First Skill Procentage', 'vikke' ),
			    'section'  => 'theme_new_section_skills',
			    'settings' => 'theme_new_setting_skills_first_proc',
			    'type' => 'text'));
			/* == Skills second Name Setting == */
			$wp_customize->add_setting( 'theme_new_setting_skills_second_name', array(
				'default' => 'XXXXXXX',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_skills_second_name', array(
			    'label'    => __( 'Second Skill Name', 'vikke' ),
			    'section'  => 'theme_new_section_skills',
			    'settings' => 'theme_new_setting_skills_second_name',
			    'type' => 'text'));
			/* == Skills second Procentage Setting == */
			$wp_customize->add_setting( 'theme_new_setting_skills_second_proc', array(
				'default' => '1',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_skills_second_proc', array(
			    'label'    => __( 'Second Skill Procentage', 'vikke' ),
			    'section'  => 'theme_new_section_skills',
			    'settings' => 'theme_new_setting_skills_second_proc',
			    'type' => 'text'));
			/* == Skills third Name Setting == */
			$wp_customize->add_setting( 'theme_new_setting_skills_third_name', array(
				'default' => 'XXXXXXX',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_skills_third_name', array(
			    'label'    => __( 'Third Skill Name', 'vikke' ),
			    'section'  => 'theme_new_section_skills',
			    'settings' => 'theme_new_setting_skills_third_name',
			    'type' => 'text'));
			/* == Skills third Procentage Setting == */
			$wp_customize->add_setting( 'theme_new_setting_skills_third_proc', array(
				'default' => '1',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_skills_third_proc', array(
			    'label'    => __( 'Third Skill Procentage', 'vikke' ),
			    'section'  => 'theme_new_section_skills',
			    'settings' => 'theme_new_setting_skills_third_proc',
			    'type' => 'text'));
			/* == Skills fourth Name Setting == */
			$wp_customize->add_setting( 'theme_new_setting_skills_fourth_name', array(
				'default' => 'XXXXXXX',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_skills_fourth_name', array(
			    'label'    => __( 'Fourth Skill Name', 'vikke' ),
			    'section'  => 'theme_new_section_skills',
			    'settings' => 'theme_new_setting_skills_fourth_name',
			    'type' => 'text'));
			/* == Skills fourth Procentage Setting == */
			$wp_customize->add_setting( 'theme_new_setting_skills_fourth_proc', array(
				'default' => '1',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_skills_fourth_proc', array(
			    'label'    => __( 'Fourth Skill Procentage', 'vikke' ),
			    'section'  => 'theme_new_section_skills',
			    'settings' => 'theme_new_setting_skills_fourth_proc',
			    'type' => 'text'));
			/* == Skills fifth Name Setting == */
			$wp_customize->add_setting( 'theme_new_setting_skills_fifth_name', array(
				'default' => 'XXXXXXX',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_skills_fifth_name', array(
			    'label'    => __( 'Fifth Skill Name', 'vikke' ),
			    'section'  => 'theme_new_section_skills',
			    'settings' => 'theme_new_setting_skills_fifth_name',
			    'type' => 'text'));
			/* == Skills fifth Procentage Setting == */
			$wp_customize->add_setting( 'theme_new_setting_skills_fifth_proc', array(
				'default' => '1',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_skills_fifth_proc', array(
			    'label'    => __( 'Fifth Skill Procentage', 'vikke' ),
			    'section'  => 'theme_new_section_skills',
			    'settings' => 'theme_new_setting_skills_fifth_proc',
			    'type' => 'text'));
			/* == Skills sixth Name Setting == */
			$wp_customize->add_setting( 'theme_new_setting_skills_sixth_name', array(
				'default' => 'XXXXXXX',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_skills_sixth_name', array(
			    'label'    => __( 'Sixth Skill Name', 'vikke' ),
			    'section'  => 'theme_new_section_skills',
			    'settings' => 'theme_new_setting_skills_sixth_name',
			    'type' => 'text'));
			/* == Skills sixth Procentage Setting == */
			$wp_customize->add_setting( 'theme_new_setting_skills_sixth_proc', array(
				'default' => '1',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_skills_sixth_proc', array(
			    'label'    => __( 'Sixth Skill Procentage', 'vikke' ),
			    'section'  => 'theme_new_section_skills',
			    'settings' => 'theme_new_setting_skills_sixth_proc',
			    'type' => 'text'));
				
		/* == Services Section == */
		$wp_customize->add_section( 'theme_new_section_services', array(
			'title'       => __( 'Services Settings', 'vikke' ),
			'priority'    => 100,
			'capability'  => 'edit_theme_options',
			'description' => __('Change Services settings here.', 'vikke'), 
		));
			/* == Services First Icon Setting == */
			$wp_customize->add_setting( 'theme_new_setting_services_first_icon', array(
				'default' => 'fa-question',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_services_first_icon', array(
			    'label'    => __( 'First Service Icon', 'vikke' ),
			    'section'  => 'theme_new_section_services',
			    'settings' => 'theme_new_setting_services_first_icon',
			    'type' => 'text'));
			/* == Services First Name Setting == */
			$wp_customize->add_setting( 'theme_new_setting_services_first_name', array(
				'default' => 'XXXXXX',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_services_first_name', array(
			    'label'    => __( 'First Service Name', 'vikke' ),
			    'section'  => 'theme_new_section_services',
			    'settings' => 'theme_new_setting_services_first_name',
			    'type' => 'text'));
			/* == Services First Discription Setting == */
			$wp_customize->add_setting( 'theme_new_setting_services_first_desc', array(
				'default' => 'XXXXXXXXXXXXXX',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_services_first_desc', array(
			    'label'    => __( 'First Description Name', 'vikke' ),
			    'section'  => 'theme_new_section_services',
			    'settings' => 'theme_new_setting_services_first_desc',
			    'type' => 'text'));
			/* == Services Second Icon Setting == */
			$wp_customize->add_setting( 'theme_new_setting_services_second_icon', array(
				'default' => 'fa-question',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_services_second_icon', array(
			    'label'    => __( 'Second Service Icon', 'vikke' ),
			    'section'  => 'theme_new_section_services',
			    'settings' => 'theme_new_setting_services_second_icon',
			    'type' => 'text'));
			/* == Services Second Name Setting == */
			$wp_customize->add_setting( 'theme_new_setting_services_second_name', array(
				'default' => 'XXXXXX',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_services_second_name', array(
			    'label'    => __( 'Second Service Name', 'vikke' ),
			    'section'  => 'theme_new_section_services',
			    'settings' => 'theme_new_setting_services_second_name',
			    'type' => 'text'));
			/* == Services Second Discription Setting == */
			$wp_customize->add_setting( 'theme_new_setting_services_second_desc', array(
				'default' => 'XXXXXXXXXXXXXX',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_services_second_desc', array(
			    'label'    => __( 'Second Description Name', 'vikke' ),
			    'section'  => 'theme_new_section_services',
			    'settings' => 'theme_new_setting_services_second_desc',
			    'type' => 'text'));
			/* == Services Third Icon Setting == */
			$wp_customize->add_setting( 'theme_new_setting_services_third_icon', array(
				'default' => 'fa-question',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_services_third_icon', array(
			    'label'    => __( 'Third Service Icon', 'vikke' ),
			    'section'  => 'theme_new_section_services',
			    'settings' => 'theme_new_setting_services_third_icon',
			    'type' => 'text'));
			/* == Services Third Name Setting == */
			$wp_customize->add_setting( 'theme_new_setting_services_third_name', array(
				'default' => 'XXXXXX',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_services_third_name', array(
			    'label'    => __( 'Third Service Name', 'vikke' ),
			    'section'  => 'theme_new_section_services',
			    'settings' => 'theme_new_setting_services_third_name',
			    'type' => 'text'));
			/* == Services Third Discription Setting == */
			$wp_customize->add_setting( 'theme_new_setting_services_third_desc', array(
				'default' => 'XXXXXXXXXXXXXX',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_services_third_desc', array(
			    'label'    => __( 'Third Description Name', 'vikke' ),
			    'section'  => 'theme_new_section_services',
			    'settings' => 'theme_new_setting_services_third_desc',
			    'type' => 'text'));
				
		/* == Experience Section == */
		$wp_customize->add_section( 'theme_new_section_experience', array(
			'title'       => __( 'Expereince Settings', 'vikke' ),
			'priority'    => 100,
			'capability'  => 'edit_theme_options',
			'description' => __('Change Experience settings here.', 'vikke'), 
		));
			/* == Experience First Year Setting == */
			$wp_customize->add_setting( 'theme_new_setting_experience_first_year', array(
				'default' => 'XXXX - XXXX',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_experience_first_year', array(
			    'label'    => __( 'First Experience Year', 'vikke' ),
			    'section'  => 'theme_new_section_experience',
			    'settings' => 'theme_new_setting_experience_first_year',
			    'type' => 'text'));
			/* == Experience First Experience Setting == */
			$wp_customize->add_setting( 'theme_new_setting_experience_first_educ', array(
				'default' => 'XXXXXXXXXXXXX',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_experience_first_educ', array(
			    'label'    => __( 'First Experience', 'vikke' ),
			    'section'  => 'theme_new_section_experience',
			    'settings' => 'theme_new_setting_experience_first_educ',
			    'type' => 'text'));
			/* == Experience First Place Setting == */
			$wp_customize->add_setting( 'theme_new_setting_experience_first_place', array(
				'default' => 'XXXXXXXXXXXXX',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_experience_first_place', array(
			    'label'    => __( 'First Experience Place', 'vikke' ),
			    'section'  => 'theme_new_section_experience',
			    'settings' => 'theme_new_setting_experience_first_place',
			    'type' => 'text'));
			/* == Experience Second Year Setting == */
			$wp_customize->add_setting( 'theme_new_setting_experience_second_year', array(
				'default' => 'XXXX - XXXX',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_experience_second_year', array(
			    'label'    => __( 'Second Experience Year', 'vikke' ),
			    'section'  => 'theme_new_section_experience',
			    'settings' => 'theme_new_setting_experience_second_year',
			    'type' => 'text'));
			/* == Experience Second Experience Setting == */
			$wp_customize->add_setting( 'theme_new_setting_experience_second_educ', array(
				'default' => 'XXXXXXXXXXXXX',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_experience_second_educ', array(
			    'label'    => __( 'Second Experience', 'vikke' ),
			    'section'  => 'theme_new_section_experience',
			    'settings' => 'theme_new_setting_experience_second_educ',
			    'type' => 'text'));
			/* == Experience Second Place Setting == */
			$wp_customize->add_setting( 'theme_new_setting_experience_second_place', array(
				'default' => 'XXXXXXXXXXXXX',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_experience_second_place', array(
			    'label'    => __( 'Second Experience Place', 'vikke' ),
			    'section'  => 'theme_new_section_experience',
			    'settings' => 'theme_new_setting_experience_second_place',
			    'type' => 'text'));
			/* == Experience Third Year Setting == */
			$wp_customize->add_setting( 'theme_new_setting_experience_third_year', array(
				'default' => 'XXXX - XXXX',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_experience_third_year', array(
			    'label'    => __( 'Third Experience Year', 'vikke' ),
			    'section'  => 'theme_new_section_experience',
			    'settings' => 'theme_new_setting_experience_third_year',
			    'type' => 'text'));
			/* == Experience Third Experience Setting == */
			$wp_customize->add_setting( 'theme_new_setting_experience_third_educ', array(
				'default' => 'XXXXXXXXXXXXX',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_experience_third_educ', array(
			    'label'    => __( 'Third Experience', 'vikke' ),
			    'section'  => 'theme_new_section_experience',
			    'settings' => 'theme_new_setting_experience_third_educ',
			    'type' => 'text'));
			/* == Experience Third Place Setting == */
			$wp_customize->add_setting( 'theme_new_setting_experience_third_place', array(
				'default' => 'XXXXXXXXXXXXX',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_experience_third_place', array(
			    'label'    => __( 'Third Experience Place', 'vikke' ),
			    'section'  => 'theme_new_section_experience',
			    'settings' => 'theme_new_setting_experience_third_place',
			    'type' => 'text'));
				
		/* == Education Section == */
		$wp_customize->add_section( 'theme_new_section_education', array(
			'title'       => __( 'Education Settings', 'vikke' ),
			'priority'    => 100,
			'capability'  => 'edit_theme_options',
			'description' => __('Change Education settings here.', 'vikke'), 
		));
			/* == Education First Year Setting == */
			$wp_customize->add_setting( 'theme_new_setting_education_first_year', array(
				'default' => 'XXXX - XXXX',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_education_first_year', array(
			    'label'    => __( 'First Education Year', 'vikke' ),
			    'section'  => 'theme_new_section_education',
			    'settings' => 'theme_new_setting_education_first_year',
			    'type' => 'text'));
			/* == Education First Education Setting == */
			$wp_customize->add_setting( 'theme_new_setting_education_first_educ', array(
				'default' => 'XXXXXXXXXXXXX',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_education_first_educ', array(
			    'label'    => __( 'First Education', 'vikke' ),
			    'section'  => 'theme_new_section_education',
			    'settings' => 'theme_new_setting_education_first_educ',
			    'type' => 'text'));
			/* == Education First Place Setting == */
			$wp_customize->add_setting( 'theme_new_setting_education_first_place', array(
				'default' => 'XXXXXXXXXXXXX',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_education_first_place', array(
			    'label'    => __( 'First Education Place', 'vikke' ),
			    'section'  => 'theme_new_section_education',
			    'settings' => 'theme_new_setting_education_first_place',
			    'type' => 'text'));
			/* == Education Second Year Setting == */
			$wp_customize->add_setting( 'theme_new_setting_education_second_year', array(
				'default' => 'XXXX - XXXX',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_education_second_year', array(
			    'label'    => __( 'Second Education Year', 'vikke' ),
			    'section'  => 'theme_new_section_education',
			    'settings' => 'theme_new_setting_education_second_year',
			    'type' => 'text'));
			/* == Education Second Education Setting == */
			$wp_customize->add_setting( 'theme_new_setting_education_second_educ', array(
				'default' => 'XXXXXXXXXXXXX',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_education_second_educ', array(
			    'label'    => __( 'Second Education', 'vikke' ),
			    'section'  => 'theme_new_section_education',
			    'settings' => 'theme_new_setting_education_second_educ',
			    'type' => 'text'));
			/* == Education Second Place Setting == */
			$wp_customize->add_setting( 'theme_new_setting_education_second_place', array(
				'default' => 'XXXXXXXXXXXXX',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_education_second_place', array(
			    'label'    => __( 'Second Education Place', 'vikke' ),
			    'section'  => 'theme_new_section_education',
			    'settings' => 'theme_new_setting_education_second_place',
			    'type' => 'text'));
			/* == Education Third Year Setting == */
			$wp_customize->add_setting( 'theme_new_setting_education_third_year', array(
				'default' => 'XXXX - XXXX',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_education_third_year', array(
			    'label'    => __( 'Third Education Year', 'vikke' ),
			    'section'  => 'theme_new_section_education',
			    'settings' => 'theme_new_setting_education_third_year',
			    'type' => 'text'));
			/* == Education Third Education Setting == */
			$wp_customize->add_setting( 'theme_new_setting_education_third_educ', array(
				'default' => 'XXXXXXXXXXXXX',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_education_third_educ', array(
			    'label'    => __( 'Third Education', 'vikke' ),
			    'section'  => 'theme_new_section_education',
			    'settings' => 'theme_new_setting_education_third_educ',
			    'type' => 'text'));
			/* == Education Third Place Setting == */
			$wp_customize->add_setting( 'theme_new_setting_education_third_place', array(
				'default' => 'XXXXXXXXXXXXX',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_education_third_place', array(
			    'label'    => __( 'Third Education Place', 'vikke' ),
			    'section'  => 'theme_new_section_education',
			    'settings' => 'theme_new_setting_education_third_place',
			    'type' => 'text'));
				
		/* == Interests Section == */
		$wp_customize->add_section( 'theme_new_section_interests', array(
			'title'       => __( 'Interests Settings', 'vikke' ),
			'priority'    => 100,
			'capability'  => 'edit_theme_options',
			'description' => __('Change Interests settings here.', 'vikke'), 
		));
			/* == Interests Text == */
			$wp_customize->add_setting( 'theme_new_setting_interests_text', array(
				'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae massa suscipit, vulputate nulla vitae, suscipit metus. Mauris viverra dictum ex vel interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_interests_text', array(
			    'label'    => __( 'Interests Text', 'vikke' ),
			    'section'  => 'theme_new_section_interests',
			    'settings' => 'theme_new_setting_interests_text',
			    'type' => 'text'));
			/* == Interests First Name Setting == */
			$wp_customize->add_setting( 'theme_new_setting_interests_first_name', array(
				'default' => 'XXXXXXX',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_interests_first_name', array(
			    'label'    => __( 'First Interests Name', 'vikke' ),
			    'section'  => 'theme_new_section_interests',
			    'settings' => 'theme_new_setting_interests_first_name',
			    'type' => 'text'));
			/* == Interests First Icon Setting == */
			$wp_customize->add_setting( 'theme_new_setting_interests_first_icon', array(
				'default' => 'fa-question',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_interests_first_icon', array(
			    'label'    => __( 'First Interests Icon', 'vikke' ),
			    'section'  => 'theme_new_section_interests',
			    'settings' => 'theme_new_setting_interests_first_icon',
			    'type' => 'text'));
			/* == Interests Second Name Setting == */
			$wp_customize->add_setting( 'theme_new_setting_interests_second_name', array(
				'default' => 'XXXXXXX',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_interests_second_name', array(
			    'label'    => __( 'Second Interests Name', 'vikke' ),
			    'section'  => 'theme_new_section_interests',
			    'settings' => 'theme_new_setting_interests_second_name',
			    'type' => 'text'));
			/* == Interests Second Icon Setting == */
			$wp_customize->add_setting( 'theme_new_setting_interests_second_icon', array(
				'default' => 'fa-question',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_interests_second_icon', array(
			    'label'    => __( 'Second Interests Icon', 'vikke' ),
			    'section'  => 'theme_new_section_interests',
			    'settings' => 'theme_new_setting_interests_second_icon',
			    'type' => 'text'));
			/* == Interests Third Name Setting == */
			$wp_customize->add_setting( 'theme_new_setting_interests_third_name', array(
				'default' => 'XXXXXXX',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_interests_third_name', array(
			    'label'    => __( 'Third Interests Name', 'vikke' ),
			    'section'  => 'theme_new_section_interests',
			    'settings' => 'theme_new_setting_interests_third_name',
			    'type' => 'text'));
			/* == Interests Third Icon Setting == */
			$wp_customize->add_setting( 'theme_new_setting_interests_third_icon', array(
				'default' => 'fa-question',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_interests_third_icon', array(
			    'label'    => __( 'Third Interests Icon', 'vikke' ),
			    'section'  => 'theme_new_section_interests',
			    'settings' => 'theme_new_setting_interests_third_icon',
			    'type' => 'text'));
			/* == Interests Fourth Name Setting == */
			$wp_customize->add_setting( 'theme_new_setting_interests_fourth_name', array(
				'default' => 'XXXXXXX',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_interests_fourth_name', array(
			    'label'    => __( 'Fourth Interests Name', 'vikke' ),
			    'section'  => 'theme_new_section_interests',
			    'settings' => 'theme_new_setting_interests_fourth_name',
			    'type' => 'text'));
			/* == Interests Fourth Icon Setting == */
			$wp_customize->add_setting( 'theme_new_setting_interests_fourth_icon', array(
				'default' => 'fa-question',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_interests_fourth_icon', array(
			    'label'    => __( 'Fourth Interests Icon', 'vikke' ),
			    'section'  => 'theme_new_section_interests',
			    'settings' => 'theme_new_setting_interests_fourth_icon',
			    'type' => 'text'));
			/* == Interests Fifth Name Setting == */
			$wp_customize->add_setting( 'theme_new_setting_interests_fifth_name', array(
				'default' => 'XXXXXXX',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_interests_fifth_name', array(
			    'label'    => __( 'Fifth Interests Name', 'vikke' ),
			    'section'  => 'theme_new_section_interests',
			    'settings' => 'theme_new_setting_interests_fifth_name',
			    'type' => 'text'));
			/* == Interests Fifth Icon Setting == */
			$wp_customize->add_setting( 'theme_new_setting_interests_fifth_icon', array(
				'default' => 'fa-question',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_interests_fifth_icon', array(
			    'label'    => __( 'Fifth Interests Icon', 'vikke' ),
			    'section'  => 'theme_new_section_interests',
			    'settings' => 'theme_new_setting_interests_fifth_icon',
			    'type' => 'text'));
			/* == Interests Sixth Name Setting == */
			$wp_customize->add_setting( 'theme_new_setting_interests_sixth_name', array(
				'default' => 'XXXXXXX',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_interests_sixth_name', array(
			    'label'    => __( 'Sixth Interests Name', 'vikke' ),
			    'section'  => 'theme_new_section_interests',
			    'settings' => 'theme_new_setting_interests_sixth_name',
			    'type' => 'text'));
			/* == Interests Sixth Icon Setting == */
			$wp_customize->add_setting( 'theme_new_setting_interests_sixth_icon', array(
				'default' => 'fa-question',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_interests_sixth_icon', array(
			    'label'    => __( 'Sixth Interests Icon', 'vikke' ),
			    'section'  => 'theme_new_section_interests',
			    'settings' => 'theme_new_setting_interests_sixth_icon',
			    'type' => 'text'));
			/* == Interests Seventh Name Setting == */
			$wp_customize->add_setting( 'theme_new_setting_interests_seventh_name', array(
				'default' => 'XXXXXXX',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_interests_seventh_name', array(
			    'label'    => __( 'Seventh Interests Name', 'vikke' ),
			    'section'  => 'theme_new_section_interests',
			    'settings' => 'theme_new_setting_interests_seventh_name',
			    'type' => 'text'));
			/* == Interests Seventh Icon Setting == */
			$wp_customize->add_setting( 'theme_new_setting_interests_seventh_icon', array(
				'default' => 'fa-question',
				'transport'   => 'refresh'));
			$wp_customize->add_control( 'theme_new_control_interests_seventh_icon', array(
			    'label'    => __( 'Seventh Interests Icon', 'vikke' ),
			    'section'  => 'theme_new_section_interests',
			    'settings' => 'theme_new_setting_interests_seventh_icon',
			    'type' => 'text'));
	}
	// -- Load Function --
	add_action( 'customize_register', 'vikke_customize_main' );

/*
 * Vikke postMessage Handler
 */
	function vikke_header_menu() {
		register_nav_menu('header-menu',__( 'Header Menu' ));
		
		 register_sidebar( array(
	        'name' => __( 'Contact Widget Area', 'vikke' ),
	        'id' => 'contact-area',
	        'before_widget' => '<div>',
	        'after_widget' => '</div>',
	        'before_title' => '<h1>',
	        'after_title' => '</h1>',
	    ));
	}
	add_action( 'init', 'vikke_header_menu' );
	
/*
 * Vikke loadMore Handler
 */
	function loadMore() {
		$offset = $_POST['offset'];
		$count = wp_count_posts();
		$ocount = $offset + 2;
		$outoff = $offset;
		$done = "false";
	
		$args = array( 'showposts' => 2, 'offset' => $outoff );
	    $loop = new WP_Query($args);
	    
		if ($ocount >= $count->publish) :
			$done = "true";
		endif;
	
	    $out = '';
	
	    if ($loop -> have_posts()) :  while ($loop -> have_posts()) : $loop -> the_post();
			$categories = get_the_category(); 
			$cat_name = $categories[0]->slug;
	        $out .= '
			<div id="post-' . get_the_ID() . '" class="new-post poste post-' . get_the_ID() . ' category-' . $cat_name . '" done="' . $done . '">
				<a class="postClick" off="' . $outoff . '">
					<div class="postimg" style="background-image: url(' . wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ) .')"></div>
					<div class="postTitle" style="display: none;">' . get_the_title() . '</div>
				</a>				
				<div class="postContent" style="display: none">' . get_the_content() . '</div>
			</div>
		';
	
	    endwhile;
	    endif;
	    wp_reset_postdata();
			
		die($out);
	}
	add_action( 'wp_ajax_loadMoree', 'loadMore' );
	add_action( 'wp_ajax_nopriv_loadMoree', 'loadMore' );