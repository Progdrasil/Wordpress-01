<?php
    //add customizer support
    add_action('customize_register','initiate_customizer');
    function initiate_customizer($wp_customize)
    {
        // $wp_customize->add_panel();
        // $wp_customize->remove_panel();
        // $wp_customize->get_panel();

        // $wp_customize->add_section();
        // $wp_customize->remove_section();
        // $wp_customize->get_section();

        // $wp_customize->add_control();
        // $wp_customize->remove_control();
        // $wp_customize->get_control();

        // $wp_customize->add_setting();
        // $wp_customize->remove_setting();
        // $wp_customize->get_setting();

        $wp_customize->add_section('company',array(
            'title'     =>  __('Company Info','TestTheme'),
            'priority'  =>  10,
        ));

        $wp_customize->add_setting('company_name',array(
            'default'       =>  'Your Company Name',
            'transport'     =>  'refresh',
            
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,'company_textbox',array(
            'label'     =>  __('Name','TestTheme'),
            'section'   =>  'company',
            'settings'  =>  'company_name',
            
        )));
        $wp_customize->add_setting('company_color',array(
            'default'       =>  '#FFF',
            'transport'     =>  'refresh',
            
        ));
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'company_color_control',array(
            'label'     =>  __('Primary Brand Color','TestTheme'),
            'section'   =>  'company',
            'settings'  =>  'company_color',
            
        )));
    }

    function the_current_date()
    {
        $this_year = Date('Y');
        return $this_year;
    }

    add_action( 'init', 'create_post_type');
    function create_post_type()
    {
        register_post_type('countries',
            array(
                'labels'=>array(
                    'name'=> __('Countries'),
                    'singular_name'=>__('Country')
                ),
                'public'=>true,
                'has_archive'=>true,
            )
        );
    }

    $html5_support = array('search-form','comment-form','gallery','comment-list','caption');

    if(current_user_can('manage_options'))
    {
        add_theme_support('post-thumbnails');
        add_theme_support( 'post-formats', array('aside','gallery','video','image') );
        add_theme_support( 'menus' );

    }
    else
    {
        add_theme_support( 'post-formats', array('aside') );
    }
    add_theme_support( 'custom-header' );
    add_theme_support( 'custom-background' );
    add_theme_support('title-tag');
    add_theme_support( 'html5', $html5_support );

    register_nav_menus( array(
        'header_menu'   =>'Header Menu',
        'footer_menu'   =>'Footer Menu',
        'left_sidebar'  =>'Left Sidebar Menu',
        'header_submenu'=>'Header Submenu',
    ) );

    function wpdocs_theme_name_scripts(){
        wp_deregister_script('jquery');
        wp_register_script('jquery','http'.($_SERVER['SERVER_PORT']==443 ? "s":"").'://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js',false,null);
        wp_enqueue_script( 'script-name', get_template_directory_uri().'/js/submenus.js', array('jquery'), '1.0.0',true );
    }
    add_action('wp_enqueue_scripts','wpdocs_theme_name_scripts');
?>