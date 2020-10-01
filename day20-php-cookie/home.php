<?php
session_start();
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 9/24/2020
 * Time: 8:46 PM
 */
if (!isset($_SESSION['username'])){
    $_SESSION['error'] = 'ban chua dang nhap dau, vao day lam gi';
    header('location: form_login.php');
    exit();
}

// home.php
// debug session dang co session nao
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
//+ xu ly sau khi hien thi session message can xoa luon de lan sau refresh lai trang web
// se ko hien  thi nua --> session flash.
if (isset($_SESSION['success'])){
    echo $_SESSION['success'];
    unset($_SESSION['success']);
}
// su dung {} de hien thi gia tri cua mang ngay trong chuoi ma ko can noi chuoi.
echo "Xin chao, <b>{$_SESSION['username']}</b>";
echo "<br />";
echo "Xin chao, <b>{$_SESSION['success']}</b>";
echo "<br />";
echo "<a href='logout.php'>logout</a>";


?>