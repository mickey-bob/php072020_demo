<?php
session_start();
//Cần xử lý nếu như chưa login thì ko cho truy
//cập trang này
if (!isset($_SESSION['username'])) {
  $_SESSION['error'] = 'Bạn chưa đăng nhập';
  header("Location: form_login.php");
  exit();
}

/**
 * home.php
 */
// + Debug xem đang có các session nào
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
//sử dụng {} để hiển thị giá trị của mảng
//ngay trong chuỗi mà ko cần nối chuỗi
$success = $_SESSION['success'];
echo "<h1>$success</h1>";

$username = $_SESSION['username'];
echo "Xin chào, <b>$username</b>";
//Hiển thị link Logout
echo "<a href='logout.php'>Logout</a>";