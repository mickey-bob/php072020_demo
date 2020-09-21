<?php
//demo_arra.php
//Mang:
//- cac kieu du lieu nguyen thuy: interger, float, string, boolean co dac trung la
//chi co the luu dc 1 gia tri duy nhat tai 1 thoi diem
// - Co nhu cau the hien thong tin theo huong truc quan hon. Vd muon khai bao 1 bien luu
// dc ca ten, tuoi, dia chi ... --> can su dung kieu du lieu: array (mang)
// - mang: la 1 kieu du lieu trong php, cho phep luu nhieu gia tri tai 1 thoi diem,
//va cac gia tri do co the la bat cu kieu du lieu nao, ngay ca la 1 array
// - array co 2 thuat ngu chinh: key vs value.
// + key: dung de xac dinh phan tu trong array.
// + value: gia tri cua phan tu tuong ung, dua theo key tuong ung.
// --> de lay dc t.tin chinh xac t.tin phan tu: can biet key cua no.
// Cu phap khai bao mang: co 2 cach
// + dung tu khoa array. --> dung cho phien ban php < 5.4
$arr1 = array('khanhnt', 10, 19.5,true, array());
// + dung []
$arr2 = ['khanhnt', 10, 19.5, truE, []];
// + uu tien dung [] de khai bao mang.
// Doc thong tin array tren:
// + mang nay co 5 phan tu:
// + phan tu dau tien: key = 0; value = khanhnt;
// + phan tu thu 2: key = 1, value = 10; --> key:3 value: 19.5, key: 4 ...
// - Gia tri phan tu array luon dc xac dinh dua vao key cua no.
// - Xem t.tin array (debug).
var_dump($arr2);
// - xem t.tin array su dung var_dump kho nhin voi cac mang co nhieu chieu
// nhu la array nam torng array.
// Nen dung cau truc ben duoi de bebug array/doi-tuong

echo("<pre>");
print_r($arr2);
echo("</pre>");

// + mang la kieu du lieu gap nhieu nhat trong PHP.
// + hien thi gia tri cua kieu du lieu trong array.
// -
$arr1 = array('khanhnt', 10, 19.5,true, array());
//echo $arr1;           //se bao error
// --> echo 1 array se bao loi.
// vong lap foreach.
//+ de hien thi dc gia tri cua mang, se can su dung vong lap.
//+ demo sd vong lap for de lay gia tri cua phan tu (element) nay tu array.
 $arr = [1,2,3];
 // + lay tong so phan tu dang co trong mang, = ham count cua php.
$count = count($arr);   //3
for ($key = 0; $key < 3; $key++){
    // luon phai nho: lay gia tri cua 1 phan tu mang luon phai biet key tuong ung cua
    // phan tu do.
    echo $arr[$key];
}
///123
//+ thuc te ko nen su dung for, while, du .. while de lap mang,
// vi neu mang la nhieu chieu thi se rat phuc tap.
// + thuc te luon dung vong lap foreach de lap mang.
$arr = [1,2,3];
//+ foreach: co 2 cu phap khai bao nhu sau:
// + foreach: tu dong lap qua tung element cua array, tai element no biet luon dc
// key vs value tuong ung.
// -- foreach khuyet key: dc dung khi ko can thao tac vs key cua element. (phan tu)
echo "<br />";
//
foreach ($arr AS $value1){
    echo $value1;
    echo "<br />";
}
// -- foreach day du ca key vs value: dung khi muon thao tac vs ca key vs value cua element.
foreach ($arr AS $key => $value){
    echo "Phan tu co key = $key dang co gia tri bang = $value";
    echo "<br />";
}
// + lay  gia tri thu cong, ko dung vong lap:
$arr = [10,29,37];
echo $arr[1];
// Phan loai mang trong PHp
// Chia lam 3 loai chinh:
//+ array tuan tu/array so nguyen: tat ca key cua array o dang so nguyen, array don gian nhat.
// + mac dinh key cua array so nguyen bat dau tu 0
//vd:
$arr = [1, 'gfdf', 890];
foreach ($arr AS $key_khanhnt => $value_khanhnt){
    echo "<br/> Key: $key_khanhnt => value: $value_khanhnt";
}

// + array ket hop: mang co key o dang string, array nay the hien thong tin tot hon
// so vs array so nguyen, array nay rat thong dung trong PHP.
$arr = [
    'name' => 'khanhtn',
    'age' => 20,
    'addr' => 'bac tu liem, ha noi',
//    do cac element truoc no cac key deu la string, nen phan tu ko khai bao
// tuong minh se bat dau tu 0.
    'xys',
    5 => 'ghj',

];
//debug t.tin array tren:
echo "<pre>";
print_r($arr);
echo "</pre>";
// Lap array de hien thi key vs value tuong ung cua tung phan tu array:
foreach($arr AS $k_khanhnt => $value_khanh){
    echo "<br /> phan tu co key = $k_khanhnt  co gia tri la: $value_khanh";
}
echo "<br />";
echo $arr['addr'];
echo "<br />";
echo $arr[0];
//echo "aaaaaaaaaaaaaaaaaa";

// + array da chieu:
// ++ la array bao gom 1 or nhieu array ben trong no
// ++ thao tac phuc tap nhat trong so 3 loai array.
// ++ neu array tu dinh nghia, chi nen tao ra array toi da co 3 chieu
$arr = [
    'age' => 20,
    'info' => [
        'name' => 'khanhnt',
        'addr' => 'HN',
    ]

];
// ARRAY nhu tren la mang 2 chieu.
$arr = [
    'info' => [
        'class' => [
            'name' => 'PHP07',
            'amount' => 27,
        ],
    ],
    'age' => 30,
];
// nhu tren la array la mang 3 chieu.
// voi cac mang da chieu, van dung foreach de lap array, tuy nhie
// can chu y logic khi xu ly element cua array.
foreach ($arr AS $key => $value){
    echo "<br /> key = $key, value = $value";
}
echo "<br />";
// Lay gia tri theo cac thu cong tu array da chieu.
echo $arr['info']['class']['amount']; //27
echo "<br />";
echo $arr['age'];           //30
//debug mang da chieu tren:
echo "<pre>";
print_r($arr);
echo "</pre>";

// Cu phap viet tat cua foreach khi viet chung HTML.
// Su dung the mo foreach, the dong endforeach.

?>
<?php
$arr = ['PHP', 'HTML', 'CSS','JS'];
?>
<table border = '1' cellspacing="0" cellpadding="0">
    <tr>
        <td>Ten khoa hoc</td>
    </tr>
    <?php foreach($arr AS $key => $value): ?>
    <tr>
        <td><?php echo $value; ?></td>
    </tr>
    <?php endforeach; ?>
<!--    <tr>-->
<!--        <td>CSS</td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--        <td>JS</td>-->
<!--    </tr>-->
</table>>
