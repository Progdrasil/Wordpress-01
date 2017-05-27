<?php
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
?>