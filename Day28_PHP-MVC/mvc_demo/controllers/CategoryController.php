<?php
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 10/27/2020
 * Time: 7:15 PM
 */
//echo "<br>";
//echo "echo trong file category controler";
// Ve quy tac MVC, buoc moi ten class phai trung vs ten file
class CategoryController{
    // chua noi dung view tuong ung, dung de chuyen qua layout
    public $content;
    // get noi dung loi khi validate form
    public $error;
    /**
     * Lay noi dung cua 1 view dua vao duong dan toi view do, co che truyen bien tuong minh ra view de lay view su dung
     * @param $view_path
     * @param array $variables
     */
    public function render($view_path, $variables = []){
        // giai nen cac array $variables truyen vao neu co de file view co the su dung dc.
        extract($variables);
        // - bat dau tao vung bo nho cache de ghi nho viec bat dau read noi dung file view tu đường dẫn truyền vào.
        // offering bufer
        ob_start();
        // Nhung duong dan file
        require_once "$view_path";
        // sau khi doc xong noi dung file, ket thuc doc bang func sau:
        $render_view = ob_get_clean();
        return $render_view;
    }
    public function create(){
//        echo "ceate";
        // view create dang nam tai duong dan: views/categories/create.php
//        require_once 'views/categories/create.php';
        // se ko goi file view don gian theo cach nay, ma su dung theo co che: render view dong - xay dung 1 method rieng
        // de lay noi dung view dua vao duong dan
        // - lay noi dung view dua vao method render
        $arr = [
            'var1' => 'Khanhnt',
            'var2' => 20
        ];

        $this ->content = $this->render('views/categories,create.php');
//        echo "<pre>";
//        print_r($content);
//        echo "</pre>";
        // goi layout de show noi dung view lay dc
        require_once 'views/layouts/main.php';
    }
}
?>