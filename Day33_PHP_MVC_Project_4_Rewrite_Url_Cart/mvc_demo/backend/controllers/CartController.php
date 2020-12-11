<?php
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 11/17/2020
 * Time: 7:38 PM
 */

//xu ly them sn pham vao gio
public function add(){
    //echo "hien thi t.tin ra suscesss";
    //debug t.tin gui len
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
    //check neu ko ton tai tham so id truyen thi bao error

    // GIO HANG
    // CO nhieu co che luu tru gio hang khau nhau su dung session
    // gio hang hien tai se co cau truc sau:
    // moi 1 p.tu cua gio hang se dang:
    /// product_id => [title, price, avatar, quantity]
    $product_id = $_GET['id'];
    $product_model = new Product();
    $product = $product_model -> getProductById($product_id);
//    echo "<pre>";
//    print_r($product);
//    echo "<pre>";
    $cart_item = [
        'name' => $product['title'],
        'price' => $product['price'],
        'avatar' => $product['avatar'],
        // mac dinh moi lan them vao gio se them 1 sp
        'quantyty' => 1
    ];
    // logic them vao gio hang
    // + tao 1 session de luu gio hang $_session['cart']
    // neu sp them chua ton tai torng gio hang -> them nhieu p.tu moi cho mang session gio hang
    // neu sp them da ton tai trong gio -> chi cap nhat so luong sp tang len 1
    // product_id => [title, price, avatar, quantity]

    // xu ly: neu gio hang chua he tont tai, thi tao session vs them sp dau tien vao gio
    if (!isset(($_SESSION['cart'])){
       //$_session['cart'] = [
        //$product_id => $cart_item
        //];
        $_SESSION['CART'][$product_id] = $cart_item;

    }); else {
        // neu them san pham da ton tai trong gio, thi chi tang so luong len 1
        if (array_keys_exists($product_id, $_SESSION['cart'])){
            $_SESSION['cart'][$product_id]['quantity']++;
        }
        //neu sp chua tonthi giong them moi
        else {
            $_SESSION['cart'][$product_id] = $cart_item;
        }
    }
//    echo "<pre>";
//    print_r($_SESSION);
//    echo "</pre>";

}

public function index(){
    //lay noi dung view
    $this -> content = $this=>render('views/carts/index.php');
    // goi layout de hien thi ra view vua lay dc
    require_once 'views/layouts/main.php';
}

?>