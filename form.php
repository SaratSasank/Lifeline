
<html>
<head>
<link rel="stylesheet" href="form.css">
</head>
<body>
 <div class="print-box"> </br>
<button type="log" name="pro" style="float:right;border-radius: 90%;height:70px" class="button"> <a href="about.php"> LOGOUT </a> </button>


<?php
session_start();
$x=$_SESSION["cat"];
$y=$_SESSION["hos"];
$z=$_SESSION["doc"];
$a=$_SESSION["name"];
$b=$_SESSION["email"];
$c=$_SESSION["mob"];
$z=$_SESSION["doc"];
$dt=$_SESSION["date"];



echo "<div class='container' style='font-size:40px;margin-top:100px;'>
<b>APPOINTMENT FORM </b> </br>
</div>";

echo "<div class='container' style='font-size:30px;margin-top:30px;'>
User Name: $a
<br>
E-Mail: $b<br>
Mobile: $c<br>
Date: $dt<br>
Category: $x<br>
Hospital: $y<br>
Doctor: $z

</div>";
?>


<form method="post" action="last.php">
<button type="submit" name="submit"> confirm </button>
 </form>
</div>
</body>


<?php 

  $con=mysqli_connect("localhost","root","root","lifeline");

if(isset($_POST['submit']))
    {  
     $sql2="insert into appointment (name,email,mob,category,hospital,doctor,date) values('$a','$b','$c','$x','$y','$z','$dd')";
 $up=mysqli_query($con,$sql2);
		 $s=mysqli_affected_rows($con);

           if(mysqli_query($con,$sql2))
              {
                if($s>0)    
		  echo "<script> alert(' $a,your appointment was successful')</script>";
	          		       echo "<script>window.open('last.php','_self') </script>";    

		}
      }
?>


</html>
