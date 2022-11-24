<?php 
    if(isset($_POST['sua_mh']))
{
    $id_monhoc=$_POST['id_monhoc'];
    $ten_monhoc=$_POST['ten_monhoc'];
    $sotinchi=$_POST['sotinchi'];
   
        $query = "UPDATE monhoc SET id_monhoc='$id_monhoc',ten_monhoc='$ten_monhoc', sotinchi='$sotinchi' where id_monhoc='$id_monhoc'";
        //echo ($query);
       $obj -> query($query);
       header("location:index.php?quanly=ds_monhoc");

}
 ?>

<?php 
//include ('connect.php'); 
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
<form method="post" enctype="multipart/form-data">
    <p>
            <label>Mã môn học</label>
            <input readonly class="text-input small-input" id="small-input" type="text" name="id_monhoc" value="<?php echo($data['id_monhoc']); ?>">
        </p>
        <p>
            <label>Tên môn học</label>
            <input class="text-input small-input" id="small-input" type="text" name="ten_monhoc" value="<?php echo($data['ten_monhoc']); ?>">
        </p>
        <p>
            <label>Số tín chỉ</label>
            <input class="text-input small-input" id="small-input" type="text" name="sotinchi" value="<?php echo($data['sotinchi']); ?>">
        </p>
        <p>
        <button class = "button" type="submit" name="sua_mh">Sửa</button>
        </p>
</form>
</div>
</div>
</div>

