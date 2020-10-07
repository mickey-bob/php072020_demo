<?php
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 10/6/2020
 * Time: 8:49 PM
 */

require_once 'database.php';
// chuc nang them moi thuong la chuc nang dau tien dc xay dung

// xu ly submit form:
// debug array
echo "<pre>";
print_r($_POST);
echo "</pre>";
// tao bien error vs result
$error = "";
$result = "";
// + neu submit fomr moi xu ly
if (isset($_POST['submit'])){
    // gan bien trung gian:
    $name = $_POST['name'];
    $description = $_POST['description'];
    // validate form:
    // name ko de trong vs picture ko qua 2M
    if (empty($name)){
        $error = 'name ko dc de trong';
    }
    // them vao bang product chi khi ko co loi xay ra.
    if (empty($error)){
        // nhung file database.php de su dung dc luon bien $connect
        //B1: Viet truy van insert
        $sql_insert = "INSERT INTO products(name,avatar,description)
          VALUES ('$name','','$description')";
        //B2: Thuc thi truy van vua tao.
        $is_insert = mysqli_connect($connect,$sql_insert);
        var_dump($is_insert);
    }
}

?>
<!--form them moi-->
<!--do form co input upload file, buoc phai method: post vs enctpe-->
<form action="" method="post" enctype="multipart/form-data">
    nhap ten: <input type="text" name="name" value="" >
    <br />
    upload anh: <input type="file" name="avatar"/>
    <br/>
    mo ta chi tiet: <textarea name="discription"></textarea>
    <br />
    <input type="submit" name="submit" value="Save t.tin o day"/>
    <input type="reset" name="reset" value="reset form"/>
</form>