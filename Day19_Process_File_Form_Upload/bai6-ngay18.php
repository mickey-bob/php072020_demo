<?php
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 9/22/2020
 * Time: 6:52 PM
 */
/*
 * chua bai 6 ngay 18
 * */
// debug array lien quan den p.thuc cua form
echo "<pre>";
print_r($_POST);
echo "</pre>";
// khai bao var chua error vs suscess
$error = '';
$result = '';
// khi submit form key submit cua form luon luon dc tao --> check key submit
if (isset($_POST['submit'])){
    // tao cac var trung gian cho de thao tac
    $fullname = $_POST['fullname'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $url = $_POST['url'];
    $message = $_POST['message'];
    /*
     * + validate form
     * tat ca truong ko de trong
     * email dung dinh dang:filter_var FILTER_VALIDATE_EMAIL
     * mobile phai so: is_numberic
     * url phai dung dinh dang: fulter_var
     * message phai nhap it nhat 5 ky tu tro len: strlen
     * */
    if (empty($fullname) || empty($email) || empty($mobile) || empty($url) || empty($message)){
        $error = "ko dc de trong cac trruong";

    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = "emaik ko dung dinh dang";
    }elseif (!is_numberic($mobile)){
        $error = "mobile ko phai la so";

    }elseif (!filter_var($url, FILTER_VALIDATE_URL)){
        $error = "url ko dung dinh dang";
    }elseif(strlen($message) < 5){
        $error = "var message phai lon hon 5 ky tu";
    }

    // xu ly logic bai toan khi ko co loi xay ra
    if (empty($error)){
        // hien thi gia tri vua nhap
        $result = "tu code phan nay";
    }
}
?>
<h3 style="color: red;"><?php echo $error ?></h3>
<h3 style="color: blue;"><?php echo $result ?></h3>
<!--day lai gia tri da nhap ra form, vi khi submit form se bi refresh-->
<form method="post" action="">
    <input type="text" name="fullname" placeholder="ten cua ban" value="<?php echo isset($_POST['fullname'])? $_POST['fullname']:'' ;?>" />
    <br />
    <input type="text" name="email" placeholder="email cua ban" value="" />
    <br />
    <input type="text" name="mobile" placeholder="phone cua ban" value="" />
    <br />
    <input type="text" name="url" placeholder="url website" value="" />
    <br />
    <textarea name="message" placeholder="type message"></textarea>
    <br />
    <input type="submit" name="submit" value="submit">
</form>
