<?php
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 10/15/2020
 * Time: 9:15 PM
 */

//demo ajax
//demo lay danh sach san pham su dung co che ajax
//ajax: kieu bất đồng bộ_ ví dụ: code php chạy lần lượt, chức năng a chạy xong
// chức năng b mới chạy. Còn ajax tự chạy ngầm, ko quan tâm đến cái khác, ko quan tâm chạy xong chưa

?>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
    // code ajax inline trong file
    $(document).ready(function () {
        // goi ajax su dung cu phap jquery
        var obj_ajax = {
          // url se xu lly ajax
          url: 'get_product.php',
          // phuong thuc gui data
            method: 'POST',
            // DANH sach cac tha mso vs gia tri gui len url neu co
            data: {
              is_update: true,
                info: 'abc'
            },
            susccess: function () {
                console.log(data);
            },
        };
        // cach goi ajax
       // $.ajax(obj_ajax);
        $('#ajax_click').click(function () {
            $.ajax(obj_ajax);
        });

        // debug ajax: inspect html --> network
    });
</script>
<a href="#" id="ajax_click">
    click de lay danh sach san pham
</a>
