<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login</title>
</head>
<body>
	<form method="post" action="{{url('admin/dologin')}}">
	<?php echo csrf_field(); ?>
			账号:<input type="text" name="username" value=""><br>
			密码:<input type="text" name="pass" value=""><br>
			<input type="submit" value="提交">
	</form>
</body>
</html>
