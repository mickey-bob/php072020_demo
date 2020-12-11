<?php
// demo if-else, switch-case, -- cu phap viet tat
//demo_php2
// truyen tham tri, tham chieu cho ham
function showInfo($name_parameter){
    $result = "xin chao: $name_parameter";
//    var_dump($name_parameter);
//    echo "<br />";
    return $result;
}
$show = showInfo('khanhnt');
echo $show; // xin chao khanhnt
echo "<br />";
//+ voi cac ban moi khi viet ham vs goi ham thi thuongse truyen gia tri vao ham
// theo kieu truyen tham tri
// khac nhau tham tri -- tham chiếu.
// demo truyen tham tri
$number = 5;
echo "Bien number truoc khi goi ham co gia tri $number";
//5
echo "<br />";
function changeNumber($number){
    $number = 0;
    echo "bien number ben torng ham co gia tri $number";
    //0
    echo "<br />";
}
changeNumber($number);
echo "Bien number sau khi goi ham co gia tri $number";
//5
echo "<br />";
// + ket qua thuc te la bien $number ban đầu vẫn =5, ko hề thay đổi giá trị.
// truyền tham trị nghĩa là tao ra 1 bản sao của biến ban đầu, truyền
// ban sao vào trong hàm nên bản góc vẫn sẽ thay đổi giá trị
// ---> đó là truyền tham trị
// vd với truyền tham chiếu:
echo "testing       Su dung truyen tham tri vao function";
echo "<br />";
$number1 = 5;
echo "bien number truoc khi goi ham co gia tri $number1";
echo "<br />";
// them dau & truoc bien $number1 lam chuyen tu truyenf tham tri thành tham chiếu.
function changeNumber1 (&$number1){
    $number1 = 0;
    echo "bien number ben trong ham dang co gia tri $number1";
}

changeNumber1($number1);
echo "<br />";
echo "bein number sau khi goi ham co gia tri $number1";
echo "<br />";
// ket qua: 0 : do tryền cả biến $number1 vào -- truyền bản gốc vào.
// kết quả biến number1 đa bị thay đổi.
//  Nhân biết truyền tham trị or tham chiếu thông qua ký tụ & trước khai báo
// tham số của hàm.
// thuc te kieu truyen tham trị hay gặp nhất, trong các framwork như laravel
//zend, CI
// KIEU TRUYEN THAM chiếu sẽ hay gặp trong các CMS: wrokpress, zoomla, magento, drupal
// do CMS là heeje quản trị dữ liệu, cài xong có rất nhiều backend rồi, nên
// sẽ sử dụng biến core của nó nên sử dụng biến từ đầu đến cuối --> sẽ dùng nhiều tham chiếu.
// ngược lại framework: thường tự xây lên web --> thường dùng tham trị


//
//2 - Gioi thieu 1 so ham nhung file trong PHP
//tHuc te ko code 1 project tren 1 file php. nen se chia thanh cau truc file/thu muc
//--> can nhung các file sau khi đã tách
// + có 4 hàm cơ bản để nhúng: include, require, include_once, require_one.
// + nhung file trong PHP:đường dân file sẽ tuân theo đường dẫn tương đối.
// + trong lap trinh hay dùng đường dẫn tương đối.
//+ demo ham include:
//include "file-test.php";
//include "file-test.php";
//include "file-test.php";
//thu nhung 1 file ko ton tai
//include "abc.php";
//echo "<h2>Noi dung nay co dc hien thi hay ko</h2>>";
// include nhung dc nhieu lan 1 file, neu nhulng file ko ton tai thi bao loi waring,
// nhung code phia sau van dc xu ly (thường nên để code lỗi ở đâu dừng luôn ở đó,
// ko xử lý code phía sau ---> nen dung require one.)
require "file-test.php";
//require "file-test.php";
//require "file-test.php";
//thu nhung 1 file ko ton tai
//require "abc.php";
//echo "<h2>Noi dung nay co dc hien thi hay ko</h2>>";
// + require nhung dc nhieu lan cung 1 ifle, neu nhung file ko ton tai thi bao oi error a ko chay dc code phai sau
// + include_once: chi nhung dc cung 1 file 1 lan, dong code nao loi thi code sau van chay dc.
// + require_once: chi nhung dc 1 file 1 lan, nhung file ko ton tai code phai sau ko chay dc, bao error
//



