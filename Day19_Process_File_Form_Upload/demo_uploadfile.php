<?php
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 9/22/2020
 * Time: 7:39 PM
 */
// demo upload file voi PHP
/*
 *SU DUng input type = file de cho php upload file.
 * khi form co input file bat buoc: method phai la: POST
 * phai khai bao them 1 thuco tinh cho form:
 * la: enctype = "multipart/form-data"
 * + $_post/$_get cua PHp KO bat dc du lieu cua input file, ma can dung var: $_files - la 1 array 2 chieu
 * */
// xy ly form
//+ debug t.tin var
// + debug $post, get ko the bat dc data tu input file, nen can debug bang var $_files.
echo "<pre>";
print_r($_POST);
print_r($_FILES);
print_r($_COOKIE);
print_r($_ENV);
print_r($_SERVER);
echo "</pre>";
// giai thich t.tin torng mang $_FILES:
// -name: te file upload
// - type: kieu file
// - tmp_name: thu muc tam dang luu file upload se dc sd khi upload sang thu muc do mik setup
// + errpr: trong thai ket noi khi upload file
// 0: ko co loi --> error = 0 : lo co error, khac 0 la upload error
// 1: file qua dung luong cho phep
// 2: file upload vuoit qua so luong file cho php upload trong form.
// - size: dung luong file upload, don vi Byte (B): 1Mb = 1024 Kb = 1024*1024 B

$error = '';
$result = '';
//+ kiem tra neu submit form thi moi xu ly.
if (isset($_POST['submit'])){
    // + gan bien trung gian cho de thao tac.
    $fullname = $_POST['fullname'];
    $avatars = $_FILES['avatar'];
    //+ validate form:
    // - fullname ko dc de trong
    /*
     * file uplaod phai la anh
     * file ko qua 2M
     *
     * */
    if (empty($fullname)){
        $error = "fullname ko dc de trong";
    }
    // can kt neu co file upload len thi moi xu ly validate file, dua vao var error.
    elseif ($avatars['error'] == 0){
        // validate phai la anh: lay ra duoi file, kt duoi file co nam trong array cac duoi file anh
        // in_array
        $extention = pathinfo($avatars['name'], PATHINFO_EXTENSION) ;
        var_dump($extention);
//        die();
        $extention_allowed = ['jpg', 'jpef','png','gif'];
        // lay dung luong file tinh theo Mb
        $size_mb = $avatars['size']/1024/1024;
        // chi giu lai 2 so thap phan nhin cho dep
        $size_mb = round($size_mb, 2);
        echo "<br /> Dung luong file:";
        var_dump($size_mb);
        if(!in_array($extention, $extention_allowed)){
            $error = 'phai upload anh';

        }elseif ($size_mb > 2){
            $error = 'dung luong ko qua 2Mb';

        }
    }
    if (empty($error)){
        // xy ly upload file vao thu muc chi dinh
        // day file upload vao thu muc upload, ngang hang vs file hien tai,
        // luu y ko tao thu muc upload nay bang tay , ma xu ly bang code
        // vi hosting ko co quyen vao tao file
        // chi xu ly upload file khi co file tai len, dua vao var error = 0;
        if ($avatars['error'] == 0){
            $dir_uploads = 'uploads';
            // tao thu muc uploads tren.
            // can kt thu muc tren thi moi tao: file_exists: kt duong dan den file/thu muc co ton tai ko
            if(!file_exists($dir_uploads)){
                mkdir($dir_uploads);
            }
            // can xu ly tao ten file anh co tinh duy nhat, trong truong hop upload nhieu lan
            // cung 1 file --> ghi de picture
            $filename = time().$avatars['name'];
            //upload file vao thu muc uploads bang cach chuyen file tu thu muc tam sang
            // thu muc uploads: move_uploaded_file
            move_uploaded_file($avatars['tmp_name'],$dir_uploads."/$filename");
            // Hien thi thong tin picture:
            $result .= "ten file: $filename <br />";
            $result .= "duoi file: $extention <br />";
            $result .= "dung luong file: $size_mb Mb <br />";
            $result .= "anh dai dien: ";
            $result .= "<img src='$dir_uploads/$filename' width='80px' />";
        }
    }
}

?>
<h3 ><?php echo $error; ?></h3>
<h3 style="color: purple" ><?php echo $result; ?></h3>
<!--<h3 style="color: purple" >--><?php //echo "thong bao tu echo"; ?><!--</h3>-->
<form action="" method="POST" enctype="multipart/form-data">
    Fullname:
     <input type="text" name="fullname" />
    <br />
    Avartar:
     <input type="file" name="avatar" />
    <br />
    <input type="submit" name="submit" value="upload" />
</form>
