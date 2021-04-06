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














                <th class="container cot2 whitebox">
                    <div class="row" align="center">
                        <div class="col-10 content">
                            <div class="row donghang"></div>
                            <?php
                            if(isset($_GET['page'])){
        $page= $_GET['page'];
    } else {
        $page="";
    }
    if($page =="" || $page==1){
       $page_1=0;
    } else {
        $page_1=($page *8)-8;
    }

                            if(isset($_GET['search'])){

                            $search_query = $_GET['user_query'];
                            $get_pro = query("SELECT * FROM products WHERE title LIKE '%$search_query%' LIMIT $page_1,8 ");
                            confirm($get_pro);
                            while ($row= fetch_array($get_pro)){
                                $price= number_format($row['price']);
                                echo "<div class='responsive'>
        <a href='product.php?id={$row['id']}'>
            <div class='gallery'>
                <img src='admin_area/product_images/{$row['image']}'>
                <div>
                    <div class='title'>{$row['title']}</div>
                    <div class='price'>
                        {$price} đ
                    </div>
                    <div class='xemhang'>
                        <button>Xem Chi Tiết</button>
                    </div>
                </div>
            </div>
        </a>
        </div>";

                            }


                            }

                            ?>








                        </div>
                        <div>
                             <ul class="pager">
                               <?php
    $query_count= query("SELECT * FROM products WHERE title LIKE '%$search_query%' ");
    confirm($query_count);
    $count= mysqli_num_rows($query_count);
    $count=ceil($count/8);
    for($i=1;$i<=$count;$i++){
        if($i == $page){
           echo "<li><a style='background-color:#0c8cd6;color: white' href='result.php?user_query={$search_query}&search=&page={$i}'>{$i}</a></li>";
        } else {
           echo "<li><a href='result.php?user_query={$search_query}&search=&page={$i}'>{$i}</a></li>";
        }
    }

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
