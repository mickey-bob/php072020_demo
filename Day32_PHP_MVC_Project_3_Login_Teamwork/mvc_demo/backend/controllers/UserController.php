<?php
require_once 'controllers/Controller.php';
require_once 'models/User.php';
class UserController extends Controller {
    // p.thuc dang ky user:
    //index.php?controller=user&action=register
    public function register(){
        // xu ly submit form khi user register
        // + debug: $_POST
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        // goi model check xem co user nao giong user cho truoc hay ko
        $user_model = new User();
        $user = $user_model -> getUser($username);
//        echo "<pre>";
//        print_r($user);
//        echo "</pre>";
        //+ neu submit moi xu ly
        if(isset($_POST['submit'])){
            //+ gan bien trung gian
            $username = $_POST['username'];
            $password = $_POST['password'];
            $password_confirm = $_POST['password_confirm'];
            // + validate form
            // tat ca cac field ko dc de trong
            // mat khau phai nhap trung nhau
            // ko dc dky username exist
            if(empty($username) || empty($password) || empty($password_confirm)){
                $this ->error = 'ko dc de trong nhe';
            } elseif ($password_confirm != $password){
                $this ->error='mat khau nhap phai trung nhau nhe';
            } elseif (!empty($user)){
                $this ->error = "username: $username da ton tai nhe";
            }

        }
        // dang ky user chi khi ko co error xay ra
        if (empty($this->error)){
            // gan gia tri cho cac t.tinh tuong ung cua object user.
            $user_model ->username =$username;
            // + luon phai ma hoa mat khau truoc khi luu vao CSDL, de demo su dung MD5.
            $user_model ->password = md5($password);
            $is_insert = $user_model -> registerUser();
//            var_dump($is_insert);
            if ($is_insert){
                $_SESSION['success'] = 'dang ky thanh cong';
                header('location: index.php?controller=user&action=login');
            }else{
                $this ->error = 'dang ky that bai';
            }
        }
        // hien thi view form dang ky cho user
        // lay noi dung view:
        // ke thua tu class cha
        $this ->content = $this ->render('views/users/register.php');
        // ko can truyen var vi register.php ko can truyen var gi.
        // goi layout hien thi noi dung view
        // tao 1 layout khac, vi layout main chi su dung khi user login successfull.
        // copy file views/layouts/main.php -> main_login.php
        require_once 'views/layouts/main_login.php';
    }
    public function login (){
        //neu da login roi thi ko cho truy cap lai form login
        if (isset($_SESSION['user'])){
            $_SESSION['success'] = 'ban da dang nhap roi';
            header('location:index.php?...........');
            exit();
        }
        // xu ly submit form
        // - debug mang $_post
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        // - neu user submit form thi moi xu ly
        if (isset($_POST['submit'])){
            //ban bien de thao tac cho de
            $username=$_POST['username'];
            $password = $_POST['password'];
            // validate form ko dc de trong
            if (empty($username) || empty($password)){
                $this ->error = 'ko dc de trong';
            }
            // xu ly login chi khi ko co error xay ra
            if (empty($this ->error)){
                $user_model = new User();
//                do password trong csdl la passwrod da encrypt md5, nen luc check login
                // cung phai encrypt password truoc roi moi so sanh dc
                $password = md5($password);
                $user = $user_model -> getUserLogin ($username, $password);
                echo "<pre>";
                print_r($user);
                echo "</pre>";
                if(!empty($user)){
                    // tao session lam viec cho user
                    $_SESSION['user'] = $user;
                    $_SESSION['success'] = 'dang nhap thanh cong';
                    $_SESSION['user'] = $user;
                    header('location:index.php?...........');
                    exit;
                }else{
                    $this->error= 'sai tai khoan or pass';
                }
            }
        }
    }
    public function logout(){
        unset($_SESSION['user']);
        $_SESSION['success'] = 'logout thanh cong';
        header('location: index.php?controller=user&action=login');
        exit();
    }

}