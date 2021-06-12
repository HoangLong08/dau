<!DOCTYPE html>
<html lang="en">
<?php 
if(!isset($_SESSION)) { 
	session_start(); 
} 
?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đăng nhập</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
		integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./Asset/Css/styleLogin.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container-fluid ">
		<div class="forms-container-fluid">
			<div class="signin-signup">
				<form action="#" class="sign-in-form" id="login-form">
					<h2 class="title">Sign in</h2>
					<div class="input-field">
						<i class="fas fa-user"></i>
						<input type="text" placeholder="Username" id="userName" />
					</div>
					<p id="helpUsername" class="error"></p>
					<div class="input-field">
						<i class="fas fa-lock"></i>
						<input type="password" placeholder="Password" id="passWord" />
					</div>
					<p id="helpPassword" class="error"></p>
					<input type="submit" value="Login" class="btn solid" />
					<p class="social-text">Power by DAU</p>
				</form>
			</div>
		</div>

		<div class="panels-container-fluid">
			<div class="panel left-panel">
				<div class="content">
					<h3>TRƯỜNG ĐẠI HỌC KIẾN TRÚC ĐÀ NẴNG</h3>
					<p class="text-center">
						Admin managerment
					</p>
				</div>
				<img src="./Asset/img/log.svg" class="image" alt="" />
			</div>
		</div>
	</div>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script>
		$("#login-form").on('submit', function(e){
				var isValue = true;
				e.preventDefault();
				var userName = $("#userName").val();
				var passWord  = $("#passWord").val();
				// console.log(passWord, userName)
				if(userName.length === 0){
					isValue = false;
					$("#helpUsername").html("Vui lòng nhập tên đăng nhập")
				}
				if(passWord.length === 0){
					isValue = false;
					$("#helpPassword").html("Vui lòng nhập mật khẩu")
				}
				$.ajaxSetup({    // POST http://127.0.0.1:8000/login 419 (unknown status)
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});
				// window.location.href = "index.php";
				if(isValue === true){
					$.ajax({
						url:"./Php/Process/proccess.php",
						type: "POST",
						data:{
							userName: userName,
							passWord: passWord
						},
						success:function(resp){
							console.log("long: " ,  resp);
							if(resp === "success"){
								window.location.href = "index.php";
							}else{
								swal("", "Sai thông tin đăng nhập", "error");
							}
						}
					});
				}
				
			})
	</script>
</body>

</html>