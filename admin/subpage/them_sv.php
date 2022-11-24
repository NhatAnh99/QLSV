<?php 
    if(isset($_POST['them_sv']))
{
    $id_sv=$_POST['id_sv'];
    $ten_sv=$_POST['ten_sv'];
    $gioitinh_sv=$_POST['gioitinh_sv'];
    $ngaysinh_sv=$_POST['ngaysinh_sv'];
    $cmnd_sv=$_POST['cmnd_sv'];
    $id_khoa=$_POST['id_khoa'];
    $pw_sv=$_POST['pw_sv'];

   
        $query = "INSERT INTO `sinhvien`(`id_sv`, `ten_sv`, `gioitinh_sv`, `ngaysinh_sv`, `cmnd_sv`, `id_khoa`, `pw_sv`)
         VALUES ('$id_sv', '$ten_sv','$gioitinh_sv','$ngaysinh_sv','$cmnd_sv','$id_khoa','$pw_sv')";
       $obj -> query($query);
        header("location:index.php");

} ; 
 ?>


<?php
$sql = "SELECT * from sinhvien ";
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
            <label>Mã Sinh Viên</label>
            <input class="text-input small-input" id="small-input" type="text" name="id_sv">
        </p>
        <p>
            <label>Tên Sinh Viên</label>
            <input class="text-input small-input" id="small-input" type="text" name="ten_sv">
        </p>
        <p>
        	<label>Giới Tính</label>
		    <select name="gioitinh_sv">
			<option value="1">Nam</option>
			<option value="0">Nữ</option>
		</select>
	</p>
        <p>
            <label>Ngày Sinh</label>
            <input class="text-input small-input" id="small-input" type="text" name="ngaysinh_sv">
        </p>
        <p>
            <label>Chứng Minh Nhân Dân</label>
            <input class="text-input small-input" id="small-input" type="text" name="cmnd_sv">
        </p>
        <p>
            <label>Khoa</label>
            <?php
            $nsx = $obj->query("select * from khoa");
            ?>
            <select name="id_khoa" class="small-input">
                <option value="option">Chọn Khoa</option>
                <?php
                    $data = $nsx->fetchAll();
                    foreach ($data as $key => $value) {
                ?>
                <option value="<?php echo $value['id_khoa'] ?>"><?php echo $value['ten_khoa'] ?></option>
                <?php
                }
                ?>
            </select>
        </p>

        <p>
            <label>Password Sinh Viên</label>
            <input class="text-input small-input" id="small-input" type="text" name="pw_sv">
        </p>

        <p>
        <button class = "button" type="submit" name="them_sv">Thêm</button>
        </p>
    </form>
</fieldset>
</div>
</div>
</div>
