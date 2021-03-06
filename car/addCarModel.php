<?php
include 'src/class/ManageBrandCar.php';
include 'src/class/ManageModelCar.php';
$obj = new ManageBrandCar();
$objModelCar = new ManageModelCar();
if (@$_GET ['submit'] == 'true') {

    $brandid = $_POST ['brand'];
    $model = $_POST ['model'];

    if ($objModelCar->add($brandid, $model))
        echo '<meta http-equiv=REFRESH CONTENT=0;url=ManageModel.php>';
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>ระบบจัดการแสดงรถยนต์</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <?php include 'includes.php' ?>
    </head>

    <body>
        <!-- Header -->
        <?php include 'header.php'; ?>

        <div class="container">
            <div class="row clearfix">
                <div class="col-md-12 column">
                    <div class=" panel panel-default">
                        <div class="panel-heading">
                            <h4>เพิ่มยี่ห้อรถยนต์</h4>
                        </div>

                        <div class="panel-body">

                            <form class="form-horizontal" action="addCarModel.php?submit=true"
                                  method="post">
                                <fieldset>

                                    <!-- Form Name -->


                                    <div class="form-group">
                                        <div class="control-group col-md-3">
                                            <label class="control-label " for="brand">ยี่ห้อ :</label> <select
                                                class="form-control" id="brand" name="brand">
                                                <option selectd>-เลือก-</option>
                                                <?php
                                                $rs = $obj->getBrandAll();
                                                while ($row = mysql_fetch_object($rs)) {
                                                    ?>
                                                    <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>

                                                <?php } ?>
                                            </select>

                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <div class="control-group col-md-7">
                                            <label class="control-label " for="model">รุ่น :</label>
                                            <div class="controls">
                                                <input id="model" name="model" placeholder="กรอก....."
                                                       class="input-xlarge" type="text">

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Button (Double) -->

                                    <div class="form-group">
                                        <div class="control-group ">
                                            <label class="control-label " for="add"></label>
                                            <div class="controls col-md-3">
                                                <button id="add" name="add" class="btn btn-primary ">เพิ่ม</button>
                                                <button id="clear" name="clear" class="btn btn-danger">ล้างข้อมูล</button>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <?php include 'footer.php'; ?>
    </body>
</html>
