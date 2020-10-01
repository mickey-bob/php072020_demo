<?php

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
//var_dump($_POST);
$error = '';
$result = '';
if (isset($_POST["submit"])){
//    echo "xu ly code khi submit";

    $fullname = $_POST['fullname'];
//    $test = empty($fullname);
//    var_dump($test);
//    echo "<pre>";
//    print_r ($test);
//    echo "</pre>";
    if (empty($fullname)){
        $error = "Ban ko nhap ten a, chan the";
    } elseif ( strlen($fullname) >= 10 ){
        $error = "Ten ban dai the, hon 10 character roi,";

    };
    if ($error == ""){
        $result = "fullname nhu vay la tam on roi";
    }
}


?>
<h3 style="color: blue"><?php echo $result;?></h3>
<h3 style="color: red"><?php echo $error;?></h3>
<form action="" method ="post" enctype="multipart/form-data">
    Fullanme: <input type="text" name="fullname" />
    <br />
    Password: <input type="password" name="password" />
    <br />
    age: <input type = "number" name = "number" />
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
        <option value="0"> VN</option>
        <option value="1"> US</option>
        <option value="2"> JP</option>
    </select>
    <br />
    select multiple
    <select multiple name= "hobit">
        <option value="0"> football</option>
        <option value="1"> movie</option>
        <option value="2"> travel</option>
        <option value="3"> music</option>

    </select>
    note:
    <textarea name="note"></textarea>
    <br/>
    <input type="submit" name="submit" value="CHON DE SUBMIT" />
</form>
