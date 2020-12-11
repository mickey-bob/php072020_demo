<?php
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 10/20/2020


 * Time: 7:04 PM
Url se xu ly ajax
 * muc dich: truy van csdl, lay ra toan bo san pham, tra ve 1 bang HTML,
 * chua danh sach s.pham cho noi goi ajax.
 */
require_once 'database.php';
echo "<pre>";
print_r ($_POST);
echo "</pre>";
// Thuc hien truy van CSDL
//echo "<pre>";
//print_r()
//echo "</pre>";
$sql_select_all = "SELECT * FROM products ORDER BY created_at DESC";
// THUC thi truy van
$obj_result_all = mysqli_query($connect,$sql_select_all);
// lay ket qua tra ve duoi dang array.
$products = mysqli_fetch_all($obj_result_all, MYSQLI_ASSOC);
echo "<pre>";
print_r($products);
echo "</pre>";
?>
<table border="1" cellspacing="0" cellpadding="6">
    <tr>
        <th>ID</th>
        <th>Name</th>
    </tr>
    <?php foreach ($products AS $product): ?>
    <tr>
        <td><?php echo $product['id']; ?></td>
        <td><?php echo $product['name']; ?></td>
        <td><?php echo $product['avartar']; ?></td>
    </tr>
    <?php endforeach;?>

</table>
<!--Mac dinh kieu data tra ve cho ajax la text,
 neu nhu ko khai bao "json"
 -->