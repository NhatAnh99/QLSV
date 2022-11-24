<?php
include 'connect.php';
?>


<?php
// $rows = $stmt->fetchAll();
// $num_rows = count($rows);
?>
<table border="1">
	<td>Nhóm đã tham gia</td>
	<tr>
		<td>Mã nhóm</td>
		<td>Tên nhóm</td>
		<td>Tên môn học</td>
		<!-- <td>Số lượng đã tham gia </td> -->
        <td>Số lượng tối đa</td>
		<td>
			<a href="index.php?quanly=them_nhom"><button class = "button" type="submit" name="them_nhom">Thêm nhóm </button>
		</a> 
			<a href="index.php?quanly=ds_nhom&id_sv=<?php echo $_SESSION['id_sv'] ?>"><button class = "button" type="submit" name="ds_nhom">Danh sách nhóm </button>
		</a>
	</td>
		

	</tr>
	<?php
		$id_sv=$_GET['id_sv'];
		$tam = $obj->query("SELECT * FROM nhom, lopmh,nhom_sv where nhom.id_lopmh=lopmh.id_lopmh and nhom.id_nhom=nhom_sv.id_nhom and id_sv='$id_sv'");
		$data = $tam->fetchAll();
		foreach ($data as $key => $value) {
			
	?>

	<tr>

		<td><ul><?php echo $value['id_nhom']?></ul></td>
		<td><ul><?php echo $value['ten_nhom'] ?></ul></td>
		<td><ul><?php echo $value['ten_lopmh'] ?></ul></td>
		<!-- <td><ul><?php echo $num_rows ?></ul></td> -->
		<td><ul><?php echo $value['soluongtoida'] ?></ul></td>
		<td><ul><a href="index.php?quanly=ds_thanhvien&id_nhom=<?php echo $value['id_nhom']?>"></ul>Danh sách thành viên</td>
		
		

	<?php 
	}
	
	?>
	</tr>
</table>
