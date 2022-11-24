<?php 
if (!isset($_SESSION)) session_start();
unset(   $_SESSION['id_sv']);
header('location:login.php');