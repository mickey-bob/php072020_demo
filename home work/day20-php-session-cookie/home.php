<?php
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 10/2/2020
 * Time: 2:08 PM
 */
session_start();
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
if (!isset($_SESSION['fullname'])){
    $_SESSION['success'] = "ban chua login, vao trang login nhe";
    header("location: login.php");
    exit();

}
// flash session: thong bao dang nhap thanh cong chi xuat hien 1 lan.
if (isset($_SESSION['success'])){
    echo $_SESSION['success'];
    unset($_SESSION['success']);

}

?>
<!--<h3>--><?php //echo $_SESSION['success'];?><!--</h3>-->
<h3>Xin chao <?php echo $_SESSION['fullname'];?></h3>
<a href="logout.php">logout</a>