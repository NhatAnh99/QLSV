<?php
	?>
	<table border="1">
	
	<tr>
		<td>Mã lớp môn học</td>
		<td>Tên lớp môn học</td>
		<td>Tên giáo viên</td>
		<td><a href="index.php?quanly=them_lopmh_Excel">Thêm lớp môn học</td>
		<td><a href="index.php?quanly=them_sv_Excel">Thêm Sinh Viên Lớp môn học</td>
	</tr>
	<?php
	
		$sv = $obj->query("SELECT * from lopmh, giaovien where lopmh.id_gv=giaovien.id_gv");
		$dt= $sv->fetchAll();
		foreach ($dt as $key => $value) {		
	?>
	<tr>

		<td><ul><?php echo $value['id_lopmh']?></ul></td>
		<td><ul><?php echo $value['ten_lopmh'] ?></ul></td>
		<td><ul><?php echo $value['ten_gv'] ?></ul></td>

		<td><ul><a href="index.php?quanly=sua_lopmh&id_lopmh=<?php echo $value['id_lopmh']?>">Sửa </a>| <a onclick="return window.confirm('Bạn muốn xóa không');" href="index.php?quanly=xoa_lopmh&id_lopmh=<?php echo $value['id_lopmh']?>"> Xóa</a></ul></td>
	<?php 
	}

	?>
	</tr>
	</table>
<?php



?>
