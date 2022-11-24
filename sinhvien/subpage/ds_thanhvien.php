<?php
$sql = "SELECT * from lopmh_sv";
$sql1 = "SELECT * from sinhvien";
$sql2= "SELECT * FROM nhom_sv";
?>


<table border="1">
	
	<tr>

		<td>Mã sinh viên</td>
		<td>Tên sinh viên </td>
		

	</tr>
	<?php
	$id_nhom=$_GET['id_nhom'];
		$tam = $obj->query("SELECT * FROM sinhvien, nhom_sv, nhom where sinhvien.id_sv=nhom_sv.id_sv AND nhom_sv.id_nhom=nhom.id_nhom and nhom_sv.id_nhom='$id_nhom'");
		$data = $tam->fetchAll();
		foreach ($data as $key => $value) {
			
	?>
	<tr>
		<td><ul><?php echo $value['id_sv'] ?></ul></td>
		<td><ul><?php echo $value['ten_sv'] ?></ul></td>


		
		

	<?php 
	}
	
	?>
	</tr>
</table>
