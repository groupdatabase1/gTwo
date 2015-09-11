<?php
	session_start();
	include("dbcon.php");	
	$eid = $_SESSION['uname'];
		$sql = "SELECT fname,lname FROM tblreg WHERE emailid = '$eid'";
		$result=mysql_query($sql) or die(mysql_error());
		while($row=mysql_fetch_assoc($result))
		{
			$fname=$row['fname'];
			$lname=$row['lname'];
		}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="iLink.css" type="text/css" rel="stylesheet" />
<link  rel="shortcut icon" href="Image/favicon.ico" type="image/x-icon" />


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>iLink</title>
</head>
<body>
<form action="admin.php" method="post" enctype="multipart/form-data">
<div>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr><td>&nbsp;</td></tr>
<tr> <td>  </td> <td> </td> <td>  </td> <td> </td> <td> <?php echo " Welcome $fname   $lname";  ?> </td> </tr>
<tr><!-- navigation1 s -->
	<td valign="top">
		<table border="1" cellspacing="5" width="50%" id="navigation"> <!-- navigation left s -->
		<tr> <td> <a href="#" class=""> Notification </a> </td> </tr>
	    <tr> <td> <a href="#" class=""> Contrl Panel </a> </td> </tr>
	    <tr> <td> <a href="#" class=""> Upgrade </a> </td> </tr>
	    <tr> <td> <a href="#" class=""> Share </a> </td> </tr>
	    <tr> <td> <a href="#" class=""> Inbox </a> </td>  </tr>
	    <tr> <td> <a href="#" class=""> My Folder </a> </td> 
	    <tr> <td> <a href="link.php" class=""> Post Link </a> </td> 
		</table>		<!-- navigation left f -->
	</td>
	
	<td width="50%" valign="top">
		<table border="1" width="50%">
		<tr> <td> </td></tr>
		</table>	
	</td>



</tr><!-- navigation1 f -->
</table><!--main table -->
</div>

<!-- <iframe class="frm" name="imain" frameborder="1" width="1000" height="900" hspace="600" src="welcome.html"> </iframe>  -->

</form>
</body>

</html>
