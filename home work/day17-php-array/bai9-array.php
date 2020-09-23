<?php
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 9/22/2020
 * Time: 2:55 PM
 */
$arr = ['a','b','AbC','DEF','adding' => 'PRO PRO PRO Khanhnt'];
echo "<pre>";
print_r($arr);
echo "</pre>";
foreach ($arr AS $sokey => $giatri){
    $lower = strtolower($giatri);
    $arr[$sokey] = $lower;
//    echo "<br /> so key la: $sokey tuong ung gia tri sau ham : $lower";
//    echo "<pre>";
//    print_r ($arr);
//    echo "</pre>";
}
echo "<pre>";
print_r($arr);
echo "</pre>";

?>