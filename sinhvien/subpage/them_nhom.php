
<?php
//include('connect.php');
if(isset($_POST['them_nhom']))
{
    $id_sv = $_SESSION['id_sv'];
    $my_string = rand_string( 4 );
    $ten_nhom = $_POST['ten_nhom'];
	$id_lopmh =$_POST['id_lopmh'];
    $soluongtoida =$_POST['soluongtoida'];

        $query = "INSERT INTO nhom (id_nhom,ten_nhom,id_lopmh,soluongtoida) VALUES ('$my_string','$ten_nhom','$id_lopmh','$soluongtoida')";
    //    echo ($query);
        $obj -> query($query);
        $query = "INSERT INTO nhom_sv (id_nhom,id_sv) VALUES ('$my_string','$id_sv')";
    //    echo ($query);
        $obj -> query($query);
        echo '<script>alert("Thêm thành công .")</script>';
}
?>



<?php
//include ('connect.php');
$sql = "SELECT * from nhom ";
$tam = $obj->query($sql);
$data = $tam->fetch();
?>
<div class="clear"></div>
<div class="content-box">
    <div class="content-box-header">
        <?php
            include 'subpage/box.php';
        ?>
    </div>
    <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
<fieldset>
    <form method="post" enctype="multipart/form-data">
    
        
        <p>
            <label>Tên nhóm</label>
            <input class="text-input small-input" id="small-input" type="text" name="ten_nhom">
        </p>
		<p>
            <label>Mã lớp môn học</label>
            <?php
            $nsx = $obj->query("select * from lopmh");
            ?>
            <select name="id_lopmh" class="small-input">
                <option value="option">Chọn mã lớp môn học</option>
                <?php
                    $data = $nsx->fetchAll();
                    foreach ($data as $key => $value) {
                ?>
                <option value="<?php echo $value['id_lopmh'] ?>"><?php echo $value['ten_lopmh'] ?></option>
                <?php
                }
                ?>
            </select>
        </p>
        <p>
            <label>Số lượng thành viên tối đa</label>
            <input class="text-input small-input" id="small-input" type="text" name="soluongtoida">
        </p>



        <p>
        <button class = "button" type="submit" name="them_nhom">Thêm</button>
        </p>
    </form>
</fieldset>
</div>
</div>
</div>

<?php
function rand_string( $length ) {
$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
$size = strlen( $chars );
for( $i = 0; $i < $length; $i++ ) {
$str .= $chars[ rand( 0, $size - 1 ) ];
 }
return $str;
}
?>