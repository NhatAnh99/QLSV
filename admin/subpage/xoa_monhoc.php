
<?php
include ('connect.php'); 
if($_SESSION['id_gv']=='admin')
{

$id_monhoc = $_GET['id_monhoc']; 
$query = "DELETE FROM monhoc where id_monhoc='$id_monhoc'";
//echo($query);
//$obj -> query($query);
if($obj -> query($query)==TRUE)
{
    echo '<script>alert("Xóa thành công.")</script>';
}
else
{
  echo '<script>alert("Môn học đã có lớp, không thể xóa.")</script>';
}

}
//header("location:index.php?quanly=ds_monhoc")

?>
