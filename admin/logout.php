<?php 
if (!isset($_SESSION)) session_start();
unset(   $_SESSION['id_gv']);
header('location:login.php');