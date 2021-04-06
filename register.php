<script>
  function check_Alpha(letters){
    var regex = /^[a-z A-Z]+$/;
    if(regex.test(letters.yourname.value) == false){
   alert("Tên không dc có số hoặc kí tự đặc biệt");
   letters.yourname.focus();
   return false;
    }
    if(letters.yourname.value ==""){
      alert("Tên ko dc để trống");
      letters.yourname.focus();
      return false;
    }
    return true;
  }
</script>




<script>
  function check_phone(phno){
    var regex = /(09|01[2|6|8|9])+([0-9]{8})\b/;
    if(regex.test(phno.yourphone.value)){

   return true;
    }
    else{
      alert("SDT ko hợp lệ");
      return false;
  }
  }
</script>




<script>
  function check_Email(mail){
    var regex = /^(([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5}){1,25})+([;.](([a-zA-Z0-9_\-\.]+)@{[a-zA-Z0-9_\-\.]+0\.([a-zA-Z]{2,5}){1,25})+)*$/;
    if(regex.test(mail.myemail.value)){
      return true;
    }
    else{
      alert("Tên Email ko hợp lệ");
      return false;
    }
  }

</script>



<script>
  function check_username(user){
    var regex = /^(?!.*__.*)(?!.*\.\..*)[a-z0-9_.]+$/;
    if(regex.test(user.username.value)){
      return true;
    }
    else{
      alert("Tên Đăng Nhập ko hợp lệ");
      return false;
    }
  }

</script>


<script>
  function check_password(pass){
    var regex = /^(?=[^A-Z]*[A-Z])(?=[^a-z]*[a-z])(?=[^0-9]*[0-9]).{6,}$/;
    if(regex.test(pass.confirm_password.value)){
      return true;
    }
    else{
      alert("Mật khẩu ko hợp lệ");
      return false;
    }
  }

</script>



<script>
    var password = document.getElementById("dkpassword")
    , confirm_password = document.getElementById("confirm_password");

    function validatePassword(){
        if(password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Mật Khẩu Không Trùng Khớp");
        } else {
            confirm_password.setCustomValidity('');
        }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
</script>








<?php

require_once("../WEB1/resources/config.php");

?>


























<!DOCTYPE html>
<html>
    <head>
        <title>Rùa Đỏ Game</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">

        <!--CSS-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800,800i,900,900i&amp;subset=vietnamese" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
                background-color: black;
            }

            * {
                box-sizing: border-box;
            }

            /* Add padding to containers */
            .box {
                padding: 16px;
                background-color: white;
            }

            /* Full-width input fields */
            input[type=text], input[type=password], input[type=number], input[type=date] {
                width: 100%;
                padding: 15px;
                margin: 5px 0 22px 0;
                display: inline-block;
                border: none;
                background: #f1f1f1;
            }

            input[type=text]:focus, input[type=password]:focus, input[type=number]:focus, input[type=date]:focus {
                background-color: #ddd;
                outline: none;
            }

            /* Overwrite default styles of hr */
            hr {
                border: 1px solid #f1f1f1;
                margin-bottom: 25px;
            }

            /* Set a style for the submit button */
            .registerbtn {
                background-color: red;
                background-image: linear-gradient(to right, red , #f2357a);
                color: white;
                font-weight: bolder;
                padding: 16px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
                opacity: 0.9;
            }

            .registerbtn:hover {
                opacity: 1;
            }

            /* Add a blue text color to links */
            a {
                color: dodgerblue;
            }

            /* Set a grey background color and center the text of the "sign in" section */
            .signin {
                background-color: #f1f1f1;
                text-align: center;
            }
            .tuade{
                font-family:  'Montserrat', sans-serif;
                font-size: 37px;
                font-weight: bold;
                color: #000000;
                text-shadow: 4px 2px #c0c8d6;
                text-align: center;
            }
            body{

                background-image: url(new-bg2.png);
                background-image: url(new-bg2.png),linear-gradient(55deg, #0fb8ad 0%, #1fc8db 51%, #2cb5e8 85%);

            }
        </style>
    </head>
    <body>
        <div style="text-align: center" class="container">
            <a href="index.php"><img src="head_logo.png"></a>
        </div>

        <form onSubmit="return check_Alpha(this) && check_phone(this) && check_Email(this) && check_username(this) && check_password(this) && validatePassword()" method="post">
                <?php register(); ?>
                <div class="container box">
                <p class="tuade">ĐĂNG KÍ</p>
                <hr>
                <div class="boxthing">
                    <label><b>Họ và tên</b></label>
                    <input id="hovaten" type="text" name="yourname" placeholder="VD: Nguyễn Thị Lân">
                </div>

                <label class="fas fa-phone"><b>  SĐT</b></label>
                <input type="number" placeholder="SĐT" name="yourphone" maxlength="11" required>


                <label class="fas fa-envelope"><b>  Email</b></label>
                <input id="email" type="text" placeholder="example@gmail.com" name="myemail" required>

                <label class="fas fa-home"><b>  Địa Chỉ</b></label>
                <input type="text" name="address" placeholder="VD: 69 Nguyễn Văn Cừ P6 Q3">

                <label class="fas fa-user"><b>  Tên Đăng Nhập</b></label>
                <input id="dkusername" type="text" minlength="06" name="username" placeholder="Nhập Tên Tài Khoản" required>

                <label class="fas fa-key"><b>  Mật Khẩu</b></label>
                <input id="dkpassword" pattern="[A-Za-z0-9]+" name="password" minlength="8" type="password" placeholder="Nhập Mật Khẩu" name="psw" required>

                <label for="confirm_password" class="fas fa-key"><b>  Nhập lại Mật Khẩu</b></label>
                <input id="confirm_password" pattern="[A-Za-z0-9]+" name="confirm_password" minlength="8" type="password" placeholder="Nhập Lại Mật Khẩu"required>
                <hr>
                <p>Bằng việc tạo tài khoản, bạn đã đồng ý với <a href="#">điều khoản và điều kiện</a> của chúng tôi.</p>



                <button type="submit" name="submit" class="registerbtn" >Đăng Kí</button>
            </div>

            <div class="container signin box">
                <p>Đã có tài khoản? <a href="login.php">Đăng Nhập</a>.</p>
            </div>
        </form>

    </body>
</html>





<!--<script>
  function check_masv(pho){
    var regex = /^\d{5}$/;
    if(regex.test(pho.masv.value)){

   return true;
    }
    else{
      alert("Mã SV ko hợp lệ");
      return false;
  }
  }
</script>-->





























