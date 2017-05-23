<!DOCTYPE html>

<html>
    <?php
        get_header();
    ?>

    <body>
        <div class="section group">
            <div class="col span_1_of_3">
            This is column 1
            </div>
            <div class="col span_1_of_3">
            <?php
                echo '<h2>Countries</h2><hr/><hr/>';
                $args = array(
                    'post_type'=>array('countries'),
                    'posts_per_page'=>10
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
                    'posts_per_page'=>10
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
            <?php get_sidebar(); ?>
            </div>
        </div>
    </body>

    <?php
        get_footer();
    ?>
</html>