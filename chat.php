

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;

      background:url("a1.jpg");
      background-size:cover;
      background position:centre;
      text-align:center;}
* {box-sizing: border-box;}


input[type=text], select, textarea {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 380px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 400px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

head{
      color:yellow;
      font-family:papyrus;
      font-size:50px;
}

signup-box{
       width:500px;
       height:500px;
       background:rgba(22,21,23,0.5);//transparency of box
       color:gray;
       top:50%;
       left:75%;
       position:absolute;
       transform:translate(-50%,-50%);
      // box-sizing:border-box;
}

h1{
    padding:0 0 20px;
    text-align:center;
    font-size:22px;
}

#a{ 
    color:red;
    font-size:50px;
}


</style>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body style="color:gray ; font-size:20px">

<font style="float:left">
<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-animate-left" style="display:none;z-index:5" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Close &times;</button>
  <a href="about.php" class="w3-bar-item w3-button">Home</a>
  <a href="about1.html" class="w3-bar-item w3-button">About</a>
  <a href="chat.php" class="w3-bar-item w3-button">Chat</a>
  <a href="v.html" class="w3-bar-item w3-button">Tutorials</a>
</div>


<!-- Page Content -->
<div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>
<div>
  <button class="w3-button w3-white w3-xxlarge" onclick="w3_open()">&#9776;</button>
<font style="font-size:40px;color:black">ASK me </font> 

  <div class="w3-container">
<div class="appoint-box"> </br>
 
</div>  
   
      </div>
</div>
</font>

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



<div class="signup-box">

<div class="container">
  <form method="post" action="chat.php">
        <div class='container' style='margin-right:290px;width:1030px'>

</br></br></br></br>
</div>
</div>
 <input type="text" id="fname" name="name" required placeholder="Your name..">
   </br> <input type="email" id="fname" name="email" required placeholder="Your email">
   </br> <input type="text" id="fname" name="ph" required placeholder="Previous health issues...">

   </br>     <select id="Category" name="cat" required>
      <option value="ht">select category</option>
      <option value="heart">Heart</option>
      <option value="brain">Brain</option>
      <option value="liver">Liver</option>
    </select>
   
</br></br>
    
    <select id="Blood Group" name="bg">
           <option value="hea">select blood group</option>
 <option value="O +ve">O +ve</option>
      <option value="O -ve">O -ve</option>
      <option value="A +ve">A +ve</option>
      <option value="A -ve">A -ve</option>
      <option value="B +ve">B +ve</option>
      <option value="B -ve">B -ve</option>
      <option value="AB +ve">AB +ve</option>
      <option value="AB -ve">AB -ve</option>
    </select>

    
 
</div>
</div>


<p style="color:red"><b>Click on the button at the bottom of this page to open the chat form</b></p>

<button class="open-button" onclick="openForm()">ASK</button>

<div class="chat-popup" id="myForm">
  <div class="form-container">
    <h1>Your query here</h1>

    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" name="send" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
</div>

<?php

$con=mysqli_connect("localhost","root","root","lifeline");
if(isset($_POST['send']))
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $cat = $_POST['cat'];
  $bg = $_POST['bg'];
  $ph = $_POST['ph'];
  $msg=$_POST['msg'];
  $query="insert into chat(name,email,cat,bg,ph,msg) values('$name','$email','$cat','$bg','$ph','$msg')";
      $result=mysqli_query($con,$query);
      $num=mysqli_affected_rows($result);
		 if(result)
		 {
		       echo "<script>alert(' Hi $name! your message is successfully posted') </script>";
		       echo "<script>window.open('chat.php','_self') </script>";    
		 }

}

?>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
</body>
</html>
