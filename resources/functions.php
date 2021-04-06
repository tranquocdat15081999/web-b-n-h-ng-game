<?php
function redirect($location){
    header("Location:$location");
}


function query($sql){
    global $connection;
    return mysqli_query($connection,$sql);
}


function confirm($result){
    global $connection;
    if(!$result){
        die("Query failed". mysqli_error($connection));
    }
}


function escape_string($string){
    global $connection;
    return mysqli_real_escape_string($connection,$string);
}

function fetch_array($result){
    return mysqli_fetch_array($result);
}



function get_product(){
    $query= query("SELECT * FROM products");

    confirm($query);

    while($row= fetch_array($query)){

    echo "<div class='responsive'>
        <a href='product.php?id={$row['id']}'>
            <div class='gallery'>
                <img src='admin_area/product_images/{$row['image']}'>
                <div>
                    <div class='title'>{$row['title']}</div>
                    <div class='price'>
                        {$row['price']} đ
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













function get_product_cat(){
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

    $query= query("SELECT * FROM products WHERE categories_main_id=".escape_string($_GET['id'])." LIMIT $page_1,8 ");

    confirm($query);

    while($row= fetch_array($query)){
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













function get_categories(){
    $query= query("SELECT * FROM categories");
    confirm($query);
    while ($row= fetch_array($query)){
            echo "<a href='javascript:void(0)' class='closebtn' onclick='closeNav()'>&times;</a>";
            echo "<a href='categories.php?id={$row['cat_id']}&page=1'>{$row['cat_name']}</a>";
    }
}
function page(){


    $page= $_GET['page'];
    $query= query("SELECT * FROM products WHERE categories_main_id=".escape_string($_GET['id'])." ");
    confirm($query);
    $query_count= query("SELECT * FROM products WHERE categories_main_id=".escape_string($_GET['id'])." ");
    confirm($query_count);
    $count= mysqli_num_rows($query_count);
    $count=ceil($count/8);
    $row= fetch_array($query);
        for($i=1;$i<=$count;$i++){
        if($i == $page){
           echo "<li><a style='background-color:#0c8cd6;color: white' href='categories.php?id={$row['categories_main_id']}&page={$i}'>{$i}</a></li>";
        } else {
           echo "<li><a href='categories.php?id={$row['categories_main_id']}&page={$i}'>{$i}</a></li>";
        }

}


}












function register(){
     if (isset($_POST["submit"])){
     $username = escape_string($_POST["username"]);
     $password = escape_string($_POST["confirm_password"]);
     $name = escape_string($_POST["yourname"]);
     $phone = escape_string($_POST["yourphone"]);
     $email = escape_string($_POST["myemail"]);
     $add = escape_string($_POST["address"]);


//   $hashformat = "$2y$10$";
//    $salt ="MUvodoi1";
//    $hash_n_salt = $hashformat .  $salt;

//    $password = crypt($password,$hash_n_salt);

$dup = query("SELECT username FROM users WHERE username='{$username}'");
        if(mysqli_num_rows($dup) >0){
            echo "<script>alert('Tên đăng nhập đã có người sử dụng, vui lòng chọn tên khác')</script>";
        } else {
        $query = query("INSERT INTO users (username, password, name, phone, email, address) VALUES ('$username', '$password', '$name', '$phone', '$email', '$add')");

        confirm($query);
        echo "<script type='text/javascript'>alert('Đăng kí thành công');</script>";
        echo "<script>window.open('login.php','_self')</script>";
        }


}
}























function login_user(){
  if (isset($_POST["submit"])){
      $username = escape_string($_POST["username"]);
      $password = escape_string($_POST["password"]);

      $query = query("SELECT * FROM users WHERE username='{$username}' AND BINARY password='{$password}' ");
      confirm($query);

      if(mysqli_num_rows($query) ==0){
          echo "<script type='text/javascript'>alert('Sai tên tài khoản hoặc mật khẩu');</script>";
          //redirect("login.php");
      } else {
          $_SESSION['username']=$username;
          echo "<script type='text/javascript'>alert('Đăng nhập thành công');</script>";
          echo "<script type='text/javascript'>alert('Chào $username');</script>";
          echo "<script>window.open('index.php','_self')</script>";

          //redirect("index.php");
      }
  }
}











































?>