<?php
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 9/17/2020
 * Time: 8:01 PM
 * ********* CAC BUOC XU LY FOMR***************
 + Debug bien lien quan den p.thuc gui form get, post
 * tao bien chua t.tin loi vs t.bao thanh cong.
 * xu ly submit from chi khi user cick submit.
 * tao bien trung gian de gan lai gia tri lay dc tu post, get
 * validate du lieu ==> bat buoc phai co buoc xu ly form.
 * co the validate = js, tuy nhien phai validate lai bang PHp vi enduser co
 * kha nangn tat js tren trinh duyet.
 * xu ly submit form theo logic bai toan, ==> chi khi nao ko co error xay ra
 * hien thi loi or success neu co ra man hinh sau khi xu ly.
 * option: do lai du lieu dung ra form trong truong hop validate sai.
 */
?>

<?php
// Bau dau xu ly form submit.
// chu y: code xy ly form nen viet phia tren khai bao form, de co the
// linh hoat su dung cac bien cho cac vi tri phia sau.
// debug bien $_POST
echo "<pre>";
print_r($_POST);
echo "</pre>";
//+ TAO CAC BIEN chua t.tin loi vs thanh cong.
$error = '';
$result = '';
// + kiem tra neu user click nut submit thi moi xu ly, dua vao name cua nut submit
// su dung ham isset cua php de kiem tra mang co ton tai voi key cho truoc hay ko.
if (isset($_POST['show']) == TRUE){
    // co the bo == TRUE, vi mac dinh la == true roi.
//    + TAO bien trung gian
    $fullname = $_POST['fullname'];
    //+ validate form:
    // - ten ko dc de trong: empty.
    //- ten phai co it nhat 6 ky tu: strlen.
    if (empty($fullname)){
        $error = 'ten ko dc de trong';
    } elseif (strlen($fullname) < 6){
        $error = 'ten phai co it nhat 6 ky tu';
    }

    // + xu ly logic bai toan chi khi nao ko co loi xay ra
    if (empty($error)){
        $result = "ten cua ban: $fullname";
    }
}
?>
<!--Hien thi thong bao loi ra man hinh -->
<h3 style="color: red;">
    <?php echo $error?>
</h3>
<!--Do lai du lieu user da nhap vao cac input tuong ung-->
<h3 style="color: green;">
    <?php echo $result?>
</h3>
<form action="" method="post">
    nhap ten cua ban: <br />
    <input type="text" name="fullname" value=" <?php echo isset($_POST['fullname']) ? $_POST['fullname'] : '' ?>"/>
    <input type="submit" name="show" value="show thong tin" />
</form>
