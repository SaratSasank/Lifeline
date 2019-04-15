<?php
session_start();
$x=$_SESSION["cat"];
$y=$_SESSION["hos"];
$dd=$_SESSION["date"];

?>
<html>
<head>
<title>appointments</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.button {
  background-color:#e7e7e7; 
  color: black; 
}

.button:hover {
  background-color: black;
  color: white;
}
</style>
</head>

<link rel="stylesheet" href="ap.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body style="color:gray ; font-size:20px">

<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-animate-left" style="display:none;z-index:5" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Close &times;</button>
  <a href="about.php" class="w3-bar-item w3-button">Home</a>
  <a href="about1.html" class="w3-bar-item w3-button">About</a>
  <a href="faqs.html" class="w3-bar-item w3-button">FAQ's</a>
  <a href="chat.php" class="w3-bar-item w3-button">Chat</a>
  <a href="v.html" class="w3-bar-item w3-button">Tutorials</a>
</div>

<!-- Page Content -->
<div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

<div>
  <button class="w3-button w3-white w3-xxlarge" onclick="w3_open()">&#9776;</button>
<button type="submit" name="pro" style="float:right;border-radius: 90%;height:70px" class="button"> <a href="st.php"> profile </a> </button>
  <div class="w3-container">

<div class="appoint-box"> </br>
 
<form method="post">
</br></br>
<button style="width:230px;"><a href="profile.html"> check doctors </a> </button> </br></br>


<select name="doc" style="height:300px;width:230px;">
<?php

 $con=mysqli_connect("localhost","root","root","lifeline");

  $query="select * from doctor where  dhos='$_SESSION[hos]'";
  $rec=mysqli_query($con,$query);
  while($row=mysqli_fetch_array($rec))
   { echo "<option  name=\"\">".$row['dname']."</option>";
   }


 ?>


</select>

</br></br>

<?php
echo "<div class='container' style='font-size:19px;color:black;margin-top:10px;margin-right:40px'>
   The avilable slots are: </div>";
   $sql="select * from doctor where dhos='$_SESSION[hos]'";
   $slot=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($slot))
   { echo $row['slots'];
     if($row['slots']>0)
     $s= $row['slots']-1;
       else
        $s="0";
   }


?>
</br></br>
<button type="submit" name="submit" class="button" style="height:35px;width:230px;"> Book now </a> </button>

</form>

<?php 
if(isset($_POST['submit']))
    {  
         $dname= $_POST["doc"];
	$_SESSION["doc"]=$dname;
        
        $sql2="update doctor set slots='$s' where dhos='$_SESSION[hos]'";
        $up=mysqli_query($con,$sql2);
           if(mysqli_query($con,$sql2))
              {
                if($s>0)    
		  echo "<script> window.open('pay.php','_self')</script>";
	
                 else
                  { 
		   echo "<script>alert('Sory!!!!!the slots are not available') </script>";

                  }
}
}

?>

</div>  
   

      </div>
</div>

<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}
</script>
          
</body>



</html>