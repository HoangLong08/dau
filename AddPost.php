<?php
include "./Components/Commom/Header.php";
include './Php/curlGet.php';
include './Constant/variableConst.php';
include './Components/Commom/Sidebar.php';

$curPageName = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);

?>
<div class="content">
	<p class="mb-2"><i class="fas fa-link"></i> <a href="./Dashboard.php">Dashboard</a> -> Quản lý khoa -> Khoa kiến trúc -> Bài viết -> Thêm bài viết </p>
	<form>
		<div class="form-group">
			<label for="exampleInputEmail1">Tên tác giả</label>
			<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
			<small id="emailHelp" class="form-text text-muted"></small>
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Tiêu đề</label>
			<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Mô tả</label>
			<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Hình ảnh</label>
			<input type="file" class="form-control" id="exampleInputPassword1" placeholder="Password">
		</div>
		<div id="editor-four">
		</div>
		<a href="./Partner.php" class="btn btn-secondary">Hủy</a>
		<button type="submit" class="btn btn-danger">Thêm bài viết</button>
	</form>
</div>

<script src="./Asset/Js/main.js"></script>
<script src="./ckeditor5-build-classic/ckeditor.js"></script>
<script>
	ClassicEditor.create(document.querySelector('#editor-four')).catch(err => {
		console.log(err)
	})
</script>