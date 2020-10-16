<?php
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 10/13/2020
 * Time: 6:38 PM
 */
session_start();
echo "<pre>";
print_r($_GET);
print_r($_SESSION);
echo "</pre>";
$result = '';
if (isset($_GET['submit'])){
    if (isset($_SESSION['check'])){
        echo "nhap so thanh cong";
//        header("location: ketqua.php");
//        exit;
    }
}

?>
<h3>Giai phuong trinh bac hai</h3>
<form method="get" action="" id="submit_form">
    nhap so a: <input type="text" name="a" id="sub_a">
    <br>
    nhap so b: <input type="text" name="b" id="sub_b">
    <br>
    nhap so c: <input type="text" name="c" id="sub_c">
    <br>
    <input type="submit" name="submit" value="giai phuong trinh" id="submit">
</form>
<script type="text/javascript">
    var obj_a = document.getElementById('sub_a');
    var obj_b = document.getElementById('sub_b');
    var obj_c = document.getElementById('sub_c');
    var obj_form = document.getElementById('submit_form');
    // console.log(obj_form);
    function verify_abc(a, b,c){
        var error = '';
        if (a == '') {
            error = ' Khong duoc de trong so a';

            // console.log(error);
            obj_a.focus();
            // return error;
        } else if (b == ''){
            error = ' Khong duoc de trong so b';
            // alert(b);
            // console.log(error);
            // console.log(b);
            obj_b.focus();
            // return error;
        } else if (c == ''){
            error = 'khong duoc de trong c';
        }
        else if ( isNaN(a) || isNaN(b) || isNaN(c)){
            error = 'Yeu cau phai nhap so';
            obj_a.focus();
            // console.log(error);
            // return error;
        }
        return error;
    }
    obj_form.addEventListener('submit',function () {
        // alert("abc");
        var a = obj_a.value;
        var b = obj_b.value;
        var c = obj_c.value;
        obj_error = verify_abc(a,b,c);
        if (obj_error = ''){
            <?php $_SESSION['check'] = 'oke'?>
        }
        event.preventDefault();

    })


</script>