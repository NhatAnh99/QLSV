<?php
include 'connect.php';
?>


<table border="1">
	<td>Nhóm đã tham gia</td>
	<tr>
		<td>Mã nhóm</td>
		<td>Tên nhóm</td>
		<td>Tên lớp </td>
        <td>SL</td>
		
		

	</tr>
	<?php
		$id_sv=$_GET['id_sv'];
		$tam = $obj->query("SELECT * FROM nhom, nhom_sv,lopmh where nhom.id_nhom=nhom_sv.id_nhom and nhom.id_lopmh=lopmh.id_lopmh and id_sv='$id_sv'");
		$data = $tam->fetchAll();
		foreach ($data as $key => $value) {
			
	?>
	<tr>

		<td><ul><?php echo $value['id_nhom']?></ul></td>
		<td><ul><?php echo $value['ten_nhom'] ?></ul></td>
		<td><ul><?php echo $value['ten_lopmh'] ?></ul></td>
		<td><ul><?php echo $value['soluongtoida'] ?></ul></td>
		<!-- <td><ul><a href="index.php?quanly=ds_sv_nhommh&id_nhom=<?php echo $value['id_nhom']?>"><?php echo $value['ten_nhom'] ?></ul></td> -->
		
		

	<?php 
	}
	
	?>
	</tr>
</table>
<br>
<a>Danh sách nhóm</a>
<table border="1">
    
    <tr>
        <td>Mã nhóm</td>
        <td>Tên nhóm </td>
        <td>Tên lớp môn học</td>
        <td>Số lượng tối đa </td>
        

    </tr>
    <?php
        $tam = $obj->query("SELECT * from nhom, lopmh_sv, lopmh where nhom.id_lopmh=lopmh.id_lopmh and lopmh.id_lopmh=lopmh_sv.id_lopmh and id_sv='$id_sv'");
        $data = $tam->fetchAll();
        foreach ($data as $key => $value) {
            
    ?>
    <tr>

        <td><ul><?php echo $value['id_nhom']?></ul></td>
        <td><ul><?php echo $value['ten_nhom'] ?></ul></td>
        <td><ul><?php echo $value['ten_lopmh'] ?></ul></td>
        <td><ul><?php echo $value['soluongtoida'] ?></ul></td>
    <?php 
    }
    ?>
    </tr>
</table>

<?php
//include('connect.php');
if(isset($_POST['chuyennhom']))
{
    $id_sv = $_SESSION['id_sv'];
    $id_yeucaucn=rand(1,999);
    $id_nhomgoc =$_POST['id_nhomgoc'];
    $id_nhom =$_POST['id_nhom'];
    $id_gv =$_POST['id_gv'];
    // $id_nhomsau =$_POST['id_nhomsau'];
    $tam = $obj->query("SELECT * FROM nhom, nhom_sv, lopmh where nhom.id_nhom=nhom_sv.id_nhom and nhom.id_lopmh=lopmh.id_lopmh and id_sv='$id_sv'");
	$data = $tam->fetchAll();
    // echo $brands;
        // echo $item . "<br>";
           $query = "INSERT INTO yeucau_chuyennhom(id_yeucaucn,id_sv,id_nhomgoc,id_nhom,tinhtrang,nhanxet,id_gv) VALUES ('$id_yeucaucn','$id_sv','$id_nhomgoc','$id_nhom','0','','$id_gv')";
        // echo ($query);
        $obj -> query($query);
}
?>


<?php
		$id_sv=$_GET['id_sv'];
		$tam = $obj->query("SELECT * FROM nhom, nhom_sv where nhom.id_nhom=nhom_sv.id_nhom and id_sv='$id_sv'");
		$data = $tam->fetchAll();		
?>

<form method="post" enctype="multipart/form-data">

    <p>
        <label>Nhóm đã tham gia</label>
        <?php
        $n1 = $obj->query("SELECT * FROM nhom, nhom_sv where nhom.id_nhom=nhom_sv.id_nhom  and id_sv='$id_sv'");
        ?>
        <select name="id_nhomgoc" class="small-input">
            <option value="option">Chọn mã nhóm cần chuyển</option>
            <?php
                $data = $n1->fetchAll();
                foreach ($data as $key => $value) {
            ?>
            <option value="<?php echo $value['id_nhom'] ?>"><?php echo $value['ten_nhom'] ?></option>
            <?php
            }
            ?>
        </select>
    </p>
    
    <p>
        <label>Nhóm muốn chuyển</label>
        <?php
        $n2 = $obj->query("SELECT * FROM nhom, lopmh,lopmh_sv where nhom.id_lopmh=lopmh.id_lopmh and lopmh.id_lopmh=lopmh_sv.id_lopmh and id_sv='$id_sv'");
        ?>
        <select name="id_nhom" class="small-input">
            <option value="option">Chọn mã nhóm cần chuyển</option>
            <?php
                $data = $n2->fetchAll();
                foreach ($data as $key => $value) {
            ?>
            <option value="<?php echo $value['id_nhom'] ?>"><?php echo $value['ten_nhom'] ?></option>
            <?php
            }
            ?>
        </select>
    </p>

    <p>
        <label>Chọn giáo viên</label>
        <?php
        $id_sv=$_GET['id_sv'];
        $n = $obj->query("SELECT * from lopmh,lopmh_sv,giaovien where lopmh.id_lopmh=lopmh_sv.id_lopmh and lopmh.id_gv=giaovien.id_gv and id_sv='$id_sv'");
                    $data = $n->fetchAll();
                    foreach ($data as $key => $value) {
                ?>
         <input type="checkbox" name="id_gv" value="<?php echo $value['id_gv'] ?>"><?php echo $value['ten_gv'] ?>   <td><ul><?php echo $value['ten_lopmh'] ?></ul></td><br>
        <?php  }?>
        </p>
        


    <p>
    <button class = "button" type="submit" name="chuyennhom">Chuyển</button>
    </p>
</form>
