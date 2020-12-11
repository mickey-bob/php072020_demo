<?php
require_once 'models/Model.php';
class OrderDetail extends Model {
    public $order_id;
    public $product_id;
    public $quantity;
    public $price;

    public function insert(){
        // + tao truy van dang tham so
        $sql_insert = "insert into order_details(order_id, product_id, quantity, price)
            values(:order_id, :product_id,:quantity,:price)";
//        cbi obj truy van
        $obj_insert = $this -> connection ->prepare($sql_insert);
//        tao mang truyen gia tri cho t.so
        $inserts=[
        ':order_id' => $this->order_id;
        ':product_id' => $this->product_id;
        ':quantity_id' => $this->quantity_id;
        ':price_id' => $this->price_id;
        ];
        // thuc thi

    }

}