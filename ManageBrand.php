<?php
include 'src/class/ManageBrandCar.php';
if (@$_GET ['delete'] == 'true') {
	$obj = new ManageBrandCar();

	if($obj->delete($_GET['id']))
		echo '<meta http-equiv=REFRESH CONTENT=0;url=ManageBrand.php>';
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

<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
<!--script src="js/less-1.3.3.min.js"></script-->
<!--append ‘#!watch’ to the browser URL, then refresh the page. -->

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
        <![endif]-->

<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144"
	href="img/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114"
	href="img/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72"
	href="img/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed"
	href="img/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="img/favicon.png">

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
</head>

<body>
	<div class="container">
		<div class="row clearfix page-header">
			<div class="col-md-12 column">
				<div class="row clearfix">
					<div class="col-md-4 column">
						<img class="img-rounded" src="http://placehold.it/650x250" alt="">
					</div>
					<div class="col-md-4 column"></div>

					<div class="col-md-8 ">
						<form class="form-inline pull-right" role="form">
							<div class="form-group">
								<div class="input-group">
									<label class="sr-only" for="exampleInputEmail2">ชื่อผู้ใช้</label>
									<input type="email" class="form-control"
										id="exampleInputEmail2" placeholder="ชื่อผู้ใช้">
								</div>
							</div>
							<div class="form-group">
								<label class="sr-only" for="exampleInputPassword2">รหัสผ่าน</label>
								<input type="password" class="form-control"
									id="exampleInputPassword2" placeholder="รหัสผ่าน">
							</div>
							<button type="submit" class="btn btn-default">เข้าสู่ระบบ</button>
							<div class="form-inline">
								<label> <a href="#">สมัครสมาชิก</a>
								</label>
							</div>
						</form>
					</div>
				</div>
				<nav class="navbar navbar-default" role="navigation">
					<div class="navbar-header pull-right">
						<button type="button" class="navbar-toggle" data-toggle="collapse"
							data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">หน้าหลัก</span><span class="icon-bar"></span><span
								class="icon-bar"></span><span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">หน้าหลัก</a>
						<button type="button" class="navbar-toggle" data-toggle="collapse"
							data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">เปรียบเทียบรถยนต์</span><span
								class="icon-bar"></span><span class="icon-bar"></span><span
								class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">เปรียบเทียบรถยนต์</a>
					</div>
				</nav>
			</div>
		</div>



		<div class="row clearfix">
			<div class="col-md-12 column">
				<div class=" panel panel-default">
					<div class="panel-heading">
						<h4>รายการยี่ห้อรถยนต์</h4>
					</div>

					<div class="panel-body">
						<a href="addCarBrand.php"><button type="button"
								class="btn btn-primary btn-lg">เพิ่มยี่ห้อรถยนต์</button></a>

						<table class="table .table-bordered">
							<thead>
								<tr>
									<th>จัดการ</th>
									<th>รายการ</th>
								</tr>
							</thead>
							<tbody>
								<?php
								include_once 'src/class/ManageBrandCar.php';
								$obj = new ManageBrandCar ();
								$rs = $obj->getBrandAll ();
								while ( $row = mysql_fetch_object ( $rs ) ) {
									?>
								<!-- insert some code  -->
								<tr>
									<td><a href="editCarBrand.php?id=<?php echo $row->id;?>">แก้ไข</a>
										/ <a href="?delete=true&id=<?php echo $row->id;?>">ลบ</a></td>
									<td><?php echo $row->name;?></td>
								</tr>
								<?php  }?>
								<!-- insert some code  -->
							</tbody>
						</table>

					</div>
				</div>
			</div>
		</div>

	</div>
	<footer class="panel-footer">
		<div class="container">
			<p class="text-muted">Copyright © Your Website 2014</p>
		</div>
	</footer>
</body>
</html>