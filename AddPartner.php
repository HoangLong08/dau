<?php
include "./Components/Commom/Header.php";
include './Php/curlGet.php';
include './Constant/variableConst.php';
include './Components/Commom/Sidebar.php';

$curPageName = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);

?>
<div class="content">
	<p class="mb-2"><i class="fas fa-link"></i> <a href="./Dashboard.php">Dashboard</a> -> Quản lý khoa -> Khoa kiến trúc -> Đối tác -> Thêm đối tác </p>
	<form>
		<div class="form-group">
			<label for="exampleInputEmail1">Tên</label>
			<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
			<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Hình ảnh</label>
			<input type="file" class="form-control" id="exampleInputPassword1" placeholder="Password">
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Tiêu đề (nếu có)</label>
			<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
		</div>

		<a href="./Partner.php" class="btn btn-secondary">Cancel</a>
		<button type="submit" class="btn btn-danger">Submit</button>
	</form>
</div>

<script src="./Asset/Js/main.js"></script>