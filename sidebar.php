<h2 style="color:<?php echo get_theme_mod('specials_color','#000')?>;">Specials of the day</h2>
<ul>
    <li><?php echo get_theme_mod('food_choice');?></li>
</ul>

<h2>Visit us on the map</h2>
<div id="map"></div>
<script>
    function initMap() {
    var restaurant = {lat: <?php echo get_theme_mod('maps_latitude');?>, lng: <?php echo get_theme_mod('maps_longitude');?>};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 10,
        center: restaurant
    });
    var marker = new google.maps.Marker({
        position: restaurant,
        map: map
    });
    }
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpUPE5Z7mv7b2XTSiIK6A7SUVBCvlq1BY&callback=initMap">
</script>

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