<?php
	if (!isset($_SESSION)) session_start();
	if (!isset($_SESSION['id_sv']))
	include('connect.php');
?>

<div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->
			
			<h1 id="sidebar-title"><a href="index.php">Sinh viên</a></h1>
		  
			<!-- Logo (221px wide) -->
			<a href="index.php"><img id="logo" src="resources/images/logosv.png" alt="Sinh Viên logo" /></a>
		  
			<!-- Sidebar Profile links -->
			<div id="profile-links">
				<a><?php echo $_SESSION['sv'] ?></a><br>
				<a href="logout.php" title="Sign Out">Đăng xuất</a>
			</div>        
			
			<ul id="main-nav">  <!-- Accordion Menu -->
		
					<li>
					<a href="index.php?quanly=ds_nhommh&id_sv=<?php echo $_SESSION['id_sv'] ?>" class="nav-top-item no-submenu"> 
						Đăng ký nhóm
					</a>       
				</li>	
				<li>
					<a href="index.php?quanly=chuyennhom&id_sv=<?php echo $_SESSION['id_sv'] ?>" class="nav-top-item no-submenu"> 
						Xin chuyển nhóm
					</a>       
				</li>	
				<li>
					<a href="index.php?quanly=yeucau&id_sv=<?php echo $_SESSION['id_sv'] ?>" class="nav-top-item no-submenu"> 
						Gửi yêu cầu lên giáo viên
					</a>       
				</li>	
				<li>
					<a href="index.php?quanly=thongbao&id_sv=<?php echo $_SESSION['id_sv'] ?>" class="nav-top-item no-submenu"> 
						Xem thông báo
					</a>       
				</li>	
					<li>
					<a href="#" class="nav-top-item no-submenu"> 
						Thảo luận
					</a>       
				</li>
				
				
				
			</ul> <!-- End #main-nav -->
			
			
			
		</div>