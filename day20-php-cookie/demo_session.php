<?php
session_start();
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 9/24/2020
 * Time: 7:23 PM
 * dem0_session.php
 * co ban ve session trong php.
 * tao 1 file test_session.php ngang hang vs file hien tai.
 */
// + thu trinh duyet aanr, chay lai file nay --> se gap error. : ko biet key=fullname nay o dau
// + khi thao tac vs session luon phai biet dc session sinh ra tu dau
//
//echo $_SESSION['fullname'];
echo isset($_SESSION['fullname']) ? $_SESSION['fullname'] : '';
?>
