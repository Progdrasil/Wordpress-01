<!DOCTYPE html>

<html>
    <?php
        get_header();
    ?>

    <body>
        <div class="section group">
            <div class="col span_3_of_3">
            <?php 
                echo '<h1>'.get_the_title().'</h1>';
                echo '<h4>'.get_the_date().'</h4>';
            ?>
            </div>
        </div>
        <div class="section group">
            <div class="col span_2_of_3">
            <?php
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
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