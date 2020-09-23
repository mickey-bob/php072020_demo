<?php
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 9/23/2020
 * Time: 9:46 AM
 */

$keys = array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third",

);
$values = array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platypus"
);
//$array_mixed = "";
foreach ($keys AS $value_array1){
//    echo "$value_array1";
    foreach ($values AS $value_array2){
//        echo "<br /> $value_array1";
        echo "<br /> $value_array2";
        $array_mixed["$value_array1"] = "$value_array2";
    }
}
$array_gop = array_merge($keys,$values);
//var_dump($array_mixed);
echo "<pre>";
print_r($array_mixed);
echo "</pre>";
?>