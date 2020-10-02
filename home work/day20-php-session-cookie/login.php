<?php
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 10/2/2020
 * Time: 2:08 PM
 */
//debug $_post
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
}

?>
<!--form dang nhap-->
<form method="post" action="">
    user: <input type="text" name="username" value="" />
    <br />
    password: <input type="password" name="password" value="" />
    <br />
    <input type="submit" name="submit_login" value="kick de login" />
</form>
<h3 style="color: red"></h3>
<h3 style="color: blue"></h3>