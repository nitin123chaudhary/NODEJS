<html>
<body>
<table border=1>
<form method="post">
<select name="s1" id="s1">
<?php
session_start();
if(isset($_SESSION["companylogin"]))
{
$id=$_SESSION["companylogin"];
$db=mysqli_connect("localhost","root","","dbplacement");
$q="SELECT a.rollno,a.fname,a.tenth,a.twel,a.grad,b.cname,b.tenth,b.twel,b.grad FROM tbstudent a,tbcompany b WHERE a.tenth>=b.tenth AND a.twel>=b.twel AND a.grad>=b.grad AND b.id='$id'";
$query=mysqli_query($db,$q);
while($res=mysqli_fetch_array($query))
{
	extract($res);
	echo "<option>$fname</option>";
}
}
else
{
	header("Location:anotherpage.php");
}

?>
</select>&nbsp;
<input type="submit" name="b1" id="b1"/><br><br><br>
<?php
if(isset($_REQUEST["b1"]))
{	
	$s1=$_REQUEST["s1"];
	$db=mysqli_connect("localhost","root","","dbplacement");
	$q="select * from tbstudent where fname='$s1'";
	$query=mysqli_query($db,$q);
	echo "<tr><td>First name</td><td>Last name</td><td>Email address</td><td>Contact</td><td>Father's name</td><td>Address</td></tr>";
	while($res=mysqli_fetch_array($query))
	{
		extract($res);
		echo "<tr><td>$fname</td><td>$lname</td><td>$email</td><td>$contact</td><td>$father</td><td>$address</td></tr><tr><td colspan=6><a href='anotherpage.php'>Return to your account</td></tr>";
	}
}
?>
</form>
</table>
</body>
<style>
body
{
	background-image: url('style/background.png');
	font-family: 'google sans';
	font-size: 20px;
	color:white;

}
table
{
	align-content: center;
	margin:auto;
	background-image: url('style/transparent.png');
	border-image: url('style/background.png');
}
#s1
{	
	margin-top:10%;
	margin-left:45%;
	background-image: url('style/transparent.png');
}
#b1
{
	border-color: red;
	color:white;
	background-color: red;
}
</style>
</html>