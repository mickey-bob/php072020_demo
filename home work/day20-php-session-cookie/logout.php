<?php
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 10/2/2020
 * Time: 2:08 PM
 */
session_start();
//login tao session nao, logout xoa session do
unset($_SESSION['fullname']);
unset($_SESSION['success']);
$_SESSION['success'] = "dang xuat thanh cong";
setcookie(name_cookie, 'abc', time() - 1);
setcookie(pass_cookie, 'abc', time() - 1);
header('location: login.php');
exit();
?>