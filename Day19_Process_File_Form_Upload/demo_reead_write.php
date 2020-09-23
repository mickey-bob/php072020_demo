<?php
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 9/22/2020
 * Time: 9:04 PM
 */
/*
 *doc noi dung file
 * + tao 1 file read.txt ngang hang vs file hien tai, viet nio dung tuyf y, viet tren nhieu dong
 * + co 2 kieu doc noi dung file:
 * ++ doc theo tung hang: file
 * ++ doc 1 phat het luon: file_get_contents
 * + co 1 so ham khac co the doc file: fread, ... ( hoi kho dung)
 *
 * */
// doc file theo tung hang: tra ve 1 array.
$reads = file('read.txt');
echo "<pre>";
print_r($reads);
echo "</pre>";
foreach ($reads AS $read){
    echo $read . "<br />";
}
// doc toan bo noi dung file: tra 1 string
//mat het format cua file.
$content = file_get_contents('read.txt');
//$content = file_get_contents('https://vietnamnet.....');
echo $content;
/*
 * ghi file trong php
 * co 2 che do ghi file: ghi de file or ghi tiep tuc vao cuoi file.
 *
 *
 * */
// ghi de file:
//file_put_contents('read.txt', 'khanhnt abc');
// ghi noi vao cuoi file.
file_put_contents('read.txt', 'adding more info',FILE_APPEND);

// - MOT SO HAM KHAC ve FILE.
//+ xoa file/thumuc: unlink: them @ de ko bao loi waring khi xoa file ma duong dan ko ton tai.
@unlink('read.txt');
// + kiem tra file/ thumuc co ton tai ko: file_exists
?>