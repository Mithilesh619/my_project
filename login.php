<?php
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="bootstrap.min.js"></script>
	<title></title>
	<style>
		.formbody
		{
			font-family: serit;
			font-size: 14px;
			background-image: url('img9.jpg');
			background-color: #cccccc;
			color: #666;
		}
		.login-container{
			height: 721px;
		}
	</style>
</head>
<body>
	<div class="login-container formbody d-flex align-items-center justify-content-center">
	<form method="POST" action="login_action.php">
		<table>
			<tr>
				<td>
					Email
				</td>
				<td>
					<input type="text" name="email">
				</td>
			</tr>
			<tr>
				<td>
					Password
				</td>
				<td>
					<input type="password" name="pass">
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" value="Login">
				<input type="reset" value="Cancel">
				</td>
			</tr>
		</table>
	</form>

</body>
</html>