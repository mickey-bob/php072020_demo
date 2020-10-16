<?php
session_start();
require_once 'database.php';

/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 10/6/2020
 * Time: 8:48 PM
 */
//Lay tat ca san pham tu bang product, export data ra bang
// + viet cau truy van, LAY SAN PHAM THEO NGAY TAO GAN NHAT
//
$sql_select_all = 'SELECT * FROM products ORDER BY created_at DESC';
// thuc thi truy van.
$obj_result_all = mysqli_query($connect, $sql_select_all);
// truong hop nay obj_result_all se tra ve array trung gian
//echo "<pre>";
//print_r($obj_result_all);
//echo "</pre>";
//var_dump($obj_result_all);
$products = mysqli_fetch_all($obj_result_all, MYSQLI_ASSOC);
//echo "<pre>";
//print_r ($products);
//print_r($_SESSION);
//echo "</pre>";

?>
<?php
// hiem thi session thong bao.
if (isset($_SESSION['success'])){
    echo $_SESSION['success'];
    unset($_SESSION['success']);
}
if (isset($_SESSION['error'])){
    echo $_SESSION['error'];
    unset($_SESSION['error']);
}
?>

<a href="creat.php">Them moi san pham</a>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>avatar</th>
        <th>Description</th>
        <th>Created-at</th>
        <th></th>
    </tr>
    <?php foreach ($products AS $product): ?>
    <tr>
        <td><?php echo $product['id']?></td>
        <td><?php echo $product['name']?></td>
        <td>
            <img src="uploads/<?php echo $product['avartar']?>"  height="80"/>
        </td>
        <td><?php echo $product['description']?></td>
        <td>
<!--            08/10/2020-->
            <?php
//                thay doi lai format day-date
            $created_at = $product['created_at'];
            // mac dinh DATETIME, TIMESTAMP co format: Y-M-D H:I:S
            $date_format = date('d/m/Y H:i:s', strtotime($created_at));
            echo $date_format;
            ?>
        </td>
        <td>
<!--            voi link sua vs xoa , can phai biet dang sua/xoa tren ban ghi nao-->
            <a href="update.php?id=<?php echo $product['id'];?>">Sua</a>
            <a href="delete.php?id=<?php echo $product['id'];?>"
            onclick="return confirm('Ban co muon xoa ko ?')"
            >
                Xoa
            </a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
