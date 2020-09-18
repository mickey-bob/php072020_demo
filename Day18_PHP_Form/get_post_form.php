<?php
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 9/17/2020
 * Time: 7:19 PM
 */
//Get vs post trong form

?>

<!--phuong thuc get-->
<!--//url sau khi submit: fullname=khanhnt&age=20&submit=sumbit-->
<!--+ dau hieu nhan biet 1 form su dung GET la nhin vao url sau khi submit
    + GET thi toan bo gia tri cua input se do len het URL thao cap name=value.
    + Neu co nhieu input thi se ngan cach boi ky tu &.
    + ko su dung GET cho nhap du lieu: password, the ngan hang. ...
    + de lay dc du lieu tu GET , PHP co san 1 bien luu tat ca thong tin cua GET
    la : $_GET, va la 1 array.
    + de debug su dung cau truc sau:

-->
<?php
echo "<pre>";
print_r($_GET);
echo "<pre>";
?>
<form action="" method="Get">
    Ten: <input type="text" name="fullname" />
    <br />
    tuoi: <input type="number" name="age"/>
    <br />
    <input type="submit" name="submit" value="sumbit">
</form>>



<!--phuong thuc post-->
<!--+ du lieu gui di ko truyen len url ==> bao mat hon get
    + PHP co san 1 array luu toan bo du lieu gui tu form qua post: $_POST
-->
<form action="" method="post">
    so thu nhat:
    <input type ="number" name="number1">
    <br />
    so the 2
    <input type="number" name="number2"/>
    <input type="submit" name="submit"/>
</form>

<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";
?>

<!--Bien $_REQUEST-->
<!--+ Day la bien ma php tao san, chua tat ca cac thong tin cua $_GET,$_POST,$_COOKIE-->
<!--+ ko nen dung $_request de lay du lieu tu form (vi bat du lieu ko dc chuan)

-->
<!--Bien $_SERVER
+ lA 1 mnag dc php tao san, chua t.tin lien quan den may chu cua mik
-->
<?php
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
?>
<?php
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
?>



















