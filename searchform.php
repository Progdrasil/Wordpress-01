<form class="searchform" action="<?php home_url() ?>/Search" method="get">
    Search : <input type="text" name="s" value="<?php echo the_search_query()?>"/><br/>

    <select name="search_category">
        <option name="none"></option>
        <?php
            $categories = get_categories();
            foreach($categories as $cat)
            {
                $val = $cat->category_nicename;
                $name = $cat->cat_name;
                $count = $cat->category_count;

                print("<option value='$val'>$name($count)</option>");
            }
        ?>
    </select>

    <input type="submit" value="Search"/>
</form>