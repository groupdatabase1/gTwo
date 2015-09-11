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
	function insertLink($cname,$title,$link,$mode)
	{
		$sql = "INSERT INTO tbllink VALUES('$eid','$cname','$title','$link','$mode')";
		$result = mysql_query($sql) or die(mysql_error());
		echo "<center><font face='Verdana, Arial, Helvetica, sans-serif' color='#3300FF'> SUCCESSFULLY  POST LINK </font> </center>";		
	}

	if(isset($_POST['btnsub']))
	{
		$cname = $_POST['tcname'];
		$title = $_POST['ttitle'];
		$link = $_POST['tlname'];
		$mode = $_POST['modes'];
			
		if(strlen($cname) && strlen($title) && strlen($link) && strlen($mode))
		{
				insertLink($cname,$title,$link,$mode);

		}		
		else
		{
			echo"<font face='Verdana, Arial, Helvetica, sans-serif' color='#CC0000'> FILLUP ALL THE FILED </font>";
		}
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="iLink.css" type="text/css" rel="stylesheet" />
<link  rel="icon" href="Image/favicon.ico" type="image/ico" />
<title>iLink</title>
</head>

<body>
<form action="link.php" enctype="multipart/form-data" method="post">
<div>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
  <td width="23%" rowspan="4"> <img src="Image/i.jpg" alt="iLink Logo" /> </td> 
  <td width="77%" id="logo">  iLink </td> 
</tr>
<tr>
  <td width="23%" id="tagname"> Share link Without botheration </td> 
  <td width="77%">  </td> 
</tr>
<tr><td>&nbsp;</td></tr>
<tr> <td> 
		<table width="50%">
		<tr>
		<td> <a href="#" target="mainfra" > One </a> </td>	<td> <a href="#" target="mainfra"  > Two</a> </td> 
		<td> <a href="#" target="mainfra" >Three </a> </td> <td> <a href="#" target="mainfra" >Four </a> </td> <td> <a href="#" target="mainfra" >Five </a> </td> <td> <a href="#" target="mainfra" > Six</a> </td>
		</tr>
		</table> 
</td>  </tr>
<tr><td>&nbsp;</td></tr>
<tr height="20">
  <td width="23%"  bgcolor="#00CC00"> </td> 
  <td width="77%" bgcolor="#00FF00"> </td> 
</tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
</table>
<table width="50%" border="1">
<tr> <td width="29%"> </td> <td width="67%"> </td> <td width="4%"> </td> </tr>
<tr> <td width="29%"> Category Name </td> <td width="67%"> <input type="text" name="tcname"  /> </td> <td width="4%"> </td> </tr>
<tr> <td width="29%"> Title </td> <td width="67%"> <input type="text" name="ttitle"  /> </td> <td width="4%"> </td> </tr>
<tr> <td width="29%"> Link Name</td> <td width="67%"> <input type="text" name="tlname"  /> </td> <td width="4%"> </td> </tr>
<tr> <td width="29%"> Mode </td> <td width="67%"> <input type="radio" name="modes" value="public" />Public <input type="radio" name="modes" value="private" />Private </td> <td width="4%"> </td> </tr>
<tr> <td width="29%"> </td> <td width="67%"> <input type="submit" name="btnsub" value="Post" class="btn" /> </td> <td width="4%"> </td> </tr>
</table>
</div>
</form>
</body>
</html>
