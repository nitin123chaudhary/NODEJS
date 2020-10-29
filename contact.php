<?php
include "header.php";
?>
        <h1>Contact Us</h1>
        <p>Fill in the details below and the team will get in touch with you via email withing 24 hours:</p>
        <?php
       
        ?>
        <form method="post">
          <div class="form_settings">
            <p><span>Name</span><input class="contact" type="text" name="t1" required /></p>
            <p><span>Email Address</span><input class="contact" type="text" name="t2" required/></p>
            <p><span>Contact Number</span><input class="contact" type="text" name="t3" required/></p>
			 <p><span>Select Company</span>
			 <?php
			 $db=mysqli_connect("localhost","root","","dbplacement");
$q="select * from tbcompany";
$query=mysqli_query($db,$q);
echo "<select name='s1' class='contact'>";
while($res=mysqli_fetch_array($query))
{
	extract($res);
	echo "<option value=$id>$cname</option>";
}
?>
			 
			 </p><br>
            <p><span>Queries/Issues</span><textarea class="contact textarea" rows="8" cols="50" id="t4" name="t4"></textarea></p>
            <p style="padding-top: 15px"> <span>&nbsp;</span><input class="submit" type="submit" name="b1"  value="submit" /></p>
          </div>
        </form>
        
		<?php
			if(isset($_REQUEST["b1"]))
			{
				 $db=mysqli_connect("localhost","root","","dbplacement");
				 $name=$_REQUEST["t1"];
				 $em=$_REQUEST["t2"];
				 $con=$_REQUEST["t3"];
				 $com=$_REQUEST["s1"];
				 $query=$_REQUEST["t4"];
				 $q="insert into tbcontact(name,email,contact,queries,companyid)values('$name','$em','$con','$query',$com)";
				 mysqli_query($db,$q);
				
			}
		
		
		?>
		
        <p><br /><br />NOTE: Please give us at least 24 hours to get in touch with you.</p>
      </div>
    </div>
  </div>
</body>
</html>
<?php
include "footer.php";
?>