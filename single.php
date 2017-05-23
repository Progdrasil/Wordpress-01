<!DOCTYPE html>

<html>
    <?php
        get_header();
    ?>

    <body>
        <div class="section group">
            <div class="col span_3_of_3">
            <?php echo'<h1>'.get_the_title().'</h1>';?>
            </div>
        </div>
        <div class="section group">
            <div class="col span_2_of_3">
            This is column 1 and 2
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