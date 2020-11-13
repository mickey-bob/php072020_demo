<?php
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 9/24/2020
 * Time: 7:59 PM
 * demo_cookie
 * Co ban ve cookie
 * + cookie luu t.tin ngay tren trinh duyet cua ban, con session luu tren server.
 * + --> biet dc trang web dang luu cookie gi tren trinh duyet, con session thi ko the biet dc
 * cookie thuong dung cho muc dich quang cao.
 * php tao san array $cookie chua toan bo cookie dang luu trne trinh duyet.
 * + cookie ko mat di khi dong trinh duyet.
 * + cookie phu thuoc vao thoi gian song ma no dc setup.
 * === bat inspect html tren chrome -> application -> storage -> cookies
 */
// khoi tao cookie:
// + ko giong nhu them element cho array, phai dung setcookie();
//+ thoi gian song cua cookie tinh bang giay, tinh tu thoi gian hien tai.
setcookie('age', 21, time()+ 3660);
setcookie('test', 'testing', time()+ 20);
setcookie('abc', 'testing third cookie', time()+ 20);


// - lay gia tri cookie: thao tac giong array.
//echo $_COOKIE['test'];
echo isset($_COOKIE['test']) ? $_COOKIE['test'] : ''; // ":" giong else; '': tuc la echo rỗng: echo '';

// - xoa cookie: xoa ko giong session
// van dung ham setcookie, set thoi gian song laf gia tri am:
setcookie('abc','abc',time() - 1);
// debug array: $_cookie
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

?>