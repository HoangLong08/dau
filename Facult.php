<?php
include "./Components/Commom/Header.php";
require './Php/connect.php';
include './Constant/variableConst.php';
include './Components/Commom/Sidebar.php';

// $curPageName = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);

$facultId  =  $_GET['facultId'];
$result = executeQuery($conn, "CALL procedureFaculty('$facultId')");
print_r($result);
while($row = mysqli_fetch_array($result)) {
		echo "ss";
	}
?>
<div class="content">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Khoa kiến trúc <span style="font-size: 12px;">Ms 001</span> </h1>
		<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#clickPopUpEditFacult">
			Chỉnh sửa thông tin
		</button>
		<a href="./AddIndustry.php" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"> Thêm chuyên ngành</a>
		<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#clickDisableFacult">
			Ẩn khoa
		</button>
	</div>
	<div class="row" style="margin-top: 30px;">
		<div class="col-md-3 mb-4">
			<div class="card bg-danger text-white shadow">
				<div class=" text-center mt-2 mb-2">
					<a href="./Intro.php?id=<?=$facultId?>">
						Giới thiệu
					</a>
				</div>
			</div>
		</div>
		<div class="col-md-3 mb-4">
			<div class="card bg-danger text-white shadow">
				<div class=" text-center mt-2 mb-2">
					<a href="./Partner.php">
						Đối tác
					</a>
				</div>
			</div>
		</div>
		<div class="col-md-3 mb-4">
			<div class="card bg-danger text-white shadow">
				<div class=" text-center mt-2 mb-2">
					
					<a href="./ManagerPost.php">
					Quản lý bài viết
					</a>
				</div>
			</div>
		</div>
		<div class="col-md-3 mb-4">
			<div class="card bg-danger text-white shadow">
				<div class=" text-center mt-2 mb-2">
					Slide

				</div>
			</div>
		</div>
	</div>
	<div class="row" style="margin-bottom: 30px;">
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="https://media.dau.edu.vn/Media/1_TH1057/Images/202012/2-quy-hoach-vung-va-do-thi-20201224110010-e.jpg" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Số lượng sinh viên: 400</h5>
					<p class="card-text">Chuyên ngành ngôn ngữ anh</p>
					<div class="row">
						<div class="col-md-4"><a href="#" class="btn btn-primary">Xem</a></div>
						<div class="col-md-4"><a href="#" class="btn btn-primary">Sửa</a></div>
						<div class="col-md-4"><a href="#" class="btn btn-primary">Xóa</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="editor-two">

	</div>
</div>

<!-- Modal Chỉnh sửa thông tin -->

<div class="modal fade" id="clickPopUpEditFacult" tabindex="-1" role="dialog" aria-labelledby="editFacutl" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="editFacutl">Thông tin khoa kiến trúc</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<label for="faculty_id">Mã khoa</label>
						<input type="text" class="form-control" id="faculty_id" placeholder="">
						<small id="faculty_idHelp" class="form-text text-muted"></small>
					</div>
					<div class="form-group">
						<label for="faculty_name">Tên khoa</label>
						<input type="text" class="form-control" id="faculty_name" placeholder="">
						<small id="faculty_namelHelp" class="form-text text-muted"></small>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>

<!-- Modal Ẩn khoa -->



<!-- Modal -->
<div class="modal fade" id="clickDisableFacult" tabindex="-1" role="dialog" aria-labelledby="modalDisableFacult" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalDisableFacult">Xác nhận ẩn toàn bộ thông tin khoa ?</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				Khoa sẽ không hiện thị trên hệ thống trang web DAU !
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal"> Hủy</button>
				<button type="button" class="btn btn-danger">Ẩn</button>
			</div>
		</div>
	</div>
</div>
<script src="./Asset/Js/main.js"></script>
<script src="./ckeditor5-build-classic/ckeditor.js"></script>
<script>
	ClassicEditor.create(document.querySelector('#editor-two')).catch(err => {
		console.log(err)
	})
</script>