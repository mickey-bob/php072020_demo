<?php
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 10/6/2020
 * Time: 6:46 PM
 *
 */
// Huong dan su dung PHP ket noi CSDL Mysql, thong qua thu vien Mysqli
// Mysqli: mysql improve:
// Thu vien mysqli chi ho tro ket noi CSDL: MYSQL.
// De ket noi toi CSDL khac: sql server, oricle, nosql .. thi can su dung co che ket noi khac:
// PDO, tuy nhien PDO dua tren ket noi huong doi tuong.
// hoc MYSQLI vi ho tro ham PHP thuan, ngoai ra mysqli cung ho tro ket noi theo OOP.
// OOP: lap trinh huong doi tuong.

// 1 - Tao CSDL: CREATE DATABASE IF NOT EXISTS php072020_demo CHARACTER SET utf8 COLLATE uft8_general_cli;
// 2- Tao table products co field sau: id, name, avata, desciption, creaed_at.
// 3 - tao table:
/*
 * CREATE TABLE products(
	id int(11) AUTO_INCREMENT,
    name VARCHAR(150),
    avartar VARCHAR(200),     // luu duong dan den file images
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    # KHAI BAO primary key, foreign key:
    PRIMARY KEY(id)
);
 * */
/*
 * Cac buoc ket noi csdl thong qua ham mysqli
 * Khai bao hang so dung cho viec ket noi:
 * KHAI BAO HANG: CONST
 * */
const DB_HOST = 'localhost';
// username dang nhap csdl:
const USER_NAME = 'root';
const PASS_WD = '';
// TEN csdl se ket noi:
const DB_NAME = 'php072020_demo';
const DB_PORT = 3306;
// goi ham ket nio CSDL.
// Thu vien mysqli luon co ham co tien to: mysqli
$connect = mysqli_connect(DB_HOST, USER_NAME,PASS_WD,DB_NAME,DB_PORT);
if (!$connect){
    die ("Ket noi CSDL that bai: error: ".mysqli_connect_error());
}
echo "<h1>Ket noi CSDL thanh cong nhe</h1>";

// + Viet cac truy van SQL vao table products cua CSDL php072020_demo
// id, name, avarta, description, created_at
$sql_insert = "INSERT INTO products(name, avartar, description)
VALUES ('Tivi', 'tivi.jpg','mo ta tivi tot'),('tu lanh', 'tulanh.jpg','mo ta tu lanh ngon') ";
// thuc thi truy van, mysqli_query
// voi cac truy van: insert, update, delete --> ham mysqli_query luon tra ve boolean.
//voi truy van: select --> mysqli_query tra ve 1 doi tuong trung gian.
$is_insert = mysqli_query($connect,$sql_insert);
var_dump($is_insert);
// cach debug ket qua tra ve fales: copy cau truy van roi chay tren phpadmin
// + truy van update: update name = new name cho cac ban ghi co id < 3
// tao truy van update, delete chu y phai kem theo dieu kien:
$sql_update = "UPDATE products SET name = 'new_name' where id < 3";
// - thuc thi truy van:
$is_update = mysqli_query($connect,$sql_update);
var_dump($is_update);

// + truy van DELETE: xoa ban ghi co id > 10;
$sql_delete = "DELETE FROM products WHERE id > 10";
//+ thuc thi truy van
$is_delete = mysqli_query($connect,$sql_delete);
var_dump($is_delete);


// + truy van select:
//truy van select lay ra nhieu ban ghi: lay t.tin toan bo san pham trong table products.
// B1: tao cau truy van
$sql_select_all = "SELECT * FROM products";
//B2: thuc thi truy van vua tao, dung ham mysqli, tuy nhien du lieu tra ve la object trung gian
$result_all = mysqli_query($connect,$sql_select_all);
echo "<pre>";
print_r($result_all);
echo "</pre>";

//B3: tra ve ket qua dua vao doi tuong trung gian:
$products = mysqli_fetch_all($result_all, MYSQLI_ASSOC) ;
foreach ($products AS $product){
    echo $product['name'] ."<br />";
}
echo "<pre>";
print_r($products);
echo "</pre>";
// - truy van select lay ra ban ghi duy nhat, lay san pham co id = 5;
// B1: TAO cau truy van
$sql_select_one = "SELECT * FROM products WHERE id =5";
// b2: thuc thi cau truy van vua tao:
$result_one = mysqli_query($connect,$sql_select_one);
//b3: tra ve mang ket qua dua tren doi tuong tung gian lay dc.
$product = mysqli_fetch_assoc($result_one);
echo "<pre>";
print_r($product);
echo "</pre>";

// sau khi hoan thanh truy van phai close connection de giai phong tai nguyen.
mysqli_close($connect);
?>