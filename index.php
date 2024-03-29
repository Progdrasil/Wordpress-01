<?php
    get_header();
?>
<div class="section group">
    <div class="col span_1_of_3">
        <?php

            if (has_nav_menu('left_sidebar'))
            {
                wp_nav_menu( 
                    array(
                        'theme_location' =>  'left_sidebar',
                        'menu_id'       =>  'left-sidebar-menu',
                        'fallback_cb'   =>  false,
                    )
                );
            }
            else
            {
                echo 'Oops sorry there is no left sidebar menu. Please click on one of the menu links above';
            }
        ?>
    </div>
    <div class="col span_1_of_3">
    <?php
        echo '<h2>Countries</h2><hr/><hr/>';
        $args = array(
            'post_type'=>array('countries'),
            'posts_per_page'=>2,
            'orderby'=>'rand'
        );
        $post_data = get_posts($args);
        foreach($post_data as $post_item)
        {
            $link = get_permalink( $post_item );
            echo '<h3><a href ="'.$link.'">'.get_the_title($post_item).'</h3>';
            echo get_the_date('F j,Y', $post_item).'</a>'.'<hr/>';
        }

        echo '<h2>Posts</h2><hr/><hr/>';
        $args = array(
            'post_type'=>array('post'),
            'posts_per_page'=>2,
            'orderby'=>'rand'
        );
        $post_data = get_posts($args);
        foreach($post_data as $post_item)
        {
            $link = get_permalink( $post_item );
            echo '<h3><a href ="'.$link.'">'.get_the_title($post_item).'</a>'.'</h3>';
            echo get_the_date('F j,Y', $post_item).'<hr/>';
        }

        echo '<h2>Pages</h2><hr/><hr/>';
        $args = array(
            'post_type'=>array('page'),
            'posts_per_page'=>2,
            'orderby'=>'rand'
        );
        $post_data = get_posts($args);
        foreach($post_data as $post_item)
        {
            $link = get_permalink( $post_item );
            echo '<h3><a href ="'.$link.'">'.get_the_title($post_item).'</a>'.'</h3>';
            echo get_the_date('F j,Y', $post_item).'<hr/>';
        }
    ?>
    </div>
    <div class="col span_1_of_3">
    <?php 
        get_search_form( );
        get_sidebar(); 
    ?>
    </div>
</div>

<?php
    get_footer();
?>