<?php
    /**
     * 1. bien trong php
     * khai niem: bien doi, giong js.
     * khai bao bien trong php su dung ky tu $ truoc ten bien.
     *
     */
    $name = 'khanh';
    $age = '30';
    /**
     * 2- quy tac dat ten bien: giong js
     * $1bc = 6;             ko hop le
     *$_name = 'khanhnt';       ko hop le
     */
    //3  - cac kieu du lieu bien trong php
    /**
     * + kieu interger: kieu so nguyen, pham vi -2 ty -> 2 ty.
     * + $number1 = 999;
     */
    $number1 = 999;
    // su dung ham php cung cap san kiem tra xem gia tri co phai so nguyen ko
    // is_int(variable);
    $check = is_int($number1);
    // dung ham sau de debug thong tin ten bien: var_dump(variable)
    var_dump($check);
    // + kieu float/double: kieu so thuc, la so thap phan or la cac so dang so nguyen
    // nhung nam ngoai pham vi -2 ty -> 2 ty (double)
    $number1 = 2.54;
    $number2 = -2.54;
    // is_float, is_double
    var_dump(is_float($number1));  //bool(true)
    // + kieu string, chuoi dac trung boi ky tu '' or ""
    $string1 = "string1";
    $string2 = 'string 2';
    $string3 = 'Hello "khanhnt"';
    echo $string3;
    //ham is_string kiem tra du lieu string hay ko
    // de noi chuoi trong PHP, su dung ky tu .
    $string4 = "Noi chuoi: " . $string1 . "," . $string2;
    echo $string4;
    // co the hien thi gia tri cua bien ngay trong chuoi ma ko can su dung
    // ky tu . de noi chuoi, voi dieu kien phai dc kahi bao su dung dau: ""
    $string5 = "noi chuoi: $string1, $string2";
    $string6 = 'noi chuoi: $string1, $string2';
    echo "<br />$string5";
    echo "<br />$string6";
    // + kieu boolean: co 2 gia tri true vs false, viet hoa thuong thoai mai
    $boolean = true;
    $boolean2 = false;
    $boolean3 = fALSE;
    // + HAM is_boolean kt xem du lieu co phai boolean hay ko
    //4 kieu du lieu: interger, float, string, boolean la 4 kieu du lieu nguyen thuy.
    //+ kieu du lieu: NULL: co 1 gia tri duy nhat la null. Bien bi null khi
    // no ko ton tai.
    $null = null;
    // ham is_null
    //+ kieu array: mang (danh sach chua nhieu phan tu ben trong no).
    // + kieu mang la kieu du lien se thao tac nhieu nhat ben trong.
    $arr1 = array(1,2, 'string100', 13, true, null, array());
    // + dung tu khoa array, dung phien ban cu.
    // + dung cu phat [], luon uu tien dung cu phap [];
    $arr2 = [1, 2, 3];
    // de debug mang, hay dung cu phap nhu sau:
    echo "<pre>";
print_r($arr1);
echo "</pre>";
// de kiem tra du lieu mang: is_array (arr)
// + kieu object - kieu doi tuong, se hoc trong phan lap trinh huong doi tuong.
    // 4 - ep kieu du lieu trong php
    // su dung tu khoa la ten kieu du lieu truoc ten bien muon ep.
    // kieu int - interger - bool - float - string array - object
    $number = 11.2;
    var_dump(is_float($number));
    $number1 = (int) $number;
    echo $number1; //11
    $string1 = (string) $number;
    echo $string1; "11.2"
    $boolean = (bool) $number;
    echo $boolean; //1
    //5 - Hang.
    //hang ko the gan lai gia tri 1 khi da gan truoc do.
    // co 2 cu phap khai bao:
    // dung tu khoa const
    const PI = 3.14;
    // dung ham define
    // nen su dung const tien cho viec khai bao.
    echo PI; //3.14
    //PI = 13231 // SE BAO LOI
    //+ mot so hang co san trong PHP
    // HIEN THI SO dong code hien tai dang goi hang nay:
    echo __LINE__; //91: so dong dang goi ham nay -- 91
    // hien thi duong dan vat ly toi file hie ntai dang oi hang nay.
    echo __FILE__;
// HHIEN THI DUONG DAN VAT LY TOI THU muc gan nhat chua file hien tai dang goi ham nay
echo __DIR__;
// 6 - HAM trong PHP
// cu phap khai bao ham PHP giong trong js
function showInfo(){
echo "Ham showInfo";
}
//Goi ham:
showInfo(); // ham showInfo
// cac bien the ham:
// ham ko co tham so, ko co gia tri ttra ve
//+ ham co gia tri tra ve
// + ham co ia tri tra ve, su dung tu khoa return.
// viet 1 ham tinh tong 2 so
function sum($number1, $number2){
$sum = $number1 + $number2;
//echo "Tong = $sum ";
//thay vi dung echo trong ham, return ve ket qua nao do
//tu khoa return lam cho ham mang 2 gia tri nao do
// ket thuc ham -> ko chay code phai sau return nua
}
$sum = sum(3, 1);
echo $sum;
// khi khai bao ham luon co gang su dung tu khoa return ben trong ham,
//phai xac dinh trc gia tri tra ve cua ham, ham che dung echo trong ham


?>