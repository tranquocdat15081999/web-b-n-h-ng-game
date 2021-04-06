<?php

function get_categories1(){
    $query= query("SELECT * FROM categories WHERE cat_id=1 ");
    confirm($query);
    while ($row= fetch_array($query)){
            //echo "<a href='categories.php?id={$row['cat_id']}'>{$row['cat_name']}</a>";
            echo "<a href='categories.php?id={$row['cat_id']}&page=1' class='btn btn-danger dropdown-toggle'>{$row['cat_name']}</a>";
    }
}
?>
<?php

function get_categories2(){
    $query= query("SELECT * FROM categories WHERE cat_id=2 ");
    confirm($query);
    while ($row= fetch_array($query)){
            //echo "<a href='categories.php?id={$row['cat_id']}'>{$row['cat_name']}</a>";
            echo "<a href='categories.php?id={$row['cat_id']}&page=1' class='btn btn-danger dropdown-toggle'>{$row['cat_name']}</a>";
    }
}
?>
<?php

function get_categories3(){
    $query= query("SELECT * FROM categories WHERE cat_id=3 ");
    confirm($query);
    while ($row= fetch_array($query)){
            //echo "<a href='categories.php?id={$row['cat_id']}'>{$row['cat_name']}</a>";
            echo "<a href='categories.php?id={$row['cat_id']}&page=1' class='btn btn-danger dropdown-toggle'>{$row['cat_name']}</a>";
    }
}
?>
<?php

function get_categories4(){
    $query= query("SELECT * FROM categories WHERE cat_id=4 ");
    confirm($query);
    while ($row= fetch_array($query)){
            //echo "<a href='categories.php?id={$row['cat_id']}'>{$row['cat_name']}</a>";
            echo "<a href='categories.php?id={$row['cat_id']}&page=1' class='btn btn-danger dropdown-toggle'>{$row['cat_name']}</a>";
    }
}
?>
<?php

function get_categories5(){
    $query= query("SELECT * FROM categories WHERE cat_id=5 ");
    confirm($query);
    while ($row= fetch_array($query)){
            //echo "<a href='categories.php?id={$row['cat_id']}'>{$row['cat_name']}</a>";
            echo "<a href='categories.php?id={$row['cat_id']}&page=1' class='btn btn-danger dropdown-toggle'>{$row['cat_name']}</a>";
    }
}
?>
<?php

function get_categories6(){
    $query= query("SELECT * FROM categories WHERE cat_id=6 ");
    confirm($query);
    while ($row= fetch_array($query)){
            //echo "<a href='categories.php?id={$row['cat_id']}'>{$row['cat_name']}</a>";
            echo "<a href='categories.php?id={$row['cat_id']}&page=1' class='btn btn-danger dropdown-toggle'>{$row['cat_name']}</a>";
    }
}
?>
<?php

function get_categories7(){
    $query= query("SELECT * FROM categories WHERE cat_id=7 ");
    confirm($query);
    while ($row= fetch_array($query)){
            //echo "<a href='categories.php?id={$row['cat_id']}'>{$row['cat_name']}</a>";
            echo "<a href='categories.php?id={$row['cat_id']}&page=1' class='btn btn-danger dropdown-toggle'>{$row['cat_name']}</a>";
    }
}
?>
<?php

function get_categories8(){
    $query= query("SELECT * FROM categories WHERE cat_id=8 ");
    confirm($query);
    while ($row= fetch_array($query)){
            //echo "<a href='categories.php?id={$row['cat_id']}'>{$row['cat_name']}</a>";
            echo "<a href='categories.php?id={$row['cat_id']}&page=1' class='btn btn-danger dropdown-toggle'>{$row['cat_name']}</a>";
    }
}
?>
<?php

function get_categories9(){
    $query= query("SELECT * FROM categories WHERE cat_id=9 ");
    confirm($query);
    while ($row= fetch_array($query)){
            //echo "<a href='categories.php?id={$row['cat_id']}'>{$row['cat_name']}</a>";
            echo "<a href='categories.php?id={$row['cat_id']}&page=1' class='btn btn-danger dropdown-toggle'>{$row['cat_name']}</a>";
    }
}
?>





<div class="btn-group btn-group-justified me3 sticky">

            <div id="butt" class="btn-group">
                <?php get_categories1(); ?>
            </div>
            <div class="btn-group">
                <?php get_categories2(); ?>
            </div>
            <div class="btn-group">
                <?php get_categories3(); ?>
            </div>
            <div class="btn-group">
                <?php get_categories4(); ?>
            </div>
            <div class="btn-group">
                <?php get_categories5(); ?>
            </div>
            <div class="btn-group">
                <?php get_categories6(); ?>
            </div>
            <div class="btn-group">
                <?php get_categories7(); ?>
            </div>
            <div class="btn-group">
                <?php get_categories8(); ?>
            </div>
            <div class="btn-group">
                <?php get_categories9(); ?>
            </div>

        </div>