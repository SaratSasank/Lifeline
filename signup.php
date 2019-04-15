<?php
session_start();
?>


<html>
<head>
<title> Sign up </title>

<link rel="stylesheet" href="signup.css" type="text/css">

</head>
<body>

<div class="signup-box" > </br>

<form method="post" action="signup.php">
 NAME: <input type="text" name="name" required placeholder="Enter name"></br>
 EMAIL: <input type="email" name="email" required placeholder="Enter email"></br>
 PSWRD: <input type="password" name="password" required placeholder="Enter password"></br>
    
    A G E :  <select name="age" required style="height:300px;width:340px;">
        <option>Select age group</option>
        <option>1-6</option>
        <option>7-17</option>
	   <option>18-30</option>
        <option>31-50</option>
	   <option>51-75</option>
	   <option>75+</option>
       </select> <br> <br>

  BLDGRP: <select name="bg" style="height:300px;width:340px;">
				<option> Select blood group </option>
				<option> O+ </option>
				<option> A+ </option>
  				<option> A- </option>
				<option> B+ </option>
				<option> B- </option>
				<option> AB+ </option>
				<option> AB- </option>
				<option> O- </option>
			</select> <br> <br>
   
  <label>MOBILE: </label> <input type="int" name="mob" required placeholder="Enter mobile number" pattern="[6-9]{1}[0-9]{9}"></br> <br>
       <button type="submit" name="submit">REGISTER</button>
       <button type="submit" name="alreadysigned"> <a href="Login.php"> ALREADY SIGNED </a> </button> 

</form>

</body>


<?php
  $con=mysqli_connect("localhost","root","root","lifeline");

if(isset($_POST['submit']))
	{         
       	         $name=$_POST['name'];
                 $email=$_POST['email'];
               $_SESSION["email"]=$email;
		 $password=$_POST['password'];
$psw=strlen($password);
if($psw<8)
{
  echo "<script>alert('The password must have atleast 8 charactors') </script>";
}       



else {          $age = $_POST['age'];
                 $bg = $_POST['bg'];
                 $mob = $_POST["mob"];
                $_SESSION["mob"]=$mob;
                  
		 $query="insert into user (name,email,password,age,bg,mob) values('$name','$email','$password','$age','$bg','$mob')";
		 $result=mysqli_query($con,$query);
		 $num=mysqli_affected_rows($con);
		 if($num  > 0)
		 {
		       echo "<script>alert('Hello  $name,your registration was successful') </script>";
		       echo "<script>window.open('login.php','_self') </script>";    
		 }
		 else
		 {
			    echo "failed to connect".mysqli_connect_error();
		       echo "<script>alert('sorry,your details are not registered')</script>";
		    	echo "<script>window.open('signup.php','_self')</script>";
		 }
		 
	}
}
   $con->close();

?>
</html>