<table>
<?php

$r=$_REQUEST["rollno"];
$db=mysqli_connect("localhost","root","","dbplacement");
$q="select * from tbstudent where rollno='$r'";
$query=mysqli_query($db,$q);
echo "<tr><td>Roll no </td><td>First name</td><td> Last name</td><td>Email </td><td>Contact no.</td><td>Father's name</td><td>Tenth marks</td><td>Twelfth marks</td><td>Graduation marks</td></tr>";
while($res=mysqli_fetch_array($query))
{
extract($res);
echo "<tr><td>$rollno</td><td>$fname</td><td>$lname</td><td>$email</td><td>$contact</td><td>$father</td><td>$tenth</td><td>$twel</td><td>$grad</td></tr>";
}

?>
</table>