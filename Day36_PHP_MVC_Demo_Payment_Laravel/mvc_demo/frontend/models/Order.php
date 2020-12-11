<?php
require_once 'models/Model.php';
class Order extends Model {
    public $id;
    public $user_id;
    public $fulllname;
    public $address;
    public $email;
    public $note;
    public $price_total;
    public $payment_status;
    public function insertOrder(){
//        + viet cau truy van dang tham so
        $sql_insert = "insert into orders(user_id, fullname, address,mobile,email, note, price_total, payment_status)"
            Values (:user_id, :fullname, :address, :mobile, :email);

        $id_insert = $this -> connection -> lastInsertId();
        return $id_insert;
    }

}