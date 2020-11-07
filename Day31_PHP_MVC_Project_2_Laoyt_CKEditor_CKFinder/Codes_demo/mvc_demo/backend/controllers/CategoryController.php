<?php
// de su dung can nhung file truoc khi using.
require_once 'controllers/Controller.php';
//controllers/CategoryController.php
// moi object co 1 mo hinh mvc rieng cua no: object book, category ....
// ap dung t.chat ke thua coa oop de khai bao t.tinh/method dung chung tai class controller cha

class CategoryController extends Controller {
    public function create(){
//        echo "create nhe";
        //set gia tri cho t.tinh page_title;
        $this->page_title = "Trang them moi danh muc";
        // lay noi dung view tuong ung, dua vao t.tinh content
        $this ->content = $this ->render('views/categories/create.php');
        // form thêm mới thường là form rỗng, nên ko cần truyền gì vào
        // --> nên bỏ qua arrar của method render.
        require_once 'views/layouts/main.php';
        // goi layout de hien thi noi dung view vua lay dc
    }
}