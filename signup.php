<?php
    include "init.php";
    // $baseClass = new DB();
        // include "classes/DB.php";

        // $db = new DB();

    $baseClass = new BaseClass();
// echo $db->connect;
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['signup'])){
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $img_name   = $_FILES['img']['name'];
        $img_temp   = $_FILES['img']['tmp_name'];
        $img_path = "assets/img/";
        $extention = ['jpeg','jpg','png'];
        $img_ext = explode(".",$img_name);
        $img_ext = end($img_ext);

        $name_status = $email_status = $password_status = $img_status = 1;

        if(empty($img_name)){
            $img_error = "Image is required..";
            $img_status = "";
        }else if(!in_array($img_ext,$extention)){
            $img_error = "Image is invalid..";
            $img_status = "";
        }

        if(empty($full_name)){
            $name_error = "Full name is required..";
            $name_status = "";
        }

        if(empty($email)){
            $email_error = "Email is required..";
            $email_status = "";
        }else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $email_error = "Email is not valid..";
            $email_status = "";
        }else if($baseClass->emailExists($email)){
            $email_error = "Email already exists..";
            $email_status = "";
        }

        if(empty($password)){
            $password_error = "Password  is required..";
            $password_status = "";
        }else if(strlen($password) < 5){
            $password_error = "Password  is short..";
            $password_status = "";
        }

        if(!empty($name_status) && !empty($email_status) && !empty($password_status && !empty($img_status))){
           
            move_uploaded_file($img_temp,"$img_path/$img_name");

            $status =1;
           
            $baseClass->normalQuery("INSERT INTO users (name,email,password,image,status) VALUES 
            (?,?,?,?,?)",[$full_name,$email,password_hash($password,PASSWORD_DEFAULT),$img_name,$status]);
        

        }


    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Create new account</title>
   <?php  include 'components/css.php' ?>
</head>
<body>
    <div class="signup-container">
        <div class="account-left">
         
        </div>
        <div class="account-right">

            <?php  include 'components/signup_form.php' ?>
        
        </div>
    </div>

    <?php  include 'components/js.php' ?>

</body>
</html>