// Toan tu - cau lenh dieu kein - vong lap
// toan tu: giong torng js
// toan tu so hoc: + - * / % ++ --
$number1 = 3;
$number2 = 5;
echo $number1 + $number2; //8
echo $number1 - $number2;// -2
// * 15; /:0.6 %: 3 ; ++ --
// toan tu so sanh: == > < <= >= !=
// ket qua tra ve cua bieu thuc su dung so sanh luon la booolean (true/false)
$number2 = 5;
$number1 = 2;
var_dump( $number1 == $number2); //false
var_dump( $number1 > $number2); //true
var_dump( $number1 >= $number2); //true
var_dump( $number1 <= $number2); // false
var_dump( $number1 < $number2); //false
var_dump( $number1 != $number2); //true // so sanh khac


// + Toan tu logic: && || !
// ++ toan tu logic de ket hop cac dieu kien so sanh lai vs nhau.
// vi thuc te phai ket hop rat nhieu dieu kien moi ra dc ket qua.
$number1 = 5;
$number2 = 4;
var_dump(($number1 > 0) && ($number2 < 0));  //false.
var_dump(!($number1 == 0));

// Cau lenh dieu kien: if elseif else
// if chi dung trong 1 trong hop duy nhat
$number = 5;
if ($number > 0){
    echo $number;
}
// if else: co the su dung ngan gon: ?
//echo $string == 'a' ? 'Chuoi a' : 'chuoi ko pahi a';
$number = 7;
if ($number == '8'){
    echo "number = 8";
} elseif ($number == '9'){
    echo "number = 9";
} else {
    echo "number ko phai 8 , 9 ";
}

// cu phap viet tat cua cau lenh dieu kein khi su dung khi viet chung vs HTML.
// HIEN THI BANG php 1 bang co 2 hang, moi hang 2 cot. va hien thi theo dieu kien nao do.
$number = 5;
if ($number > 0){
//    echo "<table><td><td>COT 1</td>></tr>></table>>";
    //+ ko nen hien thi 1 cau truc html phuc tap bang php, nen su dung cu phap viet tat cua cau lenh dieu kien.
    // if endif; if else endif; if elseif else endif;
}


?>
<?php if ($number > 0): ?>
<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <td>hang 1 cot 1 write shortcut</td>
    </tr>

</table>
<?php endif; ?>

<!--// cu phap viet tat if else-->
<?php if ($number > 0): ?>
    <h2>aaaaaaaaaaaaa</h2>
<?php else: ?>
    <h3>bbbbbbbbbbbbbbb</h3>
<?php endif; ?>


<!--cu phap viet tat if elseif else-->
<?php if ($number > 0): ?>
<?php elseif ($number != 0): ?>
<?php else: ?>
<?php endif; ?>


<?php
    // bieu thuc switch case:
    // chi dung khi dung so sanh ==, switch case ko dung  < or >
    // su dung thay the cho if else if
    $day = 4;
    switch ($day){
        case 2: echo "thu 2"; break;
        case 3: echo "thu 3"; break;
        default: echo "ko phai thu 2, 3";
    }

    // vong lap: for , while, do ... while.
// voi php se rat it khi dung vong lap tren.
// lluon phai tranh vong lap vo han.
for ( $i = 1; $i <= 10; $i++){
    echo $i;
}
// + while
while ($i <= 10){
    echo $j;
    $j ++;
}

// + do ... while: giong while, nhugn  thuc hien it nhat 1 lan
$j =2;
do {
    echo $j;

} while ($j < 0);

// 4 - tu khoa break - continue:
// + break: thoat han vong lap, ko thuc hien vong lap nua:
for ($i = 1; $i <= 10; $i ++){
//    if ($i == 7){
//        break;
//    }
      if ($i == 7){
          continue;
        }
    echo $i;
}
// + continue: bo qua lan lap hien tai, nhya toi vong lap ke tiep, ko chay code sua continue

?>
<!--// y TUONG XAY DUNG FONTEND CHO BAI TAP LON
    + 1 project co 2 phần: fonrtend vs backend
    + FONTEND la noi hướng tới user, cố gắng giao diện đẹp responsive.
    + Cần xác định trc chủ để project
    ++ web bán hàng: thông dụng nhất,
    ++ web thi trắc nhiệm online.
    ++ web tin tức:
    -- xay dung giao diện backend vs fontend theo chủ đề
    + tự code cả 2: tay to vì phải code hết các trang có thể có của cả fontend vs backend,
    vs có thể phải responsive, giao diện ko dc đẹp, nhưng giảng viên đánh giá cao.
    + đi tìm giao diện mẫu (template) trên mạng có sẵn trên mạng: search google để tập trung vào backend.
    //AdminLTE: template cho backend
    // tim template cho fontend.
    //- sau khi xác định chủ đề project, cần xác định các trang con có thể có
    // ví dụ với trang bán hàng: giỏ hàng, danh sách sp, chi tết sp, lịch sử mua hàng
    // thanh toán, login/register, liên hệ.

-->