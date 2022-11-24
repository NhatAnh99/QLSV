<?php
include ('connect.php'); 
$id_lopmh = $_GET['id_lopmh']; 
$id_sv = $_GET['id_sv'];
$query = "DELETE FROM lopmh_sv where id_lopmh='$id_lopmh' and id_sv='$id_sv'";
//echo($query);
$obj -> query($query);

header("location:index.php")

?>
