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