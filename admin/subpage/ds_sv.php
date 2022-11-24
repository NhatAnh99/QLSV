<?php
if($_SESSION['id_gv']=='admin')
{
	?>
	<table border="1">
	
	<tr>
		<td>Mã sinh viên </td>
		<td>Tên sinh viên</td>
		<td><a href="index.php?quanly=them_sv">Thêm sinh viên</td>
	</tr>
	<?php
	
		$sv = $obj->query("SELECT * from sinhvien");
		$dt= $sv->fetchAll();
		foreach ($dt as $key => $value) {		
	?>
	<tr>

		<td><ul><?php echo $value['id_sv']?></ul></td>
		<td><ul><?php echo $value['ten_sv'] ?></ul></td>
		<td><ul><a href="index.php?quanly=sua_sv&id_sv=<?php echo $value['id_sv']?>">Sửa </a>| <a onclick="return window.confirm('Bạn muốn xóa không');" href="index.php?quanly=xoa_sv&id_sv=<?php echo $value['id_sv']?>"> Xóa</a></ul></td>
	<?php 
	}

	?>
	</tr>
	</table>
<?php
}


else
{
?>
<table border="1">
	
	<tr>
		<td>Mã sinh viên </td>
		<td>Tên sinh viên</td>
		
	</tr>
	<?php
	$id_gv=$_GET['id_gv'];
		$tam = $obj->query("SELECT DISTINCT lopmh_sv.id_sv, sinhvien.ten_sv from lopmh, sinhvien, lopmh_sv where lopmh_sv.id_sv=sinhvien.id_sv and lopmh_sv.id_lopmh=lopmh.id_lopmh and  lopmh.id_gv='$id_gv'");
		$data = $tam->fetchAll();
		foreach ($data as $key => $value) 
		{		
	?>
	<tr>

		<td><ul><?php echo $value['id_sv']?></ul></td>
		<td><ul><?php echo $value['ten_sv'] ?></ul></td>

 		<!-- <td><ul><a href="index.php?quanly=ds_sv_lopmh&id_lopmh=<?php echo $value['id_lopmh']?>">Danh sách sinh viên</ul></td> -->
	<?php 
	}

	?>
	</tr>
</table>
<?php
}
?>