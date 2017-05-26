<?php
    /*
    Template Name: Category Page
    */
    get_header();
?>

<body>
    <div class="section group">
        <div class="col span_2_of_3">
        <h2>Tag: <?php echo single_cat_title();?></h2>

        <?php
            //the Loop
            while (have_posts()) : the_post(); ?> 
            <h4><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permalink to <?php the_title_attribute(); ?>" ><?php the_title();?></a></h4>

            <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>

            <div class="entry">
                <? the_content(); ?>

                <p class="postmetadata"><?php comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments Closed' ); ?></p>
            </div>
            <?php endwhile;
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