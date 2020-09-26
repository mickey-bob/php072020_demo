<?php
session_start();
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 9/24/2020
 * Time: 7:25 PM
 * co the nhung file demo_session vao de su dung dc bien $fullname. : require, include
 * --> tuy nhien cach nay ko linh hoat khi web co nhieu file
 * + Bien dc luu boi session co the dc truy cap tu bat cu dau tren he thong.
 * + php co san var array $_sessinon luu toan bo t.tin cua cac sesson tren he thong.
 * + session se mat dc khi bi xoa or dong trinh duyet.
 * + thao tac vs session chinh la thao tac vs mang.
 * + lluon phai khởi tạo session thì mới sử dụng dc biến $session, sử dụng hàm session_start
 * + luôn khai báo session trên cùng file.
 *
 */
// them element cho session.
$_SESSION['fullname'] = 'khanhnt';
$_SESSION['age'] = '20';
$_SESSION['addr'] = 'Ha Noi';
$_SESSION['class']['amount'] = 10;

// - lay gia tri cua session
echo $_SESSION['age'];       //20

//- xoa session : xoa phan tu theo key or xoa tat luon
unset($_SESSION['addr']);
// - xoa het array: session_destroy();
//debug array $_session
echo "<pre>";
print_r($_SESSION);
echo "</pre>";


?>