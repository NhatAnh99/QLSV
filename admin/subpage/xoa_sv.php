<?php
include ('connect.php'); 
if($_SESSION['id_gv']=='admin')
{
$id_sv = $_GET['id_sv']; 
$query = "DELETE FROM sinhvien where id_sv='$id_sv'";
//echo($query);
$obj -> query($query);
}
header("location:index.php?quanly=ds_sv")

?>