<?php
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 10/27/2020
 * Time: 7:17 PM
 */
//views/categories/index.php
// view liet ke danh muc
//echo "<pre>";
//print_r($arr);
//echo "</pre>";
?>
<html>
<a href="index.php?controller=category&action=create">
    Them moi danh muc
</a>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>name</th>
        <th>description</th>
        <th>status</th>
        <th>created_at</th>
        <th></th>
    </tr>
    <?php foreach ($categories AS $category): ?>
    <tr>
        <th><?php echo $category['id']?></th>
        <th><?php echo $category['name']?></th>
        <th><?php echo $category['description']?></th>
        <th><?php echo $category['status']?></th>
        <th>
            <?php
            $datetime = date( 'd/m/Y H:i:s', strtotime($category['created_at']));
            echo $datetime;
            ?>
        </th>
        <?php
        $url_update = "index.php?controller=category&action=update&id=".$category['id'];
        $url_delete = "index.php?controller=category&action=delete&id=".$category['id'];

        ?>
        <th href="<?php echo $url_update?>">Sua</th>
        <th href="<?php echo $url_delete?>" onclick="return confirm('xoa hay ko xoa')">Xoa</th>
    </tr>
    <?php endforeach;?>

</table>
