<?php
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 11/12/2020
 * Time: 7:24 PM
 */

const DB_HOST = 'localhost';
const DB_USERNAME = 'root';
const DB_PASSWORD = '';
const DB_NAME ='db_shop';
const DB_PORT = 3306;

$connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD,
    DB_NAME, DB_PORT);
if (!$connection) {
    die("Lỗi kết nối: " . mysqli_connect_error());
}
//echo "<h1>Kết nối CSDL thành công</h1>";