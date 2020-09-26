<?php
session_start();
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 9/24/2020
 * Time: 8:43 PM
 */
/*
 * tao cau truc file/thu muc nhu sau:
 * demo_login:
 * /form_login.php: hien thi form login
 * username, passwd, ghi nho dang nhap
 * /home.php: hien thi username vua dang nhap vs thoi gian + link logout.
 * */

//Xu ly submit form
//+ debug array
echo "<pre>";
print_r($_POST);
echo "</pre>";
//+ tao bien chua error vs result
$error = '';
$result = '';
//+ check neu submit form thi xu ly
if (isset($_POST['login'])){
    //+ gan bien trung gian
    $username = $_POST['username'];
    $password = $_POST['password'];
    // note: voi radio vs checkbox se co truong hop ko tich -> php ko bat dc key tuong ung
    // vd: $remember_me = $post[]
    // + validate form:
    //- username, password ko dc de trong
    //- user phai it nhat 3 ky tu.
    if (empty($username) || empty($password)){
        $error = "username, password ko de trong ";
    } elseif (strlen($username) < 3){
        $error = 'username phai nhap it nhat 3 ky tu.';
    }

    //+ xu ly login chi khi nao ko co loi xay ra.
    if (empty($error)){
        // gia su login thanh cong khi password = 123.
        if ($password == 123){
            // hien thi username tai file home.php
            // su dung session de luu lai usename sau do moi chuyen huong sang file home.php
            $_SESSION['username'] = $username;
            $_SESSION['success'] = 'login thanh cong roi nha ban oi';
            // chuyen huong
            header('location:home.php');
            // ket thuc chuyen huong luon dung ham exit, de dam bao chuyen huong thanh cong trong moi truong hop
            exit();
        }else{
            $error = 'sai username/password';
        }
    }
}

?>
<h3 style="color: red;"><?php echo $error; ?></h3>
<form action="" method="POST">
    USERname: <input type="text" name="username" value="" />
    <br />
    password:
    <input type="password" name="password" value="" />
<!--    neu checkbox ma chi co dung 1 gia tri, thi ko can name o dang array -->
    <br />
    <input type="checkbox" name="remember_me" value="1" />
    Ghi nho dang nhap
    <input type="submit" name="login" value=" login o day" />
</form>


