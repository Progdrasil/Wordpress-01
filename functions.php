<?php
    //add customizer support
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
        $wp_customize->add_setting('main_text_color',array(
            'default'       =>  '#000',
            'transport'     =>  'refresh',
            
        ));
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'main_text_color_control',array(
            'label'     =>  __('Text Color','TestTheme'),
            'section'   =>  'colors',
            'settings'  =>  'main_text_color',
            
        )));
        $wp_customize->add_setting('specials_color',array(
            'default'       =>  '#000',
            'transport'     =>  'refresh',
            
        ));
        $color_choices = array(
            'red'       =>  'Red',
            'purple'   =>  'Purple',
            '#000'      =>  'Black'
        );
        asort($color_choices);
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,'specials_color_control',array(
            'label'     =>  __('Special of the day Color','TestTheme'),
            'section'   =>  'colors',
            'settings'  =>  'specials_color',
            'type'      =>  'radio',
            'choices'   =>  $color_choices,
        )));

        $wp_customize->add_section('restaurant_settings',array(
            'title'     =>  __('Restaurant Settings','TestTheme'),
            'priority'  =>  20,
        ));

        $food_choices = array(
            'pizza'       =>  'Pizza',
            'burgers'   =>  'Burgers',
            'chicken'      =>  'Tikka Chicken',
            'sushi'      =>  'Sushi',
            'burritos'      =>  'Burritos',

        );
        asort($color_choices);
        $wp_customize->add_setting('food_choice',array(
            'default'       =>  'pizza',
            'transport'     =>  'refresh',
            
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,'food_choice_radio',array(
            'label'     =>  __('Food Choice','TestTheme'),
            'section'   =>  'restaurant_settings',
            'settings'  =>  'food_choice',
            'type'      => 'radio',
            'choices'   =>  $food_choices,
        )));

        // Google maps on customizer
        $wp_customize->add_section('google_maps_section',array(
            'title'     =>  __('Google Maps','TestTheme'),
            'priority'  =>  30,
        ));
        $wp_customize->add_setting('maps_latitude',array(
            'default'       =>  '0',
            'transport'     =>  'refresh',
            
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,'latitude_control',array(
            'label'     =>  __('Latitude','TestTheme'),
            'section'   =>  'google_maps_section',
            'settings'  =>  'maps_latitude',
        )));
        $wp_customize->add_setting('maps_longitude',array(
            'default'       =>  '0',
            'transport'     =>  'refresh',
            
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,'longitude_control',array(
            'label'     =>  __('longitude','TestTheme'),
            'section'   =>  'google_maps_section',
            'settings'  =>  'maps_longitude',
        )));
        
    }
    add_action('customize_register','initiate_customizer');

    function save_background_color(){
        ?>
        <style type="text/css">
            BODY{
                background-color:#<?php echo get_theme_mod('background_color');?>;
                color:<?php echo get_theme_mod('main_text_color'); ?> !important;
                background-image:url(<?php echo get_theme_mod('background_image'); ?>);
            }
        </style>
        <?php
    }
    add_action('wp_head','save_background_color');

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