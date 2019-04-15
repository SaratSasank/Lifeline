<?php
session_start();
$x=$_SESSION["cat"];
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

<input type="text" name="date" required placeholder="(DD-MM-YYYY)"> </br></br>

<button><font style="color:black"> <i> choose hospitals below </i> </b> </button></font></br></br>

<select name="hos" style="height:300px;width:230px;">
<?php

 $con=mysqli_connect("localhost","root","root","lifeline");

  
     $query="select * from doctor where dcat='$_SESSION[cat]' ";
     $rec=mysqli_query($con,$query);
     while($row=mysqli_fetch_array($rec))
      { echo "<option name=\"\">".$row['dhos']."</option>";
      }
       
?>
</select></br></br>

<button class="button" type="submit" class="button" name="submit" style="width:230px;">next</button>

</form>

<?php 
if(isset($_POST['submit']))
    {
        $hos= $_POST["hos"];
        $_SESSION["hos"]=$hos;
        $date= $_POST["date"];
        $_SESSION["date"]=$date;
		  echo "<script> window.open('ap2.php','_self')</script>";
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

