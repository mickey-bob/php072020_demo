<?php
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 9/23/2020
 * Time: 9:46 AM
 */
/*
 * Viec xu ly bai 6 nay co 2 method:
 * method 1: use: array_combine
 * method 2: below code -- convert tay ca array ve key: 0,1,2... (array_values)
 *          sau do xy ly theo key do vs cac array de ra dc result mong muon.
 * */
$keys = array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third",
    3 => "Bibi",
    4 => "Chim se",
    "Thai binh" => "Hong anh",
    "Ha noi" => "Gunny",

);
$values = array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platypus",
    "Chu luc"=>"Bibi club",
    "chu luc-than dong"=>"Game tv",
    "chu luc"=>"Thai binh",
    "chem rat, ban mau, bufflo dog" => "Ha noi",
);
//$array_mixed = "";
$new_keys = array_values($keys); //array_values: lay value lam gia tri cho array moi
$new_values = array_keys($values); //array_keys: lay key lam gia tri cho array moi
echo "<pre>";
print_r($new_values);
echo "</pre>";
foreach ($new_values AS $key_array1 => $value_array1){
//    echo "$value_array1";
    $key = $new_keys[$key_array1];      // lay gia tri cua array new_keys theo key: 0,1,2
    $array_mixed["$key"] = "$value_array1";
//    foreach ($values AS $value_key => $value_array2){
//        echo "<br /> $value_array1";
//        echo "<br /> $value_array2";
//        $value_key = $value_array1;
//        $array_mixed["$value_key"] = "$value_array2";
//    }
}
//$array_gop = array_merge($keys,$values);
//var_dump($array_mixed);
echo "<pre>";
print_r($array_mixed);
echo "</pre>";
?>