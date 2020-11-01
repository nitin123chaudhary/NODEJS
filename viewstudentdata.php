<html>
<body>
<table border=2>
<?php
session_start();
if(isset($_SESSION["studentlogin"]))
{	
	$r=$_SESSION["studentlogin"];
	$db=mysqli_connect("localhost","root","","dbplacement");
	$q="select * from tbstudent where rollno='$r'";
	$query=mysqli_query($db,$q);
	echo "<tr><td>Roll no </td><td>First name</td><td> Last name</td><td>Email </td><td>Contact no.</td><td>Father's name</td><td>Password</td><td>Tenth marks</td><td>Twelfth marks</td><td>Graduation marks</td></tr>";
	while($res=mysqli_fetch_array($query))
	{
		extract($res);
		echo "<tr><td>$rollno</td><td>$fname</td><td>$lname</td><td>$email</td><td>$contact</td><td>$father</td><td>$password</td><td>$tenth</td><td>$twel</td><td>$grad</td></tr><tr><td colspan=10><a href='anotherpage.php'>Return back to your account</a></td></tr>";
	}

}

?>
</table>
</body>
<style>
	body
	{
		background-image: url('style/background.png');
		font-family:'google sans';
		text-align: center;
		color:white;
	}
	table
	{
		background-image: url('style/transparent.png');
		border-spacing: 3px;
		margin-top:200px;
		margin-left:200;
	}

a
{
	color:white;
	text-decoration: none;
}
a:hover
{
	color:red;
	text-decoration: underline;
}

</style>
</html>