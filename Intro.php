<?php
include "./Components/Commom/Header.php";
include "./Constant/variableConst.php";
include "./Components/Commom/Sidebar.php";

$curPageName = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);

$introId =  $_GET['id'];


$excIntro = executeQuery($conn, "CALL procedureIntro($introId)");
$resIntro = mysqli_fetch_array($excIntro);
?>
<div class="content">
	<p class="mb-2"><i class="fas fa-link"></i> <a href="./Dashboard.php">Dashboard</a> -> Quản lý khoa -> Khoa kiến trúc -> Cập nhật giới thiệu khoa </p>
	<div class="intro-facult">
		<h1>Giới thiệu khoa</h1>
		<form>
			<div class="form-group">
				<label for="exampleInputTitle">Tiêu đề </label>
				<input type="text" class="form-control" id="exampleInputTitle" placeholder="Nhập tiêu đề" value="<?= base64_decode($resIntro['title']) ?>">
				<small id="titleHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Youtube</label>
				<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Youtube">
				<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/A8I6p7jKspM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Mô tả</label>
				<textarea type="text" class="form-control" id="exampleInputPassword1" placeholder="Mô tả" >
					<?php echo htmlspecialchars(base64_decode($resIntro['des'])); ?>
				</textarea>
				<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/A8I6p7jKspM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Lịch sử</label>
				<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Lịch sử" value="<?= base64_decode($resIntro['history']) ?>">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Tầm nhìn</label>
				<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Tầm nhìn" value="<?= base64_decode($resIntro['eyesight']) ?>">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Sứ mệnh</label>
				<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Sứ mệnh" value="<?= base64_decode($resIntro['mission']) ?>">
			</div>
			<div class="row">
				<div class="col-md-6">
					<button type="submit" class="form-control btn btn-secondary">Hủy</button>
				</div>
				<div class="col-md-6">
					<button type="submit" class="form-control btn btn-primary">Cập nhật</button>
				</div>
			</div>
		</form>
	</div>
</div>
<script src="./Asset/Js/main.js"></script>