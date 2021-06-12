<?php
include "./Components/Commom/Header.php";
include './Php/curlGet.php';
include './Constant/variableConst.php';
include './Components/Commom/Sidebar.php';

$curPageName = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);

?>
<div class="content">
<h1>Danh sách quản trị viên của hệ thống </h1>
<button>Thêm quản trị</button>
	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th scope="col">id</th>
				<th scope="col">Full name</th>
				<th scope="col">User name</th>
				<th scope="col">Email</th>
				<th scope="col">Sdt</th>
				<th scope="col">Address</th>
				<th scope="col">Khoa</th>
				<th scope="col">CLB</th>
				<th scope="col">Phân quyền</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">1</th>
				<td>Nguyen Hoang</td>
				<td>hoang</td>
				<td>hoang@gmail.com</td>
				<td>099999999</td>
				<td>Quang nam</td>
				<td>
				<select name="" id="">	
					<option value="">Khoa kiến trúc</option>
					<option value="">1</option>
					<option value="">2</option>
				</select></td>
				<td>
				<select name="" id="">	
					<option value="">TRung tâm gắn kết cộng đồng</option>
					<option value="">1</option>
					<option value="">2</option>
				</select>
				</td>
				<td>
				admin
				</td>
				<td>
				<button class="btn"> Sửa</button>
				<button class="btn"> Xóa</button>
				</td>
			</tr>
			<tr>
				<th scope="row">2</th>
				<td>Jacob</td>
				<td>Thornton</td>
				<td>@fat</td>
				<td>Mark</td>
				<td>Otto</td>
				<td>@mdo</td>
			</tr>
			
		</tbody>
	</table>
</div>
<script src="./Asset/Js/main.js"></script>