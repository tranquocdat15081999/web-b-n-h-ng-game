<?php

require_once("../WEB1/resources/config.php");

?>

<?php

if(isset($_GET['add'])){
    $query= query("SELECT * FROM products WHERE id=".escape_string($_GET['add'])." ");
    confirm($query);

    while($row= fetch_array($query)){
        if ($row['quantity'] != $_SESSION['product_' . $_GET['add']]){
        $_SESSION['product_' . $_GET['add']] +=1;
        redirect("cart.php");
        } else{
           //echo "<script type='text/javascript'>alert('Vượt quá số lượng SP');</script>";
           $quasoluong= <<<OED
        <script type='text/javascript'>alert("Mặt hàng chỉ có số lượng {$row['quantity']} sản phẩm");</script>

OED;
echo $quasoluong;
          echo "<script type='text/javascript'>window.location.href='cart.php';</script>";

        }
    }


    //$_SESSION['product_' . $_GET['add']] +=1;

}



if(isset($_GET['remove'])){
   $_SESSION['product_' . $_GET['remove']]--;
   if($_SESSION['product_' . $_GET['remove']]<1){
       unset($_SESSION['total']);
     redirect("cart.php");
   } else {
       redirect("cart.php");
   }
}









if(isset($_GET['delete'])){
 $_SESSION['product_' . $_GET['delete']]='0';
 unset($_SESSION['total']);
 redirect("cart.php");
}

















function cart(){
$total=0;

foreach($_SESSION as $name => $value){
if($value > 0){
    if(substr($name, 0, 8)=="product_"){


    $id=substr($name, 8);

    $query= query("SELECT * FROM products WHERE id=".escape_string($id)." ");
    confirm($query);

    while($row= fetch_array($query)){
    $sub= $row['price']*$value;
    $price= number_format($row['price']);
    $sub_show=number_format($sub);

    $product= <<<OED
    <tr>
        <td>{$row['title']} - {$row['categories']}</td>
        <td>{$price} vnd</td>
        <td>{$value}</td>
        <td>{$sub_show} vnd</td>
        <td>
        <a class="btn btn-info" href="gio.php?remove={$row['id']}"><span class="glyphicon glyphicon-minus"></span></a>
        <a class="btn btn-warning" href="gio.php?add={$row['id']}"><span class="glyphicon glyphicon-plus"></span></a>
        <a class="btn btn-success" href="gio.php?delete={$row['id']}"><span class="glyphicon glyphicon-remove"></span></a>
        </td>
    </tr>
OED;
    echo $product;

            }
    $_SESSION['total'] = $total += $sub;

        }

    }

    }



}

function show(){
$total=0;

foreach($_SESSION as $name => $value){
if($value > 0){
    if(substr($name, 0, 8)=="product_"){


    $id=substr($name, 8);

    $query= query("SELECT * FROM products WHERE id=".escape_string($id)." ");
    confirm($query);

    while($row= fetch_array($query)){
    $sub= $row['price']*$value;
    $price= number_format($row['price']);
    $sub_show=number_format($sub);
    $product= <<<OED
    <tr>
        <td>{$row['title']} - {$row['categories']}</td>
        <td>{$price} vnd</td>
        <td>{$value}</td>
        <td>{$sub_show} vnd</td>

    </tr>
OED;
    echo $product;

            }
    $_SESSION['total'] = $total += $sub;

        }

    }

    }



}











function checkoutcart(){
$total=0;

foreach($_SESSION as $name => $value){
if($value > 0){
    if(substr($name, 0, 8)=="product_"){


    $id=substr($name, 8);

    $query= query("SELECT * FROM products WHERE id=".escape_string($id)." ");
    confirm($query);

    while($row= fetch_array($query)){
    $sub= $row['price']*$value;
    $sub_show=number_format($sub);

    $product= <<<OED

    <p>{$row['title']} - {$row['categories']} <span class="price">{$sub_show} vnd</span></p>

OED;
    echo $product;


            }
    $_SESSION['total'] = $total += $sub;

        }

    }

    }



}


?>