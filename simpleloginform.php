<!doctype html>
<?php  
if (isset($_POST['submit'])) 
{
	$user = $_POST['Username'];
	$pass = $_POST['password'];
	if ($user == "admin" && $pass == "admin123")
	 {
		echo("username and password matched");
	}else{
	echo("error ! please enter correct !");
}
}

?>
<html>
<head>
<meta charset="utf-8">
<title>wp without db</title>
</head>
<body bgcolor="purple">
<form action="" method="post">
	<h2>Login form without database</h2>
	<table align="center">
<tr>
	<td>Username:</td>
	<td><input type="text" name="Username" placeholder="Enter Uname...">
</tr>
<tr>
	<td>Password:</td>
	<td><input type="password" name="password" placeholder="Enter Password...">
</tr>
<tr>
	<td></td>
	<td><input type="submit" name="submit"></td>
</tr>
</table>
</body>
</html>