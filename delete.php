<?php
session_start();

if(!$_SESSION['user']){
	header("Location:index.php");
			die();

} ?>

<?php
$sql="delete from classes where user_ip='$user_ip'";
$result=mysqli_query($conn, $sql) ;

?>
