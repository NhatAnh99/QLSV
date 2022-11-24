
<?php
include ('connect.php'); 
$id_lopmh = $_GET['id_lopmh']; 
$query = "DELETE FROM lopmh where id_lopmh='$id_lopmh'";
//echo($query);
$obj -> query($query);

header("location:index.php")

?>
