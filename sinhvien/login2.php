<?php 
include 'connect.php';
$ten_sv= isset($_POST['ten_sv'])?$_POST['ten_sv']:'';
$id_sv= isset($_POST['id_sv'])?$_POST['id_sv']:'';
$pw_sv= isset($_POST['pw_sv'])?$_POST['pw_sv']:'';
$sv =isset($_POST['sv'])?$_POST['sv']:'';
if (!isset($_SESSION)) session_start();
$sql = "SELECT * from sinhvien where id_sv='$id_sv' and pw_sv='$pw_sv'";
$ad = $obj->query($sql);
$data = $ad->fetch();
if ($id_sv==$data['id_sv'] && $pw_sv==$data['pw_sv'])
{
    $_SESSION['id_sv']=$data['id_sv'];
    $_SESSION['sv']=$data['ten_sv'];
    header('location:index.php');exit;
}
header('location:login.php');

?>