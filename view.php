<?php
session_start();

if(!$_SESSION['user']){
	header("Location:index.php");
			die();

} ?>


<?php
$sql="select * from classes where user_ip='$user_ip'";
 $result1=mysqli_query($conn, $sql) or die(mysqli_error($conn)) ;
$result2=mysqli_query($conn, $sql) ;

?>
<textarea class="Hide" rows="25" cols="100">
<?php while($row=mysqli_fetch_array($result1)){ ?>
<?php  echo ".".$row['class_name'] . " { ". "font-family:".$row['font_family']."; ". "font-size:".$row['font_size']."px; "."color:".$row['font_color'] ."; "?><?php if($row['font_bold']!=='none'){?>font-weight:<?php echo $row['font_bold']."; ";
}?><?php if($row['text_transform']!=='none'){ ?>text-transform:<?php echo $row['text_transform'].";";
	  }?><?php echo " }"; ?>
      
<?php echo  ".".$row['class_name'] ." a, ".".".$row['class_name'] ." a:hover"." { "."color:".$row['link_color'] ."; "?><?php if($row['link_bold']!=='none'){ ?>font-weight:<?php echo $row['link_bold']."; "; }?><?php echo "text-decoration:".$row['text_decoration']."; "."}"; ?>
&#13;&#10;
<?php	}?>

<table align="center" class="mWidth100" style="width:600px;" border="0" cellspacing="0" cellpadding="0" bgcolor="#C0C0C0">
        	       <?php while($ras=mysqli_fetch_array($result2)){ ?>

  <tr>
    <td class="<?php echo $ras['class_name']; ?>" align="left" valign="top" style="font-family:<?php echo $ras['font_family']; ?>; font-size:<?php echo $ras['font_size']; ?>px; color:<?php echo $ras['font_color']; ?>;<?php if($ras['font_bold']!=='none'){ ?> font-weight:<?php echo $ras['font_bold'].";"; } ?><?php if($ras['text_transform']!=='none'){ ?> text-transform:<?php echo $ras['text_transform'].";";} ?><?php if($ras['font_lineheight']!==''){ ?> line-height:<?php echo $ras['font_lineheight']."px;";} ?>">Lorem ipsum dolor <a style="font-family:<?php echo $ras['font_family']; ?>; font-size:<?php echo $ras['font_size']; ?>px; color:<?php echo $ras['font_color']; ?>;<?php if($ras['link_bold']!=='none'){ ?> font-weight:<?php echo $ras['link_bold'].";";} ?><?php if($ras['text_transform']!=='none'){ ?> text-transform:<?php echo $ras['text_transform'].";";} ?> text-decoration:<?php echo $ras['text_decoration']; ?>;" target="_blank" href="<?php echo $ras['httphttps']; ?>://<?php echo $ras['webisteurl']; ?>">sit</a> amet</td> 
  </tr>
  		<?php	} ?>

</table>

 
        </textarea>
