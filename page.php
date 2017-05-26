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
            <section>
                <!--Written by <?php the_author(); ?>-->
            </section>
            <?php
                /* this is for posts */
                while (have_posts()) : the_post();
                    echo 'Written by ';
                    the_author();
                    the_content();
                endwhile;
            ?>
            </div>
            <div class="col span_1_of_3">
            <?php 
                get_search_form( );
                get_sidebar(); 
            ?>
            </div>
        </div>
    </body>

    <?php
        get_footer();
    ?>
</html>