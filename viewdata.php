<?php
include "header.php";
?>
<?php
session_start();
if(isset($_SESSION["studentlogin"]))
{
?>

          <form method="post">
          <div class="form_settings">
            <h1>View eligible companies or view student data.</h1>
            <p><span>Enter student rollno.</span><input class="contact" type="text" id="t1" name="t1" /></p>
            <p style="padding-top: 15px"> <span>&nbsp;</span><input class="submit" type="button" id="b1" name="b1" value="Show" /></p><br>
            
            <p style="padding-top: 15px"> <span>&nbsp;</span><input class="submit" type="button" id="b3" name="b3" value="View companies" /></p>
          
<script src="../../jquery.js"></script>
<script>

    $(document).ready(function(){
        $("#b1").click(function(){
            $r=$("#t1").val();
            $.ajax({url:"viewstudent.php",data:{rollno:$r},success:function(result){
                $("#d1").html(result);
            }});
        });
        $("#b3").click(function(){
            $r1=$("#t1").val();
            $.ajax({url:"studentcompany.php",data:{rollno:$r1},success:function(sc){
                $("#d1").html(sc);
            }});
        });
    });
</script>

<?php
}
else if(isset($_SESSION["companylogin"]))
{
?>
    <p><span>Enter Company ID</span><input class="contact" type="text" id="t2" name="t2" /></p>
    <p style="padding-top: 15px"> <span>&nbsp;</span><input class="submit" type="button" id="b2" name="b2"contact_submitted" value="Show" /></p>
<script src="../../jquery.js"></script>
<script>

    $(document).ready(function(){
        $("#b2").click(function(){
            $id=$("#t2").val();
            $.ajax({url:"viewcompany.php",data:{id:$id},success:function(cview){
                $("#d1").html(cview);
            }});
        });
    });
</script>
<?php
}
    
else
{
    header('Location:page.php');
}
?>  


<div id="d1"></div>
</body>
</html>


