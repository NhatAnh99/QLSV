<?php 
    if(isset($_POST['sua_sv']))
{
    $id_lopmh=$_POST['id_lopmh'];
    $ten_lopmh=$_POST['ten_lopmh'];
    $id_gv=$_POST['id_gv'];
    $id_monhoc=$_POST['id_monhoc'];
   
    $query = "UPDATE lopmh SET id_lopmh='$id_lopmh',ten_lopmh='$ten_lopmh', id_gv='$id_gv', id_monhoc='$id_monhoc' where id_lopmh='$id_lopmh'";
        //echo ($query);
       $obj -> query($query);
       header("location:index.php");

}
?>


<?php
$id_lopmh=$_GET['id_lopmh'];
$sql = "SELECT * from lopmh where id_lopmh='$id_lopmh'";
$tam = $obj->query($sql);
$data = $tam->fetch();
$id_gv=$data['id_gv'];
$id_monhoc=$data['id_monhoc'];
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
            <label>Mã lớp môn học</label>
            <input readonly class="text-input small-input" id="small-input" type="text" name="id_lopmh" value="<?php echo($data['id_lopmh']);?>">
        </p>
        <p>
            <label>Tênlớp môn học</label>
            <input class="text-input small-input" id="small-input" type="text" name="ten_lopmh"value="<?php echo($data['ten_lopmh']);?>">
        </p>
        <p>
            <label>Giáo viên</label>
            <?php
            $lsp = $obj->query("SELECT * from giaovien");
            ?>
            <select name="id_gv" class="small-input">
                <?php
                    $data = $lsp->fetchAll();
                    foreach ($data as $key => $value) {
                        if($id_gv == $value['id_gv']){
                ?>
                <option selected value="<?php echo $value['id_gv'] ?>"><?php echo $value['ten_gv'] ?></option>
                <?php 
                    }else{
                ?>
                <option  value="<?php echo $value['id_gv'] ?>"><?php echo $value['ten_gv'] ?></option>

                <?php
                    }
                }
                ?>
            </select>  
        </p>
        <p>
            <label>Môn học</label>
            <?php
            $lsp = $obj->query("SELECT * from monhoc");
            ?>
            <select name="id_monhoc" class="small-input">
                <?php
                    $data = $lsp->fetchAll();
                    foreach ($data as $key => $value) {
                        if($id_monhoc== $value['id_monhoc']){
                ?>
                <option selected value="<?php echo $value['id_monhoc'] ?>"><?php echo $value['ten_monhoc'] ?></option>
                <?php 
                    }else{
                ?>
                <option  value="<?php echo $value['id_monhoc'] ?>"><?php echo $value['ten_monhoc'] ?></option>

                <?php
                    }
                }
                ?>
            </select>  
        </p>
        <p>
        <button class = "button" type="submit" name="sua_sv">Sửa</button>
        </p>
    </form>
</fieldset>
</div>
</div>
</div>