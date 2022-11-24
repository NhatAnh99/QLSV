<?php 
if(isset($_POST['btnGuiYC']))
{
    $tinhtrang = $_POST['tinhtrang'];
    $id_yeucau = $_GET['id_yeucau'];
    $nhanxet = $_POST['nhanxet'];
    //$query = "UPDATE yeucau SET tinhtrang='$tinhtrang', nhanxet='$nhanxet' where id_yeucau='$id_yeucau;";
    $query = "UPDATE `yeucau` SET `tinhtrang` = '$tinhtrang', `nhanxet` = '$nhanxet' WHERE `id_yeucau` = '$id_yeucau';";
     $obj -> query($query);
     //echo ($query);
     header("location:index.php");   
}
?>




<?php
$id_yeucau = $_GET["id_yeucau"];
$sql = "SELECT * from yeucau, sinhvien where yeucau.id_sv=sinhvien.id_sv  and id_yeucau = '$id_yeucau' ";
$tam = $obj->query($sql);
$data = $tam->fetch();
?>
<div class="clear"></div>
<fieldset>
    <form method="post" enctype="multipart/form-data">
        <p>
            <label>Tên sinh viên</label>
            <input readonly class="text-input small-input" id="small-input" type="text" name="ten_sv" value="<?php echo($data['ten_sv']); ?>">

        </p>  
        <p>
            <label>Nội dung</label>
            <input readonly class="text-input small-input" id="small-input" type="text" name="noidung" value="<?php echo($data['noidung']); ?>">
        </p>     
        <p>
            <label>Nhận xét</label>
            <textarea class="text-input small-input" id="small-input" type="text" name="nhanxet"></textarea>
        </p>   
        
        <p>
        	<label></label>
        	<?php
        	$id_yeucau = $_GET['id_yeucau'];
		$tt = $obj->query("SELECT * from yeucau where id_yeucau='$id_yeucau'");
		?>
		<select name="tinhtrang">
			<option value="1">Đồng ý</option>
			<option value="2">Không đồng ý</option>
		</select>
	</p>
	<p>
        <button class = "button" type="submit" name="btnGuiYC">Gửi</button>
    </p>
    </form>
</fieldset>