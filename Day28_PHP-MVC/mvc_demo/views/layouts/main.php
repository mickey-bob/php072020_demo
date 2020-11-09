<?php
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 10/27/2020
 * Time: 7:18 PM
 */
// VIEWS/layouts/main.php
//file layout cua ung dung, chua t.phan chung de cac view cung su dung
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>title</title>
    <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
<div class="header">
    <h1>Day la header</h1>
</div>
<div class="main">
    <h1>Day la main trong file view-layouts-main</h1>
    <?php
    // hien thi error cua file layout, vi view nao cung phai nhung file layout vao
    echo "<p style='color: red'>$this->error </p>";

    // Hien thi session thanh cong neu co
    if (isset($_SESSION['success'])){
        echo $_SESSION['success'];
        unset($_SESSION['success']);
    }
    ?>
<!--    chuyen dynamic du lieu cua tung view vao day-->
    <h1> Bat dau goi t.tinh content trong class category</h1>
    <?php
    // do bên controllder da nhung file layout rooi, nen file nay
    // co the su dung t.tinh (attribute) cua controller do
    echo $this -> content;

    ?>
</div>
<div class="footer">
    <h1>Day la footer</h1>
</div>

<script src="assets/js/script.js"></script>
</body>
</html>