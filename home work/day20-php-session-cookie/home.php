<?php
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 10/2/2020
 * Time: 2:08 PM
 */
session_start();
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

?>
<h3><?php echo $_SESSION['success'];?></h3>
<h3>Xin chao <?php echo $_SESSION['fullname'];?></h3>
<a href="logout.php">logout</a>