<?php
	session_start();
	include("dbcon.php");
	function CheckLogin($eid,$pwd)
	{
	
		$sql = "SELECT * FROM tblreg WHERE emailid = '$eid'";
		$result=mysql_query($sql) or die(mysql_error());
		while($row=mysql_fetch_assoc($result))
		{
			$veid=$row['emailid'];
			$vpwd=$row['password'];
		}
		$_SESSION['uname'] = $veid;
				if($pwd==$vpwd)
				{
					if($veid=="admin@admin.admin")
					{
						header('Location: admin.php');
					}
					else
					{
						header('Location: user.php');
					}	
				}
				else
				{
					echo"<font face='Verdana, Arial, Helvetica, sans-serif' color='#CC0000'> WRONG USERNAME AND PASSWORD </font> ";
				}
	}
	if(isset($_POST['btnlog']))
	{
		$eid = $_POST['teid'];
		$pwd = $_POST['tpwd'];
		
		
	
		if(strlen($eid) && strlen($pwd))
		{
				CheckLogin($eid,$pwd);

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
<link href="iLink.css" type="text/css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>iLink</title>
</head>

<body>
<form action="login.php" method="post" enctype="multipart/form-data">
<table>
<tr> <td class="tabletrtd"> Login  </td>  </tr>
<tr> <td> </td> <td> </td> <td> </td> </tr>
<tr> <td> Email ID </td> <td> </td> <td> <input type="text" name="teid" />  </td> </tr>
<tr> <td> Password </td> <td> </td> <td> <input type="password" name="tpwd" /> </td> </tr>
<tr> <td> </td> <td> <input type="submit" name="btnlog" value="Login" /> </td> <td> </td> </tr>
</table>
</form>

</body>
</html>