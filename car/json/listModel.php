<option>-เลือก-</option>
<?php
$id = $_POST ['id'];
include '../src/class/ManageModelCar.php';
$objModel = new ManageModelCar ();
$rsModel = $objModel->getModelByBrand($id);

foreach  ( $rsModel as $row ) {
	?>
<option value="<?php echo $row->id;?>"><?php echo $row->name;?></option>
<?php }?>
															
													