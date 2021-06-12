<?php
include "./AreaAdminDau/Components/Commom/Header.php";
include './AreaAdminDau/Php/curlGet.php';
include './AreaAdminDau/Constant/variableConst.php';
include './AreaAdminDau/Components/Commom/Sidebar.php';

$curPageName = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);

?>
<div class="content">
	<p class="mb-2"><i class="fas fa-link"></i> <a href="./Dashboard.php">Dashboard</a> -> Quản lý khoa -> Khoa kiến trúc -> Thêm chuyên ngành </p>
	<div class="form-group">
		<label for="name">Tên chuyên ngành</label>
		<input type="text" class="form-control" id="name" placeholder="Nhập tên chuyên ngành">
		<small id="nameHelp" class="form-text text-muted"></small>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="number_lectuer">Số lượng giảng viên</label>
				<input type="number" class="form-control" id="number_lectuer" placeholder="Nhập tên chuyên ngành">
				<small id="number_lectuerHelp" class="form-text text-muted"></small>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label for="number_student">Số lượng sinh viên</label>
				<input type="number" class="form-control" id="number_student" placeholder="Nhập tên chuyên ngành">
				<small id="number_studentHelp" class="form-text text-muted"></small>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="frame">Chọn hình ảnh</label>
				<input type="file" class="form-control" id="frame" placeholder="Nhập tên chuyên ngành">
				<small id="frameHelp" class="form-text text-muted"></small>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label for="number_student">Mô tả </label>
				<textarea type="number" class="form-control" id="number_student" placeholder="Nhập tên chuyên ngành"></textarea>
			</div>
		</div>
		
	</div>
	<p>Chi tiết về khoa</p>
	<div id="editor-three">

	</div>
	<button class="btn btn-primary">Thêm chuyên ngành</button>
</div>

<script src="./Asset/Js/main.js"></script>
<script src="./ckeditor5-build-classic/ckeditor.js"></script>
<script>
	ClassicEditor.create(document.querySelector('#editor-three')).catch(err => {
		console.log(err)
	})
</script>