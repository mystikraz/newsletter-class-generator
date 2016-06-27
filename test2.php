<title>class generator 2</title>

<?php
session_start();

if(!$_SESSION['user']){
	header("Location:index.php");
		die();

}
include "db_conn.php";
include "getip.php";

if(isset($_SESSION['user'])){
	$user=($_SESSION['user']);
	}


// if counter is not set, set to zero
if(!isset($_SESSION['counter'])) {
   $counter=$_SESSION['counter'] = 0;
}

// if button is pressed, increment counter
if(isset($_GET['submit'])) {
	   $counter=++$_SESSION['counter'];
    //++$_SESSION['counter'];
}
	?>
   

<?php
if(isset($_GET['submit'])) {

		$fontFamily=mysqli_real_escape_string($conn, $_GET['fontFamily']);
		$className=mysqli_real_escape_string($conn, $_GET['className']);
		$fontSize=mysqli_real_escape_string($conn, $_GET['fontsize']);
		$fontLineheight=mysqli_real_escape_string($conn, $_GET['fontlineheight']);
		$linkColor=mysqli_real_escape_string($conn, $_GET['linkcolor']);
		$fontColor=mysqli_real_escape_string($conn, $_GET['fontcolor']);
		$textDecoration=mysqli_real_escape_string($conn, $_GET['textdecoration']);
		$fontBold=mysqli_real_escape_string($conn, $_GET['fontbold']);
		$linkBold=mysqli_real_escape_string($conn, $_GET['linkbold']);
		$text_transform=mysqli_real_escape_string($conn, $_GET['text_transform']);
		$httphttps=mysqli_real_escape_string($conn, $_GET['httphttps']);
		$webisteurl=mysqli_real_escape_string($conn, $_GET['webisteurl']);
		include "insert.php";
		include "view.php";
}
	?>	
	 
	<?php

// reset counter
if(isset($_GET['reset'])) {
    $counter=$_SESSION['counter'] = 0;

include "delete.php";
echo "<style>
.Hide{ display:none;}
</style>";
}

if(isset($_GET['logout'])) {
    $_SESSION['user']=0;
    	header("Location:index.php");
		die();
}

	?>
    

<h3>Welcome <?php echo $user; ?>!<br></h3>   <a style="background-color:#cccccc; color:000000; padding:1px 10px; border-radius:4px; text-decoration:none;" href="?logout">logout</a><br>
<br>
<form action="" method="get">
    <input type="hidden" name="counter" value="<?php echo $_SESSION['counter']; ?>" />
<label style="float:left;">Class Name:&nbsp;</label><div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0; float:left;" >
<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('className').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;" >
  
   <option value="nb_title">nb_title</option>
   <option value="zwart_kop">zwart_kop</option>
   <option value="wit_kop">wit_kop</option>
   <option value="nb_groot_kop">nb_groot_kop</option>
   <option value="nb_sub_kop">nb_sub_kop</option>
   <option value="wit_tekst">wit_tekst</option>
   <option value="zwart_tekst">zwart_tekst</option>
   <option value="nb_leesmeer">nb_leesmeer</option>
   <option value="nb_btm_kop">nb_btm_kop</option>
   <option value="nb_btm_tekst">nb_btm_tekst</option>
   <option value="nb_servicelinks">nb_servicelinks</option>
   <option value="blauw_kop">blauw_kop</option>
   <option value="oranje_kop">oranje_kop</option>

</select>
<input name="className" value="nb_title" placeholder="Add/Select Class Name" id="className" style="position:absolute;top:0px;left:0px;width:182px;width:180px\9;#width:180px;height:23px; height:21px\9;#height:18px;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue" id="idValue" type="hidden">
</div>


</br><br>
<label style="float:left;">Font-family:&nbsp;</label><div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0; float:left;" >
<select style="position:absolute;top:0px;left:0px;width:500px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('fontFamily').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;" >
  
   <option value="Arial">Arial, Helvetica, 'Helvetica Neue', sans-serif</option>
   <option value="Trebuchet">Trebuchet MS, Helvetica, sans-serif</option>
   <option value="Verdana">Verdana, Geneva, sans-serif</option>
   <option value="Courier">Courier New, Courier, monospace</option>
   <option value="Georgia">Georgia, serif</option>
   <option value="LucidaConsole">Lucida Console, Monaco, monospace</option>
   <option value="LucidaSans">Lucida Sans Unicode, Lucida Grande, sans-serif</option>
   <option value="Impact">Impact, Charcoal, sans-serif</option>
   <option value="Palatino">Palatino Linotype, Book Antiqua, Palatino, serif</option>
   <option value="Tahoma">Tahoma, Geneva, sans-serif</option>
   <option value="Times New Roman">Times New Roman, Times, serif</option>
   <option value="Times New Roman">Calibri, Candara, Segoe, 'Segoe UI', Optima, Arial, sans-serif</option>

</select>
<input name="fontFamily" value="Arial, Helvetica, 'Helvetica Neue', sans-serif" placeholder="Add/Select Font Family" id="fontFamily" style="position:absolute;top:0px;left:0px;width:480px;width:180px\9;#width:180px;height:23px; height:21px\9;#height:18px;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue" id="idValue" type="hidden">
</div>
</br><br>
font-size: <input type = "number" name = "fontsize" value="10" placeholder="without px" required></br><br>
font-color: <input type = "text" name = "fontcolor" value="#000001" required></br><br>
font-bold: <select name="fontbold">
					<option value="bold">bold</option>
					<option value="normal">normal</option>
					<option value="none">none</option>
				</select> </br><br>
link-bold: <select name="linkbold">
					<option value="bold">bold</option>
					<option value="normal">normal</option>
					<option value="none" selected>none</option>
				</select> </br><br>
linkcolor: <input type = "text" value="#000001" name = "linkcolor"></br><br>
link underlined? <select name="textdecoration">
					<option value="none">none</option>
					<option value="underline">underline</option>
				</select>
</br><br>
text-transform: <select name="text_transform">
					<option value="uppercase">uppercase</option>
					<option value="none">none</option>
				</select></br><br>
font line-height: <input type = "number" name = "fontlineheight" value="10" placeholder="without px">
          
                </br><br>
<label style="float:left;">Website URL: </label><select id="httphttps" name="httphttps" style="width:100px; float: left;">
              <option name="httphttps" id="httphttps" value="http" selected="">http://</option>
              <option name="httphttps" id="httphttps" value="https">https://</option>
            </select>
            <input style="float: left; margin-left: 20px; width: 350px;" type="text" name="webisteurl" id="webisteurl" value="www.example.com" placeholder="Example www.website.nl">
<br><br>
<button id="submit" type = "submit" name = "submit" style="background-color:#cccccc; color:000000; border-radius:4px;">submit</button>
   <a style="background-color:#cccccc; color:000000; padding:1px 10px; border-radius:4px; text-decoration:none;" href="?reset">reset</a>
    <br/><br/>Classes created=<?php echo $_SESSION['counter']; ?>
</form>
<h4 style="color:red;">Please click the reset button after class generation is finished! ( this will clear the data from the system )</h4>
 <?PHP




echo "Your IP address is ". $user_ip; // Output IP address [Ex: 177.87.193.134]


?>
