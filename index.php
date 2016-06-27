<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
</head>

<body><?php
session_start();
if(isset($_POST['submit'])){
	$_SESSION['user']=$_POST['user'];
	$_SESSION['password']=$_POST['password'];
	header("Location:test2.php");
	die();
	}
?>


<form action="" method="post">
<input type="text" name="user" placeholder="enter user name" required><br><br>
<input type="password" name="password" placeholder="enter password" required><br><br>
<input type="submit" value="submit" name="submit">
</form>
</body>
</html>
