<?php
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 10/27/2020
 * Time: 6:45 PM
 */
// Ly thuyet MVC
// mvc: model - view - controller
// code thuan kho cho nguoi sau vao view, modify, imposible with lage project.
// framwork, cms cua php deu dc xay dung dua tren MVC
// TACH BIET website thanh 3 t.phan rieng biet
// because viet dua tren ooop --> kha khoai

/*
 * 2- Thanh phan:
 * + M: Model: tuong tac vs csdl, code ket noi, t.tac vs csdl
 * + V: View: show, hien thi giao dien toi nguoi dung.
 * + C: controler: Luan chuyen data between: M-V
 *
 * 3- xAY dung ung dung CRUD danh muc theo mo hinh MVC
 * B1: build cau truc folder MVC.
 * mvc-demo/assets/: chua css,js,image, font .. // cai gi mà user show dc thì cho vào assets.
 *                //css/style.css: file css
 *                //js/script.js: file js
 *                //images/abc.png: anh
 *
 *          /configs: chua cac cau hinh he thong DB, Mail...
 *                //Database.php: class chua cau hinh DB
 *          /controllers: chứa các class controller - C
 *                //CategoryController.php
 *          /models: chứa các class model: M trong MVC.
 *                //Category.php
 *          /views: chứa thư mục con liên quan đến object.
 *                //categories: các thư mục chứa file crud của danh mục.
 *                      /index.php: liệt kê danh mục
 *                      /create.php:
 *                      /update.php
 *                //layouts: chua file layout của ứng dụng.
 *                      /main.php
 *          /index.php: file index gốc của ứng dụng.
 *          /.htaccess: file rewite url.
 * */

?>