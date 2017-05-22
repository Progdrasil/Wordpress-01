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
                $args = array();
                $post_data = get_posts($args);
                foreach($post_data as $post_item)
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