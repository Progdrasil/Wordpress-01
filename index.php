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
                $args = array('posts_per_page'=>10);
                $post_data = get_posts($args);
                foreach($post_data as $post_item)
                {
                    echo get_the_title($post_item).'<hr/>';
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