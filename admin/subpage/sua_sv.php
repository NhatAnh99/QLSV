<?php 
    if(isset($_POST['sua_sv']))
{
    $id_sv=$_POST['id_sv'];
    $ten_sv=$_POST['ten_sv'];
    $gioitinh_sv=$_POST['gioitinh_sv'];
    $ngaysinh_sv=$_POST['ngaysinh_sv'];
    $cmnd_sv=$_POST['cmnd_sv'];
    $id_khoa=$_POST['id_khoa'];
    $pw_sv=$_POST['pw_sv'];

   
    $query = "UPDATE sinhvien SET id_sv='$id_sv',ten_sv='$ten_sv', gioitinh_sv='$gioitinh_sv', ngaysinh_sv='$ngaysinh_sv', id_khoa='$id_khoa', pw_sv='$pw_sv' where id_sv='$id_sv'";
        //echo ($query);
       $obj -> query($query);
       header("location:index.php");

}
?>


<?php
$id_sv=$_GET['id_sv'];
$sql = "SELECT * from sinhvien where id_sv='$id_sv'";
$tam = $obj->query($sql);
$data = $tam->fetch();
$id_khoa=$data['id_khoa'];
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
            <label>Mã Sinh Viên</label>
            <input readonly class="text-input small-input" id="small-input" type="text" name="id_sv" value="<?php echo($data['id_sv']);?>">
        </p>
        <p>
            <label>Tên Sinh Viên</label>
            <input class="text-input small-input" id="small-input" type="text" name="ten_sv"value="<?php echo($data['ten_sv']);?>">
        </p>
        <p>
            <label>Giới Tính</label>
            <select name="gioitinh_sv"value="<?php echo($data['gioitinh_sv']);?>">
                <option value="1">Nam</option>
                <option value="0">Nữ</option>
            </select>
        </p>
        <p>
            <label>Ngày Sinh</label>
            <input class="text-input small-input" id="small-input" type="text" name="ngaysinh_sv"value="<?php echo($data['ngaysinh_sv']);?>">
        </p>
        <p>
            <label>Chứng Minh Nhân Dân</label>
            <input class="text-input small-input" id="small-input" type="text" name="cmnd_sv" value="<?php echo($data['cmnd_sv']);?>">
        </p>
        <p>
            <label>Password Sinh Viên</label>
            <input class="text-input small-input" id="small-input" type="text" name="pw_sv" value="<?php echo($data['pw_sv']);?>" >
        </p>
        <p>
            <label>Khoa</label>
            <?php
            $lsp = $obj->query("select * from khoa");
            ?>
            <select name="id_khoa" class="small-input">
                <?php
                    $data = $lsp->fetchAll();
                    foreach ($data as $key => $value) {
                        if($id_khoa == $value['id_khoa']){
                ?>
                <option selected value="<?php echo $value['id_khoa'] ?>"><?php echo $value['ten_khoa'] ?></option>
                <?php 
                    }else{
                ?>
                <option  value="<?php echo $value['id_khoa'] ?>"><?php echo $value['ten_khoa'] ?></option>

                <?php
                    }
                }
                ?>
            </select>  
        </p>
        
        <p>
        <button class = "button" type="submit" name="sua_sv">Sửa</button>
        </p>
    </form>
</fieldset>
</div>
</div>
</div>