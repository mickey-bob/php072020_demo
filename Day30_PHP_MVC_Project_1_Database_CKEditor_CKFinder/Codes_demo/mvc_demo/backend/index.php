<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
/*
 * backend/index.php
 * file index gốc của ứng dụng, là file đầu tiên code trong mô hình MVC
 * -- MỤC đích p.tích url để gọi đến controller.
 * url trong mvc hieenj taij luoon cos dangj sau:
 * index.php?controller=category&action=create
 * tu url lay ra controller vs action
 * */
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
// bieens doi controller -> ten file nhung controller: CategoryController.php

?>