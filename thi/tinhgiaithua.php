<?php
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 10/13/2020
 * Time: 7:29 PM
 */
echo "<pre>";
print_r($_POST);
echo "</pre>";
$result = 1;
if (isset($_POST['submit'])){
    $number = $_POST['n'];
//    var_dump($number);

    if ($number == 0){
        $result = 0;
    } else {
        for ($i =1; $i <= $number; $i++){
            $result = $result * $i;
        }
    }
    return $result;
}
?>

<h3> Tinh giai thua</h3>
<form action="" method="post">
    nhap so giai thua: <input type="text" name="n">
    <input type="submit" value="submit" name="submit">
</form>
<h3>Ket qua giai thua: <?php echo $result; ?></h3>
