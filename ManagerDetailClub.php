<?php
include "./Components/Commom/Header.php";
include "./Php/curlGet.php";
include "./Constant/variableConst.php";
include "./Components/Commom/Sidebar.php";

$curPageName = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);

?>
<div class="content">
	<p class="mb-2"><i class="fas fa-link"></i> <a href="./Dashboard.php">Dashboard</a> -> Quản lý khoa -> Danh sách CLB - Trung tâm -> Quản lý CLB - Trung tâm </p>

	<h1>Giới thiệu CLB - Trung tâm</h1>

	<button class="btn btn-primary">Sửa</button>
	<button class="btn btn-primary">Xóa</button>

	<div class="bg-wellcome">
		<div class="container pt-5 wellcome pb-3">
			<div class="row">
				<div class="col-md-6 col-xs-6">
					<iframe width="100%" height="315" src="https://www.youtube.com/embed/ypzYGixhVA4" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
				</div>
				<div class="col-md-6 col-xs-6">
					<h4>Lê Hữu Phú</h4>
					<div id="accordion">
						<div class="card">
							<div class="card-body">
								<p class="tab1 p-2">
									ádasdnajsdhj
									<a href="#" class="see-all"><i class="fas fa-arrow-right"></i> Xem thêm</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<h1>Sự kiện - Tin tức</h1>
	<button class="btn btn-primary"> Thêm sự kiện</button>

	<div class="row">
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="https://scontent.xx.fbcdn.net/v/t1.15752-9/185582512_2924961654443186_4436976545689611136_n.jpg?_nc_cat=103&ccb=1-3&_nc_sid=aee45a&_nc_ohc=g20ql2jPJ20AX_Xrhtc&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=4eea0c578d062913ebd6538126f3f477&oe=60C22C25" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title"> tác giả </h5>
					<p class="card-text">Tiêu đề sự kiện tin tức</p>
					<p class="card-text">Mô tả </p>
					<p class="card-text">12-5-2021 - View 1123 </p>
					<a href="#" class="btn btn-secondary">Xóa</a>
					<a href="#" class="btn btn-primary">Chỉnh sửa</a>
					<a href="#" class="btn btn-primary">Chi tiết bài viết</a>
				</div>
			</div>
		</div>
	</div>


	<h1>Danh sách video </h1>
						<button class="btn btn-danger">Thêm video</button>

	<div class="row">
		<div class="col-md-4">
			<div class="card"> 
<!-- frame -->
				<img class="card-img-top" src="https://scontent.xx.fbcdn.net/v/t1.15752-9/185582512_2924961654443186_4436976545689611136_n.jpg?_nc_cat=103&ccb=1-3&_nc_sid=aee45a&_nc_ohc=g20ql2jPJ20AX_Xrhtc&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=4eea0c578d062913ebd6538126f3f477&oe=60C22C25" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title"> tác giả </h5>
					<p class="card-text">Tiêu đề sự kiện tin tức</p>
					<p class="card-text">Mô tả </p>
					<p class="card-text">12-5-2021 - View 1123 </p>
					<a href="#" class="btn btn-secondary">Xóa</a>
					<a href="#" class="btn btn-primary">Chỉnh sửa</a>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="./Asset/Js/main.js"></script>