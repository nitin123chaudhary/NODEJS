<table>
<?php
$r=$_REQUEST["rollno"];
$db=mysqli_connect("localhost","root","","dbplacement");
$q="SELECT a.rollno,a.fname,a.lname,a.email,a.contact,a.father,a.tenth,a.twel,a.grad,b.cname,b.email,b.contact,b.tenth,b.twel,b.grad FROM tbstudent a,tbcompany b WHERE a.tenth>=b.tenth AND a.twel>=b.twel AND a.grad>=b.grad AND a.rollno='$r'";
$query=mysqli_query($db,$q);
echo "<tr><td>Roll no </td><td>First name</td><td> Last name</td><td>Email </td><td>Contact no.</td><td>Father's name</td><td>Company name</td><td>Company's email</td><td>Company's contact no.</td></tr>";
while($res=mysqli_fetch_array($query))
{
	extract($res);
	echo "<tr><td>$rollno</td><td>$fname</td><td>$lname</td><td>$email</td><td>$contact</td><td>$father</td><td>$cname</td><td>$email</td><td>$contact</td></tr>";
}

?>
</table>
<style>
table
{
	border-color: black;
	background-image: url('background.png');	
}
</style>