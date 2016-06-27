<?php
session_start();

if(!$_SESSION['user']){
	header("Location:index.php");
			die();

} ?>

<?php
$sql = "INSERT INTO classes (class_name, font_family, font_color, font_size, font_lineheight, link_color, text_decoration, font_bold, link_bold, httphttps, webisteurl, user, time,text_transform, user_ip) VALUES ('$className', '$fontFamily', '$fontColor', '$fontSize', '$fontLineheight', '$linkColor', '$textDecoration', '$fontBold', '$linkBold', '$httphttps', '$webisteurl', '$user', Now(),'$text_transform', '$user_ip')";
if ($conn->query($sql) === TRUE) {
   // echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
