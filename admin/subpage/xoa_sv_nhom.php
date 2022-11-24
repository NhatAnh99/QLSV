<?php
include ('connect.php'); 
$id_nhom = $_GET['id_nhom']; 
$id_sv = $_GET['id_sv'];
$query = "DELETE FROM nhom_sv where id_nhom='$id_nhom' and id_sv='$id_sv'";
//echo($query);
$obj -> query($query);
header("location:index.php")

?>
