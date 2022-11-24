<?php
	include('connect.php');
?>
<ul class="shortcut-buttons-set">
    <li><a class="shortcut-button" href="index.php?quanly=thongbao&id_gv=<?php echo $_SESSION['id_gv']  ?>">
            <span><img src="resources/images/icons/paper_content_pencil_48.png" alt="icon" /><br />
                Tạo thông báo
            </span></a></li>
    <li><a class="shortcut-button" href="index.php?quanly=chuyennhom&id_gv=<?php echo $_SESSION['id_gv']  ?>">
            <span><img src="resources/images/icons/image_add_48.png" alt="icon" /><br />
                Chuyển nhóm
            </span></a></li>
    <li><a class="shortcut-button" href="index.php?quanly=yeucau&id_gv=<?php echo $_SESSION['id_gv']  ?>">
            <span><img src="resources/images/icons/clock_48.png" alt="icon" /><br />
                Yêu cầu
            </span></a></li>

</ul>