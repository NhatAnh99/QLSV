<?php
$sql1 = "SELECT * from nhom";
$sql2 = "SELECT * from lopmh";
?>


<table border="1">
	
	<tr>
		<td>Mã lớp</td>
		<td>Tên lớp môn học</td>
		<td>Tên nhóm </td>
		<td></td>
		

	</tr>
	<?php
		$id_gv=$_GET['id_gv'];
		$tam = $obj->query("SELECT * FROM nhom, lopmh where nhom.id_lopmh=lopmh.id_lopmh and id_gv='$id_gv'");
		$data = $tam->fetchAll();
		foreach ($data as $key => $value) {
			
	?>
	<tr>

		<td><ul><?php echo $value['id_lopmh']?></ul></td>
		<td><ul><?php echo $value['ten_lopmh'] ?></ul></td>
		<td><ul><a href="index.php?quanly=ds_sv_nhommh&id_nhom=<?php echo $value['id_nhom']?>"><?php echo $value['ten_nhom'] ?></ul></td>
		
		

	<?php 
	}
	
	?>
	</tr>
</table>
