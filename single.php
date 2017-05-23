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
                /* This is for categories and/or tags */
            ?>
            <section>
                <p>
                    Categories: 
                    <?php
                        the_category(', ');
                    ?>
                </p>
                <p>
                    Tags: 
                    <?php
                        the_tags('<div id="tags">',' - ','</div>');
                    ?>
                </p>

            </section>
            <?php
                /* this is for posts */
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