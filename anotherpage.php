<?php
include "header.php";
?>

       <?php

        session_start();

       if(isset($_SESSION["studentlogin"]))
       {
        if(isset($_SESSION["companylogin"]))
      {

         unset($_SESSION['companylogin']);

      }       
          $rollno=$_SESSION["studentlogin"];
        echo "<h1>Welcome ".$_SESSION["studentlogin"]."!</h1>"."<br><br>";
       echo "<ul><li><a id='a1' href='password.php'> Change password</a></li>";
       echo "<li><a id='a1' href='viewstudentdata.php'>View personal data</a></li>";
       echo "<li><a id='a1' href='viewcompanyeligible.php'>View companies which suit your profile</a></li>";
       echo "<li><a id='a1' href='logout.php'>Log out </a></li></ul>";
          
       }

       else if(isset($_SESSION["companylogin"]))
        {
          if(isset($_SESSION["studentlogin"]))
          {
            unset($_SESSION['studentlogin']);
          }
          echo "<h1>welcome".$_SESSION['companylogin']."!</h1>";
          echo "<a id='a1' href='password.php'> Change password</a><br><br>";
          echo "<a id='a1' href='editcompanydata.php'>View and Edit personal data</a><br><br>";
		    echo "<a id='a1' href='viewenqueries.php'>View Enqueries</a><br><br>";
          echo "<a id='a1' href='viewstudenteligible.php'>View students who are eligible</a><br><br>";
          echo "<a id='a1' href='logout.php'>Log out </a><br><br><br><br><br>";
        }
        else
        {
          header('Location:page.php');
        }

        

       
       ?>
      
    

       <style>
       h1
       {
        text-align: center;
       }
       #a1
       {
        font-size:20px;
        text-decoration: none;
       }
       a:hover
       {
        color:red;
        text-decoration: underline; 
       }
       
       </style>
    </div>
  </div>
</div>

    <div id="footer">
      Copyright &copy; textured_stars | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.html5webtemplates.co.uk">Simple web templates by HTML5</a>
    </div>
  </div>
</body>
</html>
