<body>
	<form method="post">
	<table border=1>
<?php
session_start();
if(isset($_SESSION["companylogin"]))
{
	$id=$_SESSION["companylogin"];
$db=mysqli_connect("localhost","root","","dbplacement");
$q="select * from tbcompany where id='$id'";
$query=mysqli_query($db,$q);
	while($res=mysqli_fetch_array($query))
	{
		extract($res);
		echo "<tr><td>Company ID </td><td> <input type='text' id='t1' name='t1' value='$id' readonly/></td></tr>";
		echo "<tr><td>Company name </td><td> <input type='text' id='t2' name='t2' value='$cname'/></td></tr>";
		echo "<tr><td>Email address </td><td> <input type='text' id='t3' name='t3' value='$email'/></td></tr>";	
		echo "<tr><td>Contact number </td><td> <input type='text' id='t4' name='t4' value='$contact'/></td></tr>";	
		echo "<tr><td>Marks required in tenth </td><td> <input type='text' id='t5' name='t5' value='$tenth'/></td></tr>";	
		echo "<tr><td>Marks required in twelfth </td><td> <input type='text' id='t6' name='t6' value='$twel'/></td></tr>";	
		echo "<tr><td>Graduation marks required </td><td> <input type='text' id='t7' name='t7' value='$grad'/></td></tr>";	
		echo "<tr><td>Address of the company </td><td> <input type='text' id='t8' name='t8' value='$address'/></td></tr>";
		echo "<tr><td id='d1' colspan=2><input type='submit' id='b1'name='b1' value='Update'/></td></tr>";
		echo "<a id='a1' href='anotherpage.php'>Return to your account</a>";
	}
	if(isset($_REQUEST["b1"]))
	{
		$id=$_SESSION["companylogin"];
		$c=$_REQUEST["t2"];
		$e=$_REQUEST["t3"];
		$con=$_REQUEST["t4"];
		$ten=$_REQUEST["t5"];
		$twel=$_REQUEST["t6"];
		$grad=$_REQUEST["t7"];
		$ad=$_REQUEST["t8"];
		$db1=mysqli_connect("localhost","root","","dbplacement");
		$q1="UPDATE tbcompany SET cname='$c',email='$e',contact='$con',tenth='$ten',twel='$twel',grad='$grad',address='$ad' WHERE id='$id'";
		$query=mysqli_query($db1,$q1);
		echo "<p id='p1'>Data successfully updated!</p>";
	}
}
?>
</table>
</form>
</body>
<style>
body
{
	background-image: url('style/background.png');
	color:white;
	font-family: 'google sans';
}
table
{
	border-radius: 5px;
	margin:auto;
	font-size: 20px;
	 
}
#t1,#t2,#t3,#t4,#t5,#t6,#t7,#t8
{
	border:0;
	background-color: black;
	color:white;
}
#b1
{
	border-radius: 3px;
	border-color: red;
	background-color: red;
	margin-left:86%;
}
#a1
{
	margin-bottom: 50%;
	margin-left:44%;
	color:white;
}
#a1:hover
{
	color:red;
}
#p1
{
	text-align: center;
	margin:auto;
}
</style>