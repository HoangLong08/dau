<?php
include "./AreaAdminDau/Components/Commom/Header.php";
include './AreaAdminDau/Php/curlGet.php';
include './AreaAdminDau/Constant/variableConst.php';
include './AreaAdminDau/Components/Commom/Sidebar.php';

$curPageName = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);

?>
<div class="content">
	<p class="mb-2"><i class="fas fa-link"></i> <a href="./Dashboard.php">Dashboard</a> -> Quản lý CLB - Trung tâm -> Danh sách -> Thêm CLB - Trung tâm </p>

	<h3>Điền thông tin CLB - Trung tâm</h3>

	<form class="mt-4">
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputEmail1">Mã CLB - Trung tâm</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
					<small id="emailHelp" class="form-text text-muted"></small>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputEmail1">Tên CLB - Trung tâm</label>
					<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
					<small id="emailHelp" class="form-text text-muted"></small>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputEmail1">Logo</label>
					<input type="file" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
					<small id="emailHelp" class="form-text text-muted"></small>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputEmail1">Năm thành lập</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
					<small id="emailHelp" class="form-text text-muted"></small>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputEmail1">Số lượng thành viên</label>
					<input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
					<small id="emailHelp" class="form-text text-muted"></small>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputEmail1">Sứ mệnh</label>
					<textarea type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email"></textarea>
					<small id="emailHelp" class="form-text text-muted"></small>
				</div>
			</div>
		</div>
		<a type="submit" href="./ManagerPost.php" class="btn btn-secondary">Cancel</a>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>

<script src="./Asset/Js/main.js"></script>