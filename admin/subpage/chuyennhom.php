
<form>
<table border="1">
	
	<tr>
		<td>Tên sinh viên</td>
		<td>Tên nhóm muốn chuyển </td>
		<td></td>
	</tr>
	<?php
	$id_gv=$_GET['id_gv'];
		$tam = $obj->query("SELECT * from sinhvien, yeucau_chuyennhom, nhom where sinhvien.id_sv=yeucau_chuyennhom.id_sv AND yeucau_chuyennhom.id_nhom=nhom.id_nhom and id_gv='$id_gv'");
		$data = $tam->fetchAll();
		foreach ($data as $key => $value) {
			
	?>
	<tr>

		<td><ul><?php echo $value['ten_sv']?></ul></td>
		<td><ul><?php echo $value['ten_nhom'] ?></ul></td>
		<?php 
		$tt = $obj->query("SELECT * from yeucau_chuyennhom");
			if($value['tinhtrang']==''){
		 ?>
		
 		<td><ul><a href="index.php?quanly=xl_chuyennhom&id_yeucaucn=<?php echo $value['id_yeucaucn']?>">Xử lý yêu cầu</ul></td>

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