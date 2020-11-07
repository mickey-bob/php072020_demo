<?php
//mvc_demo/views/categories/create.php
//Hiển thị form thêm mới category
//table categories: id, name, type, avarta,description, statsus
?>
<form action="" method="post" enctype="multipart/form-data">
    Nhap ten: <input type="text" name="name"/>
    <br />
    Nhap mo ta:
    <textarea name="category_description"></textarea>
    <br />
    <input type="submit" name="submit" value="SAVE">

</form>
<!--huong dan tich hop trinh soan thao vs file vao textarea
CKediter vs CKFiles
+ Download ckediter ve:
+ voi mo hinh MVC -> assets/ckeditor
+ nhung file ckediter/ckeditor.js vao file layout cua ban.
+ viet code js de tich hop vao ckedditor dua vao
-->