<?php
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 9/17/2020
 * Time: 8:49 PM
 * demo xu ly form voi radio vs checkbox
 */
?>


<?php

// bat dau xu ly submit form
//debug
echo "<pre>";
print_r($_GET);
echo "</pre>";
$error="";
$result='';
// kiem tra neu user submit form moi xu ly.   isset.
if (isset($_GET['submit'])){
    // + gan bien trung gian:
    $email = $_GET['email'];
//    $gender = $GET['gender'];
//    $jobs = $GET['jobs'];
// voi radio/checkbook se co truong hop ko chon radio or checkbox nao khi do
    // array $_get/post ko bat dc du lieu nay, dan den viec 2 khai bao tren se bao loi ko tim thay key
    // Nhu vay luon can kiem tra neu ton tai key tuong ung cua raido/checkbox thi moi thao tac dc
    // + validate form:
    // - email phai co dinh dang email: su dung ham filter_var

    // - radio/checkbox buoc phai chon: isset.
    if (!filter_var($email, FILTER_VALIDATE_EMAIL )){
        $error = 'email chua dung dinh dang';

    } elseif (!isset($_GET['gender'])){
        $error = 'phai chon gioi tinh';

    } elseif (!isset($_GET['jobs'])){
        $error = 'phai chon it nhat i josb';
    }
    // + xu ly logic bai toan chi khi ko co loi xay ra.
    if (empty($error)){
        $result .= "email: $email <br />";
        // hien thi sex
        $gender = $_GET['gender'];
        $gender_text = 'nam';
        if ($gender ==1 ){
            $gender_text = 'nu';
        }
        $result .= "sex: $gender_text <br />";
        //hien thi jobs
        $jobs = $_GET['jobs'];
        if (is_array($jobs)){
            echo "day la echo jobs[]";
            echo "<pre>";
            print_r ($jobs);
            echo "</pre>";
        }
        $job_text = '';
        // lap mang de hien thi cac gia tri tuong ung
        foreach ($jobs AS $job){
            if ($job ==1){
                $job_text .= 'dev';
            } elseif (($job == 2)){
                $job_text .= " tester";
            }
        }
        $result .= "jobs: $job_text <br />";

    }

}
?>
<!--Hien thi thong bao ra man hinh-->
<h3><?php echo $error; ?></h3>>
<h3><?php echo $result; ?></h3>>
<form action="" method="GET">
    eMAIL: <input type="text" name="email" value="" />
    <br />
    sex:
<!--    su dung checked cho radio/checkbox neu muon check mac dinh,
 con voi the select su dung selected trong option muon chon mac dinh
 -->
    <input type="radio" name="gender" value="1" /> Nu
    <input type="radio" name="gender" value="2" /> Nam
    <br />
    jobs: <input type="checkbox" name="jobs[]" value="1" /> dev
    jobs: <input type="checkbox" name="jobs[]" value="2" /> test
    <br />
    <input type="submit" name="submit" value="kich de ban thong tin">


</form>

