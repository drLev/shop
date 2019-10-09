<?php
/**
 * VW Startup Theme Customizer
 *
 * @package VW Startup
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function vw_startup_custom_controls() {

    load_template( trailingslashit( get_template_directory() ) . '/inc/custom-controls.php' );
}
add_action( 'customize_register', 'vw_startup_custom_controls' );

function vw_startup_customize_register( $wp_customize ) {

	load_template( trailingslashit( get_template_directory() ) . 'inc/customize-homepage/class-customize-homepage.php' );

	//add home page setting pannel
	$wp_customize->add_panel( 'vw_startup_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'VW Settings', 'vw-startup' ),
	    'description' => __( 'Description of what this panel does.', 'vw-startup' ),
	) );

	$wp_customize->add_section( 'vw_startup_left_right', array(
    	'title'      => __( 'General Settings', 'vw-startup' ),
		'priority'   => 30,
		'panel' => 'vw_startup_panel_id'
	) );

	$wp_customize->add_setting('vw_startup_width_option',array(
        'default' => __('Full Width','vw-startup'),
        'sanitize_callback' => 'vw_startup_sanitize_choices'
	));
	$wp_customize->add_control(new VW_Startup_Image_Radio_Control($wp_customize, 'vw_startup_width_option', array(
        'type' => 'select',
        'label' => __('Width Layouts','vw-startup'),
        'description' => __('Here you can change the width layout of Website.','vw-startup'),
        'section' => 'vw_startup_left_right',
        'choices' => array(
            'Full Width' => get_template_directory_uri().'/images/full-width.png',
            'Wide Width' => get_template_directory_uri().'/images/wide-width.png',
            'Boxed' => get_template_directory_uri().'/images/boxed-width.png',
    ))));

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('vw_startup_theme_options',array(
        'default' => __('Right Sidebar','vw-startup'),
        'sanitize_callback' => 'vw_startup_sanitize_choices'	        
	) );
	$wp_customize->add_control('vw_startup_theme_options', array(
        'type' => 'select',
        'label' => __('Post Sidebar Layout','vw-startup'),
        'description' => __('Here you can change the sidebar layout for posts. ','vw-startup'),
        'section' => 'vw_startup_left_right',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','vw-startup'),
            'Right Sidebar' => __('Right Sidebar','vw-startup'),
            'One Column' => __('One Column','vw-startup'),
            'Three Columns' => __('Three Columns','vw-startup'),
            'Four Columns' => __('Four Columns','vw-startup'),
            'Grid Layout' => __('Grid Layout','vw-startup')
        ),
	));

	$wp_customize->add_setting('vw_startup_page_layout',array(
        'default' => __('One Column','vw-startup'),
        'sanitize_callback' => 'vw_startup_sanitize_choices'
	));
	$wp_customize->add_control('vw_startup_page_layout',array(
        'type' => 'select',
        'label' => __('Page Sidebar Layout','vw-startup'),
        'description' => __('Here you can change the sidebar layout for pages. ','vw-startup'),
        'section' => 'vw_startup_left_right',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','vw-startup'),
            'Right Sidebar' => __('Right Sidebar','vw-startup'),
            'One Column' => __('One Column','vw-startup')
        ),
	) );
    
	//Topbar section
	$wp_customize->add_section('vw_startup_topbar',array(
		'title'	=> __('Topbar Section','vw-startup'),
		'description'	=> __('Add TopBar Content here','vw-startup'),
		'priority'	=> null,
		'panel' => 'vw_startup_panel_id',
	));

	$wp_customize->add_setting('vw_startup_location',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_startup_location',array(
		'label'	=> __('Add Location Address','vw-startup'),
		'section'	=> 'vw_startup_topbar',
		'setting'	=> 'vw_startup_location',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('vw_startup_call',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_startup_call',array(
		'label'	=> __('Add Call Number','vw-startup'),
		'section'	=> 'vw_startup_topbar',
		'setting'	=> 'vw_startup_call',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('vw_startup_email',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_startup_email',array(
		'label'	=> __('Add Email Address','vw-startup'),
		'section'	=> 'vw_startup_topbar',
		'setting'	=> 'vw_startup_email',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('vw_startup_button_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_startup_button_text',array(
		'label'	=> __('Add Button Text','vw-startup'),
		'section'	=> 'vw_startup_topbar',
		'setting'	=> 'vw_startup_button_text',
		'type'		=> 'text'
	));	

	$wp_customize->add_setting('vw_startup_button_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('vw_startup_button_link',array(
		'label'	=> __('Add Button url','vw-startup'),
		'section'	=> 'vw_startup_topbar',
		'setting'	=> 'vw_startup_button_link',
		'type'		=> 'url'
	));

	$wp_customize->add_setting('vw_startup_short_line',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_startup_short_line',array(
		'label'	=> __('Add Text','vw-startup'),
		'section'	=> 'vw_startup_topbar',
		'setting'	=> 'vw_startup_short_line',
		'type'		=> 'text'
	));	

	//Slider
	$wp_customize->add_section( 'vw_startup_slidersettings' , array(
    	'title'      => __( 'Slider Settings', 'vw-startup' ),
		'priority'   => null,
		'panel' => 'vw_startup_panel_id'
	) );

	$wp_customize->add_setting( 'vw_startup_slider_hide_show',
       array(
          'default' => 1,
          'transport' => 'refresh',
          'sanitize_callback' => 'vw_startup_switch_sanitization'
    ));  
    $wp_customize->add_control( new VW_Startup_Toggle_Switch_Custom_Control( $wp_customize, 'vw_startup_slider_hide_show',
       array(
          'label' => esc_html__( 'Show / Hide Slider','vw-startup' ),
          'section' => 'vw_startup_slidersettings'
    )));

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'vw_startup_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'vw_startup_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'vw_startup_slider_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'vw-startup' ),
			'description' => __('Background image size (1500 x 550)','vw-startup'),
			'section'  => 'vw_startup_slidersettings',
			'type'     => 'dropdown-pages'
		) );
	}

	//content layout
	$wp_customize->add_setting('vw_startup_slider_content_option',array(
        'default' => __('Left','vw-startup'),
        'sanitize_callback' => 'vw_startup_sanitize_choices'
	));
	$wp_customize->add_control(new VW_Startup_Image_Radio_Control($wp_customize, 'vw_startup_slider_content_option', array(
        'type' => 'select',
        'label' => __('Slider Content Layouts','vw-startup'),
        'section' => 'vw_startup_slidersettings',
        'choices' => array(
            'Left' => get_template_directory_uri().'/images/slider-content1.png',
            'Center' => get_template_directory_uri().'/images/slider-content2.png',
            'Right' => get_template_directory_uri().'/images/slider-content3.png',
    ))));

    //Slider excerpt
	$wp_customize->add_setting( 'vw_startup_slider_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'vw_startup_slider_excerpt_number', array(
		'label'       => esc_html__( 'Slider Excerpt length','vw-startup' ),
		'section'     => 'vw_startup_slidersettings',
		'type'        => 'range',
		'settings'    => 'vw_startup_slider_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Opacity
	$wp_customize->add_setting('vw_startup_slider_opacity_color',array(
      'default'              => 0.5,
      'sanitize_callback' => 'vw_startup_sanitize_choices'
	));

	$wp_customize->add_control( 'vw_startup_slider_opacity_color', array(
	'label'       => esc_html__( 'Slider Image Opacity','vw-startup' ),
	'section'     => 'vw_startup_slidersettings',
	'type'        => 'select',
	'settings'    => 'vw_startup_slider_opacity_color',
	'choices' => array(
      '0' =>  esc_attr('0','vw-startup'),
      '0.1' =>  esc_attr('0.1','vw-startup'),
      '0.2' =>  esc_attr('0.2','vw-startup'),
      '0.3' =>  esc_attr('0.3','vw-startup'),
      '0.4' =>  esc_attr('0.4','vw-startup'),
      '0.5' =>  esc_attr('0.5','vw-startup'),
      '0.6' =>  esc_attr('0.6','vw-startup'),
      '0.7' =>  esc_attr('0.7','vw-startup'),
      '0.8' =>  esc_attr('0.8','vw-startup'),
      '0.9' =>  esc_attr('0.9','vw-startup')
	),
	));

	// Services
	$wp_customize->add_section('vw_startup_service_section',array(
		'title'	=> __('Services Section','vw-startup'),
		'description'	=> __('Add Services sections below.','vw-startup'),
		'panel' => 'vw_startup_panel_id',
	));

	$wp_customize->add_setting('vw_startup_section_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_startup_section_title',array(
		'label'	=> __('Section Title','vw-startup'),
		'section'=> 'vw_startup_service_section',
		'setting'=> 'vw_startup_section_title',
		'type'=> 'text'
	));	

	$wp_customize->add_setting('vw_startup_section_short_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_startup_section_short_text',array(
		'label'	=> __('Section Short Text','vw-startup'),
		'section'=> 'vw_startup_service_section',
		'setting'=> 'vw_startup_section_short_text',
		'type'=> 'text'
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_post[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_post[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('vw_startup_service_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'vw_startup_sanitize_choices',
	));
	$wp_customize->add_control('vw_startup_service_category',array(
		'type'    => 'select',
		'choices' => $cat_post,
		'label' => __('Select Category to display Latest Post','vw-startup'),
		'description' => __('Image size (293 x 225)','vw-startup'),
		'section' => 'vw_startup_service_section',
	));

	//Blog Post
	$wp_customize->add_section('vw_startup_blog_post',array(
		'title'	=> __('Blog Post Settings','vw-startup'),
		'panel' => 'vw_startup_panel_id',
	));	

	$wp_customize->add_setting( 'vw_startup_toggle_postdate',array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'vw_startup_switch_sanitization'
    ) );
    $wp_customize->add_control( new VW_Startup_Toggle_Switch_Custom_Control( $wp_customize, 'vw_startup_toggle_postdate',array(
        'label' => esc_html__( 'Post Date','vw-startup' ),
        'section' => 'vw_startup_blog_post'
    )));

    $wp_customize->add_setting( 'vw_startup_toggle_author',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_startup_switch_sanitization'
    ) );
    $wp_customize->add_control( new VW_Startup_Toggle_Switch_Custom_Control( $wp_customize, 'vw_startup_toggle_author',array(
		'label' => esc_html__( 'Author','vw-startup' ),
		'section' => 'vw_startup_blog_post'
    )));

    $wp_customize->add_setting( 'vw_startup_toggle_comments',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_startup_switch_sanitization'
    ) );
    $wp_customize->add_control( new VW_Startup_Toggle_Switch_Custom_Control( $wp_customize, 'vw_startup_toggle_comments',array(
		'label' => esc_html__( 'Comments','vw-startup' ),
		'section' => 'vw_startup_blog_post'
    )));

    $wp_customize->add_setting( 'vw_startup_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'vw_startup_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','vw-startup' ),
		'section'     => 'vw_startup_blog_post',
		'type'        => 'range',
		'settings'    => 'vw_startup_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Content Creation
	$wp_customize->add_section( 'vw_startup_content_section' , array(
    	'title' => __( 'Customize Home Page Settings', 'vw-startup' ),
		'priority' => null,
		'panel' => 'vw_startup_panel_id'
	) );

	$wp_customize->add_setting('vw_startup_content_creation_main_control', array(
		'sanitize_callback' => 'esc_html',
	) );

	$homepage= get_option( 'page_on_front' );

	$wp_customize->add_control(	new VW_Startup_Content_Creation( $wp_customize, 'vw_startup_content_creation_main_control', array(
		'options' => array(
			esc_html__( 'First select static page in homepage setting for front page.Below given edit button is to customize Home Page. Just click on the edit option, add whatever elements you want to include in the homepage, save the changes and you are good to go.','vw-startup' ),
		),
		'section' => 'vw_startup_content_section',
		'button_url'  => admin_url( 'post.php?post='.$homepage.'&action=edit'),
		'button_text' => esc_html__( 'Edit', 'vw-startup' ),
	) ) );

	//Footer Text
	$wp_customize->add_section('vw_startup_footer',array(
		'title'	=> __('Footer','vw-startup'),
		'description'=> __('This section will appear in the footer','vw-startup'),
		'panel' => 'vw_startup_panel_id',
	));	
	
	$wp_customize->add_setting('vw_startup_footer_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_startup_footer_text',array(
		'label'	=> __('Copyright Text','vw-startup'),
		'section'=> 'vw_startup_footer',
		'setting'=> 'vw_startup_footer_text',
		'type'=> 'text'
	));	

	$wp_customize->add_setting( 'vw_startup_hide_show_scroll',array(
    	'default' => 1,
      	'transport' => 'refresh',
      	'sanitize_callback' => 'vw_startup_switch_sanitization'
    ));
    
    $wp_customize->add_control( new VW_Startup_Toggle_Switch_Custom_Control( $wp_customize, 'vw_startup_hide_show_scroll',array(
      	'label' => esc_html__( 'Show / Hide Scroll To Top','vw-startup' ),
      	'section' => 'vw_startup_footer'
    )));
	$wp_customize->add_setting('vw_startup_scroll_top_alignment',array(
        'default' => __('Right','vw-startup'),
        'sanitize_callback' => 'vw_startup_sanitize_choices'
	));

	$wp_customize->add_control(new VW_Startup_Image_Radio_Control($wp_customize, 'vw_startup_scroll_top_alignment', array(
        'type' => 'select',
        'label' => __('Scroll To Top','vw-startup'),
        'section' => 'vw_startup_footer',
        'settings' => 'vw_startup_scroll_top_alignment',
        'choices' => array(
            'Left' => get_template_directory_uri().'/images/layout1.png',
            'Center' => get_template_directory_uri().'/images/layout2.png',
            'Right' => get_template_directory_uri().'/images/layout3.png'
    ))));
}

add_action( 'customize_register', 'vw_startup_customize_register' );

load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class VW_Startup_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'VW_Startup_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(new VW_Startup_Customize_Section_Pro($manager,'example_1',array(
			'priority'   => 1,
			'title'    => esc_html__( 'Startup Pro Theme', 'vw-startup' ),
			'pro_text' => esc_html__( 'Upgrade Pro', 'vw-startup' ),
			'pro_url'  => esc_url('https://www.vwthemes.com/themes/startup-wordpress-theme/'),
		)));

		$manager->add_section(new VW_Startup_Customize_Section_Pro($manager,'example_2',array(
			'priority'   => 1,
			'title'    => esc_html__( 'Documentation', 'vw-startup' ),
			'pro_text' => esc_html__( 'Docs', 'vw-startup' ),
			'pro_url'  => admin_url('themes.php?page=vw_startup_guide'),
		)));
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'vw-startup-customize-controls', trailingslashit( get_template_directory_uri() ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'vw-startup-customize-controls', trailingslashit( get_template_directory_uri() ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
VW_Startup_Customize::get_instance();