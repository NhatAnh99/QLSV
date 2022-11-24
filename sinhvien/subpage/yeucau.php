
<?php
//include('connect.php');
if(isset($_POST['btnGuiTB']))
{
    $id_sv = $_SESSION['id_sv'];
    $id_yeucau =rand(1,999);
    $noidung = $_POST['noidung'];
    $brands = $_POST['brands'];
    // echo $brands;

    foreach($brands as $item)
    {
        // echo $item . "<br>";
        $query = "INSERT INTO yeucau (id_yeucau,id_sv,id_gv,noidung,tinhtrang,nhanxet) VALUES ('$id_yeucau','$id_sv','$item','$noidung','0','null')";
       // echo ($query);
         $obj -> query($query);
    }
}
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
                    <label>Sinh viên</label>
                    <input readonly class="text-input small-input" id="small-input" type="text" value="<?php echo($_SESSION['sv']);?>">
                    </p>

        <p>
        <label>Chọn giáo viên</label>
        <?php
        $id_sv=$_GET['id_sv'];
        $n = $obj->query("SELECT * from lopmh,lopmh_sv,giaovien where lopmh.id_lopmh=lopmh_sv.id_lopmh and lopmh.id_gv=giaovien.id_gv and id_sv='$id_sv'");
                    $data = $n->fetchAll();
                    foreach ($data as $key => $value) {
                ?>
         <input type="checkbox" name="brands[]" value="<?php echo $value['id_gv'] ?>"><?php echo $value['ten_gv'] ?><br>
        <?php  }?>
        </p>
                        <label>Nội dung</label>
                        <textarea class="text-input small-input" id="small-input" type="text" name="noidung"></textarea>
                    <p>
                    <button class = "button" type="submit" name="btnGuiTB">Gửi</button>
                    </p>
                </form>
            </fieldset>
        </div>
    </div>              
</div>

<form>
<table border="1">
	
	<tr>
		<td>Tên sinh viên</td>
		<td>Nội dung </td>
		<td>Phản hồi</td>
	</tr>
	<?php
	$id_sv=$_GET['id_sv'];
		$tam = $obj->query("SELECT * from yeucau,sinhvien where yeucau.id_sv=sinhvien.id_sv and yeucau.id_sv='$id_sv'");
		$data = $tam->fetchAll();
		foreach ($data as $key => $value) {
	?>
	<tr>
		<td><ul><?php echo $value['ten_sv']?></ul></td>
		<td><ul><?php echo $value['noidung']?></ul></td>
		<?php 
		$tt = $obj->query("SELECT * from yeucau_chuyennhom");
			if($value['tinhtrang']=='0'){
		 ?>
			<td><ul>Chưa xử lý yêu cầu</ul></td>
 		

 		<?php 
 			}
	} 
	?>
	</tr>

</table>
</form>