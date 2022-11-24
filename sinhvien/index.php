<?php
if (!isset($_SESSION)) session_start();
if (!isset($_SESSION['id_sv']))
{
	header('location:login.php'); exit;
}

	include('connect.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		
		<title>Sinh Viên</title>
		
		<!--                       CSS                       -->
	  
		<!-- Reset Stylesheet -->
		<link rel="stylesheet" href="resources/css/reset.css" type="text/css" media="screen" />
	  
		<!-- Main Stylesheet -->
		<link rel="stylesheet" href="resources/css/style.css" type="text/css" media="screen" />
		
		<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
		<link rel="stylesheet" href="resources/css/invalid.css" type="text/css" media="screen" />	
	
  
		<!-- jQuery -->
		<script type="text/javascript" src="resources/scripts/jquery-1.3.2.min.js"></script>
		
		<!-- jQuery Configuration -->
		<script type="text/javascript" src="resources/scripts/simpla.jquery.configuration.js"></script>
		
		<!-- Facebox jQuery Plugin -->
		<script type="text/javascript" src="resources/scripts/facebox.js"></script>
		
		<!-- jQuery WYSIWYG Plugin -->
		<script type="text/javascript" src="resources/scripts/jquery.wysiwyg.js"></script>
		
		<!-- jQuery Datepicker Plugin -->
		<script type="text/javascript" src="resources/scripts/jquery.datePicker.js"></script>
		<script type="text/javascript" src="resources/scripts/jquery.date.js"></script>
		<!--[if IE]><script type="text/javascript" src="resources/scripts/jquery.bgiframe.js"></script><![endif]-->

		
		
	</head>
	<body><div id="body-wrapper">
		<div id="sidebar">
			<?php
				include 'menutrai.php';
			?>
		</div>
		
		<div id="main-content">
				
				<!-- Page Head -->
				
				<h2>Trang Sinh Viên</h2> <br>

				<?php
					include 'menutren.php';

					if(isset($_GET['quanly'])){
						$tam = $_GET['quanly'];
					}else{
						$tam = '';
					}
					if($tam=='ds_nhommh'){
						include('subpage/ds_nhommh.php');
					}elseif($tam=='ds_nhommh') {
						include('subpage/ds_nhommh.php');
					}elseif($tam=='yeucau') {
						include('subpage/yeucau.php');
					}elseif($tam=='thongbao') {
						include('subpage/thongbao.php');
					}elseif($tam=='them_nhom') {
						include('subpage/them_nhom.php');
					}elseif($tam=='ds_nhom') {
						include('subpage/ds_nhom.php');
					}elseif($tam=='chuyennhom') {
						include('subpage/chuyennhom.php');
					}elseif($tam=='ds_thanhvien') {
						include('subpage/ds_thanhvien.php');
					}elseif($tam=='ds_thanhvien') {
						include('subpage/ds_thanhvien.php');
			



					}elseif($tam=='dem') {
						include('subpage/dem.php');
					}
				?>
					
				
			</div>
			
		</div></body>

</html>

