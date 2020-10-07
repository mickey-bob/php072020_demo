<?php
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 10/6/2020
 * Time: 8:50 PM
 */
const DB_HOST = 'localhost';
const DB_USERNAME = 'root';
const DB_PASS = '';
const DB_NAME = 'php072020_demo';
const DB_PORT = 3306;

$connect = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASS,DB_NAME,DB_PORT);
if (!$connect){
    die ('Die chet luon (khi connect failed)'. mysqli_connect_error());
}
echo "ket noi thanh cong nha";
?>