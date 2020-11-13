<?php
require_once 'database.php';
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 11/12/2020
 * Time: 8:32 PM
 */
echo "<pre>";
print_r($_GET);
echo "</pre>";
$id = $_GET['id'];

if (isset($_GET['id'])){
    $sql_delete_cate = "delete from tbl_cate where id = $id";
    $sql_delete_product = "delete from tbl_product where id = $id";
    $is_delete_cate = mysqli_query($connection, $sql_delete_cate);
    $is_delete_product = mysqli_query($connection, $sql_delete_product);

    if ($is_delete_cate){
        $_SESSION['success'] = "xoa ban ghi $id thanh cong tai cate table";
    } else {
        $_SESSION['error'] = "xoa ban ghi taht bai";
    }
    if ($is_delete_product){
        $_SESSION['success'] = "xoa ban ghi $id thanh cong tai product table";
    } else {
        $_SESSION['error'] = "xoa ban ghi taht bai";
    }
    header('location: bai1.php');
    exit();

}
?>