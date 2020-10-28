<?php
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 10/20/2020
 * Time: 7:35 PM
 */
// lap trinh huong doi tuong - ojbect oriented programing
/// 1 cac p.phap lap tirnh truynhf thong.
// lap trinh tuyen tinh: nghi gi viet do
// tinh tong 2 so vs hien thi:
$number1 = 5;
$number2 = 4;
$sum = $number1 + $number2;
//echo $sum;
// 2 - lap trinh co cau truc_ biet cach viet ham
function sum($number1, $number2){
    return $number1 + $number2;
}
// goi ham ...
sum (5, 6);
// tự suy nghĩ thấy: lập trình hướng thủ tục muốn thêm chức năng phải viết thêm function
// sau đó chỗ nào cần func đó thì gọi ra --> khó quản lý, thêm mới
// còn với OOP: thêm func mới chỉ cần thêm method trong class (or thêm class con), sau đó trong code
// chỗ nào cần func mới --> thêm dòng gọi method của class là dc. (check uu nhuoc diem cua oop)
// 3: lap trinh huong doi tuong.
// + gần vs thực tế, vì lấy đối tượng làm trung tâm để phân tích.
// + học php phải biết VỀ OOP.
// + PHP có mô hình MVC, dựa trên mô hình này để tạo ra websie
// MVC dc viết dựa trên OOP
// + OOP khá khó, vì nhiều thuật ngữ.
// 4 - cac thuat ngữ cơ bản của OOP.
/*
 * + Class: khuôn mẫu của các đối tượng (object)
 * vd: bản thiết kế ngồi nhà là 1 class, vs các ngôi nhà dc xây dựng từ bản vẽ này
 *  chính là các object - đối tượng của class đó
 * Ten class viet hoa các ký tự đầu tiên của mỗi từ.
 * */
class HomeClass{
//Đối tượng_ object dc sinh ra từ cùng class sẽ có chung thuộc tính
}
class Persion{

}
// + object: đối tượng, thực tế object có trạng thái vs hành vi
// lập trình: trạng thái là thuộc tính, hành vi là phương thức.
// đối tượng dc khởi tạo từ 1 class.
class Book1{
    // khai bao 2 thuoc tinh class.
    public $name;
    public $price;
    protected $status;
    // khai bao 1 p.thuc.
    public function addBook(){
        echo "addBook";
}
}
// khoi tao cac doi tuong (object) tu class book1, dung tu khoa new
$book_obj = new Book1();
// sau khi tao doi tuong, co the truy cap dc t.tinh/method cua class do.
// su dung cu phap: ->
$book_obj-> name = 'sach hoa hoc';
$book_obj -> price = 100;
$book_obj->addBook();
echo "<pre>";
print_r($book_obj);
echo "</pre>";
//die("die sau print_r");
// tao them 1 doi tuong tu class tren:
$book2 = new Book1();
$book2 -> name = 'book 2_sach van hoc';
$book2 -> price = 200;
$book2 -> addBook();

//+ thuoc tinh cua lop: ve ban chat la cac bien, nhung dc gan them pham vi
// truy cap phia trc khai bao:
class Student{
    public $name;
    public $ge;
    public $id;
    public $birthday;
}

// + P.thuc cua class: chinh la cac function cuar PHP, dc gan them pham vi truy cap
// phia truoc khai bao.
class Product {
//    public function __construct(){
//        echo "day la method khoi tao, tao object la tu running, ko can lam gi";
//    }
    public function addProduct(){
        echo "addd product trogn class Product";
    }
    public function editProduct($id){
        echo "edit product $id";
    }
    public function deleteProduct($id){
        echo "delete product $id";
    }
}
echo "<br>";
$product = new Product();
$product -> addProduct();
$product -> deleteProduct(5);
$product -> editProduct(6);
//echo "<pre>";
//print_r($product);
//echo "</pre>";
//die();
echo "<br>";

// + P.thuc khoi tao: dc dung de khoi tao gia tri mac dinh cho chinh thuoc tinh class do.
//p.thuc nay dc goi ngầm đầu tiên khi 1 đối tượng dc khởi tạo từ class của nó.
// method khoi tao luon co ten mac dinh: __construct (luu y 2 dau "_" )
class TestContructor {
    public $name;
    // cu phap khai bao co dinh cua p.thuc khoi tao
    public function __construct($name_param){
        echo "contruct khoi tao trong class testconstruct";
        $this ->name = $name_param;
    }
    public function test(){
        echo 'echo test trong method test trong class';
    }
}
// DO P.thuc khoi tao co tham so, nen luc khoi tao object cung phai truyen gia tri vao.
$test = new TestContructor("mickey ngoan");
echo "<br>";
$test -> test(); //test
$test -> name; //mickey ngoan
echo "<pre>";
print_r($test);
echo "</pre>";
echo "<br>";
//die("die sau method khoi tao");

