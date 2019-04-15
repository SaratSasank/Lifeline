<?php
session_start();
?>

<html>
<title>appointments</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="appoint.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body style="color:gray ; font-size:20px">

<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-animate-left" style="display:none;z-index:5" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Close &times;</button>
  <a href="about.html" class="w3-bar-item w3-button">Home</a>
  <a href="about1.html" class="w3-bar-item w3-button">About</a>
  <a href="" class="w3-bar-item w3-button">FAQ's</a>
  <a href="#" class="w3-bar-item w3-button">Chat</a>
  <a href="#" class="w3-bar-item w3-button">Tutorials</a>
</div>

<!-- Page Content -->
<div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

<div>
  <button class="w3-button w3-white w3-xxlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">

<div class="appoint-box"> </br>
 
<form method="post" action="appoint.php">

 <input type="text" name="name" placeholder="Enter name"></br></br>
 <input type="email" name="email" placeholder="Enter email"></br></br>


 <input type="text" placeholder="Enter age"></br></br>
 
<select id="mySelect" onchange="myFunction()">
<option>None</option>
<option value="c1">heart</option>
<option value="c2">brain</option>
<option value="c3">body</option>
<option value="c4">teeth</option>
</select> <br> <br>


 <input type="text" placeholder="choose hospital"></br></br>
<button><a href="doctors.html"> check doctors </a> </button></br>

<script>
function myFunction() {
  var x = document.getElementById("mySelect").value;
<?php $y='document.getElementById("demo").innerHTML = "" + x';?>
}
</script>

<select>
<?php

 $con=mysqli_connect("localhost","root","root","lifeline");

  $query="select * from doctor where dcat=$x ";
  $rec=mysqli_query($con,$query);
  while($row=mysqli_fetch_array($rec))
   { echo "<option value=\"\">".$row['dname']."</option>";
   }

?>
</select>

</br></br>
 <input type="text"></br>

<button> <a href="pay.html"> proceed to payment </a> </button>

</form>
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

