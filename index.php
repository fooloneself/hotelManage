<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>考拉客房管理系统-登录</title>
	<script src="./static/js/vue.js"></script>
	<link rel="stylesheet" href="./static/css/font-awesome.min.css">
	<link rel="stylesheet" href="./static/css/style.css">
</head>
<body class="body_bg">
	<div class="login">
		<div class="title">考拉客房管理系统</div>
		<form action="view/web/pos.php" method="post" class="mb20">
			<input type="text" class="input mb20" placeholder="请输入用户名">
			<input type="password" class="input mb20" placeholder="请输入密码">
			<input type="text" class="input mb20 input_code" placeholder="请输入验证码">
			<div class="code">ASDAFG</div>
			<button class="btn btn_block">登录</button>
		</form>
		<a href="password_s1.html" class="link">找回密码</a>
	</div>
</body>
</html>