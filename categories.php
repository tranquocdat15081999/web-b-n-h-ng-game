<?php

require_once("../WEB1/resources/config.php");

?>



<?php
    include (TEMPLATE_FRONT . DS . "header_cate.php");

?>


<?php
    include (TEMPLATE_FRONT . DS . "side_nav.php");

?>


<?php
    include (TEMPLATE_FRONT . DS . "menu.php");

?>

<?php
    include (TEMPLATE_FRONT . DS . "slideshow.php");

?>















 <?php
 function get_categories_yellow(){
    $query= query("SELECT * FROM categories");
    confirm($query);
    while ($row= fetch_array($query)){
            echo "<a href='categories.php?id={$row['cat_id']}&page=1'>
            <li>{$row['cat_name']}<ul><a></a></ul>
            </li></a> ";
    }
}
?>










        <table border="0">
            <tr>
                <th class="container cot1">
                    <div class="col-2">
                        <div class="menu">
                            <ul>
                                <?php get_categories_yellow(); ?>
                            </ul>
                        </div>
                    </div>
                </th>





                <?php
                $query= query("SELECT * FROM categories WHERE cat_id=".escape_string($_GET['id'])." ");

                confirm($query);

                while($row= fetch_array($query)){
                $title= $row["cat_name"];
                }


         ?>








                <th class="container cot2 whitebox">
                    <div class="row" align="center">
                        <div class="col-10 content">
                            <div class="row donghang"><h3><?php echo $title; ?></h3></div>
                            <?php
                            get_product_cat();

                            ?>








                        </div>
                        <div>
                             <ul class="pager">
                               <?php
                               
                               page();

                               ?>
                           </ul>

                            </div>
                    </div>
                </th>
            </tr>
        </table>











































<?php
    include (TEMPLATE_FRONT . DS . "footer.php");

?>

    </body>
</html>
