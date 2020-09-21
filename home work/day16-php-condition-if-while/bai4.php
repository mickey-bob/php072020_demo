<?php
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 9/21/2020
 * Time: 2:51 PM
 */
$number_out = 50;
function show_string ($number){
//echo "show info var number = $number";
    $result = '';
    for ($i = 1; $i <= $number; $i++  ){
        if ($i == $number){
            $result .= "$i";
            break;
        }
        $result .= "$i-";
    }
    return $result;
}
var_dump (show_string($number_out));

?>

