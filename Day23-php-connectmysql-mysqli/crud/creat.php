<?php
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 10/6/2020
 * Time: 8:49 PM
 */
session_start();

require_once 'database.php';
// chuc nang them moi thuong la chuc nang dau tien dc xay dung

// xu ly submit form:
// debug array dua vao method cua form.
echo "<pre>";
print_r($_POST);
print_r($_FILES);
echo "</pre>";
// tao bien error vs result
$error = "";
$result = "";
// + neu submit fomr moi xu ly
if (isset($_POST['submit'])){
    // gan bien trung gian:
    $name = $_POST['name'];
    $description = $_POST['description'];
    $avatars = $_FILES['avatar'];
    // validate form:
    // name ko de trong, it nhat 3 ky tu vs picture ko qua 2M
    if (empty($name)){
        $error = 'name ko dc de trong';
    } elseif (strlen($name) <3){
        $error = 'name phai nhap it nhat 3 ky tu';
    } elseif ($avatars['error'] == 0){
        // - xu ly vaildate file dang anh
        // lay duoi file dua vao ten file upload.
        $extention = pathinfo($avatars['name'], PATHINFO_EXTENSION);
        //chuyen duoi file ve chu thuong
        $extention = strtolower($extention);
        $extention_allowed = ['png','jpg','jpeg','gif'];
        // xu ly validate dung luong file ko dc upload qua 2Mb
        $size_b = $avatars['size'];
        // doi ve don vi Mb
        $size_mb = $size_b/1024/1024;
        // chi giu lai 2 so thap phan cho de nhin
        $size_mb = round($size_mb,2);
        var_dump($size_mb);
        if (!in_array($extention, $extention_allowed)){
            $error = "file upload phai la picture";
        } elseif ($size_mb > 2){
            $error = "file upload ko dc qua 2Mb";
        }
    }
    // khi xu ly file luon can kiem tra neu co file dc upload moi xu ly
    // --> check key error cua array files, error = 0 thi oke, nguoc lai la co loi.

    // them vao bang product chi khi ko co loi xay ra.

    if (empty($error)){
        // xu ly upload file neu co file dc update.
        // day het cac file vao thu muc upload
        if ($avatars['error'] == 0){
            $dir_upload = 'uploads';
            // kiem tra neu thu muc chua ton tai thi moi created.
            if(!file_exists($dir_upload)){
                mkdir($dir_upload);

            }
            // tao file mang tinh duy nhat tren he thong--> avoid uploading de picture trungf ten.

            $filename = time().$avatars['name'];
            // upload file vao thu muc chi dinh

            move_uploaded_file($avatars['tmp_name'], $dir_upload.'/'.$filename);
        }
    }
    if (empty($error)){
        // nhung file database.php de su dung dc luon bien $connect
        //B1: Viet truy van insert
        $sql_insert = "INSERT INTO products(name,avartar,description)
          VALUES ('$name','$filename','$description')";
        //B2: Thuc thi truy van vua tao.
        $is_insert = mysqli_query($connect,$sql_insert);
        var_dump($is_insert);
        // chuyen huong ve trang index.php neu them thanh cong
        if($is_insert){
            $_SESSION['success'] = 'Them moi san phan thanh cong';
            header('location: index.php');
            exit();
        }else {
                $error = 'them moi san pham error';
        }
    }
}

?>
<!--form them moi-->
<!--do form co input upload file, buoc phai method: post vs enctype-->
<h3 style="color:red"><?php echo $error;?></h3>
<form action="" method="post" enctype="multipart/form-data">
    nhap ten: <input type="text" name="name" value="" >
    <br />
    upload anh: <input type="file" name="avatar"/>
    <br/>
    mo ta chi tiet: <textarea name="description"></textarea>
    <br />
    <input type="submit" name="submit" value="Save t.tin o day"/>
    <input type="reset" name="reset" value="reset form"/>
<!--    <a href="index.php">Back to info page</a>-->
</form>