<?php
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 10/2/2020
 * Time: 2:08 PM
 */
//debug $_post
session_start();
echo "<pre>";
print_r($_POST);
echo "</pre>";
// set var error vs result
$error = '';
$result = '';
// khi submit dau tien phai validate
if (isset($_POST['submit_login'])){
    //dat var trung gian
    $fullname = $_POST['username'];
    $password = $_POST['password'];
    if (empty($fullname) || empty($password)){
        $error = "username vs password ko de trong ban oi !!!";

    }elseif (strlen($password) <= 6){
        $error = "password ngan qua ban oi, toi thieu 6 character nhe";
    }

    if ($error == ''){
        if (isset($_POST['checkbox'])){
            setcookie(name_cookie, $fullname, time()+600);
            setcookie(pass_cookie, md5($password), time()+600);
        }
        $fullname = $_POST['username'];
        $password = $_POST['password'];
        $_SESSION['fullname'] = $fullname;
        $_SESSION['success'] = 'ban da dang nhap thanh cong';
        header('location: home.php');
        exit();
    }
}
if (isset($_COOKIE['name_cookie']) && isset($_COOKIE['pass_cookie'])){
    $_SESSION['fullname'] = $_COOKIE['name_cookie'];
    $_SESSION['success'] = "Ban da auto login thanh cong";
    header("location: home.php");
    exit();
}

?>
<!--form dang nhap-->
<form method="post" action="">
    user: <input type="text" name="username" value="" />
    <br />
    password: <input type="password" name="password" value="" />
    <br />
    ghi nho dang nhap: <input type="checkbox" name="checkbox" value="1" />
    <input type="submit" name="submit_login" value="kick de login" />
</form>
<h3 style="color: red"><?php echo "$error"; ?></h3>
<h3 style="color: blue"><?php echo "$result"; ?></h3>