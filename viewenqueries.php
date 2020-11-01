<h1>View Enqueries</h1>

<table>


<?php
session_start();
$db=mysqli_connect("localhost","root","","dbplacement");
$cid=$_SESSION["companylogin"];
$q="select * from tbcontact where companyid=$cid";
$query=mysqli_query($db,$q);
echo "<tr><td>Name </td><td>Email </td><td>Contact no.</td><td>Query</td></tr>";
while($res=mysqli_fetch_array($query))
{
	extract($res);
	echo "<tr><td>$name</td><td>$email</td><td>$contact</td><td>$queries</td></tr>";
}

?>
</table>
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