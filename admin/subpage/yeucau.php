<form>
<table border="1">
	
	<tr>
		<td>Tên sinh viên</td>
		<td>Nội dung </td>
		<td></td>
	</tr>
	<?php
	$id_gv=$_GET['id_gv'];
		$tam = $obj->query("SELECT * from yeucau, sinhvien where yeucau.id_sv=sinhvien.id_sv and id_gv='$id_gv'");
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
			<td><ul><a href="index.php?quanly=xl_yeucau&id_yeucau=<?php echo $value['id_yeucau']?>">Xử lý yêu cầu</ul></td>
 		

 		<?php 
 			}else{
 		?>
 			<td><ul>Đã xử lý</ul></td>
	<?php 
}
	} 
	?>
	</tr>

</table>
</form>