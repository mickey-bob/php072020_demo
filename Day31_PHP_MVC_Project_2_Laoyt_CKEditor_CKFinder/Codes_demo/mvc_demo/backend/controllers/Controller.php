<?php
// controllers/Controller.php
// dong vai tro la controoller cha, chua cac t.tinh/method chung de cac class con ke thua
// tu no chi viec su dung ma ko can khai bao lai


class Controller {
    // t.tinh chua noi dung view dong
    public $content;
    // t.tinh chua error
    public $error;
    // t.tinh hien thi tieu de trang
    public $page_title;
    // method lay noi dung view dua vao duong dan toi view do.
    // co co che truyen bien ra view de su dung.
    public function render ($view_path, $variables = []){
        //view_path: duong dan toi view
        // $variables: arrar cac p.tu se truyen ra view
        extract($variables);
        ob_start();
        require_once "$view_path";
        $render_view = ob_get_clean();
        return $render_view;
    }

}