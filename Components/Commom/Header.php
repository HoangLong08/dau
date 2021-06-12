<?php 
include "./Php/curlGet.php";
include "./Php/connect.php";
include "./Php/executeQuery.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Quản lý DAU</title>
	<link 
			rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
			integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
			crossorigin="anonymous"
		/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

		<link rel="stylesheet" href="/AreaAdminDau/Asset/Css/styleHeader.css">
		<link rel="stylesheet" href="/AreaAdminDau/Asset/Css/styleSidebar.css">
		<link rel="stylesheet" href="/AreaAdminDau/Asset/Css/styleMain.css">
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<input type="checkbox" id="check" >
<header style="z-index: 99;">
	<div class="wrap-header">
	<div class="left_area">
		<h3>Quản lý <span>DAU</span></h3>
		<label for="check">
			<i class="fas fa-bars" id="sidebar_btn"></i>
		</label>
	</div>
	<div class="right_area text-center" >
		<ul class="header-menu">
			<li class="hover-user" title="Trang cá nhân">
				<a href="/profile">
					<div class="text-center profile-image" style="font-size: 24px">
						<!-- <img src="" alt="avatar"> -->
					</div>
					<div class="scroll">
						<span >Long</span>
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
