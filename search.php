<!DOCTYPE html>

<html>
    <?php
        /*
        Template Name: Search Page
        */
        get_header();
    ?>

    <body>
        <div class="section group">
            <div class="col span_2_of_3">
            <?php
                echo "<h2>Search Results: ".get_search_query()."</h2>";
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