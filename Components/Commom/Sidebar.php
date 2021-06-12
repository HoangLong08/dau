
<ul class="sidebar" id="style-2" style="z-index: 10">
	<li class="li-main"> 
		<a href="../AreaAdminDau/Dashboard.php">
			<i class="fas fa-id-card"></i>
			<span>Dashboard</span>
		</a>
	</li>
	<li class="li-main"> 
		<a class="feat-btn">
			<i class="fas fa-id-card"></i>
			<span>Quản Lý Khoa</span>
			<span class="fas fa-caret-down first" style="margin-left: 10%"></span>
		</a>
		<ul class="feat-show">
			<?php
	
			$result = executeQuery($conn, "CALL procedureAllInforFacult()");
		 
			while ($row = mysqli_fetch_array($result)) {
			?>
			<li><a href="./Facult.php?facultId=<?=  $row['id']  ?>">  <?= base64_decode($row['faculty_name']) ?></a></li>
			<?php 
			} 
			?>
		</ul>
	</li>
	<li class="li-main">
		<a class="feat-btnn" href="/AreaAdminDau/Club.php">
			<i class="fab fa-accusoft"></i>
			<span>Quản Lý CLB - trung tâm</span>
		</a>
	</li>
	<li class="li-main"> 
		<a class="feat-btn1">
			<i class="fas fa-id-card"></i>
			<span>Quản Lý Slide</span>
			<span class="fas fa-caret-down first1" style="margin-left: 10%"></span>
		</a>
		<ul class="feat-show1">
			<li><a href="/projectDAU/AreaAdmin/Components/ContentSidebar/khoa-kien-truc.php">  Slide khoa</a></li>
			<li><a href="/projectDAU/AreaAdmin/khoa-ky-thuat-dien-dien-tu"> Slide câu lạc bộ</a></li>
		</ul>
	</li>
	<li class="li-main">
		<a class="feat-btnn" href="/AreaAdminDau/Admintrator.php">
			<i class="fab fa-accusoft"></i>
			<span>Quản trị viên</span>
		</a>
	</li>
	<li class="li-main" style="margin-bottom: 100px;">
		<a class="feat-btn2">
			<i class="fab fa-accusoft"></i>
			<span>Quản Lý Menu</span>
			<span class="fas fa-caret-down first2" style="margin-left: 10%"></span>
		</a>
		<ul class="feat-show2">
			<li><a href="/menu-khoa"> Menu khoa</a></li>
			<li><a href="/menu-cau-lac-bo"> Menu câu lạc bộ</a></li>
		</ul>
	</li>


	
</ul>