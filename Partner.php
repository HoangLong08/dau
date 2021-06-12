<?php
include "./Components/Commom/Header.php";
include './Php/curlGet.php';
include './Constant/variableConst.php';
include './Components/Commom/Sidebar.php';
$curPageName = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
?>
<div class="content">
	<p class="mb-2"><i class="fas fa-link"></i> <a href="./Dashboard.php">Dashboard</a> -> Quản lý khoa -> Khoa kiến trúc ->  Đối tác </p>
	
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h3>Danh sách các đối tác hiện có</h3>
		<a href="./AddPartner.php" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
			Thêm đối tác
		</a>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="https://media.dau.edu.vn/Media/1_TH1057/Images/202012/49938665-2157668101228808-8426025201031970816-n-20201223024101-e.png" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="#" class="btn btn-primary">Xóa</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="https://media.dau.edu.vn/Media/1_TH1057/Images/202012/49938665-2157668101228808-8426025201031970816-n-20201223024101-e.png" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="#" class="btn btn-primary">Xóa</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="https://media.dau.edu.vn/Media/1_TH1057/Images/202012/49938665-2157668101228808-8426025201031970816-n-20201223024101-e.png" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="#" class="btn btn-primary">Xóa</a>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="./Asset/Js/main.js"></script>