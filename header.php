<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('stylesheet_directory');?>/style.css"/>

        <?php wp_head(); ?>
    </head>
    <body>
        <?php
            $header_menu = wp_nav_menu(
                array(
                    'theme_location'=>  'header_menu',
                    'echo'          =>  false,
                    'menu_class'    =>  'all-menus',
                    'menu_id'       =>  'header-menu',
                    'fallback_cb'   =>  false,
                    'before'        =>  '<img src="http://college.wfu.edu/biology/wp-content/uploads/2013/07/link.png" style="width:16px;height:16px;"/>&nbsp&nbsp',
                    'after'         =>  '|',
                    'container'     =>  'div',
                    'container_id'  =>  'header-parent',
                    'container_class'=> 'header-menus',
                    //'depth'         =>  1,
                )
            );
            echo $header_menu;
        ?>