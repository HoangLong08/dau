<?php
$curPageName = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
include './Php/curlGet.php';
include './Php/executeQuery.php';
include './Php/connect.php';
include './Constant/variableConst.php';
if(!isset($_SESSION)) { 
	session_start(); 
} 
if (!isset($_SESSION['id'])) {
   echo "<script>window.open('login.php','_self')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Quản lý DAU</title>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<link rel="stylesheet" href="/AreaAdminDau/Asset/Css/styleHeader.css">
	<link rel="stylesheet" href="/AreaAdminDau/Asset/Css/styleSidebar.css">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

	<input type="checkbox" id="check">
	<header style="z-index: 99;">
		<div class="wrap-header">
			<div class="left_area">
				<h3>Quản lý <span>DAU</span></h3>
				<label for="check">
					<i class="fas fa-bars" id="sidebar_btn"></i>
				</label>
			</div>
			<div class="right_area text-center">
				<ul class="header-menu">
					<li class="hover-user" title="Trang cá nhân">
						<a href="/profile">
							<div class="text-center profile-image" style="font-size: 24px">
								<!-- <img src="" alt="avatar"> -->
							</div>
							<div class="scroll">
								<span><?= base64_decode($_SESSION['fullname']) ?></span>
							</div>
						</a>
						<ul class="sub-menu text-center">
							<li>
								<a href="/thay-doi-mat-khau" class="btn btn-outline-secondary mb-2">Thay đổi mật khẩu</a>
							</li>
							<li>
								<a href="./logout.php" class="logout_btn form-control btn btn-primary">Logout</a>
							</li>
						</ul>
					</li>
				</ul>

			</div>
		</div>
	</header>
	
	<ul class="sidebar" id="style-2" style="z-index: 10">
		<li class="li-main">
			<a href="/AreaAdminDau/Dashboard.php">
				<i class="fas fa-id-card"></i>
				<span>Dashboard</span>
			</a>
		</li>
		<li class="li-main">
			<a class="feat-btn">
				<i class="fas fa-id-card"></i>
				<span>Quản Lý Khoa</span>
				<span class="fas fa-caret-down first" style="margin-left: 10%"></span>
			</a>
			<ul class="feat-show">
				<?php
				$result = executeQuery($conn, "CALL procedureAllInforFacult()");
				while ($row = mysqli_fetch_array($result)) {
				?>
					<li><a href="./Facult.php?facultId=<?=  $row['id']  ?>"> <?= base64_decode($row['faculty_name']) ?></a></li>
				<?php 
				}
				?>
			</ul>
		</li>
		<li class="li-main">
			<a class="feat-btnn" href="./Club.php">
				<i class="fab fa-accusoft"></i>
				<span>Quản Lý CLB - trung tâm</span>
			</a>
		</li>
		<li class="li-main">
			<a class="feat-btn1">
				<i class="fas fa-id-card"></i>
				<span>Quản Lý Slide</span>
				<span class="fas fa-caret-down first1" style="margin-left: 10%"></span>
			</a>
			<ul class="feat-show1">
				<li><a href="/AreaAdminDau/Components/ContentSidebar/khoa-kien-truc.php"> Slide khoa</a></li>
				<li><a href="/AreaAdminDau/khoa-ky-thuat-dien-dien-tu"> Slide câu lạc bộ</a></li>
			</ul>
		</li>
		<li class="li-main" style="margin-bottom: 100px;">
			<a class="feat-btn2">
				<i class="fab fa-accusoft"></i>
				<span>Quản Lý Menu</span>
				<span class="fas fa-caret-down first2" style="margin-left: 10%"></span>
			</a>
			<ul class="feat-show2">
				<li><a href="/menu-khoa"> Menu khoa</a></li>
				<li><a href="/menu-cau-lac-bo"> Menu câu lạc bộ</a></li>
			</ul>
		</li>
	</ul>
	<div class="content">

		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
			<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
				<i class="fas fa-download fa-sm text-white-50"></i> 
				Generate Report
			</a>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div id="columnchart_values" >
				</div>
			</div>
		<div class="col-md-6">
		</div>
	</div>			
</div>

<script src="/AreaAdminDau/Asset/Js/main.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
	

	google.charts.load("current", {packages:['corechart']});
	google.charts.setOnLoadCallback(drawChart);
	function drawChart() {
	var data = google.visualization.arrayToDataTable([
		["Element", "Density", { role: "style" } ],
		["Copper", 8.94, "#b87333"],
		["Silver", 10.49, "silver"],
		["Gold", 19.30, "gold"],
		["Platinum", 21.45, "color: #e5e4e2"]
	]);

	var view = new google.visualization.DataView(data);
	view.setColumns([0, 1,
							{ calc: "stringify",
								sourceColumn: 1,
								type: "string",
								role: "annotation" },
							2]);

	var options = {
		title: "Biểu đồ số lượng sinh viên ",
		width: 600,
		height: 400,
		bar: {groupWidth: "95%"},
		legend: { position: "none" },
	};
	var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
	chart.draw(view, options);
}
</script>

</body>

</html>