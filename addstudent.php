<?php
include "header.php";
?>
<form method="post">
          <div class="form_settings">
            <p><span>First name </span><input class="contact" type="text" name="t1" id="t1" /></p>
            <p><span>Last name </span><input class="contact" type="text" name="t2" id="t2"/></p>
            <p><span>Email Address</span><input class="contact" type="text" name="t3" id="t3"/></p>
            <p><span>Contact </span><input class="contact" type="text" name="t4" id="t4"/></p>
			<p><span>Father's name</span><input class="contact" type="text" name="t5" id="t5"/></p>
			<p><span>Password</span><input class="contact" type="password" name="t6" id="t6"/></p>
			<p><span>Marks in tenth</span><input class="contact" type="text" name="t7" id="t7"/></p>
			<p><span>Marks in twelfth</span><input class="contact" type="text" name="t8" id="t8"/></p>
			<p><span>Grad marks</span><input class="contact" type="text" name="t9" id="t9"/></p>

            <p><span>Address</span><textarea class="contact textarea" rows="8" cols="50" id="t10" name="t10"></textarea></p>
            <p style="padding-top: 15px"> <span>&nbsp;</span><input class="submit" type="submit" name="b1"contact_submitted" value="Submit" /></p><br>
            <p><a id="a1" href="page.php">Login now!</a> </p>
            <?php
              if(isset($_REQUEST{"b1"}))
              {
              $f=$_REQUEST["t1"];
              $l=$_REQUEST["t2"];
              $e=$_REQUEST["t3"];
              $c=$_REQUEST["t4"];
              $fa=$_REQUEST["t5"];
              $p=$_REQUEST["t6"];
              $ten=$_REQUEST["t7"];
              $twel=$_REQUEST["t8"];
              $grad=$_REQUEST["t9"];
              $ad=$_REQUEST["t10"];
              $db=mysqli_connect("localhost","root","","dbplacement");
              $q="insert into tbstudent(fname,lname,email,contact,father,password,tenth,twel,grad,address)values('$f','$l','$e','$c','$fa','$p','$ten','$twel','$grad','$ad')";
              mysqli_query($db,$q);
              }
              if(isset($_REQUEST["b2"]))
              {
                header('Location:page.php');
              }

            ?>
            
          </div>
        </form>
        
        <p><br /><br />NOTE: If you are facing any issues regarding loging in then please contact us.</p>
      </div>
    </div>
    <style>
    span
    {
      font-size:15px;
      margin-left:20px;
    }
    #t1,#t2,#t3,#t4,#t5,#t6,#t7,#t8,#t9,#t10
    {
      color:white;
      background: url('background.png');
      border-color: white;
      font-size: 15px;
    }
    #a1
    {
      margin-left:74%;
      font-size:18px;

    }
    #a1:hover
    {
      
      color:red;
    }
  </style>
  
<?php
include "footer.php";
?>