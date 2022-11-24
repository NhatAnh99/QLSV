<?php 
    if(isset($_POST['them_mh']))
{
    $id_monhoc=$_POST['id_monhoc'];
    $ten_monhoc=$_POST['ten_monhoc'];
    $sotinchi=$_POST['sotinchi'];
   
        $query = "INSERT INTO monhoc (id_monhoc, ten_monhoc, sotinchi) VALUES ('$id_monhoc', '$ten_monhoc','$sotinchi')";
        //echo ($query);
        $obj -> query($query);
header("location:index.php?quanly=ds_monhoc");

} ; 
 ?>


<?php
$sql = "SELECT * from monhoc ";
$tam = $obj->query($sql);
$data = $tam->fetch();
?>
<div class="clear"></div>
<div class="content-box">
    <div class="content-box-header">
        <?php
            include 'subpage/box.php';
        ?>
    </div>
    <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
<fieldset>
    <form method="post" enctype="multipart/form-data">
    
        <p>
            <label>Mã môn học</label>
            <input class="text-input small-input" id="small-input" type="text" name="id_monhoc">
        </p>
        <p>
            <label>Tên môn học</label>
            <input class="text-input small-input" id="small-input" type="text" name="ten_monhoc">
        </p>
        <p>
            <label>Số tín chỉ</label>
            <input class="text-input small-input" id="small-input" type="text" name="sotinchi">
        </p>

        <p>
        <button class = "button" type="submit" name="them_mh">Thêm</button>
        </p>
    </form>
</fieldset>
</div>
</div>
</div>
