<?php
/**
 *
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 10/27/2020
 * Time: 7:17 PM
 */
// views/categories/create.php

?>
<h1>form them moi danh muc </h1>
<h2> form nay trong file views/categories/create.php </h2>

<?php
$a = get_defined_vars();
echo "<pre>";
print_r($a);
echo "</pre>";

?>
<form action="" method="POST">
    ten danh muc <input type="text" name="name" value="" />
    <br />
    Nhap chi tiet:
    <textarea name="description"></textarea>
    <input type="submit" name="submit" value="save" />
</form>
<h2>Ket thuc form them moi danh muc trong view create.php</h2>