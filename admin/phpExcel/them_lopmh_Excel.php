
<?php 
//require('../connect.php');
require('Excel.php');



// //----------------CHỈ 1 SHEET--------------
if(isset($_POST['btnGuiDS'])){
	$file=$_FILES['file']['tmp_name'];

	
	$objReader = PHPExcel_IOFactory::createReaderForFile($file);
	$objReader->setLoadSheetsOnly(true);
	
	$objExcel=$objReader->load($file);
	$sheetData=$objExcel->getActiveSheet()->toArray('null',true,true,true);

	$highestRow = $objExcel->setActiveSheetIndex()->getHighestRow();
	for($row = 2; $row<=$highestRow; $row++){
		$id_lopmh = $sheetData[$row]['A'];
		$ten_lopmh = $sheetData[$row]['B'];
		$id_gv = $sheetData[$row]['C'];
		$id_monhoc = $sheetData[$row]['D'];
	$sql1 = "INSERT INTO lopmh(id_lopmh, ten_lopmh, id_gv, id_monhoc) values ('$id_lopmh', '$ten_lopmh', '$id_gv', '$id_monhoc')";
	//echo ($sql1);
	$obj->query($sql1);

	}
	//header("location: index.php");
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
					<label>Danh sách </label>
					<input class="text-input small-input" id="small-input" type="file" name="file" required=''>
					</p>
					<p>
					<button class = "button" type="submit" name="btnGuiDS">Gửi</button>
					</p>
				</form>
			</fieldset>
		</div>
	</div>				
</div>