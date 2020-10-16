<?php
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 9/15/2020
 * Time: 8:49 PM
 */
// Mot so function hay su dung.
//1 thao tac vs arraay:
// + tinh tong element trong array: array_sum
$arr = [2,3,4];
echo array_sum($arr);
// + kiem tra key co ton tai trong array hay ko: array_key_exist.
$arr = [
    'name' => 'khanhnt',
    'age' => 20,
//    'abc' => 'gia tri de element abc ton tai, ko null',
];
echo "Ham check key exist";
$check = array_key_exists('abc', $arr);
var_dump($check); //false.
//+ loai bo cac gia tri trung lap trong 1 array.
// array_unique
$arr = [1,2,3,4,1,2,4];
$arr = array_unique($arr);
//die();
var_dump($arr);
// + dem so pha ntu array: count()
$arr = [2,4,5,6];
echo count($arr);
// + tach chuoi thanh mang, dua vao ky tu phan tach: explode
$str = '1,2,3,4,5,6,7';
$arr = explode(',', $str);
var_dump($arr);
// + chuyen array thanh string: implode
$arr = [1,2,3];
$str = implode('-', $arr);
echo $str; //1-2-3
// + lay gia tri cuoi cung cua 1 mang: end
$arr = [4,5,8];
echo end($arr); //8
//die();
echo "Phia duoi end function";
//+ lay  gia tri dau tien cua array: reset
$arr = [4,5,6];
echo reset($arr); //4
//die();
echo "Phia duoi reset function";
// + xoa phan tu array theo key: unset.
$arr = [3,4,5,5];
unset($arr[1]);
var_dump($arr); //3,5,5
$arr = [3,4,5];
echo "PHia dui unset function";
//+ xem co phai kieu array hay ko: is_array.
//+ lay gia tri nho nhat cua array: min
//+ lay iga tri max: max.
//+ print_r: xem cau truc array.
//+ sap xep array: sort: sap xep array theo value tang dan
$arr = [3,4,3,5,4,6,8];
sort($arr);
var_dump($arr); // 3,3,4,5,6,8
?>

