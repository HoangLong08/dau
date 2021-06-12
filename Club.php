<?php
include "./Components/Commom/Header.php";
include './Php/curlGet.php';
include './Constant/variableConst.php';
include './Components/Commom/Sidebar.php';

$curPageName = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);

?>
<div class="content">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Danh sách câu lạc bộ - trung tâm</h1>
		<a href="./AddClub.php" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"> Thêm CLB - Trung tâm</a>
	</div>
	
	<div class="row">
		<div class="col-md-4">
			<div class="card" >
				<img class="card-img-top" src="https://scontent.xx.fbcdn.net/v/t1.15752-9/185582512_2924961654443186_4436976545689611136_n.jpg?_nc_cat=103&ccb=1-3&_nc_sid=aee45a&_nc_ohc=g20ql2jPJ20AX_Xrhtc&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=4eea0c578d062913ebd6538126f3f477&oe=60C22C25" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title"> Mã: CELC</h5>
					<p class="card-text">Trung tâm gắn kết cộng đồng</p>
					<a href="#" class="btn btn-secondary">Ẩn</a>
					<a href="#" class="btn btn-primary">Chỉnh sửa</a>
					<a href="./ManagerDetailClub.php" class="btn btn-primary">Quản lý</a>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="./Asset/Js/main.js"></script>
<script src="../../ckeditor5-build-classic/ckeditor.js"></script>
<script>
	ClassicEditor.create(document.querySelector('#editor-two')).catch(err => {
		console.log(err)
	})
</script>