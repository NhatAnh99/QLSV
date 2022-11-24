<?php
	if (!isset($_SESSION)) session_start();
	if (!isset($_SESSION['id_gv']))
	include('connect.php');
?>

<div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->
			
			<h1 id="sidebar-title"><a href="index.php">Simpla Admin</a></h1>
		  
			<!-- Logo (221px wide) -->
			<a href="index.php"><img id="logo" src="resources/images/logo.png" alt="Simpla Admin logo" /></a>
		  
			<!-- Sidebar Profile links -->
			<div id="profile-links">
				<a><?php echo $_SESSION['admin'] ?></a><br>
				<a href="logout.php" title="Sign Out">Đăng xuất</a>
			</div>        
			
			<ul id="main-nav">  <!-- Accordion Menu -->
				
				<li>
					<a href="index.php?quanly=ds_lopmh&id_gv=<?php echo $_SESSION['id_gv']  ?>" class="nav-top-item no-submenu"> 
						Lớp môn học

					</a>       
				</li>
				<li>
					<a href="index.php?quanly=ds_nhommh&id_gv=<?php echo $_SESSION['id_gv']  ?>" class="nav-top-item no-submenu"> 
						Nhóm
					</a>       
				</li>
				<li>
					<a href="index.php?quanly=ds_sv&id_gv=<?php echo $_SESSION['id_gv']  ?>" class="nav-top-item no-submenu"> 
						Danh sách sinh viên
					</a>       
				</li>
				<li>
					<a href="index.php?quanly=ds_monhoc" class="nav-top-item no-submenu"> 
						Môn học
					</a>       
				</li>
				
				
				
			</ul> <!-- End #main-nav -->
			
			
			
		</div>