<?php
session_start();
require_once 'database.php';
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 10/6/2020
 * Time: 8:49 PM
 */
// Hien thi form update san pham theo id
// Lay ra id dua vao url
//vd: update.php?id=3
//$id = $_GET['id'];
// truy cap csdl lay san pham dua theo id vua lay dc.

// dung form update HTML giong het from them moi,
// export data mac dinh cua san pham ra cac input cua form


// + xu ly submit fomr (giong 80% xu ly them moi) .. --> update san pham

// validate du lieu tu url
// bat buoc phai truyen tham so id, va id phai la number.
// because url thi user co the chinh sua dc
if (!isset($_GET['id']) || !is_numeric($_GET['id'])){
//    $id = $_GET['id'];
    $_SESSION['error'] = 'Tham so id ko hoop le';
    header('location:index.php');
    exit();
}
$id = $_GET['id'];
// Lay t.tin san pham dua vao id de lay du lieu ra form
// - tao cau truy van:
$sql_select_one = "select * from products where id = $id";
// select tra ve doi tuong trung gian, ko phai boolean nhu insert, update,delete.
$obj_result_one = mysqli_query($connect, $sql_select_one);
echo "<pre>";
print_r ($obj_result_one);
echo "</pre>";
// - lay ra mang ket qua.
$product = mysqli_fetch_assoc($obj_result_one);
//$product = mysqli_fetch_all($obj_result_one,MYSQLI_ASSOC);
echo "<pre>";
print_r($product);
echo "</pre>";
// + xu ly form neu user click nut submit.
// debug mang $_POST VS $_FILES.
echo "<pre>";
print_r($_POST);
print_r($_FILES);
echo "</pre>";
// TAO BIen chua t.tin loi vs ket qua
$error = "";
$result = "";
// - neu user submit form thi moi xu ly
if (isset($_POST['submit'])){
    // gan bien trung gian
    $name = $_POST['name'];
    $description = $_POST['description'];
    $avatar_arr = $_FILES['avatar'];
    //validate from: ten ko dc empty
    if (empty($name)){
        $error = 'name ko dc de trong';
    }
    // xu ly logic bai toan chi khi nao ko co error
    if (empty($error)){
        // mac dinh giu lai ten file cu
        $avatar = $product['avartar'];
        // xu ly upload file neu co file tai len.
        if ($avatar_arr['error'] ==0 ){
            // neu chua ton tai thu muc upload thi tao moi
            $dir_uploads = 'uploads';
            if (!file_exists($dir_uploads)){
                mkdir($dir_uploads);
            }
            // xoa bo file cu de tranh file rac
            //tranh bao loi warning khi xoa file ko ton tai
            @unlink($dir_uploads."/".$product['avatar']);
            // tao file mang tinh duy nhat, tranh bi ghi ddef file.
            $avatar = time().$avatar_arr['name'];
            //upload file:
            move_uploaded_file($avatar_arr['tmp_name'], $dir_uploads."/$avatar");
            // - tao cau truy van:
            $sql_update = "UPDATE products SET name = '$name', avartar = '$avatar',
              description = '$description' WHERE id = $id ";
//            var_dump($sql_update);
//            die();
            // - THUC hien truy van vua tao
            $is_update = mysqli_query($connect,$sql_update);
            if ($is_update){
                $_SESSION['success'] = "update ban ghi $id thanh cong";
                header('location: index.php');
                exit();
            } else {
                $error = "update ban ghi $id that bai";
            }

        }
    }
}
?>

<!--Copy form html them moi paste vao lam form update-->
<!--form update-->
<!--do form co input upload file, buoc phai method: post vs enctype-->
<h3 style="color:red"><?php echo $error; ?></h3>
<form action="" method="post" enctype="multipart/form-data">
    nhap ten: <input type="text" name="name" value="<?php echo $product['name']?>" >
    <br />
    upload anh: <input type="file" name="avatar"/>
    <img src="uploads/<?php echo $product['avartar'] ?>" height="80px" />

    <br/>
    mo ta chi tiet: <textarea name="description"><?php echo $product['description']; ?></textarea>
    <br />
    <input type="submit" name="submit" value="Luu"/>
<!--    <input type="reset" name="reset" value="reset form"/>-->
    <a href="index.php"> Back</a>
</form>