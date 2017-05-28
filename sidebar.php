<h2 style="color:<?php echo get_theme_mod('specials_color','#000')?>;">Specials of the day</h2>
<ul>
    <li><?php echo get_theme_mod('food_choice');?></li>
</ul>


<?php

    $args = array(
        'smallest'  => '10',
        'largest'   => '20',
        'unit'      => 'pt',
        // 'number'    => '1',
        'format'    => 'flat',
        'separator' => ' | ',
        'order'     => 'RAND',
    );
    wp_tag_cloud($args);

?>

the current year is <?php echo the_current_date(); ?>