<form class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
    Search : <input type="text" name="s" value="<?php echo the_search_query()?>"/><br/>
    <input type="submit" value="Search"/>
</form>