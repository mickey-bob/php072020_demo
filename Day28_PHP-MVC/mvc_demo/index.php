<?php
session_start();
// can set lai time zone quoc gia hien tai
date_default_timezone_set('Asia/Ho_Chi_Minh');
//echo date('Y-m-d H:i:s');
//echo date_default_timezone_get();
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 10/27/2020
 * Time: 7:13 PM
 */
//mvc_demo/index.php
// Viet truy van tao CSDL
//+ CSDL: php072020
// CREATE DATABASE IF NOT EXISTS php072020e_mvc CHARACTER SET utf8 COLLATE utf8_general_ci;
// Create tables: --> col:  id, name, description,....
// CREATE TABLE categories (
//id INT(11) AUTO_INCREMENT,name VARCHAR(100),description TEXT, status TINYINT(1) DEFAULT 1, created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
//#SET PRIMARY KEY
//    PRIMARY KEY (id)
//);
//
// mvc_demo/index.php:
// + day la file index root cua ung dung mvc, la file code dau tien khi code MVC.
// + vì đây là file sẽ nhận toàn bộ các request từ user gửi đến, sau đó nó sẽ xem gọi
// + controller nào để xử lý.
// + y tuong code: phân tích url, lấy dc controller vs action tương ứng, sau đó khởi tạo obj controller,
// + từ object đó truy cập action tương ứng.
// + Với MVC, thì các url luôn phải tuân theo quy định nào đó (quy định của chính mình)
// + Với MVC nay luôn có dạng như sau:
// index.php?controller=<ten-controller>&action=<method-cua-controller>
// VD: index.php?controller=category&action=create
// vd: index.php?controller=category&action=index

// khi code MVC, cần thay đổi tư duy nhúng file, nhúng file tính từ file index.php root của ứng dụng.
//
// Quy tắc đặt tên file bắt buộc vs mô hình MVC:
// + ten file model: Category.php, Product.php, OrderDetail.php
// + ten file controllers: CategoryController.php, ProductController.php, ...
// --------- Demo chức năng thêm mới danh mục: ----------------------
// index.php?controller=category&action=create
//echo "index.php";
// Lay ra giá trị của tham sớ từ url
//$controller = $_GET['controller'];
//echo $controller;
//cần bắt chuẩn hơn vì có trường hợp user vào trang chủ ko truyền tham sso gì trên url
$controller = isset($_GET['controller']) ? $_GET['controller']: 'home';
//echo $controller; // category
//die("die sau $controller");
// lay tham so action tu url
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
//echo $action;
//die();
// - Phan tich controller, bien doi thanh file controller tuong ung, muc dich de nhung file controller do vao
// + Voi crud danh muc thi file controller dich la: CategoryController.php
// + var $category = category.
// + bien doi ky tu dau tien -> ky tu hoa
$controller = ucfirst($controller); // Category
// Noi them chuoi controler vao sau
$controller .= "Controller"; // CategoryController.

// Tao var khac de luu ten file controller.
$controller_file = "$controller.php"; // CategoryController.php
// Tao var chua duong dan toi file controller tren de c.bi nhung file
// luu y nhung file đường dẫn tương đối from index.php root file.
$controller_path = "controllers/$controller_file";
// check if file is not exist, t.bao Not found
// file ko ton tai tuong duong vs controller ko ton tai
if (!file_exists($controller_path)){
    die("Trang ban tim ko ton tai");
}
// Thuc hien nhung file de khoi tao doi tuong tu class trong file do
// file: CategoryController.php
require_once "$controller_path";

// khoi tao object tu class controller
$obj = new $controller();
// goi method tuong ung vs action ( lay tu url) của obj vua khoi tao.
// can check neu ton tai method trong class thi moi truy cap dc.
if (!method_exists($obj, $action)){
    die("Method $action ko ton tai trong $controller");
}
$obj -> $action();
?>