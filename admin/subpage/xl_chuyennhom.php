<?php 
if(isset($_POST['btnGuiCN']))
{
   $tinhtrang = $_POST['tinhtrang'];
	$id_nhomgoc = $_POST['id_nhomgoc'];
	$id_nhomchuyen = $_POST['id_nhomchuyen'];
	$id_sv = $_POST['id_sv'];
    $id_yeucaucn=$_GET['id_yeucaucn'];
    if($tinhtrang==1){
    $query = "UPDATE nhom_sv SET id_nhom='$id_nhomchuyen' where id_nhom='$id_nhomgoc' and id_sv='$id_sv'";    
   	$obj -> query($query);
    $query1 = "UPDATE yeucau_chuyennhom SET tinhtrang='$tinhtrang' where id_yeucaucn='$id_yeucaucn' ";
  	$obj ->query($query1);
    //echo ($query);
    //echo ($query1);
    header("location:index.php");
 	  }else{
 	  	$query2 = "UPDATE yeucau_chuyennhom SET tinhtrang='$tinhtrang' where id_yeucaucn='$id_yeucaucn' ";
 	  	$obj->query($query2);
 	  	header("location:index.php");
 	  }
    
}
?>

<?php
$id_yeucaucn = $_GET["id_yeucaucn"];
$sql = "SELECT * from yeucau_chuyennhom, nhom, sinhvien where yeucau_chuyennhom.id_nhom=nhom.id_nhom and yeucau_chuyennhom.id_sv=sinhvien.id_sv  and id_yeucaucn = '$id_yeucaucn' ";
$tam = $obj->query($sql);
$data = $tam->fetch();


?>
<div class="clear"></div>
<fieldset>
    <form method="post" enctype="multipart/form-data">
        <p>
            <label>Tên sinh viên</label>
            <input readonly class="text-input small-input" id="small-input" type="text" name="ten_sv" value="<?php echo($data['ten_sv']); ?>">
            <input hidden class="text-input small-input" id="small-input" type="text" name="id_sv" value="<?php echo($data['id_sv']); ?>">
        </p>  
        <p>
            <label>Nhóm hiện tại</label>
            <input class="text-input small-input" id="small-input" type="text" name="id_nhomgoc" value="<?php echo($data['id_nhomgoc']); ?>">
        </p>     
        <p>
            <label>Nhóm muốn chuyển đến</label>
            <input class="text-input small-input" id="small-input" type="text" name="ten_nhom" value="<?php echo($data['ten_nhom']); ?>">
            <input hidden class="text-input small-input" id="small-input" type="text" name="id_nhomchuyen" value="<?php echo($data['id_nhom']); ?>">
            
        </p>
        
        <p>
        	<label></label>
        	<?php
        	$id_yeucaucn = $_GET['id_yeucaucn'];
		$tt = $obj->query("SELECT * from yeucau_chuyennhom  where id_yeucaucn='$id_yeucaucn'");
		?>
		<select name="tinhtrang">
			<option value="1">Đồng ý</option>
			<option value="0">Không đồng ý</option>
		</select>
	</p>
	<p>
        <button class = "button" type="submit" name="btnGuiCN">Gửi</button>
    </p>
    </form>
</fieldset>