// + tu khoa: this: chinh la doi tuong hien tai.
class Testthis{
    public $name;
    public $age;
    public function show(){
        echo $this -> name;
    }
}


// viec dung $this ben torng class giong nhu dung doi tuong
// cua class do
$obj = new Testthis();
$obj -> name = '123';
$obj -> show();
// + pham vi truy cap: private, protectd, public
// private: chi noi bo calss truy cp dc, class ke thua or ngay ca doi tuong sinh ra
// tu class do cung ko truy cap dc.
class TestPrivate {
    private $name;
    public $age;
    private function hide(){
        echo "Hide";
        // ben trong class truy cap private b.thuong
        $this -> name = 'bac';
    }
    public function show(){
        echo "show";
    }
}
$obj = new TestPrivate();
// ko the truy cap dc private tu ben ngoai
//$obj -> name = '123';
//$obj -> hide();

// protected: ngoai noi bo class, class con ke thua tu class cha cung co the truy cap dc.
// tuy nhien object dc khoi tao tu chinh class do lai ko truy cap dc.

class TestProtected {
    protected $address;
    protected function add(){
        $this -> address = 'minh khai';
    }
}
//$tet_pro = new TestProtected();
//$tet_pro -> add(); ---> bao error, vi object ko truy cap dc class protected
// object khoi tao tu class ko truy cap dc t.tinh/method proteted
// tinh ke thua: extends: 1 class ke thua tu class cha co the truy cap dc tat ca
// p.thuc/t.tinh  cua class cha (chỉ kế thừa trong child class, còn object tạo từ child
// class cũng ko truy cập dc).
// ma co pham vi truy cap la protected/public
class Children extends TestProtected{
    public $var_child;
    public function child_class_method(){
        echo "echo in child_class_method";
    }
    public function testChildren(){
        $this -> add();  // -- class children truy cap method add() cua parent class: TestProtected
        // method add() trong testprotect truy cap t.tinh(attribute) address = minh khai.
        $this -> address = 'address trong child class';
        // code nay lai overide khi child class truy cap t.tinh addreee ='addires trong child'
        // nen khi object children truy cap method testChildren --> show ra echo: address torng child.
    }
}

$children = new Children();
$children -> testChildren();
//$children -> add(); //--> error vi object cua child class ko access dc protected method cua parent class.
echo "<pre>";
print_r($children);
echo "</pre>";
//die("die sau child class");
echo "<br>";
// php chi ho tro don ke thua, 1 class chi dc ke thua dc 1 class khac tai 1 thoi diem.
// - public: truy cap dc bat cu noi dau.
// de don gian, demo dung public
// + tu khoa static, ko can khoi tao doi tuong van truy cap dc attribute/method, ->, ::
class TestStatic {
    const PI = 3.14;
    public static $title;

    public static function showTitle(){
        echo "show title";
//        TestStatic::$title = 'abc';
        // noi bo class -> self thay cho ten class:
        self::$title = 'abc';
    }
}
// cu phap truy capa static: <ten-class>::<ten attri/method>
TestStatic::$title = 'new title';
TestStatic::showTitle();// show title
// cu phap truy cap CONST trong claaa giong static
echo TestStatic::PI; // 3.14
echo TestStatic::$title; // abc : self::$title = 'abc';


// + tu khoa extends: dung cho ke thua.
// + tu khoa abstract: tinh trừu tượng trong OOP, DUNG CHO MUC dich ke thua.
abstract class PersionAbs {
    public $name;
    public function show (){
        echo "show";
    }
    // class abstrac dac trung boi cac method abstract
    // la method ko co noi dung gi ca.
    abstract public function testAbs();
}
// tao childen class ke thua tu class abstract tren
//class A extends PersionAbspublic function testAbs()
//{
    // TODO: Implement testAbs() method.
//};
// + tu khoa implement: trien khai cac interface
interface Config {
    // interfae ko the khai bao dc t.tinh/attribute.
//     public $name; // error.
    //  method trong interface bat buoc phai la pubic, ko method nao dc co noi dung.
    public function sendEmail();
    public function getEmail();
    //public funtion check(){
    //echo "abc";
    //};   --> error, ko dc

}

interface Mail {
    public function configMail();
}
//1 class co the trien khai nhieu interface
class B implements Config, Mail{

    public function sendEmail()
    {
        // TODO: Implement sendEmail() method.
    }

    public function test()
    {
        // TODO: Implement test() method.
    }

    public function getEmail()
    {
        // TODO: Implement getEmail() method.
    }

    public function configMail()
    {
        // TODO: Implement configMail() method.
    }

    public function sendMail()
    {
        // TODO: Implement sendMail() method.
    }

    public function getMail()
    {
        // TODO: Implement getMail() method.
    }
}




//$test = new TestContructor();
//$test -> test();
?>