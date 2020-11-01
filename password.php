<html>
<body>
	<div id="content">
		<table>
<form method="post" enctype="multipart/form-data">
	<tr><td>Enter current password</td><td> <input type="text" id="t1" name="t1"/></td></tr>
	<tr><td>Enter new password</td><td> <input type="password" id="t2" name="t2"/></td></tr>
	<tr><td>Re enter new password</td><td> <input type="password" id="t3" name="t3"/></td></tr>
	<tr><td><input type="submit" id="b1" name="b1" value="Change"/></td></tr><tr></tr>
	<?php
session_start();
if(isset($_SESSION["studentlogin"]))
{
	echo "<h1>Welcome ".$_SESSION["studentlogin"]."!</h1>";
	if(isset($_REQUEST["b1"]))
{
	$current=$_REQUEST["t1"];
	$r=$_SESSION["studentlogin"];
	$db=mysqli_connect("localhost","root","");
	mysqli_select_db($db,"dbplacement");
	$q="select * from tbstudent where password='$current'";
	$query=mysqli_query($db,$q);
	if(mysqli_num_rows($query)>0)
	{
		$new=$_REQUEST["t2"];
		$new2=$_REQUEST["t3"];
		if($new==$new2)
		{
		$db1=mysqli_connect("localhost","root","");
		mysqli_select_db($db1,"dbplacement");
		$q1="update tbstudent set password='$new' where rollno='$r'";
		mysqli_query($db1,$q1);
		echo "Password changed!<br>";
		echo "<a href='anotherpage.php'>Return back to my account</a><br>";
		}
		else 
		{
			echo "<tr   id='z1'><td colspan=2>New passwords dont match !</td></tr>";
		}
	}
	else
	{
		echo "<tr    id='z1'><td colspan=2>Invalid current password !</td></tr>";
	}
}
}
else if(isset($_SESSION["companylogin"]))
{
	if(isset($_REQUEST["b1"]))
{
	$current=$_REQUEST["t1"];
	$id=$_SESSION["companylogin"];
	$db=mysqli_connect("localhost","root","");
	mysqli_select_db($db,"dbplacement");
	$q="select * from tbcompany where password='$current'";
	$query=mysqli_query($db,$q);
	if(mysqli_num_rows($query)>0)
	{
		$new=$_REQUEST["t2"];
		$new2=$_REQUEST["t3"];
		if($new==$new2)
		{
		$db1=mysqli_connect("localhost","root","");
		mysqli_select_db($db1,"dbplacement");
		$q1="update tbcompany set password='$new' where id='$id'";
		mysqli_query($db1,$q1);
		echo "Password changed!<br>";
		echo "<a href='anotherpage.php'>Return back to my account</a><br>";

		}
		else 
		{
			echo "<tr  id='z1'><td colspan=2>New passwords dont match !</td></tr>";
		}
	}
	else
	{
		echo "<tr  id='z1'><td colspan=2>invalid current password !</td></tr>";
	}
}
}
else 
{
	header('Location:login.php');
}

?>
</div>
</form>
</table>

<style>
body
{
	background-image: url('style/background.png');
	color:white;
	font-family: 'google sans';
	text-align: center;
}
table
{	
		text-transform: uppercase;
		margin-left:35%;
	margin-top:15%;
	text-align: center;
}
#b1
{
	border:0;
	border-radius: 3px;
	background-color:red;
	color:white;
	margin-left:153%;
	font-size:15px;
}
#t1,#t2,#t3
{
	border-radius: 3px;
}
#z1
{
	font-size: 12px;
	text-align: center;
 }
 a
 {
 	color:white;
 }
 a:hover
 {
 	color:red;
 }

</style>
</body>
</html>