<?php
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 11/12/2020
 * Time: 7:14 PM
 */
require_once 'database.php';
$sql_select_all = "SELECT * FROM tbl_product INNER JOIN tbl_cate ON tbl_product.id = tbl_cate.id_cate;";
$obj_result_all = mysqli_query($connection, $sql_select_all);
$products = mysqli_fetch_all($obj_result_all,MYSQLI_ASSOC);
echo "<pre>";
print_r($_GET);
echo "</pre>";
?>
<h1>quan ly dong ho</h1>
<input type="text" name="search" >
<input type="button" name="btn_search" value="tim kiem">
<br />
<h1>Baner</h1>
<form action="" method="GET">
    <table border="1" cellspacing="0" cellpadding="8">
    <tr>
        <th>#</th>
        <th>Ten dong ho</th>
        <th>Thuong hieu</th>
        <th>gia tien</th>
        <th>ngay dang</th>
        <th>chuc nang</th>

    </tr>
    <?php foreach ($products AS $product): ?>
    <tr>
        <td><?php echo $product['id']; ?></td>
        <td><?php echo $product['name']; ?></td>
        <td><?php echo $product['name_cate']; ?></td>
        <td><?php echo $product['price']; ?></td>
        <td><?php echo $product['date_creat']; ?></td>
        <td><a href="delete.php?id=<?php echo $product['id']; ?>" onclick="return confirm('Are you delete?')">Xóa</a>

        </td>
    </tr>

    <?php endforeach; ?>
    </table>
    <input type="button" name="add" value="them moi">

</form>