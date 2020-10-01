<?php
session_start();
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 9/29/2020
 * Time: 6:57 PM
 * // xu lly dang xuaat user,
 * dang nhap tao session gi, dang xuat xoa session do ddi.
 *
 */
unset($_SESSION['username']);
unset($_SESSION['success']);
$_SESSION['success'] = 'dang xuat thanh cong';
//+ xoa cookie lien quan den username vs password da luu cho chuc nang ghi nho dang nhap.
// neu ko xoa cookie se ko log out dc, tai sao ve xem lai code.
setcookie('username', 'dafafa', time() -1);
setcookie('password', 'dafdafafa', time() -1);
header('location: demo_login.php');
exit();
?>