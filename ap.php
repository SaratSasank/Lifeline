<?php
session_start();
$a=$_SESSION["name"];
$i=$_SESSION["p"];
$dd=$_SESSION["date"];


?>

<html>
<head>
<style>
.a{
align:right;
}

.button {
  background-color:#e7e7e7; 
  color: black; 
}

.button:hover {
  background-color: black;
  color: white;
}


.container {
  padding: 16px;
}


/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}


/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}





</style>
<title>appointments</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="ap.css" type="text/css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
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
<button type="submit" name="pro" style="float:right;border-radius: 90%;height:70px" class="button" onclick="document.getElementById('id01').style.display='block'" style="width:auto;" > <a href="st.php">profile </a></button>
<font style="font-size:40px;color:white">APPOINTMENTS </font> 
<div class="w3-container">
<div class="appoint-box"> </br>
 
<form method="post" >

 <input type="text" name="name" required placeholder="Enter name"></br></br>
 <input type="email" name="email" required placeholder="Enter email"></br></br>


 <input type="text" required placeholder="Enter age"></br></br>
 
<select name="cat" style="height:300px;width:230px;">
<option>Select</option>
<option name="c1">heart</option>
<option name="c2">brain</option>
<option name="c3">body</option>
<option name="c4">ent</option>
</select> <br> <br>

<button type="submit" name="submit" class="button" style="width:230px"> next </button>
</form>
<?php
session_start();
$a=$_SESSION["name"];
$i=$_SESSION["p"];

 $con=mysqli_connect("localhost","root","root","lifeline");
    if(isset($_POST['submit']))
    {   $cat= $_POST["cat"];
         echo $cat;
	$_SESSION["cat"]=$cat;
       
		  echo "<script> window.open('ap3.php','_self')</script>";
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

<div id="id01" class="modal">
  
  <form class="modal-content animate">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">

      <label>
<?php
echo "<div class='container' style='font-size:30px;'>$a</br>
</div>";
?>
<div class="container">
            <div class="row" style="height:30%;">
            <div class="profile">
                <div class="profile-image">
                    <img src="icon.svg" style="height: 100%;width: 100%;">
<?php
   // echo "<img src='$i' alt='photo of me' />";

echo $a;

?>


 </div> 
                 
         
                </div>

                
<div class="profile-stats">
                    <br>
                    <ul>
                    </ul>
                </div>
                <div class="profile-bio">
                    <br>
                    <ul>
                    </ul>
                </div>
            </div>
            </div>
        </div>
        <div class="container">
            <div class="row" style="height:60%">
                <table class="table table-striped" style="height:100%;width:100%;font-size:20px">
                    <thead>
                        <tr>
                            <th>Date (YYYY-MM-DD)</th>
                          <!--  <th>Time(HH:MM:SS)</th> -->
                            <th>category</th>
                            <th>hospital</th>
                            <th>doctor</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
     $con=mysqli_connect("localhost","root","root","lifeline");
  $query="select * from pay where name='$a'";
  $resu=mysqli_query($con,$query);

                            while($row=mysqli_fetch_assoc($resu))
                            {
                                echo "<tr>";
                                echo "<td>" . $dd . "</td>";
                                echo "<td>" . $row['dcat'] . "</td>";
                                echo "<td>" . $row['dhos'] . "</td>";
                                echo "<td>" . $row['dname'] . "</td>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        

 
      </label>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
          
</body>



</html>

