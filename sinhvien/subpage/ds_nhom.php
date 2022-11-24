<?php
//include('connect.php');
if(isset($_POST['thamgianhom']))
{
    $id_sv = $_SESSION['id_sv'];
    $id_nhom = $_POST['id_nhom'];

        $query = "INSERT INTO nhom_sv (id_nhom,id_sv) VALUES ('$id_nhom','$id_sv')";
    // echo ($query);
        $obj -> query($query);
        echo '<script>alert("Thêm thành công .")</script>';
}
?>

<table border="1">
    
    <tr>
        <td>Mã nhóm</td>
        <td>Tên nhóm </td>
        <td>Tên lớp môn học</td>
        <td>Số lượng tối đa </td>
        

    </tr>
    <?php
        $id_sv=$_GET['id_sv'];
        $tam = $obj->query("SELECT * from nhom, lopmh_sv, lopmh where nhom.id_lopmh=lopmh.id_lopmh and lopmh.id_lopmh=lopmh_sv.id_lopmh and id_sv='$id_sv'");
        $data = $tam->fetchAll();
        foreach ($data as $key => $value) {
    ?>
    <tr>
            
        <td><ul><?php echo $value['id_nhom']?></ul></td>
        <td><ul><?php echo $value['ten_nhom'] ?></ul></td>
        <td><ul><?php echo $value['ten_lopmh'] ?></ul></td>
        <td><ul><?php echo $value['soluongtoida'] ?></ul></td>
        <td> <button class = "button" type="submit" name="thamgianhom">Tham gia</button></td>
    <?php 
    }
    ?>
    </tr>

</table>
<?php 
 ?>