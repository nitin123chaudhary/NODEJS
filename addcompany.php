<?php
include "header.php";
?>
<form method="post">
          <div class="form_settings">
            <p><span>Company name </span><input class="contact" type="text" name="t1" id="t1" /></p>
            <p><span>Email Address </span><input class="contact" type="text" name="t2" id="t2"/></p>
            <p><span>Contact</span><input class="contact" type="text" name="t3" id="t3"/></p>
            <p><span>Password </span><input class="contact" type="password" name="t4" id="t4"/></p>
			     <p><span>Marks req. in tenth</span><input class="contact" type="text" name="t5" id="t5"/></p>
			     <p><span>Marks req. in twelfth</span><input class="contact" type="text" name="t6" id="t6"/></p>
			     <p><span>Marks req. in graduation</span><input class="contact" type="text" name="t7" id="t7"/></p>
          <p><span>Address</span><textarea class="contact textarea" rows="8" cols="50" id="t8" name="t8"></textarea></p>
            <p style="padding-top: 15px"> <span>&nbsp;</span><input class="submit" type="submit" name="b1"contact_submitted" value="Submit" /></p><br>
            <p><a id="a1" href="page.php">Login now!</a> </p>
            <?php
              if(isset($_REQUEST{"b1"}))
              {
              $cname=$_REQUEST["t1"];
              $e=$_REQUEST["t2"];
              $con=$_REQUEST["t3"];
              $p=$_REQUEST["t4"];
              $ten=$_REQUEST["t5"];
              $twel=$_REQUEST["t6"];
              $grad=$_REQUEST["t7"];
              $ad=$_REQUEST["t8"];
              $db=mysqli_connect("localhost","root","","dbplacement");
              $q="insert into tbcompany(cname,email,contact,password,tenth,twel,grad,address)values('$cname','$e','$con','$p','$ten','$twel','$grad','$ad')";
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