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

            while(have_posts()) : the_post();

                echo '<a href="'.get_the_permalink().'">'.get_the_post_thumbnail(get_the_ID(),'thumbnail').'</a></br>';
                echo '<p>'.get_the_title().'<br/>';

                echo '<span style="font-size:10px; color:#999">'.get_the_date().' - '.get_the_author().' - '.get_the_author_posts().'</span></br>';

                $content = substr(strip_tags(get_the_content()),0,100);
                echo $content.'</br>';
                echo '<a href="'.get_the_permalink().'" style="font-size:12px;color:green;">'.get_the_permalink().'</a>'.'</p>';
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

<?php
    get_footer();
?>