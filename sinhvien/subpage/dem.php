<?php
include 'connect.php';
?>


<?php
$stmt = $obj->query("SELECT * FROM sinhvien, nhom_sv, nhom where sinhvien.id_sv=nhom_sv.id_sv AND nhom_sv.id_nhom=nhom.id_nhom and nhom_sv.id_nhom='id_nhom'");
$rows = $stmt->fetchAll();
$num_rows = count($rows);
?>
<td><ul><?php echo $num_rows ?></ul></td>