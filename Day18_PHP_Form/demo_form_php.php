<?php
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 9/17/2020
 * Time: 6:48 PM
// demo_form
 */

// Form co 2 thuoc tinh co ban xu ly du lieu khi submit form
// action: url se xu ly du lieu khi submit form, set action = "" nghia la
//chinh file nay se xu ly form luon.
//khai bao 1 form voi day du cac input thong dung .
// khi khai bao cac input trong form, buoc phai khai bao thuoc tinh name cho input, vi php dua
// vao name de biet dc du lieu tu input nao gui len.
// Luu y cach set gia tri cho thuoc tinh name cho cac input
// + neu input chi cho phep nhap/chon 1 gia tri duy nhat tai 1 thoi diem
// ----> name o dang bien don.
// + neu input cho phep chon nhieu --> name o dang array.
// vd:checkbox, select dang multiple,
// vd: name=jobs[]
echo "<pre>";
print_r($_POST);
print_r($_FILES);
echo "</pre>";
?>

<form action="" method ="post" enctype="multipart/form-data">
    Fullanme: <input type="text" name="fullname" />
    <br />
    age: <input type = "number" name = "password" />
    <br />
    jobs:
    <input type="checkbox" name="jobs[]" value = "0" /> Dev
    <input type="checkbox" name="jobs[]" value = "1" /> Tester
    <br />
    Gender:
    <input type="radio" name="gender" value="10"/>Male
    <input type="radio" name="gender" value="11"/>Female
    upload avatar:
<input type = "file" name="avatar"  />
    file multiple:
<input type = "file" multiple name = "files[]" />
    <br />
Country
<select name = "country">
    <option value="0"> Select 0</option>
    <option value="1"> Select 1</option>
    <option value="2"> Select 2</option>
    </select>
<br />
select multiple
<select multiple name= "file">
    <option></option>

</select>
note:
<textarea name="note"></textarea>
<br/>
<input type="submit" name="submit" value="CHON DE SUBMIT" />
</form>

<?php
$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {            // day chinh la truyen tham trij
    $value = $value * 2;
    echo "<pre>";
    print_r($value);
    echo "</pre>";
}
// $arr is now array(2, 4, 6, 8)
//unset($value); // break the reference with the last element
// sau foreach ko có hàm unset kia thì var: $value vẫn giữ giá trị cuối cùng
// mặc dù đã kết thúc foreach, và ở ngoài foreach rồi. $value = 8;
echo "<pre>";
print_r($value);
echo "</pre>";
?>
