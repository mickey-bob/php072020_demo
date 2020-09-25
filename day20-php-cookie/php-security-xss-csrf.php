<?php
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 9/24/2020
 * Time: 6:47 PM
 *
 * - XSS
 * - CSRF
 * + Voi beginner: thuong se bi 2 loi bao mat nay:
 * ++ XSS: Cross-site scripting: thong qua form, hacker nhap cac ma javajs, neu ko
 * validate dung --> dinh XSS.
 * Nhieu trinh duyet hien dai tu co co che chong xss.
 * - CSRF: Cross-site request forgery: loi bao mat lien qua gia mao nguoi dung(user).
 * ++ ban co 1 user xoa user : user/delete?id =3.
 *     neu hacker bieet dc url nay cua ban.
 *      gui qua mail 1 anhr dc tao 1 the <a> co url = user/delete?id =1.
 * Cach chong: tao ra cac token cho form (ma duy nhat cho tung form)
 * + cac framework vs cms cua php deu chong tot 2 loi nay.
 */
//+ debug t.tin mang $post
//echo "<pre>";
//print_r($_POST);
//echo "</pre>";
// + tao var chua loi, ket qua
$error = '';
$result = '';
if(isset($_POST['submit'])){
    // + tao bien trung gian
    $fullname = $_POST['fullname'];

    //+ validate form
    //+ chi xu ly logic bai toan khi ko co loi xay ra
    if (empty($error)){
        //<script> alert ('hello');</script>;
        // neu nhap chuoi tren -> se hien thi 1 alert thay vi hien thi ra chuoi -> xss.
        // de fix xss: s/d 1 ham sau trc khi hien thi ra t.tin.: htmlspecialchars.
        $fullname = htmlspecialchars($fullname);
        $result = "Ten cua ban: $fullname";
        echo $result;
    }
}
?>
<form action="" method="POST">
    Nhap ten:
    <input type="text" name="fullname" value="" />
    <input type="submit" name="submit" value="show" />


</form>

