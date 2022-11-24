<?php 
include 'connect.php';
$ten_gv= isset($_POST['ten_gv'])?$_POST['ten_gv']:'';
$id_gv= isset($_POST['id_gv'])?$_POST['id_gv']:'';
$pw_gv= isset($_POST['pw_gv'])?$_POST['pw_gv']:'';
$admin =isset($_POST['admin'])?$_POST['admin']:'';
if (!isset($_SESSION)) session_start();
$sql = "SELECT * from giaovien where id_gv='$id_gv' and pw_gv='$pw_gv'";
$ad = $obj->query($sql);
$data = $ad->fetch();
if ($id_gv==$data['id_gv'] && $pw_gv==$data['pw_gv'])
{
    $_SESSION['id_gv']=$data['id_gv'];
    $_SESSION['admin']=$data['ten_gv'];
    header('location:index.php');exit;
}
header('location:login.php');

?>