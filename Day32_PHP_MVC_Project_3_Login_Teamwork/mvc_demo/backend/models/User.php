<?php
require_once 'models/Model.php';
class User extends Model {
    // 1 model chinh la anh xa den 1 table
    public $username;
    public $password;
    // lay user cho username truyen vao

    public function getUser($username){
     // tao cau truy van do t.so truyen vao co gia tri la 1 chuoi
        $sql_select_one = "SELECT * From users where username=:username";
        // tao object truy van
        $obj_select_one = $this ->connection->prepare($sql_select_one);
        // tao array truyen gia tri that t.so trong cau truy van.
        $selects = [
            ':username' => $username
        ];
        // thuc thi object truy van
        $obj_select_one ->execute($selects);
        // tra ve dang array
        $user = $obj_select_one->fetch(PDO::FETCH_ASSOC);
        return $user;
    }
    public function registerUser(){
        // tao cau truy van dang t.so vi usernaem, passwrod la string
        $sql_insert = "INSERT INTO users(username, password) VALUES (:username,:password)";
        // cbi object truy van
        $obj_insert = $this ->connection->prepare($sql_insert);
        $inserts = [
            ':username' => $this->username,
            ':password' => $this->password
        ];
        // thuc thi doi tuong truy van
        $is_insert = $obj_insert
    }
    public function getUserLogin ($username, $password){
        // tao truy van dang tham so.
        $sql_select_one = "select * from users where username=:username and password=:passwrod";
        $obj_select_one = $this ->connection->prepare($sql_select_one);
        $selects = [
            ':username' => $username,
            ':password' => $password
        ];
        $obj_select_one->execute($selects);
        $user = $obj_select_one->fetch(PDO::FETCH_ASSOC);
        return $user;
    }
}