<?php
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 10/22/2020
 * Time: 7:11 PM
 * PDO_DEMO
 */
// voi thu vien mysqli co ca cu phap cua OOP, tuy nhien mysqli chi ho tro ket noi toi
// 1 csdl duy nhat la mysql
// Co che PDO -PHP Data Object la co the ket noi csdl thuong dc su dung nhat trong framework vs cms.
// - pdo ho tro ket noi toi tat ca csdl thong dung.
// - pdo su dung hoan toan cu phap cua oop
// - pdo: co 1 co che giup bao mat cau truy van SQL, SQL injection: thong qua co che
// bind param -- tao cau truy van dang tham so.
// 2. Tao databases: CREATE DATABASE IF NOT EXISTS php0720_pdo CHARACTER SET utf8 COLLATE utf8_general_ci;
// 3. tao table trong database:
//# tao bang categories co cac truong id, name, description, status created_at
//CREATE TABLE categories(id INT(1) AUTO_INCREMENT, name VARCHAR(100),
//description TEXT, status TINYINT(1) DEFAULT 1, # defual gia tri =1 neu ko chi dinh gia tri cu the.
//created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
//PRIMARY KEY(id));

// PDO dung ket noi CSDL
//1 - KHOI tao ket noi:
// vs mysqli: username, password, ....
// vs PDO:
// Data suorce name: du lieu nguon cua CSDL;
// DSN ko dc co dau cach, ko dc xuong dong.
const DB_DSN = 'mysql:host=localhost;dbname=php0720_pdo;port=3306;charset=utf8';
//username ket noi vao CSDL:
const DB_USERNAME = 'root';
// password ket noi csdl
const DB_PASSWORD = '';
// Thuc hien ket noi, nen su dung cu phap try .. catch de thuc hien ket noi.
try {
    $connection = new PDO(DB_DSN,DB_USERNAME,DB_PASSWORD);
} catch (PDOException $e){
    die("Loi ket noi:" .$e->getMessage());
}
/// check lai phuong thuc khoi tao trong class (newPDO() --> la p.thuc khoi tao).//////////////////
echo "Ban da ket noi thanh cong";
//echo "<pre>";
//print_r($connection);
//echo "</pre>";
//die("die sau pdo_connection");

//2- truy van insert: them vao bang categories: id, name, description, status, created-at
// + viet cau truy van, can de y: neu gia tri truyen vao la string, thi nen khai bao cau
// truy van dang tham so, con neu gia tri truyen vao biet chac chan la so thi ko can.
// vi sql injection xay ra chu yeu voi gia tri : string.
$sql_insert = "INSERT INTO categories(name,description,status) VALUES (:name,:description,:status)";
// :status co the ko can : vi status truyen number vao
// bind params: cau truy van dang co 3 tham so.
// + Tao doi tuong truy van, ket qua tra ve la 1 object truy van
$obj_insert = $connection -> prepare($sql_insert);
// prepare () la method cua class PDO --> object connection dc khoi tao tu class PDO
// --> Object connection truy cap dc p.thuc prepare cua PDO.
//echo "<pre>";
//print_r ($obj_insert);
//echo "</pre>";
//die("die sau insert");
// + (options) tao mang de truyen gia tri that cho cac tham so trong cau truy van.
// buoc nay chi co khi cau truy van co tham so, so phan tu cua mang chinh bang so luong
// tham so trong cau truy van
$inserts = [
    ':name' => 'The thao',
    ':description' => 'mo ta cho the thao',
    ':status' => 1
];
// + Thuc thi truy van dua tren duoi tuong truy van tren:
// voi truy van insert, update, delete -> tra e boolean.
$is_insert = $obj_insert->execute($inserts);
var_dump($is_insert);
//die("die sau vardum insert");

//3- truy van UPDATE: cap nhat ban ghi co id = 1, set name = New name, status = 0,
// description = ABC..
// + TAO cau truy van dang tham so.
$sql_update = "UPDATE categories SET name= :name, description = :description, status = 0 where id = 1";
// do status la number nen ko can khai bao tham so :status
// + chuan bi doi tuong truy van
$obj_update = $connection->prepare($sql_update);
// tao array de gan gia tri cho 2 tham so
$updates = [
    ':name' => 'new name',
    ':description' => 'ABC',

];
// + THUC THI object truy van
$is_update = $obj_update->execute($updates);
var_dump($is_update);
//4 - truy van DELETE: xoa ban ghi co id > 10
// + tao cau truy van:
$sql_delete = "DELETE FROM categories WHERE id > 10";
//+ chuan bi doi tuong truy van
$obj_delete = $connection->prepare($sql_delete);
// + ko co buoc tao array de gan gia tri vi cau truy van ko co tham so.
// + thuc thi doi tuong truy van
$is_delete = $obj_delete -> execute();
var_dump($is_delete);


// 5 - truy van select
// + truy van lay nhieu ban ghi dang co sap xep theo moi nhat.
// + viet cau truy van
$sql_select_all = "SELECT * FROM categories ORDER BY created_at DESC ";
// + CHUAN BI object truy van
$obj_select_all = $connection->prepare($sql_select_all);
//+ bo qua buoc tao array de truyen gia tri vi ko co tham so.
//+ thuc thi doi tuong truy van, voi truy van select ko can thao tac vs ketqua
// tra ve cua viec thuc thi
$obj_select_all->execute();
// + lay 1 array gom nhieu phan tu sau khi thuc thi truy van.
// goi hang so torng 1 class theo cu phap: <ten-class>::<ten-hang>
// cu phap giong goi attribute/method static
$categories = $obj_select_all->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($categories);
echo "</pre>";

// b:/ lay 1 ban ghi duy nhat: lay ban ghi co id = 1
// + tao cau truy van.
$sql_select_one = "select * from categories where id =1";
// + chuan bi doi tuong truy van:
$obj_select_one = $connection->prepare($sql_select_one);
//+ bo qua tao array vi cau truy van ko co tham so nao
// + thuc thi object truy van
$obj_select_one ->execute();
// + tra ve mang 1 chieu chua ban ghi tuong ung
$category = $obj_select_one->fetch(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($category);
echo "</pre>";

// DEMO lOI bao mat SQL INJECTION