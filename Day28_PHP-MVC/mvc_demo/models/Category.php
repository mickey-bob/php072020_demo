<?php
require_once 'configs/Database.php';
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 10/27/2020
 * Time: 7:16 PM
 */
// models/Category.php
// Model quan ly cac tuong tac vs bang categories
// model anh xa table
class Category {
    // khai bao attribute la truong cua talbe
    public $id;
    public $name;
    public $description;
    public $status;
    public $created_at;

    // khai bao t.tinh ket noi csdl
    public $connection;
    // lay object ket noi theo pdo
    public function getConnection(){
        try {
            // Do can su dung hang so trong class Database --> can nhung file.

            $connection = new PDO(Database::DB_DSN,Database::DB_USERNAME,Database::DB_PASSWORD);
            return $connection;
        } catch (PDOException $e){
            die("Loi ket noi:" .$e -> getMessage());
        }
    }

    // Them data vao table;
    public function insertData(){
        // lay object ket noi csdl
        $this -> connection = $this -> getConnection();
        // - tao cau truy van duoi dang t.so de tranh loi bao mat sql injection
        $sql_insert = "INSERT INTO categories (name, description) VALUES (:name, :description)";
        // - chuan bi doi tuong truy van
        $obj_insert = $this->connection->prepare($sql_insert);
        // - Tao mang de truyen gia tri that cho t.so trong cau truy van neu co
        // gia tri that den tu chinh thuoc tinh cua model
        $inserts = [
          ':name' => $this ->name,
          ':description' => $this->description,
        ];
        // - thuc thi object truy van vua tao.
        // voi truy van insert, update, delete -> boolean
        $is_insert = $obj_insert -> execute($inserts);
        var_dump($is_insert);
        return $is_insert;
    }

    // lay tat caa danh muc dang co tren he thong
    public function getAll(){
        // tao cau truy van
        $sql_select_all = "SELECT * FRO categories ORDER BY created_at DESC";
        // TAO DOI TUONG TRUY VAN
        $this -> connection = $this -> getConnection();
        $obj_select_all = $this->connection->prepare($sql_select_all);
        // bo qua buoc tao array vi cau truy van ko co t.so nao
        // voi truy van select ko can t.tac vs k.qua tra ve
        $obj_select_all -> execute();
        // tra ve mang cac danh muc sau khi execute
        $categories =$obj_select_all->fetchAll(PDO::FETCH_ASSOC);
        return $categories;
    }
}
?>