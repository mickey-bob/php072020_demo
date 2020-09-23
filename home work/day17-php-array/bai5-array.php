<?php
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 9/22/2020
 * Time: 11:52 AM
 */
$a = [
    'a' => [
        'b' => 0,
        'c' => 1
    ],
    'b' => [
        'e' => 2,
        'o' => [
            'b' => 3
        ]
    ],
    'c' => 10,
];


echo "<pre>";
print_r($a);
echo "</pre>";
echo $a['b']['o']['b'];
echo "<br />";
echo $a['a']['c'];
echo "<br />";
echo $a['c'];
//echo $a['a'];


?>