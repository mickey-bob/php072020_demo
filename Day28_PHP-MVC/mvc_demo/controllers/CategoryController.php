<?php
require_once 'models/Category.php';
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 10/27/2020
 * Time: 7:15 PM
 */
//echo "<br>";
//echo "echo trong file category controler";

// Ve quy tac MVC, moi ten class phai trung vs ten file (must be same file names)
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
        // require_once 'test.php';
        // $variables sẽ dc truyền vào file test (file dc require_once)
        // --> file test.php sẽ biết dc $variables
        // ?? tại sao function render phải có thêm var $variables, vì khi requre_once thì file test.php đã tự hiểu dc $variables.
    }
    public function create(){
//        echo "ceate";
//        die('die trong create');
        // view create dang nam tai duong dan: views/categories/create.php
//        require_once 'views/categories/create.php';
        // se ko goi file view don gian theo cach nay, ma su dung theo co che: render view dong - xay dung 1 method rieng
        // de lay noi dung view dua vao duong dan
        // - lay noi dung view dua vao method render
        $arr = [
            'var1' => 'Khanhnt',
            'var2' => 20,
            'khanhnt' => "Minh khai, tu liem, Ha Noi"

        ];
//        if (!isset($_POST['submit'])){
//            var_dump($arr);
//        }

        // xu ly submit form
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";

        $this ->content = $this->render('views/categories/create.php',$arr);



        if (isset($_POST['submit'])){

            // gan bien
            echo "inside submit condition";
            $name = $_POST['name'];
//            var_dump($name);
            $descriptioon = $_POST['description'];
//            var_dump($descriptioon);
            // validate from: phai nhap tat ca cac truong
            if (empty($name) || empty($descriptioon)){

                $this -> error = 'ko dc de trong nhe, condition inside if - categoryController.php';
//                echo "ko dc de trong";
//                echo "$this -> error";
            }
            // luu vao bang categories chi khi ko co loi xay ra
            if (empty($this -> error)){
                // goi model de luu vao csdl
                // khoi tao object tu model nay de co the su dung dc t.tinh/method
                $category_model = new Category();
                // gan gia tri tu form cho t.tinh cua model, vi metho insert de lieu dang thao tac
                // voi t.inh cua chinh model do
                $category_model-> name = $name;
                $category_model -> description = $descriptioon;
                $is_insert = $category_model->insertData();
//                var_dump($is_insert);
                if ($is_insert){
                    $_SESSION['success'] = 'Them moi thanh cong';
                    // moi url deu phai tuan theo quy tac mvc da tat ra
                    header('location: index.php?controller=category&action=index');
                    exit();
                } else {
                    $this ->error = 'Thêm mới thất bại';

                }
            }
        }


        // lay noi dung view create dua vao method render
//        $this ->content = $this->render('views/categories/create.php');

//        echo "<pre>";
//        print_r ($this -> content);
//        echo "</pre>";
        // goi layout de show noi dung view lay dc
        require_once 'views/layouts/main.php';
//        require_once giống copy toàn bộ code main.php vào chỗ này
        // ---> trong file main.php sẽ hiểu dc các method/t.tinh trong file categoricontroller.php này.
//        require_once 'views/categories/create.php';
    }
    public function index(){
        // goi model de lay tat ca danh muc, truyen ra view de view hien thi (MVC)
        $category_model = new Category();
        $categories = $category_model->getAll();

        echo "<pre>";
        print_r($categories);
        echo "</pre>";
        // tao array de truyen ra view:
        $arr = [
            'categories' => $categories,

        ];
//        echo "index";
        // buoc dau tien khi code 1 chuc nang moi la hien thi ra view
        // - lay ra noi dung view
        $this -> content = $this -> render('views/categories/index.php',$arr);
        // goi layout vao de hien thi view vua lay dc
        require_once 'views/layouts/main.php';
    }
}
?>