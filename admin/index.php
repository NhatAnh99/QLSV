<?php
if (!isset($_SESSION)) session_start();
if (!isset($_SESSION['id_gv']))
{
	header('location:login.php'); exit;
}

	include('connect.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		
		<title>Simpla Admin</title>
		
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
				
				<h2>Trang Quản Lý</h2> <br>

				<?php
					include 'menutren.php';

					if(isset($_GET['quanly'])){
						$tam = $_GET['quanly'];
					}else{
						$tam = '';
					}
					if($tam=='ds_lopmh'){
						include('subpage/ds_lopmh.php');
					}elseif ($tam=='ds_sv_lopmh') {
						include('subpage/ds_sv_lopmh.php');
					}elseif($tam=='them_sv_Excel') {
						include('phpExcel/them_sv_Excel.php');
					}elseif($tam=='them_lopmh_Excel') {
						include('phpExcel/them_lopmh_Excel.php');
					}elseif($tam=='ds_nhommh') {
						include('subpage/ds_nhommh.php');
					}elseif($tam=='sua_lopmh') {
						include('subpage/sua_lopmh.php');
					}elseif($tam=='xoa_lopmh') {
						include('subpage/xoa_lopmh.php');
					}elseif($tam=='ds_sv_nhommh') {
						include('subpage/ds_sv_nhommh.php');
					}elseif($tam=='thongbao') {
						include('subpage/thongbao.php');
					}elseif($tam=='ds_sv') {
						include('subpage/ds_sv.php');
					}elseif($tam=='chuyennhom') {
						include('subpage/chuyennhom.php');
					}elseif($tam=='xl_chuyennhom') {
						include('subpage/xl_chuyennhom.php');
					}elseif($tam=='ds_monhoc') {
						include('subpage/ds_monhoc.php');
					}elseif($tam=='them_monhoc') {
						include('subpage/them_monhoc.php');
					}elseif($tam=='sua_monhoc') {
						include('subpage/sua_monhoc.php');
					}elseif($tam=='xoa_monhoc') {
						include('subpage/xoa_monhoc.php');
					}elseif($tam=='sua_sv') {
						include('subpage/sua_sv.php');
					}elseif($tam=='xoa_sv') {
						include('subpage/xoa_sv.php');
					}elseif($tam=='them_sv') {
						include('subpage/them_sv.php');
					}elseif($tam=='xoa_sv_lopmh') {
						include('subpage/xoa_sv_lopmh.php');	
					}elseif($tam=='xoa_sv_nhom') {
						include('subpage/xoa_sv_nhom.php');
					}elseif($tam=='yeucau') {
						include('subpage/yeucau.php');
					}elseif($tam=='xl_yeucau') {
						include('subpage/xl_yeucau.php');
					}
				?>
					
				
			</div>
			
		</div></body>

</html>

