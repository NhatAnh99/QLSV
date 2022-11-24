<?php
//include('connect.php');
if(isset($_POST['btnGuiTB']))
{
    $id_gv = $_SESSION['id_gv'];
    $noidung_thongbao = $_POST['noidung_thongbao'];
    $brands = $_POST['brands'];
    // echo $brands;

    foreach($brands as $item)
    {
        // echo $item . "<br>";
        $query = "INSERT INTO thongbao (id_lopmh, id_gv,noidung_thongbao) VALUES ('$item', '$id_gv','$noidung_thongbao')";
        //echo ($query);
        $obj -> query($query);
    }
      header("location:index.php");
}
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
                    <label>Giảng viên</label>
                    <input readonly class="text-input small-input" id="small-input" type="text" value="<?php echo($_SESSION['admin']);?>">
                    </p>

        <p>
        <?php
        $id_gv=$_GET['id_gv'];
        $n = $obj->query("SELECT * from lopmh where id_gv='$id_gv'");
                    $data = $n->fetchAll();
                    foreach ($data as $key => $value) {
                ?>
         <input type="checkbox" name="brands[]" value="<?php echo $value['id_lopmh'] ?>"><?php echo $value['ten_lopmh'] ?><br>
        <?php  }?>
        </p>

                        <label>Nội dung</label>
                        <textarea class="text-input small-input" id="small-input" type="text" name="noidung_thongbao"></textarea>
                    <p>
                    <button class = "button" type="submit" name="btnGuiTB">Gửi</button>
                    </p>
                </form>
            </fieldset>
        </div>
    </div>              
</div>