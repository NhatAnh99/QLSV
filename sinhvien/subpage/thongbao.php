<?php
include 'connect.php';
?>


<table border="1">
	
	<tr>
		<td>Tên giáo viên</td>
		<td>Lớp </td>
		<td>Nội dung</td>

	</tr>
	
	<?php
		// xem thong bao bang ma sinh vien
		// $id_sv=$_GET['id_sv'];
		// $tam = $obj->query("SELECT * FROM thongbao, lopmh, giaovien where thongbao.id_lopmh=lopmh.id_lopmh and thongbao.id_gv=giaovien.id_gv and id_sv='$id_sv'");
		// $data = $tam->fetchAll();
		// foreach ($data as $key => $value) {
			
	?>
		<?php
		// xem thong bao bang ma lop
		$id_sv=$_GET['id_sv'];
		$tam = $obj->query("SELECT * FROM thongbao, giaovien, lopmh, lopmh_sv where thongbao.id_gv=giaovien.id_gv and thongbao.id_lopmh=lopmh.id_lopmh and lopmh.id_lopmh=lopmh_sv.id_lopmh and lopmh_sv.id_sv='$id_sv'");
		$data = $tam->fetchAll();
		foreach ($data as $key => $value) {
			
	?>
	<tr>
		<td><ul><?php echo $value['ten_gv'] ?></ul></td>
		<td><ul><?php echo $value['ten_lopmh'] ?></ul></td>
		<td><ul><?php echo $value['noidung_thongbao']?></ul></td>
		
		
		

	<?php 
	}
	
	?>
	</tr>
</table>
