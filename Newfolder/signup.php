<?php
	include("dbcon.php");

	if(isset($_POST['btnsub']))
	{
		$fname=$_POST['tfname'];
		$mname=$_POST['tmname'];
		$lname=$_POST['tlname'];				
		$eid = $_POST['teid'];
		$pwd = $_POST['tpwd'];	
		$cpwd = $_POST['tcpwd'];	
		$bcap = $_POST['btncap'];
		$cap = $_POST['tcap'];		

		if($pwd == $cpwd)
		{
			if($bcap == $cap)
			{
				$sql = "INSERT INTO tblreg VALUES('$fname','$mname','$lname','$eid','$pwd')";
				$result = mysql_query($sql) or die(mysql_error());
				echo "<center><font face='Verdana, Arial, Helvetica, sans-serif' color='#3300FF'> SUCCESSFULLY </font> </center>";
			}
			else
			{
				echo "<center><font face='Verdana, Arial, Helvetica, sans-serif' color='#CC0000'> YOU ENTER WRONG CODE </font> </center>";
			}		
		}
		else
		{
			echo "<center><font face='Verdana, Arial, Helvetica, sans-serif' color='#CC0000'> PASSWORD NOT MATCH </font> </center> ";
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="iLink.css" type="text/css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>iLink</title>
<script type="text/javascript" language="javascript">
function matchint()
{
	var intExp = /^[0-9]+$/;
	var vcode = document.getElementById('code');
	if(vcode.value.match(intExp)){
		return true;
	}else{
			alert("Enter only Numeric data");
	}
}
function CheckEmaiID()
{
	var emailExp = /^[_a-z0-9A-Z-]+(\.[_a-z0-9A-Z-]+)*@[a-z0-9A-Z-]+(\.[a-z0-9A-Z-]+)*(\.[a-z]{2,3})$/;
	var eid = document.getElementById('email');
	if(eid.value.match(emailExp))
	{
		return true;
	}else{
			alert("Invalid Format of Email Addresh");
			eid.focus();
	}

}
</script>
</head>
<body>
<form action="signup.php" method="post" enctype="multipart/form-data" name="frmsignup">
<table>
<?php $se = rand(1,999); 
?>
<tr> <td class="tabletrtd"> Registration </td>  </tr>
<tr> <td> </td> <td> </td> <td> </td> </tr>
<tr> <td> First Name </td> <td> </td> <td> <input type="text" name="tfname" /> </td> </tr>
<tr> <td> Middle Name </td> <td> </td> <td> <input type="text" name="tmname" /> </td> </tr>
<tr> <td> Last Name </td> <td> </td> <td> <input type="text" name="tlname" /> </td> </tr>
<tr> <td> Email ID </td> <td> </td> <td> <input type="text" name="teid" id="email" onchange="CheckEmaiID()" />  </td> </tr>
<tr> <td> Password </td> <td> </td> <td> <input type="password" name="tpwd" /> </td> </tr>
<tr> <td> Re-Type Password </td> <td> </td> <td> <input type="password" name="tcpwd" /> </td> </tr>
<tr> <td> </td> <td> </td> <td> <input class="btn" type="text" value="<?php echo($se); ?>" name="btncap"  />  </td> </tr>
<tr> <td> Type Code </td> <td> </td> <td> <input type="text" id="code" name="tcap" /> </td> </tr>
<tr> <td> </td> <td> <input type="submit" name="btnsub" value="Signup" onclick="matchint()" /> </td> <td> </td> </tr>


</table>
</form>
</body>
</html>
