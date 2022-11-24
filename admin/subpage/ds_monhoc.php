

<?php
if($_SESSION['id_gv']=='admin')
{
?>

<table border="1">
    
    <tr>
        <td>Mã môn học</td>
        <td>Tên môn học </td>
        <td>Số tín chỉ</td>
        <td><a href="index.php?quanly=them_monhoc">Thêm môn học</td>
        

    </tr>
    <?php

        $tam = $obj->query("SELECT * from monhoc");
        $data = $tam->fetchAll();
        foreach ($data as $key => $value) {
            
    ?>
    <tr>

        <td><ul><?php echo $value['id_monhoc']?></ul></td>
        <td><ul><?php echo $value['ten_monhoc'] ?></ul></td>
        <td><ul><?php echo $value['sotinchi'] ?></ul></td>
        <td><ul><a href="index.php?quanly=sua_monhoc&id_monhoc=<?php echo $value['id_monhoc']?>">Sửa </a>| <a onclick="return window.confirm('Bạn muốn xóa không');" href="index.php?quanly=xoa_monhoc&id_monhoc=<?php echo $value['id_monhoc']?>"> Xóa</a></ul></td>
    <?php 
    }
    ?>
    </tr>
</table>
<?php 
}else{
 ?>
 <div class="clear"></div>
<p><h3>Bạn không có quyền truy cập</h3></p>
<?php 
}
 ?>
