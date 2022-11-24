<?php
$sql = "SELECT * from lopmh_sv";
$sql1 = "SELECT * from sinhvien";
?>


<table border="1">
	
	<tr>
		<td>Mã lớp</td>
		<td>Mã sinh viên</td>
		<td>Tên sinh </td>
		<td></td>
		

	</tr>
	<?php
	$id_lopmh=$_GET['id_lopmh'];
		$tam = $obj->query("SELECT * FROM lopmh_sv, sinhvien where lopmh_sv.id_sv=sinhvien.id_sv AND lopmh_sv.id_lopmh='$id_lopmh'");
		$data = $tam->fetchAll();
		foreach ($data as $key => $value) {
			
	?>
	<tr>

		<td><ul><?php echo $value['id_lopmh']?></ul></td>
		<td><ul><?php echo $value['id_sv'] ?></ul></td>
		<td><ul><?php echo $value['ten_sv'] ?></ul></td>
		<td><ul><a onclick="return window.confirm('Bạn muốn xóa không');" 
			href="index.php?quanly=xoa_sv_lopmh&id_lopmh=<?php echo $value['id_lopmh']?>&id_sv=<?php echo $value['id_sv']?>"> Xóa</a></ul></td>
		

	<?php 
	}
	
	?>
	</tr>
</table>
