<?php
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 10/6/2020
 * Time: 8:48 PM
 */
session_start();
require_once 'database.php';
// xoa ban ghi thoe id truyen tu trinh duyet
// lay id tu trinh duyet
// xu ly validate giong het chuc nang update.
$id = $_GET['id'];
// ket noi csdl, thuc hien truy van xoa theo id vua lay dc

// sau khi xoa, chuyen duong ve trang danh sach kem theo t.bao 'xoa thanh cong'
// tao truy van:
$sql_delete = "delete from products where id = $id";
// thuc thi truy van vua tao
$is_delete = mysqli_query($connection, $sql_delete);
if ($is_delete){
    $_SESSION['success'] = "xoa ban ghi $id thanh cong";
} else {
    $_SESSION['error'] = "xoa ban ghi taht bai";
}
header('location: index.php');
exit();

?>