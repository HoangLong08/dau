<?php
include "./Components/Commom/Header.php";
include './Php/curlGet.php';
include './Constant/variableConst.php';
include './Components/Commom/Sidebar.php';

$curPageName = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);

?>
<div class="content">
	<p class="mb-2"><i class="fas fa-link"></i> <a href="./Dashboard.php">Dashboard</a> -> Quản lý khoa -> Khoa kiến trúc -> Bài viết </p>
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Bài viết khoa kiến trúc</h1>
		<a href="./AddPost.php" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"> Thêm bài viết</a>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="card" >
				<img class="card-img-top" src="https://media.dau.edu.vn/Media/1_TH1057/Images/202103/co-vo-van-ly-do-de-ban-chon-hoc-nganh-ngon-ngu-anh-9-1536x1024-20210320085208-e.jpg" alt="Card image cap">
				<div class="card-body">
					
					<p class="card-text">Có vô vàn lý do để bạn chọn học ngành Ngôn ngữ Anh</p>
					<h5 class="card-title">12 - 5 -2020</h5>
					<a href="#" class="btn btn-primary">Xóa</a>
					<a href="#" class="btn btn-primary">Sữa</a>
					<a href="#" class="btn btn-primary">Xem</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card" >
				<img class="card-img-top" src="https://media.dau.edu.vn/Media/1_TH1057/Images/202103/co-vo-van-ly-do-de-ban-chon-hoc-nganh-ngon-ngu-anh-9-1536x1024-20210320085208-e.jpg" alt="Card image cap">
				<div class="card-body">
					
					<p class="card-text">Có vô vàn lý do để bạn chọn học ngành Ngôn ngữ Anh</p>
					<h5 class="card-title">12 - 5 -2020</h5>
					<a href="#" class="btn btn-primary">Xóa</a>
					<a href="#" class="btn btn-primary">Sữa</a>
					<a href="#" class="btn btn-primary">Xem</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card" >
				<img class="card-img-top" src="https://media.dau.edu.vn/Media/1_TH1057/Images/202103/co-vo-van-ly-do-de-ban-chon-hoc-nganh-ngon-ngu-anh-9-1536x1024-20210320085208-e.jpg" alt="Card image cap">
				<div class="card-body">
					
					<p class="card-text">Có vô vàn lý do để bạn chọn học ngành Ngôn ngữ Anh</p>
					<h5 class="card-title">12 - 5 -2020</h5>
					<a href="#" class="btn btn-primary">Xóa</a>
					<a href="#" class="btn btn-primary">Sữa</a>
					<a href="#" class="btn btn-primary">Xem</a>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="./Asset/Js/main.js"></script>